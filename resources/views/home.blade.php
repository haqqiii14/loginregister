@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>


<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
@guest

<div class="d-flex justify-content-center">
    <a href="{{ route('login') }}" class="btn btn-custom btn-login mx-2">Login</a>
    <a href="{{ route('register') }}" class="btn btn-custom btn-register mx-2">Register</a>
</div>
@endguest
@endsection