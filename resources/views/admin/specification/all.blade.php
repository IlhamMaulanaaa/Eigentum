@extends('admin.layout.main')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <h2 class="card-title fs-2 text-primary col-md-8 text-uppercase">
                        {{ $tables }}
                    </h2>
                    <div class="col-md-4 text-end">
                        <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Bedroom</th>
                            <th scope="col">Bathroom</th>
                            <th scope="col">Surface area</th>
                            <th scope="col">Building area</th>
                            <th scope="col">Floor</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($specification->count())
                            @foreach ($specification as $spec)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $spec->id ?></td> --}}
                                    <td class="text-start"><?= $spec->bedroom ?></td>
                                    <td class="text-start"><?= $spec->bathroom ?></td>
                                    <td class="text-start"><?= $spec->surface_area ?></td>
                                    <td class="text-start"><?= $spec->building_area ?></td>
                                    <td class="text-start"><?= $spec->floor ?></td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $spec->id }}">Detail</a>
                                        <form action="delete/{{ $spec->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($specs->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/spec/all">Back</a>
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
