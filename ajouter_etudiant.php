<?php
    // ajouter_etudiants.php
    require "connexion.php";
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$filiere = $_POST["filiere"];
	
    $sql = "INSERT INTO etudiants (id,nom,prenom, filiere)
            VALUES ('$id','$nom', '$prenom', '$filiere')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "etudiant ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
	?>
<form action="ajouter_etudiant.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	<input type="text" name="nom" placeholder="Nom" required>
	<input type="text" name="prenom" placeholder="Prenom" required>
	<input type="text" name="filiere" placeholder="Filiere" required>
	
	<button type="submit">Ajouter</button>
</form>