<?php  require_once('connexion.php'); 
$page = $_GET['page'];
$sec = "SELECT * FROM image where id_img=$page";
$resul = mysqli_query($con,$sec); 
while ($ro = mysqli_fetch_array($resul)) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <style>
      .img{
          display:block;
          margin-left:390px;
          width:100px;
          text-align:center;
      }
        </style>
        </head>
    <body>
        <div class="img">
        <img width="500px" height="500px" src="<?php echo $ro['nom'];?>">
    </div>
    <?php
}
 ?>
 <h2 style="text-align:center;"><a href="javascript:history.go(-1)">Retour</a></h2>
</body>
</html>
