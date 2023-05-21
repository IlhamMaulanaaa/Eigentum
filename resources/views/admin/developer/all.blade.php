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
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Company</th>
                            <th scope="col">Address</th>
                            <th scope="col">Owner</th>
                            <th scope="col">License</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">properti</th>
                            <th scope="col">jumlah properti</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($developers && $developers->count())
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
                                    <td>
                                        @foreach ($develop->properties as $bangunan)
                                            {{ $bangunan->property }},
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        {{ $develop->properties->count() }}
                                    </td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="show/{{ $develop->id }}">Detail</a>
                                        <form action="delete/{{ $develop->id }}" method="get" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
