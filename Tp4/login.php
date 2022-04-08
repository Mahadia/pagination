<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
$file = 'connexion.php';
require($file);
session_start();
$token = uniqid(rand(), true); // jeton unique
$_SESSION['token'] = $token;
if (isset($_POST['email'], $_POST['password'])){
  
  $username = stripslashes($_POST['email']);
  $username = mysqli_real_escape_string($con, $username);
  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($con, $password);
  $pass = password_hash($password,PASSWORD_DEFAULT);
 
  $query = "SELECT * FROM users WHERE email= '".$username."'";
  $result = mysqli_query($con,$query) or die(mysqli_error($con));
  $rows = mysqli_num_rows($result);
  

    while ($do = mysqli_fetch_array($result)){
     $m = $do['password'];
  //verification si le mot de passe est correct
 if(password_verify($_POST['password'], $m)){
 // echo htmlentities("<script>alert('Ok')</script>");
 
  header("location:televerser.php");
}else{

echo htmlentities("<script>alert('login ou mot de passe est incorrect')</script>");
$message = htmlentities("Le nom d'utilisateur ou le mot de passe est incorrect.");
}
}
}
$_SESSION['token_time'] = time();
?>
<form class="box" action="login.php" method="post">
<h1 class="box-title">Connexion </h1>
<img style=" width:100px;margin-left:130px;" src="img/log.png">
<input type="text" class="box-input" name="email"  placeholder="Email">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion" name="submit" class="box-button"> </br>
</br>
<input type="reset"  value="Reset" class="box-button" />

<p class="box-register">Vous êtes nouveau ici?<?php ?><a href="formulaire.php">S'inscrire</a></p>
<?php if (!empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>