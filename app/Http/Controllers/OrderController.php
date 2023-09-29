<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Subscribe;
use App\Services\Midtrans\CreateSnapTokenService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $tables = (new Order())->getTable();
        return view('admin.order.all', compact('orders', 'tables'));
    }

    public function indexFront()
    {
        $orders = Order::all();
        $tables = (new Order())->getTable();
        return view('pages.page.confirmpayment', compact('orders', 'tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $subsId)
    {
        try {

            $data = $request->all();

            $subscribe = Subscribe::findOrfail($subsId);

            // $request->validate([
            //     'title' => 'required',
            //     'price' => 'required',
            // ]);

            $order = Order::create([
                'invoice' => $subscribe->title,
                'number' => substr($subscribe->id . uniqid(), 0, 16),
                'total_price' => $subscribe->price,
                'payment_status' => 1,
                'user_id' => Auth::user()->id,
                'subscribe_id' => $subscribe->id,
            ]);

            return redirect()->route('order.index');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function storeFront(Request $request, $subsId)
    {
        try {

            $data = $request->all();

            $subscribe = Subscribe::findOrfail($subsId);

            // $request->validate([
            //     'title' => 'required',
            //     'price' => 'required',
            // ]);

            $order = Order::create([
                'invoice' => $subscribe->title,
                'number' => substr($subscribe->id . uniqid(), 0, 16),
                'total_price' => $subscribe->price,
                'payment_status' => 1,
                'user_id' => Auth::user()->id,
                'subscribe_id' => $subscribe->id,
            ]);

            return redirect('/pages/detailorder/' . $order->id);
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $snapToken = $order->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database

            $midtrans = new CreateSnapTokenService($order);
            $snapToken = $midtrans->getSnapToken();

            $order->snap_token = $snapToken;
            $order->save();
        }

        return view('admin.order.detail', compact('order', 'snapToken' ));
    }

    public function showFront(Order $order)
    {
        $developer = Auth::user()->developers->first();
        $snapToken = $order->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database

            $midtrans = new CreateSnapTokenService($order);
            $snapToken = $midtrans->getSnapToken();

            $order->snap_token = $snapToken;
            $order->save();
        }

        return view('pages.page.order', compact('order', 'snapToken', 'developer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
