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
                            <h2>Register</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Register</li>
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
						<h1>REGISTER AN ACCOUNT WITH US</h1>
						<div class="login_wrapper">
							<form method="POST" action="{{ route('register') }}">
								{{ csrf_field() }}
								<div class="formsix-pos">
									<div class="form-group">
									    <label> <i class="fa fa-user"></i> Full Name</label>
										<input type="text" class="form-control"  name = "name" value="{{ old('name') }}" required autofocus placeholder="Full Names">
									</div>
								</div>
								<div class="formsix-pos">
									<div class="form-group">
									    <label> <i class="fa fa-envelope"></i> Email</label>
										<input type="email" class="form-control"  name = "email" value="{{ old('email') }}" required autofocus placeholder="Email">
									</div>
								</div>
								
								<div class="formsix-e">
									<div class="form-group ">
									    <label> <i class="fa fa-lock"></i> Password</label>
									    <input type="password" class="form-control" name="password" placeholder="Password *" required>
							
									</div>
								</div>
								<div class="formsix-e">
									<div class="form-group">
									    <label> <i class="fa fa-lock"></i> Confirm Password</label>
									<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required>
									</div>
								</div>
								<div class="login_btn_wrapper">
								<button type="submit" class="btn btn-primary btn-block col fa fa-user"> Register</button>
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