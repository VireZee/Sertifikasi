@extends('app')
@section('content')
@auth
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    <a class="btn btn-info" href="{{ route('catalog.a') }}">Catalog Management (Admin)</a>
@endauth
@guest
    <a class="btn btn-primary" href="{{ route('login') }}">Login (User)</a>
    <a class="btn btn-info" href="{{ route('register') }}">Register (User)</a>
    <a class="btn btn-info" href="{{ route('catalog.a') }}">Catalog Management (Admin)</a>
    {{-- <a class="btn btn-primary" href="{{ route('login.a') }}">Login as Admin</a>
    <a class="btn btn-info" href="{{ route('register.a') }}">Register as Admin</a> --}}
@endguest
@endsection