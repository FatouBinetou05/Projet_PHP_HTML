<?php
    // modifier_etudiant.php
    require "connexion.php";
 
    
    if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$filiere = $_POST["filiere"];
	
    $sql = "UPDATE etudiants 
            SET nom='$nom',
				prenom='$prenom',
				filiere='$filiere'
			WHERE id='$id'";
    if (mysqli_query($connexion, $sql)) {
        echo "etudiant modifie avec succès ";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
	?>
<form action="modifier_etudiant.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	<input type="text" name="nom" placeholder="Nom" required>
	<input type="text" name="prenom" placeholder="Prenom" required>
	<input type="text" name="filiere" placeholder="Filiere" required>
	
	<button type="submit">MODIFIER</button>
</form>
