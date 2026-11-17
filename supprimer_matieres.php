<?php
    // supprimer_matieres.php
    require "connexion.php";
  if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
    
 
		$sql = "DELETE FROM matieres WHERE id = '$id'";
 
		if (mysqli_query($connexion, $sql)) {
			if(mysqli_affected_rows($connexion)>0){
				echo"Matiere supprimé avec succés";
			} else {
				echo "Aucun matiere avec cet id";
				} 
		}else {
			echo "Erreur : " . mysqli_error($connexion);
    }
	}
?>
<form action="supprimer_matieres.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	
	<button type="submit">SUPPRIMER</button>
</form>
