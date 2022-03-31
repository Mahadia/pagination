<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$file = 'connexion.php';
require($file);
if (isset($_POST['username'], $_POST['surname'], $_POST['email'],$_POST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_POST['username']);
  $username = mysqli_real_escape_string($con,$username); 
  $surname = stripslashes($_POST['surname']);
  $surname = mysqli_real_escape_string($con, $surname); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($con, $email);
  // rEcupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($con, $password);
  $password2 = stripslashes($_POST['password2']);
  $password2 = mysqli_real_escape_string($con, $password2);
 
  //requéte SQL + mot de passe crypté
 $sqll=mysqli_query($con,"SELECT email from users where email='".$email."'");
  if($password==$password2){
    $pass= password_hash($password,PASSWORD_DEFAULT);

 // Exécution la requête sur la base de données
 $requte = " INSERT INTO users (username,surname,email,password) VALUES ('$username','$surname','$email','$pass') ";
 $res = mysqli_query($con,$requte) or die ('Erreur SQL !<br>'.mysqli_error($con));
 if($res){ 
   echo "<div class='sucess'>
         <h3>Vous êtes inscrit avec succès.</h3>
         <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
   </div>";

}else{
  echo "<div class='sucess'>
         <h3>Utilisateur non enregistrés </h3>
        
   </div>";
}
 }else{
  echo "<div class='sucess'>
          <h3> Mots de non identiques </h3>
         
    </div>";
 }

  
}

?>
<form class="box" action="formulaire.php" method="post">
  <h1 class="box-logo box-title">Inscription </h1>
  <img style=" width:100px;margin-left:130px;" src="img/log.png">

  <input type="text" class="box-input" name="username" placeholder="Nom "  required />
  <input type="text" class="box-input" name="surname" placeholder="Prénom"  required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="password" class="box-input" name="password2" placeholder="Réecrire le mot de passe" required />
   
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    
    <h4 class="box-register" > Déjà inscrit? <a href="login.php" > Connectez-vous ici</a><h4>
</form>
  <?php 
  
// Déconnexion de MySQL
mysqli_close($con); 
?>
  
</body>
</html>