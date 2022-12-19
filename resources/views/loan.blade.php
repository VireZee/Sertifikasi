@extends('app')
@section('content')
<div>
    @auth
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    @endauth
    <a class="btn btn-danger" href="{{ route('catalog.a') }}">Back</a>
</div>
<form action="loan/store" method="POST">
    @csrf
    <input type="text" name="loan_user" placeholder="nama peminjam" required><br>
    <input type="date" name="tanggal_balik" placeholder="tanggal sekarang" required><br>
    <input type="submit" value="Save">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama peminjam</th>
                <th>Tanggal Balik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loan as $l)
                <tr>
                    <td>{{ $l->loan_user }}</td>
                    <td>{{ $l->tanggal_balik }}</td>
                    <td>
                        <form action="">
                            <a href="loan/{{ $l->id }}">Delete</a>
                        </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>
@endsection