@extends('layouts.master')

@section('title')
Rangrezz | Login
@endsection

@section('content')

<div class="container box-shadow p-5 m-5">
    <div class="row">

        <div class="col-md-6">
            @if(!$errors->isEmpty())
            <div class="alert alert-danger">
                @foreach ($errors->all(':message') as $input_error)
                {{ $input_error }}
                @endforeach
            </div>
            @endif
            <form class="form p-5" action="{{route('login')}}" method="post">
                @csrf
                <i class="fas fa-user fa-5x" style="color: #0099ff;"></i>
                <br>
                <br>
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <div class="form-group">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" id="email" class="form-control" value="{{ old('email') }}"
                        placeholder="Email address" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                        required>

                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me" id="remember" name="remember"
                            {{ old('remember') ? 'checked' : '' }}> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="buyer">Sign in</button>
                <p>Don't have an Account?<a href="{{route('register')}}" title="">click here.</a></p>
                <p>Forgot Password?<a href="{{ route('password.request') }}" title="">click here.</a></p>
                <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
            </form>

        </div>

        <div class="col-md-6 text-center " style=" background-color: #0099ff; color:white;">
            <div class="align-self-center">
                <br>

                <h1 style="font-size: 2rem;text-decoration: underline;">Login Page</h1>
                <br>
                <br>
                <div class="view overlay">
                    <img src="{{ asset('images/user-2.jpg') }}" alt="user-register/login pic" height="500" width="582">
                    <div class="mask flex-center rgba-blue-light">
                        <h2 class="white-text">Login</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<br>
<br>
@endsection