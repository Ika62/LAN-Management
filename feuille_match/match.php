<?php
	include('../header.php');
?>


<?php

	//Pr�paration de la requ�te

	$req = $bdd -> prepare('SELECT * FROM game WHERE id=:num ');

	//Lier le param�tre num

	$id = $_GET['numMatch'];
	$req -> bindValue(':num', $_GET['numMatch'], PDO::PARAM_INT);

	//On ex�cute

	$req -> execute();

	$donnee = $req -> fetch(); //R�cup�re le r�sultat

	//On �crit



			//$equipe = $bdd -> query('SELECT ID, equipe1, equipe2 FROM game WHERE id="$id" ');
			//$donnee = $equipe -> fetch(); //fetch => r�cup�re les r�sultat

			echo 	'Feuille de match</p>'.
					$donnee['equipe1']
					.'    VS    '
					. $donnee['equipe2']
					.'</p> Sur le serveur '
					. $donnee['serveur']
					.'</p>Format du match : '
					.$donnee['format'];


?>

<?php
	include('../footer.php');
?>
