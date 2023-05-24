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
                            <th scope="col">Bedroom</th>
                            <th scope="col">Bathroom</th>
                            <th scope="col">Surface area</th>
                            <th scope="col">Building area</th>
                            <th scope="col">Floor</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($specifications->count())
                            @foreach ($specifications as $specification)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $specification->id ?></td> --}}
                                    <td class="text-start"><?= $specification->bedroom ?></td>
                                    <td class="text-start"><?= $specification->bathroom ?></td>
                                    <td class="text-start"><?= $specification->surface_area ?></td>
                                    <td class="text-start"><?= $specification->building_area ?></td>
                                    <td class="text-start"><?= $specification->floor ?></td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $specification->id }}">Detail</a>
                                        <form action="delete/{{ $specification->id }}" method="get" class="d-inline">
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
