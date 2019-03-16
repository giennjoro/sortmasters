@extends('admin.layouts.app')
@section('style')
<link id="theme" rel="stylesheet" href="{{ asset('admin/css/style-helpdesk.css') }}" type="text/css">
@stop

@section('background')
    <div class="background bg-dark">
		<img src="{{ asset('admin/images/bg.png') }}" alt="" class="full-opacity">
	</div>
@stop

@section('content')
    <div class="main-container">
        <!-- Begin page content -->
        <div class="container">
            <div class="card rounded-2 border-0 mb-3 z3 signin-block">
                <div class="card-body pr-5 pl-5">
                    <h1 class="display-4 text-center d-block">Admin Login</h1>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        
                        <input type="text" value="admin" name="type" style="display: none;"><!-- For checking the type of login form -->

                        <div class="form-group text-left float-label {{ $errors->has('email') ? ' is-invalid' : '' }}" >
							<input type="email" class="form-control"  name = "email" value="{{ old('email') }}"  required autofocus>
							<label>Email address</label>
						</div>
                        <div class="form-group text-left float-label">
                            <input type="password" class="form-control" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }} name="remember">
							<label class="custom-control-label" for="customCheck1"> Remember Me</label>
						</div>
						<br>
                        <div>
							<button type="submit" class="btn btn-primary btn-block col">Login</button>
							<br>
						</div>
						<div class="text-left">
							<a href="{{ route('password.request') }}" class="">Forgot Password?</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop