<?php 


if (isset($_POST['Login'])) {


$userName = $_POST['userName'];
$Password = $_POST['Password'];
$Confirm = $_POST['Confirm'];




}










 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
<div style="height: 100px"></div>
 <div class="container">

 	<div class="card-body border border-success " style="padding:40px;border-radius:15px">
 		<h1 class="text text-center text-success"><i class="bi bi-person-circle"></i> Create an account</h1>
 		<form class="form-horizontal" method="POST">
 			<div class="col-md-10">
 				<label class="form-label" for="username">userName:</label>
 				<input type="text" name="userName" id="username" class="form-control">
 				<?php if (isset($_POST['Login'])): ?>
 					<?php if (empty($userName)): ?>
 						<span class="text text-danger"><i class="bi bi-exclamation-circle"></i> userName Can not be empty.</span>
 					<?php endif ?>
 				<?php endif ?>
 			</div>
 			<div class="col-md-10">
 				<label class="form-label" for="password">Password:</label>
 				<input type="text" id="password" name="Password" class="form-control">
 				 <?php if (isset($_POST['Login'])): ?>
 				 	<?php if (empty($Password)): ?>
 				 		<span class="text text-danger"><i class="bi bi-exclamation-circle"></i> Password Can not be empty.</span>
 				 	<?php endif ?>
 				 <?php endif ?>

 			</div>
 			<div class="col-md-10">
 				<label class="form-label" for="password2">Confirm-Password:</label>
 				<input type="text" id="password2" name="<?php @Confirm" class="form-control">
 				<?php if (isset($_POST['Login'])): ?>
 				 	
 				 	<?php if (empty($Confirm)): ?>
 				 		<span class="text text-danger"><i class="bi bi-exclamation-circle"></i> Confirm Password Can not be empty.</span>
 				 	<?php else: ?>
 				 		<?php if ($Password!=$Confirm): ?>
 				 			<span class="text text-danger"><i class="bi bi-exclamation-circle"></i>  Password did not Match.</span>
 				 		<?php endif ?>
 				 	<?php endif ?>
 				 <?php endif ?>
 			</div>
 			<div class="col-md-10" style="margin-top: 10px;">
 				<button name="Login" class="btn btn-success btn-md">Login</button>
 			</div>
 		</form>
 	</div>
 </div>	
</body>
</html>