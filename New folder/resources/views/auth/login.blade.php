@extends('client.layouts.app')
@section('mobile_menu')
    @include('client.layouts.light_mobile_menu')
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/style_II.css')}}" />
@endsection
@section('responsive')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/responsive2.css') }}" />
@endsection
@section('menu')
@include('client.layouts.menulight')
@endsection
@section('custom_js')
<script src="{{ asset('client/js/custom_II.js') }}"></script>
@endsection
@section('top_menu')
    @include('client.layouts.topmenu')
@endsection
@section('content')
<div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Login</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	
	<!-- jp login wrapper start -->
	<div class="login_section">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<h1>LOGIN TO YOUR ACCOUNT</h1>
						<div class="login_wrapper">
							<form method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}
								<input type="text" value="applicant" name="type" style="display: none;"><!-- For checking the type of login form -->
								<div class="formsix-pos">
									<div class="form-group i-email">
										<input type="email" class="form-control"  name = "email" value="{{ old('email') }}" placeholder="Email" required autofocus>
									</div>
								</div>
								<div class="formsix-e">
									<div class="form-group i-password">
									<input type="password" class="form-control" name="password" placeholder="Password *" required>
									</div>
								</div>
								<div class="login_remember_box">
									<label class="control control--checkbox">Remember me
										<input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }} name="remember">
										<span class="control__indicator"></span>
									</label>
									<a href="{{ route('password.request') }}" class="forget_password">Forgot Password?</a>
								</div>
								<div class="login_btn_wrapper">
								<button type="submit" class="btn btn-primary btn-block col">Login</button>
								</div>
								<div class="login_message">
									<p>Don’t have an account ? <a href="{{ route('register') }}"> Register Now </a> </p>
								</div>
							</form>
						</div>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
		<!-- /.login_form_wrapper-->
	</div>
@include('client.layouts.footer')
@endsection