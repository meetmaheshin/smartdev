@extends('layouts.authentication')
@section('content')
<div class="container-fluid login_page">
	<div class="row">
		<div class="col-md-7 ps-0">
			<div class="login_img d-none d-md-block position-relative">
				<img src="images/login_img.png" alt="login" class="w-100 vh-100">
				<div class="logo_img position-absolute">
					<a href="/">
						<img src="{{asset('images/logo.png')}}" alt="logo" width="240">
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-5  px-4  px-lg-5 mb-4 mb-md-0">
			<div class="vh-100 overflow-x-hidden">
				<div class="login_content text-center text-md-start">
					<h3 class="fw-normal d-flex justify-content-center align-items-center d-md-block"><span>Log in to</span><span class="fw-bold d-none d-md-inline"> <i class="smart_text">Smart</i><i class="dev3_text">Dev3</i></span>
						<span class="logo_heading_img d-block d-md-none"><a href="/"><img src="{{asset('/images/logo.png')}}" width="100" height="100" alt="logo-heading" class="h-100 ms-2"></a></span>
					</h3>
				</div>
				<div class="login_form">
					@include('layouts.message')
					<form method="POST" id="login" action="{{ route('login') }}" autocomplete="off">
						@csrf
						<div class="mb-4 d-flex justify-content-between">
							<div class="form-check form-check-inline position-relative radio_container w-100 d-flex justify-content-center active">
								<input class="form-check-input radio-button" type="radio" name="is_admin" id="flexRadioDefault1" value="1" checked>
								<div class="radio-tile">
									<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 115.96">
										<defs>
											<style>
												.cls-1 {
													fill-rule: evenodd;
												}
											</style>
										</defs>
										<title>client</title>
										<path class="cls-1" d="M45.41,69.61c.35-2.91-8.3-14.06-9.88-19.4-3.39-5.38-4.59-13.94-.9-19.63,1.47-2.26.84-4.22.84-7.35,0-31,54.27-31,54.27,0,0,3.92-.89,4.84,1.22,7.93,3.55,5.15,1.73,14.29-1.27,19.07-1.93,5.61-11,16.22-10.37,19.4.57,15.89-34,15.38-33.91,0Zm19.78,27.5H67.1A3.13,3.13,0,0,0,70.22,94V88.93a3.12,3.12,0,0,0-3.12-3.12H55.79a3.13,3.13,0,0,0-3.12,3.12V94a3.14,3.14,0,0,0,3.12,3.12h1.94L54,116H68.76L65.19,97.11ZM0,116C1.47,97-2.26,97.77,13.65,91.82A122.36,122.36,0,0,0,36,80.51L49.6,116ZM87.54,78.9a91.08,91.08,0,0,0,20.61,10.29C123,94.13,123,94.82,122.86,116H73.45L87.54,78.9Z" />
									</svg>
									<label class="form-check-label" for="flexRadioDefault1">
										Client
									</label>
									<i class="fa fa-check d-block"></i>
								</div>
							</div>
							<div class="form-check form-check-inline position-relative radio_container w-100 d-flex justify-content-center">
								<input class="form-check-input radio-button" type="radio" name="is_admin" id="flexRadioDefault2" value="0">
								<div class="radio-tile">
									<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102 122.88">
										<defs>
											<style>
												.cls-1 {
													fill-rule: evenodd;
												}
											</style>
										</defs>
										<title>freelancer-freelance</title>
										<path class="cls-1" d="M48.29,66.57a14.5,14.5,0,0,0,2.94.3,13.9,13.9,0,0,0,8-2.34A18.76,18.76,0,0,0,61.12,63l1.07-1c3.42-3.25,5.88-5.59,5.4-11.27h0a1.74,1.74,0,0,1,.27-1.07,1.69,1.69,0,0,1,2.34-.48,3.11,3.11,0,0,0,.63.32,1.79,1.79,0,0,0,.46.11c.28,0,.27.12.32.08s0-.15.13-.44l1.66-4.74a2.94,2.94,0,0,0,.11-1.53.32.32,0,0,0-.12-.18,1.23,1.23,0,0,0-.62-.07,4.29,4.29,0,0,0-2.14.91,1.73,1.73,0,0,1-1.33.33,1.7,1.7,0,0,1-1.38-2c1.22-7.15.67-11.8-.84-14.95a12.47,12.47,0,0,0-5.47-5.52,22.29,22.29,0,0,1-12.47,4.8,19.26,19.26,0,0,0-9.84,3.44,9.22,9.22,0,0,0-3.64,4.52,11.55,11.55,0,0,0-.14,6.38,1.71,1.71,0,0,1-2.25,2l-1.21-.44c-1.31-.46-2.25-.69-2.58-.05a14.93,14.93,0,0,0,.27,5A3.63,3.63,0,0,0,31,49.37a1.16,1.16,0,0,0,.56.14,3.62,3.62,0,0,0,1-.16,1.59,1.59,0,0,1,.5-.09,1.69,1.69,0,0,1,1.73,1.65c.14,5.8,2.73,8,5.88,10.74L42,62.82a17.47,17.47,0,0,0,6.3,3.75ZM51,100.7a7.74,7.74,0,1,1-7.74,7.74A7.75,7.75,0,0,1,51,100.7ZM63.4,65.46l.65.94c1,1.45,2.11,3.1,3.15,4.39,6.19,3.84,19.79,4.88,25.11,7.84,13.54,7.55,8.6,25.88,9.58,39.08-.3,3.12-2.07,4.9-5.54,5.17H92.59l4.12-31.27a3.76,3.76,0,0,0-3.54-4.43H52.73C54,77.89,65.38,77.84,65.66,73.5a56.66,56.66,0,0,1-4-5.45l-.47-.7a15.72,15.72,0,0,1-9.34,3.17,17.91,17.91,0,0,1-11.17-4.4,32.11,32.11,0,0,1-3,7,1.61,1.61,0,0,1-.35.34c.47,3.82,13.56,8.7,14.35,13.76H9.5A3.76,3.76,0,0,0,6,91.61l4.12,31.27H6.32c-3.47-.27-5.24-2-5.53-5.17.18-14-5.13-30.88,9.58-39.08,5.39-3,19.28-4,25.34-8A51,51,0,0,0,38.24,64c-3.34-2.87-6.11-5.36-6.73-11.15a4.48,4.48,0,0,1-2.16-.58A6.64,6.64,0,0,1,26.47,48a18.6,18.6,0,0,1-.31-6.55,1.91,1.91,0,0,1,.11-.41c.7-2,1.72-2.73,3-2.85l-.38-.25c-.52-6.46,1-17.67-6-19.79C36.19,1.7,51.49-7.23,63,7.37,76.65,8.09,82.24,29.53,71.76,39l-.05.41a6,6,0,0,1,.82-.12,4.44,4.44,0,0,1,2.46.47,3.57,3.57,0,0,1,1.76,2.13,6.17,6.17,0,0,1-.08,3.5L74.94,50.3a3.88,3.88,0,0,1-1.21,2,3.59,3.59,0,0,1-2.6.65H71c-.21,5.48-2.92,8.06-6.52,11.48l-1.06,1-.06.06Z" />
									</svg>
									<label class="form-check-label" for="flexRadioDefault2">
										Freelancer
									</label>
									<i class="fa fa-check"></i>
								</div>
							</div>
						</div>
						<div class="mb-4 input-logindata">
							<div class="form-group login_email_div">
								<label for="email" class="form-label position-relative">Email</label>
								<div class="icon">
									<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
								</div>
								@error('email')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="mb-3 input-logindata">
							<label for="password" class="form-label position-relative">Password</label>
							<div class="lock">
								<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
								<i class="position-absolute cursor-pointer toggle-password-login fas fa-eye-slash"></i>
							</div>
							@error('password')
							<span class="text-danger" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						@if (Route::has('password.request'))
						<div class="forget_password text-end mb-4">
							<a class="btn" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						</div>
						@endif
						<div class="row login_bottom_btn">
							<div class="col-sm-12">
								<div class="sigin_btn">
									<button type="submit" class="btn font_weight_600 w-100 d-flex justify-content-center align-items-center">
										Sign In<span class="loader"></span>
									</button>
								</div>

								<div class="already_acc_btn text-center mt-4 mb-3">
									<p>Don't have an account?</p>
								</div>
								<div class="register_btn text-center font_weight_500">
									<a href="{{route('register')}}" class="text-decoration-none">Signup</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection