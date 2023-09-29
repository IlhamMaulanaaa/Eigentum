<?php
 
namespace App\Services\Midtrans;
 
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
 
class CreateSnapTokenService extends Midtrans
{
    protected $order;
 
    public function __construct($order)
    {
        parent::__construct();
 
        $this->order = $order;
    }
 
    public function getSnapToken()
    {   
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->number,
                'gross_amount' => $this->order->total_price,
            ],
            'customer_details' => [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                // 'phone' => '081234567890',
            ]
        ];
 
        $snapToken = Snap::getSnapToken($params);
 
        return $snapToken;
    }
}