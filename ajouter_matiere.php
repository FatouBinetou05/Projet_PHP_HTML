<?php
    // ajouter_matieres.php
    require "connexion.php";
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$id=$_POST["id"];
		$nom = $_POST["nom"];
		$coefficient = $_POST["coefficient"];
		
	
    $sql = "INSERT INTO matieres (id,nom,coefficient)
            VALUES ('$id','$nom', '$coefficient')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "matieres ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
	}
	?>
<form action="ajouter_matiere.php" method="post">
<input type="number" name="id" placeholder="Id" required>
	<input type="text" name="nom" placeholder="Nom" required>
	<input type="number" name="coefficient" placeholder="coefficient" required>
	
	<button type="submit">Ajouter</button>
</form>