
<!DOCTYPE html>
<html>
<head>
<title>sing up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link rel="stylesheet" href="./assets/formulair d'inscription.css">
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>DevlopSupMTI</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					
					<input class="text email" type="email" name="email" placeholder="Email" >
					<input class="text" type="password" name="password" placeholder="Password" >
					
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2021 Colorlib Signup Form. All rights reserved </p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
<?php
$dsn="localhost";
$user="root";
$dbname="gestiondev";
$pass=""; 
    if ( isset($_POST["email"]) && isset($_POST["password"])  ){
    
    $email=$_POST["email"];
	$password=$_POST["password"];

    

    
try {//
    $dbname = new PDO("mysql:host=$dsn;dbname=gestiondev", $user, $pass);// try to connect with class pdo 3an tari9 parametr($dsn $user $pass $option) 
    //echo "you connected";
   $dbname->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//
   $q = "INSERT INTO admin (email, mot_de_pass ) VALUES ( '$email', '$password')";//for inser the values in tables
   $dbname->exec($q);//execute
   echo '<meta http-equiv="refresh" content="0">';
    header ("location:conecter.php");


   
}
catch (PDOException $e) {// AFICH EROUR NTA3 Exception
echo "filed" . $e->getMessage();//for affich message "filed" and problem

}
}
?>
