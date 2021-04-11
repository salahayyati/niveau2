<!DOCTYPE html>

<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/s'inscrire.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password"> </div>
                   
                    <div class="row mb-3 px-3"> <button type="submit" name="submit" class="btn btn-blue text-center">Login</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a  class="text-danger " href="formulair d'inscription.php">Register</a></small> </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
<?php
$dsn="localhost";
$user="root";
$dbname="gestiondev";
$pass=""; 
    

    

    
try {//


    $dbname = new PDO("mysql:host=$dsn;dbname=gestiondev", $user, $pass);// try to connect with class pdo 3an tari9 parametr($dsn $user $pass $option) 
    //echo "you connected";
   $dbname->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//
   //for inser the values in tables
   
if(isset($_POST["submit"])&& isset($_POST["email"]) && isset($_POST["password"])){
    $password=$_POST["password"];
    $email=$_POST["email"];
    // var_dump($password,$email);
        $qry = "SELECT  a.email,a.mot_de_pass FROM admin a WHERE a.email = :email AND a.mot_de_pass = :pssd"; 
           
          $stmt = $dbname->prepare($qry);
          $stmt->bindParam(":pssd",$password);
          $stmt->bindParam(":email",$email);
header('location: dashboard.php');
          $stmt->execute ();
              $count = $stmt->rowCount();
              if ($count > 0){
                  
                
                    
                
                
                
              }
              else{ "<p style='color:red'>not correct</p>";
              }
    }
}

   

catch (PDOException $e) {// AFICH EROUR NTA3 Exception
    echo "filed" . $e->getMessage();//for affich message "filed" and problem
    
}  
?>
<script>
//             function redirect()
//             {
//                 location.replace('dashboard.php');
//             }

// </script>

