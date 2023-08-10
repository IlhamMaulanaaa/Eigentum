@extends('admin.layout.main')

@section('content')
    <h3>Approve Developer</h3>
    <form method="post" action="{{ route('developers.update-approval', $developer->id) }}">
        @csrf
        @method('PUT')
        <p>Approve developer <strong>{{ $developer->name }}</strong>?</p>
        <button type="submit" class="btn btn-success">Approve</button>
    </form>
@endsection