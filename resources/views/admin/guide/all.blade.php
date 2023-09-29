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
                        <a type="button" class="btn btn-primary" href="{{ route('guide.create') }}">Tambah Data Baru</a>
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
                            <th scope="col">Image</th>
                            {{-- <th scope="col">Type</th> 
                            <th scope="col">Developer</th> 
                            <th scope="col">Agent</th>  --}}
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($guides->count())
                            @foreach ($guides as $key => $guide)
                                <tr align="center">
                                    <td class="text-start">{{ ++$key }}</td>
                                    <td class="text-start">{{ $guide->title }}</td>
                                    <td class="text-start">{{ $guide->description }}</td>
                                    <td class="text-start"><img src="{{ asset('storage/' . $guide->image) }}" width="60"
                                            heigth="60"></td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="{{ route('guide.show', $guide->id) }}">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @elseif ($guides->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/guide/all">Back</a>
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
