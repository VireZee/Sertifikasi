@extends('app')
@section('content')
<div>
    @auth
    <a class="btn btn-danger" href="{{ route('logout.a') }}">Logout</a>
    @endauth
</div>
@endsection