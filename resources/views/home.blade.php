@extends('app')
@section('content')
@guest
    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
    <a class="btn btn-info" href="{{ route('register') }}">Register</a>
    <a class="btn btn-primary" href="{{ route('login.a') }}">Login as Admin</a>
    <a class="btn btn-info" href="{{ route('register.a') }}">Register as Admin</a>
@endguest
@endsection