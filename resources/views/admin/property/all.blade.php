@extends('admin.layout.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

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
                    <div class="col-md-10">
                        <form action="{{ route('property.index') }}" method="GET" role="search">
                            <div class="row">
                                <div class="col-md-2">
                                    <select name="regency_id" id="regency" class="form-select">
                                        <option value=" "{{ request('regency_id') ? '' : 'selected' }}>Pilih Regency</option>
                                        @foreach ($regencies as $id => $name)
                                            <option value="{{ $id }}"
                                                {{ request('regency_id') == $id ? ' selected' : '' }}>
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="developer_id" id="developers" class="form-select">
                                        <option value=""{{ request('developer_id') ? '' : 'selected' }} >
                                            Developers</option>
                                        @foreach ($developers as $id => $company)
                                            <option value="{{ $id }}"
                                                {{ request('developer_id') == $id ? 'selected' : '' }}>
                                                {{ $company }}
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
                            <th scope="col">Property</th>
                            <th scope="col">Description</th>
                            <th scope="col">Developer</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Type</th>
                            <th scope="col">Listing</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($properties->count())
                            @foreach ($properties as $key => $property)
                                <tr align="center">
                                    <td class="text-start">{{ ++$key }}</td>
                                    <td class="text-start">{{ $property->title }}</td>
                                    <td class="text-start">{{ Str::limit($property->description, 20) }}</td>
                                    <td class="text-start ">{{ $property->developers->company }}</td>
                                    <td class="text-start">
                                        {{ implode(', ',$property->regencies()->pluck('name')->toArray()) }}</td>
                                    </td>
                                    <td class="text-start ">{{ $property->types->name }}</td>
                                    <td class="text-start ">{{ $property->units->count() }}</td>
                                    <td class="text-end">
                                        <a type="button" class="btn btn-outline-warning"
                                            href="{{ route('property.show', $property->id) }}">Detail</a>

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
                <div>
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var searchButton = document.getElementById("searchButton");
            var searchForm = document.getElementById("searchForm");
    
            searchButton.addEventListener("click", function () {
                searchForm.submit();
            });
        });
    </script>
    
</body>
</html>
@endsection
