<?php
//  $servername = 'localhost';
//  $username = 'root';
//  $password = '';
//  $dbname = 'gestiondev';
//  //On établit la connexion
//  $conn = new mysqli($servername, $username, $password, $dbname);
 
//  //On vérifie la connexion
//  if($conn->connect_error){
//      die('Erreur : ' .$conn->connect_error);
//  }
// //  echo 'Connexion réussie';
// $requete = ""
$dsn = 'mysql:host=localhost;dbname=gestiondev';
  $user = 'root';
  $pass = '';

        try {//
          $db = new PDO($dsn, $user, $pass);// try to connect with class pdo 3an tari9 parametr($dsn $user $pass $option) 
          //echo "you connected";
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//
         

    }

    catch (PDOException $e) {// AFICH EROUR NTA3 Exception
      echo "filed" . $e->getMessage();//for affich message "filed" and problem

   }
   $requete = "SELECT * FROM developpeurs";
   $result = $db->query($requete);
   if (!$result){
       echo "la recuperation des donnees";
   }
   else{
      $test = $result->rowCount();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width:100%" border=1>
 <tr>
 <th></th>
 <th>nom</th>
 <th>prenom</th>
 <th>email</th>
 </tr>
 <?php
 while($ligne= $result->fetch(PDO::FETCH_NUM)){
    echo"<tr>";
    foreach ($ligne as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
 }
 ?>
</table>
<?php
$result->closecursor();
?>
</body>
</html>