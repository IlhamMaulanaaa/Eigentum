@extends('admin.layout.main')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <h2 class="card-title fs-2 text-primary col-md-8 text-uppercase">
                        {{ $tables }}
                    </h2>
                    {{-- <div class="col-md-4 text-end px-0">
                        <a type="button" class="btn btn-primary" href="{{ route('customer.create') }}">Tambah Data Baru</a>
                    </div> --}}

                    <div class="col-md-10">
                        <form action="{{ route('customer.index') }}" method="GET" role="search">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Search name.." aria-label="Search username"
                                            aria-describedby="basic-addon2" value="{{ request('search') }}">
                                        <button class="btn btn-outline-secondary" id="searchButton"
                                            type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <th scope="col">Role</th>
                            {{-- <th scope="col">Telephone</th> --}}
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->count())
                            @foreach ($users as $key => $customer)
                                <tr align="center">
                                    <td class="text-start">{{ ++$key }}</td>
                                
                                    <td class="text-start">{{ $customer->name }}</td>
                                    <td class="text-start">{{ $customer->email }}</td>
                                    <td class="text-start">{{ $customer->role }}</td>
                                    {{-- <td class="text-start">{{ $customer->telp }}</td> --}}
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="{{ route('customer.show', $customer->id) }}">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($customers->count())
                                    <div class="form-group">
                                        <a customer="button" class="btn btn-warning" href="/admin/customer/all">Back</a>
                                    </div> --}}
                        @else
                            <tr>
                                <td colspan="100" align="center">Data Tidak Ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
