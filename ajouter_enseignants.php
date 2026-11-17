<?php
    // ajouter_enseignants.php
    require "connexion.php";
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$spécialité= $_POST["spécialité"];
	
    $sql = "INSERT INTO enseignants (id,nom,prenom, spécialité)
            VALUES ('$id','$nom', '$prenom', '$spécialité')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "enseignants ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
	?>
<form action="ajouter_enseignants.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	<input type="text" name="nom" placeholder="Nom" required>
	<input type="text" name="prenom" placeholder="Prenom" required>
	<input type="text" name="spécialité" placeholder="spécialité" required>
	
	<button type="submit">Ajouter</button>
</form>