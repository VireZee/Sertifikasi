@extends('app')
@section('content')
@guest
    <a class="btn btn-primary" href="{{ route('login') }}">Login (User)</a>
    <a class="btn btn-info" href="{{ route('register') }}">Register (User)</a>
    <a class="btn btn-info" href="{{ route('catalog.a') }}">Catalog Management (Admin)</a>
    {{-- <a class="btn btn-primary" href="{{ route('login.a') }}">Login as Admin</a>
    <a class="btn btn-info" href="{{ route('register.a') }}">Register as Admin</a> --}}
@endguest
@endsection