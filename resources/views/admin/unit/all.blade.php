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
                            <form action="{{ route('unit.index') }}" method="GET" role="search">
                                <div class="row">
                                    <div class="col-md-2">
                                        <select name="property_id" id="property_id" class="form-select">
                                            <option value="0" {{ request('search') ? '' : 'selected' }}>
                                                Property</option>
                                            @foreach ($properties as $property)
                                                <option value="{{ $property->id }}"
                                                    {{ request('property_id') == $property->id ? 'selected' : '' }}>
                                                    {{ $property->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="status_id" id="status_id" class="form-select">
                                            <option value="0" {{ request('status_id') ? '' : 'selected' }}>
                                                Status</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}"
                                                    {{ request('status_id') == $status->id ? 'selected' : '' }}>
                                                    {{ $status->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-3">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search name.." aria-label="Search username"
                                                aria-describedby="basic-addon2" value="{{ request('search') }}">
                                            <button class="btn btn-outline-secondary" id="searchButton"
                                                type="submit">Search</button>
                                            <button class="btn btn-outline-secondary" id="resetButton"
                                                type="button">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-2 ">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($units->count())
                                @foreach ($units as $key => $unit)
                                    <tr align="center">
                                        <td class="text-start">{{ ++$key }}</td>
                                        <td class="text-start">{{ $unit->title }}</td>
                                        <td class="text-start">{{ Str::limit($unit->description, 20) }}</td>
                                        <td class="text-start">Rp. {{ $unit->price }}</td>
                                        <td class="text-start"><img src="{{ asset('storage/' . $unit->image) }}"
                                                width="60" heigth="60"></td>
                                        <td class="text-start ">{{ $unit->properties->title }}</td>
                                        <td class="text-start ">
                                            @foreach ($unit->statuses as $role)
                                                {{ $role->name }}
                                            @endforeach
                                        </td>

                                        <td class="text-end">
                                            <a type="button" class="btn btn-outline-warning"
                                                href="{{ route('unit.show', $unit->id) }}">Detail</a>
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
                    <div>
                        {{ $units->links() }}
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const propertyDropdown = document.getElementById("property_id");
                const propertyDropdown = document.getElementById("status_id");
                const searchInput = document.querySelector("input[name='search']");
                const searchButton = document.getElementById("searchButton");
                const resetButton = document.getElementById("resetButton");

                searchInput.addEventListener("input", function() {
                    if (this.value) {
                        propertyDropdown.disabled = true;
                    } else {
                        propertyDropdown.disabled = false;
                    }
                });

                propertyDropdown.addEventListener("change", function() {
                    if (this.value !== "0") {
                        searchInput.disabled = true;
                    } else {
                        searchInput.disabled = false;
                    }
                });

                resetButton.addEventListener("click", function() {
                    propertyDropdown.disabled = false;
                    searchInput.disabled = false;
                });
            });
        </script>

    </body>

    </html>
@endsection
