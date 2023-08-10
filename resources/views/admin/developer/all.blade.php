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
                        <a type="button" class="btn btn-primary" href="{{ route('developer.create') }}">Tambah Data Baru</a>
                    </div>
                    <div class="col-md-10">
                        <form action="{{ route('developer.index') }}" method="GET" role="search">
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="regency_id" id="regency" class="form-select">
                                        <option value=" {{ request('search') ? '' : 'selected' }}">Pilih Regency</option>
                                        @foreach ($regencies as $id => $name)
                                            <option
                                                value="{{ $id }}"{{ request('regency_id') == $id ? ' selected' : '' }}>
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
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
                <table class="table mb-2">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Company</th>
                            <th scope="col">Company Email</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">status</th>
                            <th scope="col"></th>
                            {{-- <th scope="col"></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @if ($developers->count())
                            @foreach ($developers as $key => $developer)
                                <tr align="center">
                                    <td class="text-start">{{ ++$key }}</td>
                                    <td class="text-start">{{ $developer->company }}</td>
                                    <td class="text-start">{{ $developer->company_email }}</td>
                                    <td class="text-start">
                                        @foreach ($developer->users as $user)
                                            {{ $user->name }}
                                        @endforeach
                                    </td>

                                    <td class="text-start">
                                        {{ implode(', ',$developer->regencies()->pluck('name')->toArray()) }}</td>
                                    <td class="text-start">{{ $developer->telp }}</td>
                                    <td>{{ $developer->status }}</td>

                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="{{ route('developer.show', $developer->id) }}">Detail</a>

                                    </td>
                                    {{-- <td>
                                        <form action="{{ url('admin/developers/approve', $developer->id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary mx-2">Approve</button>
                                        </form>
                                        <form action="{{ url('admin/developers/reject', $developer->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Reject</button>
                                        </form>

                                    </td> --}}
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="100" align="center">Data Tidak Ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="mx-10">
                    {{ $developers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
