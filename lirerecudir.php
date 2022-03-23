<P>
<B>DEBUTTTTTT DU PROCESSUS :</B>
<BR>
<?php echo " ", date ("h:i:s"); ?>
</P>
<?php

//
set_time_limit (500);
//le dossier 
$path= "docs";


//fonction pour explorer le dossier 
function explorerDir($path)
{
	//declaration d'une variable en ouvrant un dossier 
	$folder = opendir($path);
	
	//tant que c'est un dossier en lisant une entrée du dossier
	while($entree = readdir($folder))
	{		
		//si la variable entree est different de . et de ..
		if($entree != "." && $entree != "..")
		{
			//si c'est un fichier .
			if(is_dir($path."/".$entree))
			{
				
				//sauvergarder la route dans une variable
				$sav_path = $path;
				//le path est égale à /entree
				$path .= "/".$entree;
				//Explorer le dossier		
				explorerDir($path);
			    //sauvergarder la route
				$path = $sav_path;
				
			}
			else
			{
				//tableau pour le format
				$validformat = array('jpg','png');
				
				$path_source = $path."/".$entree;
				//Stocker dans une variable les extensions sans majuscule
				$extension = strtolower(pathinfo($path_source,PATHINFO_EXTENSION));
			
			//	si c'est l'un des extensions est présent dans le tableau
			  if(in_array($extension,$validformat))

				{
					$con = mysqli_connect("localhost", "root", "");
                    // Sélection de la base coursphp
					$m = mysqli_select_db($con,"bdm");
					echo "<img width='300px' height='300px'  src='$path_source'>";
					$size=filesize("$path_source");
					
					//Inserer dans la base de données
					$sql = "INSERT INTO image(nom,taille,type1)values('$path_source',$size,'image/$extension')";  
					$resul = mysqli_query($con,$sql); 
					
				}
				/* pour afficher les fichiers  pdf, html,txt 
				if(in_array($extension,array('pdf','html','txt','htm'))){

					echo "<embed src=$path_source width=800 height=500 type='application/pdf'/>";
				}*/
			}
		}
	}
	closedir($folder);
}

//
explorerDir($path);

?>
<P>
<B>FIN DU PROCESSUS : </B>
<BR>
<?php echo " ", date ("h:i:s"); ?>
</P>
