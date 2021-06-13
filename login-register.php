<?php
require_once('functions/function.php');
get_header();
 ?>
<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="page-breadcrumb-content text-center">
					<h1>Login</h1>
					<ul class="page-breadcrumb-links">
						<li><a href="index.html">Home</a></li>
						<li>Login</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<!--====================  login area ====================-->
<div class="login-area space__bottom--r120">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
				<!-- Login Form s-->
				<form action="" method="post" id="loginFrom">
					<div class="login-form">
						<h4 class="login-title">Login</h4>
						<div class="row">
							<div class="col-md-12 col-12 space__bottom--20">
								<label>Email Address*</label>
								<input class="mb-0" type="email" placeholder="Email Address" name="l_email">
							</div>
							<div class="col-12 space__bottom--20">
								<label>Password</label>
								<input class="mb-0" type="password" placeholder="Password" name="l_pass">
							</div>
							<div class="col-md-8">
								<div class="check-box d-inline-block ml-0 ml-md-2 space__top--10">
									<input type="checkbox" id="remember_me">
									<label for="remember_me">Remember me</label>
								</div>
							</div>
							<div class="col-md-4 space__top--10 space__bottom--20 text-left text-md-right">
								<a href="#" class="forgot_pass"> Forgotten pasward?</a>
							</div>
							<div class="col-md-12">
								<button class="default-btn mt-0">Login</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 space__top__md--40 space__top__lm--40">
				<form action="" method="post" id="RegisterFrom">
					<div class="login-form">
						<h4 class="login-title">Register</h4>
						<div class="row">
							<div class="col-md-6 col-12 space__bottom--20">
								<label>First Name</label>
								<input class="mb-0" type="text" placeholder="First Name" name="r_fname">
							</div>
							<div class="col-md-6 col-12 space__bottom--20">
								<label>Last Name</label>
								<input class="mb-0" type="text" placeholder="Last Name" name="r_lname">
							</div>
							<div class="col-md-12 space__bottom--20">
								<label>Email Address*</label>
								<input class="mb-0" type="email" placeholder="Email Address" name="r_email">
							</div>
							<div class="col-md-6 space__bottom--20">
								<label>Password</label>
								<input class="mb-0" type="password" placeholder="Password" name="r_pass" id="reg_pass">
							</div>
							<div class="col-md-6 space__bottom--20">
								<label>Confirm Password</label>
								<input class="mb-0" type="password" placeholder="Confirm Password" name="r_cpass">
							</div>
							<div class="col-12">
								<button class="default-btn mt-0" type="submit">Register</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--====================  End of login area  ====================-->
<?php
get_footer();
 ?>
