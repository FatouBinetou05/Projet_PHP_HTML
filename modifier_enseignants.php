<?php
    // modifier_enseignants.php
    require "connexion.php"; 
    if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$spécialité = $_POST["spécialité"];
	
    $sql = "UPDATE enseignants 
            SET nom='$nom',
				prenom='$prenom',
				spécialité='$spécialité'
			WHERE id='$id'";
    if (mysqli_query($connexion, $sql)) {
        echo "enseignants modifie avec succès ";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
	?>
<form action="modifier_enseignants.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	<input type="text" name="nom" placeholder="Nom" required>
	<input type="text" name="prenom" placeholder="Prenom" required>
	<input type="text" name="spécialité" placeholder="spécialité" required>
	
	<button type="submit">MODIFIER</button>
</form>
