@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail Subscribe</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="{{ route('subid.store', $subscribe->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $subscribe->title }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    value="{{ $subscribe->price }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/">Back</a>
                                {{-- <a type="button" class="btn btn-primary" href="{{route('subscribe.edit',$subscribe->id)}}">Checkout</a> --}}
                                <button type="submit" class="btn btn-primary">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
