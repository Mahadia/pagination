<?php  require_once('connexion.php'); 
 session_start();
 // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
 
$num_page=6;
//test si la page est la valeur pas vide 
if (isset($_GET["page"])) {
    //la variable page prend le numéro de page dans l'url
     $page=$_GET["page"];
 } else {
      $page=1;
     }; 
// un calcul pour changer le nombre à chaque fois pour la limitation 
        $start_from = ($page-1) * $num_page;
        $sq = "SELECT * FROM image"; 
        //Pour lancer la requete 
        $rresult = mysqli_query($con,$sq); 
        // connaitre le nombre total de données dans la page 
        $total_records = mysqli_num_rows($rresult); 


        //pour avoir le nombre de page à afficher sur la barre 
        $total_pages = ceil($total_records / $num_page); 


?>
<head>
   <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="css/style.css">
<h1 style="text-align:center;">Gestion des images</h1><br/>
<center>
<a href="logout.php">Déconnexion</a>
<form method="post" action="televerser.php" enctype="multipart/form-data" style="text-align:center;">
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

                        //insérer l'image dans la bdd aprés 
                        $sql = "INSERT INTO image(nom,taille,type1)values('$name',$size,'$typ')";  
                        $resul = mysqli_query($con,$sql); 

                    
                        
                    
                    }
                    }

                    ?>

                    <?php 
                    //Requete pour sélectionner les images
                    $sql2 = "SELECT * FROM image ORDER BY id_img DESC LIMIT  $start_from, $num_page"; 
                    $result2 = mysqli_query($con,$sql2); 



                    ?> 
                    <div class="divCenter">
                        <?php 
                        $i=0;
                    echo "<tr>";
                        foreach($result2 as $ligne)://Affiche les données present dans le tableau donné par le controller ?>
                            <?php $id = $ligne['id_img'] ;?>
                            <div class="divdata">
                                <img src="<?=$ligne['nom']?>" width="auto" height="150" style="padding:40px">
                                <p> Titre : <?=$ligne['type1']?>  <i class="far fa-trash-can"> <a href="?id=<?php echo $id;?>" style="color:red;"> Delete</a></i></p>
                            </div>

                        <?php 
                        $i++;
                        if($i%2==0){?>
                            <div style='clear:both'></div>
                            <?php
                        }
                        if (isset($_GET['id'])) {
                            
                            $pid = $_GET['id'];
                            $sql4 = "DELETE from image where id_img ='$pid'";    
                            $resul4 = mysqli_query($con,$sql4);
                            header("Location: televerser.php");
                            } 
                        endforeach;
                    
                        ?>
                    </div>
                    </body>
                    </html>
                    <?php 
                    // pour reculer d'un pas 
                    $preview = $page-1;
    
                    // pour avancer d'un pas 
                    $next = $page+1;
                    // Afficher le lien précedent
                    echo "<a href='televerser.php?page=$preview' >".'<strong>Précédent </strong>'."</a> "; // Goto 1st page  
                    //boucle pour afficher toute les pages
                    for ($i=1; $i<=$total_pages; $i++) { 
                        // Afficher du nombre pages calculer précédemment
                                echo "<a href='televerser.php?page=".$i."'.>".$i."</a> "; 
                    }; 
                    // Afficher le lien suivant
                    echo "<a href='televerser.php?page=$next'>".'<strong>Suivant</strong>'."</a> "; // Goto last page


                    ?>