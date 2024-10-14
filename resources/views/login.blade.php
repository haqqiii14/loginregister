@extends('app')
@section('content')
<style>
    body {
        background-color: #0d0d0d;
        color: white;
        font-family: Arial, sans-serif;
    }
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-box {
        background-color: #1c1c1e;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
        width: 100%;
        max-width: 400px;
    }
    .login-box h2 {
        text-align: center;
        margin-bottom: 30px;
    }
    .form-control {
        background-color: #333;
        border: none;
        color: white;
        padding: 15px;
        font-size: 16px;
        margin-bottom: 20px;
    }
    .form-control:focus {
        border-color: #f0ad4e;
        box-shadow: none;
    }
    .btn-primary {
        background-color: #4e73df;
        border: none;
        width: 100%;
        padding: 10px;
        font-size: 18px;
    }
    .btn-primary:hover {
        background-color: #375acb;
    }
    .btn-danger {
        background-color: #dc3545;
        border: none;
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
    .text-danger {
        color: #f0ad4e;
    }
</style>

<div class="login-container">
    <div class="login-box">
        <h2>Login</h2>
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
