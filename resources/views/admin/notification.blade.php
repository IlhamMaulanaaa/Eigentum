@extends('admin.layout.main')

@section('content')
    <h1>Daftar Notifikasi</h1>
    <ul>
        @foreach ($notifications as $notification)
            <li>
                {{ $notification->data['name'] }}
                <small>{{ $notification->created_at->format('d M Y H:i') }}</small>
            </li>
        @endforeach
    </ul>
@endsection
