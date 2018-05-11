@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-8">
			<div>
				<h2 class="py-3">Sign Up</h2>
				<form>
					<div class="form-group row">
						<label for="example-text-input" class="col-4 col-form-label" align="right"><b>Name:</b></label>
						<div class="col-8">
							<input class="form-control" type="text" placeholder="Enter your name" id="example-text-input">
						</div>
					</div>
					<div class="form-group row">
						<label for="example-email-input" class="col-4 col-form-label" align="right"><b>Email:</b></label>
						<div class="col-8">
							<input class="form-control" type="email" placeholder="Enter email address" id="example-search-input">
						</div>
					</div>
					<div class="form-group row">
						<label for="example-password-input" class="col-4 col-form-label" align="right"><b>Password:</b></label>
						<div class="col-8">
							<input class="form-control" type="password" placeholder="Enter password" id="example-email-input">
						</div>
					</div>
					<div class="form-group row">
						<label for="example-password-input" class="col-4 col-form-label" align="right"><b>Confirm Password:</b></label>
						<div class="col-8">
							<input class="form-control" type="password" placeholder="Confirm your password" id="example-url-input">
						</div>
					</div>
					<div class="form-group row">
						<label for="example-tel-input" class="col-4 col-form-label" align="right"><b>Phone number:</b></label>
						<div class="col-8">
							<input class="form-control" type="tel" placeholder="Enter your phone number" id="example-tel-input">
						</div>
					</div>
					<div class="form-group" >
						<a class="btn btn-outline-primary"  href="#">Submit</a>
					</div>
				</form>
			</div>
		</div>
		<div class="col-4 border-left">
			<div align="left">
				<h2 class="py-3">Sign In</h2>
				<form>
					<div class="form-group">
						<label for="username"><b>Username: </b></label>
						<input type="username" class="form-control" id="username" placeholder="Enter username">
					</div>
					<div class="form-group">
						<label for="pwd"><b>Password:</b></label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password">
						<p><a href="/forgotpwd" class="text-primary">Forgot Password?</a></p>
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<div>
					<button type="submit" class="btn btn-outline-primary">Login</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection