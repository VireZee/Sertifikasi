@extends('app')
@section('content')
<div>
    @auth
    <a class="btn btn-danger" href="{{ route('logout.a') }}">Logout</a>
    @endauth
    <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
    <a class="btn btn-danger" href="{{ route('loan') }}">Loan Management</a>
</div>
<form action="catalogadmin/store" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="judul" required><br>
    <input type="text" name="halaman" placeholder="halaman" required><br>
    <input type="text" name="penerbit" placeholder="penerbit" required>
    <input type="submit" value="Save">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Halaman</th>
                <th>Penerbit</th>
                <th>Aksi</th>
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
                            <a href="catalogadmin/{{ $c->id }}">Delete</a>
                        </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Catalog Details</h2></div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Halaman</th>
                            <th>Penerbit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        @foreach ($cats as $c)
                            <tr>
                                <td>{{ $c->judul }}</td>
                                <td>{{ $c->halaman }}</td>
                                <td>{{ $c->penerbit }}</td>
                                <td>
                                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <input type="submit" class="btn btn-info add-new" value="Save">
                </div>
            </div>
        </div>
    </div> --}}

</form>
@endsection