<?php
session_start();



if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Casa Idaman</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<!-- icon link -->
		<link rel="icon" href="../pic/casaidaman.png" type="image/icon type">
	</head>

	<body class="bg-primary">
		<!-- <div class="container d-flex justify-content-center align-items-center " style="min-height: 100vh">
			<form class="border shadow p-3 rounded bg-light " action="php/check-login.php" method="post" style="width: 450px;">
				<h1 class="text-center p-3">LOGIN</h1>
				
				<div class="mb-3">
					<label for="username" class="form-label">User name</label>
					<input type="text" class="form-control" name="username" id="username">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<div class="mb-1">
					<label class="form-label">Select User Type:</label>
				</div>
				<select class="form-select mb-3" name="role" aria-label="Default select example">
					<option selected value="user">Resident</option>
					<option value="admin">Admin</option>
				</select>
				<button type="submit" class="btn btn-primary">LOGIN</button>
			</form>
		</div> -->

		<section class="vh-100" style="background-color: #508bfc;">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<form class="card shadow-2-strong" action="../php/check-login.php" method="post" style="border-radius: 1rem;">
							<div class="card-body p-5  ">

								<h3 class="mb-5 text-center">Sign in</h3>
								<?php if (isset($_GET['error'])) { ?>
									<div class="alert alert-danger" role="alert">
										<?= $_GET['error'] ?>
									</div>
								<?php } ?>

								<div class="form-outline mb-4">
									<label class="form-label" for="username">Username</label>
									<input type="text" class="form-control" name="username" id="username">

								</div>

								<div class="form-outline mb-4">
									<label for="password" class="form-label">Password</label>
									<input type="password" name="password" class="form-control form-control-lg" id="password">

								</div>

								<select class="form-select mb-4" name="role" aria-label="Default select example">
									<option selected value="user">Resident</option>
									<option value="admin">Admin</option>
								</select>
								<div>
									<a class="my-5  pb-lg-2 " href="register.php" style="color: #393f81;">Don't have an
										account?</a><br> <br>
									<button type="submit" class="btn btn-primary">Login</button>


								</div>



						</form>
					</div>
				</div>
			</div>
			</div>
		</section>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

	</html>
<?php } else {
	header("Location: ../user/home.php");
} ?>