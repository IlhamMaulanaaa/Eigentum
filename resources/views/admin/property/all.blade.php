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
                            <th scope="col">Unit</th> 
                            <th scope="col">Property</th> 
                            <th scope="col">Description</th> 
                            <th scope="col">Address</th> 
                            {{-- <th scope="col">Type</th> 
                            <th scope="col">Developer</th> 
                            <th scope="col">Agent</th>  --}}
                            <th scope="col">Aksi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @if ($property->count())
                            @foreach ($property as $properties)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $properties->id ?></td> --}}
                                    <td class="text-start"><?= $properties->unit ?></td>
                                    <td class="text-start"><?= $properties->property ?></td>
                                    <td class="text-start"><?= $properties->description ?></td>
                                    <td class="text-start"><?= $properties->address ?></td>
                                    {{-- <td class="text-start "><?= $properties->type_id ?></td> --}}
                                    {{-- <td class="text-start "><?= $properties->developer_id ?></td> --}}
                                    {{-- <td class="text-start "><?= $properties->agent_id ?></td> --}}
                                    </td>
                                    <td class="text-start">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $properties->id }}">Detail Data</a>
                                        <a type="button" class="btn btn-outline-primary"
                                            href="edit/{{ $properties->id }}">Edit Data</a>
                                        <form action="delete/{{ $properties->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete Data</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($propertiess->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/properties/all">Back</a>
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
