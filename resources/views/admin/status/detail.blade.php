@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail status</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Status</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $status->name }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Unit</label>
                                <ul>
                                    @foreach ($status->unit as $unit)
                                    <li>
                                        {{ $unit->title }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="{{route('status.index')}}">Back</a>
                                <a type="button" class="btn btn-primary" href="{{route('status.edit', $status->id)}}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
