<h1>Gestion des fichiers</h1><br/>
 
<form method="post" action="televerser_bdd.php" enctype="multipart/form-data">
     <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <input type="submit" name="submit" value="Envoyer" />

<?php

if(isset($_POST['submit']))
{
    require_once('connexion.php');
    $name=$_FILES['mon_fichier']['name'];
    $size=$_FILES['mon_fichier']['size'];
    $typ=$_FILES['mon_fichier']['type'];
    $validformat = array('.jpeg','.jpg','.png','.gif');
    $filetxt=".".strtolower(substr(strrchr($_FILES['mon_fichier']['name'],'.'),1));
 if (!in_array($filetxt,$validformat)){
    echo "Le fichier n'est pas une image";
    die;
}else{
   // $tmpt=file_get_content($_FILES['mon_fichier']['type']);
 $sql = "INSERT INTO image(nom,taille,type1)values('$name',$size,'$typ')";  
  $result = mysqli_query($con,$sql); 
}
}
?>