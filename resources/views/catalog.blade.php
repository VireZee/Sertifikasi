@extends('app')
@section('content')
<div>
    @auth
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    @endauth
</div>
@endsection