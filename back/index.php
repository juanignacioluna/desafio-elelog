<?php

session_start(); 

if(isset($_SESSION['email'])){
	header("location:home.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$email = trim($_POST['email']);

	$password = trim($_POST['password']);

	$emailValido = preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email);

	$emailLleno = !empty($email);

	$passwordLleno = !empty($password);

	if( ($email=="elelog@elelog.es") && $emailValido && $emailLleno && $passwordLleno){

		$password = md5($password);

		if($password == md5(12345)){

			$_SESSION['email'] = $email;

			header("location:home.php");

		}
	}
 }

?>

<!DOCTYPE html>
<html>
	<head>

		<link
		  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		  rel="stylesheet"
		/>
		<link
		  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
		  rel="stylesheet"
		/>
		<link
		  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
		  rel="stylesheet"
		/>

		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>

		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-8 col-10">

					<h1 class="titulo">Iniciar Sesión</h1>

					<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

					  <div class="form-outline mb-4">
					    <input required="required" name="email" type="email" id="email" class="form-control" />
					    <label class="form-label" for="email">Email</label>
					  </div>


					  <div class="form-outline mb-4">
					    <input required="required" name="password" type="password" id="password" class="form-control" />
					    <label class="form-label" for="password">Password</label>
					  </div>


					  <button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>


				</div>
			</div>
		</div>


		<script
		  type="text/javascript"
		  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"
		></script>

	</body>
</html>