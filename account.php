<?php 
include("includes/cookies.php");
include("includes/dbconfig.php"); 
include("includes/functions.php"); 
$cookie_value = "";
?>
<!doctype html>
<html>
	<head>
		<title>Noble Smart Academy</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/global.css">
		<meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=true;">
	</head>
	<body>
		<?php include("includes/nav.php"); ?>
		<section id="main-content">
			<div class="container">
                <h3>Register at Noble Smart Academy</h3>
				<form action="login.php" method="POST">
				<fieldset>
					<legend>Enter your login information</legend>
					E-mail: <input type="email" id="email" name="email"><br>
					Password: <input type="password" id="password" name="password"><br>
					<input type="submit" value="Submit" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-warning">
				</fieldset> 
				</form>				
			</div>
			<div id="frmResult"></div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>