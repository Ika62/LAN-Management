<?php
	include('../header.php');
	$bo = $_POST['format'];
?>

<!-- Choix de la map -->

<div id="listeMap"></p>Voici la liste des maps</p>

  <!-- Quand on met un espace dans classe, ça veut dire que c'est 2 classe. Donc ici, la classe map et pending. -->
  <input name="inf" type="button" value="de_inferno" class="map pending" onclick="veto(this, '<?= $bo ?>')" />
  <input name="nuke" type="button" value="de_nuke" class="map pending" onclick="veto(this, '<?= $bo ?>')" />
  <input name="cbb" type="button" value="de_cbble" class="map pending" onclick="veto(this, '<?= $bo ?>')" />
  <input name="mir" type="button" value="de_mirage" class="map pending" onclick="veto(this, '<?= $bo ?>')" />
  <input name="cac" type="button" value="de_cache" class="map pending" onclick="veto(this, '<?= $bo ?>')" />
  <input name="over" type="button" value="de_overpass" class="map pending" onclick="veto(this, '<?= $bo ?>')" />
  <input name="trn" type="button" value="de_train" class="map pending" onclick="veto(this, '<?= $bo ?>')" />

</div>

<?php
	include('../footer.php');
?>
