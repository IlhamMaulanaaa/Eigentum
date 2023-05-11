@extends('admin.layout.main')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title fs-2 text-primary">
                    {{ $tables }}
                </h2>
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Company</th>
                            <th scope="col">Address</th>
                            <th scope="col">Owner</th>
                            <th scope="col">License</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($developers->count())
                            @foreach ($developers as $develop)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $develop->id ?></td> --}}
                                    <td class="text-start"><?= $develop->email ?></td>
                                    <td class="text-start"><?= $develop->password ?></td>
                                    <td class="text-start"><?= $develop->company ?></td>
                                    <td class="text-start"><?= $develop->address ?></td>
                                    <td class="text-start"><?= $develop->owner ?></td>
                                    <td class="text-start"><?= $develop->license ?></td>
                                    <td class="text-start"><?= $develop->phone_number ?></td>
                                    <td class="text-start">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $develop->id }}">Detail Data</a>
                                        <a type="button" class="btn btn-outline-primary"
                                            href="edit/{{ $develop->id }}">Edit Data</a>
                                        <form action="delete/{{ $develop->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete Data</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($developers->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/develop/all">Back</a>
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
