<?php
require_once('functions/function.php');
 ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Panel</title>
	<!--  CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<div class="container">
		<div class="row justify-content-sm-center login_part">
			<div class="col-sm-6 col-md-4">
<?php
	if(!empty($_POST)){
		$username=$_POST['username'];
		$password=md5($_POST['pass']);

		if(!empty($username) || !empty($password)){
			$sel="SELECT * FROM user_info WHERE user_username='$username' AND user_pass='$password'";
			$Q=mysqli_query($conn,$sel);
			$data=mysqli_fetch_assoc($Q);

			if($data){
				$_SESSION['user_id']=$data['user_id'];
				$_SESSION['user_name']=$data['user_name'];
				$_SESSION['user_phone']=$data['user_phone'];
				$_SESSION['user_pass']=$data['user_pass'];
				$_SESSION['user_email']=$data['user_email'];
				$_SESSION['user_username']=$data['user_username'];
				$_SESSION['user_role_id']=$data['role_id'];
				$_SESSION['user_img']=$data['user_img'];
				header('Location: index.php');
			}else {
				echo "<div class='alert alert-danger' role='alert'>Username or Password did't match!</div>";
			}
		}else {
			echo "<div class='alert alert-danger' role='alert'> Enter your Username $ Password!</div>";
		}
	}


 ?>
				<div class="card border-info">
					<div class="card-header text-center ">
						Sign in to continue
					</div>
					<div class="card-body">
						<h3 class="card-title text-center mb-4 text-uppercase">Login</h3>

						<form action="" method="post"class="clearfix">
							<input type="text" class="form-control mb-3" placeholder="Username" name="username"  autofocus>
							<input type="password" class="form-control mb-3" placeholder="Password" name="pass">
							<button type="submit" class="btn btn-primary btn-block mb-2">Sign in</button>
							<label class="form-check-label checkbox pl-4">
								<input type="checkbox" class="form-check-input">
								Rember me
							</label>
							<a href="#" class="float-right"> Need Help?</a>
						</form>

						<a href="#" class="float-right">Create an account</a>
					</div>
				</div>

			</div>
		</div>
	</div>



	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

	<script src="js/custom.js"></script>
</body>

</html>
