<?php
    // modifier_matieres.php
    require "connexion.php";
 
    
    if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
		$nom = $_POST["nom"];
		$coefficient= $_POST["coefficient"];
		
	
    $sql = "UPDATE matieres
            SET nom='$nom',
				coefficient='$coefficient'
				
			WHERE id='$id'";
    if (mysqli_query($connexion, $sql)) {
        echo "matiere modifie avec succès ";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
	?>
<form action="modifier_matieres.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	<input type="text" name="nom" placeholder="Nom" required>
	<input type="number" name="coefficient" placeholder="coefficient" required>
	
	<button type="submit">MODIFIER</button>
</form>
