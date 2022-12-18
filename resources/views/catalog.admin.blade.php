@extends('app')
@section('content')
    <a class="btn btn-danger" href="{{ route('logout.a') }}">Logout</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Nama Buku
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="nama_buku" class="form-control">
                </td>
                <td><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></td>
            </tr>
        </tbody>
    </table>
@endsection