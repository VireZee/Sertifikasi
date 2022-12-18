@extends('app')
@section('content')
<div>
    @auth
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    @endauth
    <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Halaman</th>
            <th>Penerbit</th>
            <th>Aksi</th>
            <th>Tanggal Balik</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cats as $c)
            <tr>
                <td>{{ $c->judul }}</td>
                <td>{{ $c->halaman }}</td>
                <td>{{ $c->penerbit }}</td>
                <td>
                    <form action="">
                        <a href="catalog/{{ $c->id }}">Pinjem</a>
                    </form></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection