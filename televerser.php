<?php  require_once('connexion.php');   ?>
<h1>Gestion des fichiers</h1><br/>
 
<form method="post" action="televerser.php" enctype="multipart/form-data">
     <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <input type="submit" name="submit" value="Envoyer" />


     
<?php
if(isset($_POST['submit'])){
  
$maxfile = 1048576;    
$dest = "test/";
$validformat = array('.jpeg','.jpg','.png','.gif');

if ($_FILES['mon_fichier']['error'] > 0){
    $erreur = "Erreur lors du transfert";
}

 $fichier=$_FILES['mon_fichier']['error'];
 $fileSize=$_FILES['mon_fichier']['size'];
 $filetxt=".".strtolower(substr(strrchr($_FILES['mon_fichier']['name'],'.'),1));
 if (!in_array($filetxt,$validformat)){
    echo "Le fichier n'est pas une image";
    die;
}
 /*
 echo $fileSize;
 if($fileSize>$maxfile){
     echo "La taille du fichier est gros";
 }*/
$resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$dest.$_FILES['mon_fichier']['name']);
$name=$dest.$_FILES['mon_fichier']['name'];
if ($resultat) {
  
    echo "Transfert réussi";
   
    $size=$_FILES['mon_fichier']['size'];
    $typ=$_FILES['mon_fichier']['type'];

    $sql = "INSERT INTO image(nom,taille,type1)values('$name',$size,'$typ')";  
    $resul = mysqli_query($con,$sql); 
  
}
}

?>

<?php 
$sql2 = "SELECT * FROM image ORDER BY id_img DESC LIMIT 6"; 
$result2 = mysqli_query($con,$sql2); 
while ($row4 = mysqli_fetch_array($result2)) { 
?> 
<div>
<table style="float:left;
margin-left:5px;
margin-top:20px;">
  <th><img width="200px" height="200px" src="<?php echo $row4['nom'];?> "style="float:left;
margin-left:5px;
margin-top:20px;"/></th>
   </table>
</div>

     <?php 
} 
?> 