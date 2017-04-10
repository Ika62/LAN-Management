
<?php
	include('../header.php');
?>
		<!-- Choix de la première équipe -->

		<form action="ajouter_match.php" method="POST">

			<div id="choix1">Choix de la première équipe</br>
				<select name="equipe1" id="equipe1" size="20">
				<?php //Ici on insert la liste des équipes.

					$equipe = $bdd -> query('SELECT ID, nom FROM equipe ORDER BY ID ');
					while ($donnee = $equipe -> fetch() )
					{
					?>
						<option value="<?php echo $donnee['nom']; ?>"> <?php echo $donnee['nom']; ?></option>
					<?php
					}

					$equipe -> closeCursor();

				?>
				</select>
			</div>

			<!-- Choix de la deuxième équipe -->

			<div id="choix2">Choix de la deuxième équipe</br>
				<select name="equipe2" id="equipe2" size="20" >
				<?php //Ici on insert la liste des équipes.

					$equipe = $bdd -> query('SELECT ID, nom FROM equipe ORDER BY ID ');
					while ($donnee = $equipe -> fetch() )
					{
					?>
						<option value="<?php echo $donnee['nom']; ?>"> <?php echo $donnee['nom']; ?></option>
					<?php
					}

					$equipe -> closeCursor();

				?>
				</select>
			</div>

			<!-- Choix du serveur -->

			<div id="choixServeur">Choisir le serveur</br>
				<select name="serveur" id="serveur" size="8">

					<option value="1">Serveur 1</option>
					<option value="2">Serveur 2</option>
					<option value="3">Serveur 3</option>
					<option value="4">Serveur 4</option>
					<option value="5">Serveur 5</option>
					<option value="6">Serveur 6</option>
					<option value="7">Serveur 7</option>
					<option value="8">Serveur 8</option>

				</select>
			</div>

			<!-- Choix du format de match -->

			<div id="choixFormat">Choix du format du match</br>
				<label>BO1<input type="radio" name="format" value="bo1" ></label>
				<label>BO3<input type="radio" name="format" value="bo3"></label>
				<label>BO5<input type="radio" name="format" value="bo5"></label>
			</div>

			<!-- Choix de la map -->

			<!-- Bouton pour creer le match après toutes les informations -->

			<input name="valider" type = "submit" value = "Créer le match" />

		</form>

		<?php
			include('../footer.php');
		?>
