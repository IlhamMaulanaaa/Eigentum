@extends('admin.layout.main')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <h2 class="card-title fs-2 text-primary col-md-8 text-uppercase">
                        {{ $tables }}
                    </h2>
                    <div class="col-md-4 text-end px-0">
                        <a type="button" class="btn btn-primary" href="{{ route('agent.create') }}">Tambah Data Baru</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Face</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($agents->count())
                            @foreach ($agents as $key => $agent)
                                <tr align="center">
                                    <td class="text-start">{{ ++$key }}</td>
                                    <td class="text-start">{{ $agent->name }}</td>
                                    <td class="text-start">{{ $agent->email }}</td>
                                    <td class="text-start">{{ Str::limit($agent->address, 20) }}</td>
                                    <td class="text-start">
                                        {{ implode(', ',$agent->regencies()->pluck('name')->toArray()) }}</td>
                                    </td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $agent->face) }}" width="60"
                                            heigth="60"></td>
                                    <td class="text-start">{{ $agent->telp }}</td>
                                    <td>{{ $agent->status }}</td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="{{ route('agent.show', $agent->id) }}">Detail</a>
                                    </td>


                                </tr>
                            @endforeach
                            {{-- @elseif ($agents->count())
                                    <div class="form-group">
                                        <a agent="button" class="btn btn-warning" href="/admin/agent/all">Back</a>
                                    </div> --}}
                        @else
                            <tr>
                                <td colspan="100" align="center">Data Tidak Ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div>
                    {{ $agents->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
