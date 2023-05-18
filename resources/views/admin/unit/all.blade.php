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
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Rent</th>
                            <th scope="col">Image_1</th>
                            <th scope="col">Image_2</th>
                            <th scope="col">Image_3</th>
                            <th scope="col">Image_4</th>
                            <th scope="col">Image_plan</th>
                            <th scope="col">Bloc</th>
                            <th scope="col">Certificate</th>
                            {{-- <th scope="col" class="text-start">specification_id</th> --}}
                            {{-- <th scope="col" class="text-start">property_id</th> --}}
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($units->count())
                            @foreach ($units as $unit)
                                <tr align="center">
                                    <td class=""><?= $loop->iteration ?></td>
                                    {{-- <td class=""><?= $unit->id ?></td> --}}
                                    <td class="text-start"><?= $unit->title ?></td>
                                    <td class="text-start"><?= $unit->description ?></td>
                                    <td class="text-start"><?= $unit->price ?></td>
                                    <td class="text-start"><?= $unit->rent ?></td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $unit->image_1) }}"
                                            width="60" heigth="60"></td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $unit->image_2) }}"
                                            width="60" heigth="60"></td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $unit->image_3) }}"
                                            width="60" heigth="60"></td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $unit->image_4) }}"
                                            width="60" heigth="60"></td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $unit->image_plan) }}"
                                            width="60" heigth="60"></td>
                                    <td class="text-start"><?= $unit->bloc ?></td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $unit->certificate) }}"
                                            width="60" heigth="60"></td>

                                    {{-- <td class="text-start "><?= $unit->specification_id ?></td> --}}
                                    {{-- <td class="text-start "><?= $unit->property_id ?></td> --}}

                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $unit->id }}">Detail</a>
                                        <form action="delete/{{ $unit->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($units->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/unit/all">Back</a>
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
