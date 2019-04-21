<?php include('../templates/header.html');   ?>

<body>
  <h1>Consulta 1: Dada una región, muestre todos los platos de los restaurantes ubicados en dicha región.</h1>
  <br>
  <br>
  <?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $region_id = $_POST["region_id"];  # asi se inicializan las vars que van en la consulta
  $region_id = intval($region_id);

 	$query = "SELECT restaurantes.nombre, restaurantes.rid, platos.nombre FROM restaurantes, platos WHERE platos.restid = restaurantes.restid AND restaurantes.rid = $region_id;";

	$result = $db -> prepare($query);
	$result -> execute();
	$dataCollected = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Restaurante</th>
      <th>Región</th>
      <th>Platos</th>
    </tr>
  <?php
	foreach ($dataCollected as $d) {
  		echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
