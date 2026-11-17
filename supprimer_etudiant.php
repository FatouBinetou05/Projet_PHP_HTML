<?php
    // supprimer_traitement.php
    require "connexion.php";
 
    $id = $_POST["id"];
 
    $sql = "DELETE FROM etudiants WHERE id = '$id'";
 
    if (mysqli_query($connexion, $sql)) {
        if(mysqli_affected_rows($connexion)>0){
			echo"Etudiant supprimé avec succés";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
?>
<form action="supprimer_etudiant.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	
	<button type="submit">SUPPRIMER</button>
</form>
