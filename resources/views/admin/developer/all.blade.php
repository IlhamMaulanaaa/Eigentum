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
                        <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone number</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($developers->count())
                            @foreach ($developers as $key=>$developer)
                                <tr align="center">
                                    {{-- <td class="text-start">{{ $loop->iteration }}</td> --}}
                                    <td class="text-start">{{ ++$key }}</td>
                                    <td class="text-start">{{ $developer->company }}</td>
                                    <td class="text-start">{{ $developer->email }}</td>
                                    <td class="text-start">{{ $developer->owners->name }}</td>
                                    <td class="text-start">{{ $developer->address }}</td>
                                    <td class="text-start">{{ $developer->telp }}</td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $developer->id }}">Detail</a>
                                        <form action="delete/{{ $developer->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
