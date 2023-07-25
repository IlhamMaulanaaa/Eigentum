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
                        <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                    </div> --}}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-2 ">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Location</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($locations->count())
                            @foreach ($locations as $location)
                                <tr align="center">
                                    <td class="text-start">{{ $loop->iteration }}</td>
                                    <td class="text-start">{{ $location->name }}</td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $location->id }}">Detail</a>
                                        {{-- <form action="delete/{{ $location->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return  confirm('Apakah Anda Yakin')">Delete</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        @elseif ($locations->count())
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/location/all">Back</a>
                            </div>
                        @else
                            <tr>
                                <td colspan="100" align="center">Data Tidak Ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="m-lg-2">
                    {{ $locations->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
