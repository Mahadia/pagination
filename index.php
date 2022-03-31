<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<?php 

require_once('connexion.php');
// on declare le nombre de page  

$num_page=10;
//test si la page est la valeur pas vide 
if (isset($_GET["page"])) {
    //la variable page prend le numéro de page dans l'url
     $page  = $_GET["page"];
 } else {
      $page=1;
     }; 
// un calcul pour changer le nombre à chaque fois pour la limitation 
$start_from = ($page-1) * $num_page;


$sql = "SELECT * FROM texte LIMIT $start_from, $num_page"; 

$result = mysqli_query($con,$sql); 
?> 

<body>
    <div class="container">
      <h6 style="text-align:center;">Tableau des données</h6>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Documents</th>
            <th> Mot </th>
          </tr>
        </thead>
        <tbody>

<?php 
while ($row = mysqli_fetch_array($result)) { 
?> 
            <tr>
            <td><?php echo $row['id_mot']; ?></td> 
            <td><?php echo $row['documents']; ?></td>  
            <td><?php echo $row['mot']; ?></td> 
                     
            </tr>
           
<?php 
}; 
?> 
 </tbody>
      </table>
    </div>



  </body>
</html>
<?php 
$sql = "SELECT * FROM texte"; 
//Pour lancer la requete 
$rresult = mysqli_query($con,$sql); 
// connaitre le nombre total de données dans la page 
$total_records = mysqli_num_rows($rresult); 

/*Deuxième manière pour avoir le nombre total des données dans la base
$sql1 = "SELECT count(*) as nbr_item FROM texte";
$result=  mysqli_query($con,$sql1);
$row1= mysqli_fetch_array($result);
echo $row1['nbr_item'];*/

//pour avoir le nombre de page à afficher sur la barre 
$total_pages = ceil($total_records / $num_page); 
// pour reculer d'un pas 
$preview = $_GET["page"]-1;

// pour avancer d'un pas 
$next = $_GET["page"]+1;
// Afficher le lien précedent
echo "<a href='index.php?page=$preview' >".'<strong>Précédent </strong>'."</a> "; // Goto 1st page  
//boucle pour afficher toute les pages
for ($i=1; $i<=$total_pages; $i++) { 
    // Afficher du nombre pages calculer précédemment
            echo "<a href='index.php?page=".$i."'.>".$i."</a> "; 
}; 
// Afficher le lien suivant
echo "<a href='index.php?page=$next'>".'<strong>Suivant</strong>'."</a> "; // Goto last page
?>

