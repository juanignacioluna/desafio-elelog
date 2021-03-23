<?php

session_start(); 

if(!(isset($_SESSION['email']))){

	header("location:index.php");

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

		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>

		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-8 col-10">

					<h1 class="titulo">Bienvenido <?php echo $_SESSION['email'] ?></h1>

					<button onclick="logout()" class="btn btn-danger btn-block">Cerrar sesión</button>

				</div>
			</div>
		</div>

		<script type="text/javascript">
			
			function logout(){
				window.location='logout.php'
			}

		</script>

		<script
		  type="text/javascript"
		  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"
		></script>

	</body>
</html>
