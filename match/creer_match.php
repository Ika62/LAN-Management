
<?php
	include('../header.php');
?>
		<!-- Choix de la première équipe -->

		<form action="veto.php" method="POST">



			<div align="center">

				<!-- Choix du format de match -->

				<div class="choicecontainer">
					<div class="choix">Choix du format du match</div>
					<label>BO1</label><input type="radio" name="format" value="bo1" checked />
					<label>BO3</label><input type="radio" name="format" value="bo3" />
					<label>BO5</label><input type="radio" name="format" value="bo5" />
				</div>

				<!-- Choix du serveur -->

				<div class="choicecontainer">
					<div class="choix">Choisir le serveur</div>
					<select name="serveur" size="8">

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

				<div class="choicecontainer">
					<div class="choix" >Choix de la première équipe</br> </div>

					<div class="teamlist">
						<input type="hidden" name="equipe1" id="equipe1" />
						<div>
						<?php //Ici on insert la liste des équipes.

							$equipe = $bdd -> query('SELECT ID, nom FROM equipe ORDER BY ID ');
							while ($donnee = $equipe -> fetch() )
							{
							?>
								<a class="team" onclick="selectTeam('equipe1', this);"><?= $donnee['nom'] ?></a>
							<?php
							}

							$equipe -> closeCursor();

						?>
					</div>
					</div>
				</div>
				<!-- Choix de la deuxième équipe -->

				<div class="choicecontainer">
					<div class="choix" >Choix de la deuxième équipe</br> </div>

					<div class="teamlist">
					    <!-- L'input c'est pour pouvoir l'envoyer a l'autre page -->
					    <input type="hidden" name="equipe2" id="equipe2" />
							<div>
					    <?php //Ici on insert la liste des équipes.

							$equipe = $bdd -> query('SELECT ID, nom FROM equipe ORDER BY ID ');
							while ($donnee = $equipe -> fetch() )
							{
							?>
								<a class="team" onclick="selectTeam('equipe2', this);"><?= $donnee['nom'] ?></a>
							<?php
							}

							$equipe -> closeCursor();

						?>
					</div>
					</div>
				</div>

				<div class="choicecontainer">
					<!-- Bouton pour creer le match après toutes les informations -->

					<input name="valider" type = "submit" value = "Créer le match" />
				</div>

			</div>


		</form>

<?php
	include('../footer.php');
?>
