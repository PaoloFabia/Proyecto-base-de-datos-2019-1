<?php include('../templates/header.html');   ?>

<body>
  <h1>Consulta 2: Dado un número de estrellas, muestre todas las habitaciones de hoteles con más de esa cantidad de estrellas, junto al nombre del hotel en el que está</h1>
  <br>
  <br>
  <?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $estrellas = $_POST["estrellas"];  # asi se inicializan las vars que van en la consulta
  $estrellas = intval($estrellas);

 	$query = "SELECT hoteles.nombre, hoteles.estrellas, habitaciones.nombre, habitaciones.precio FROM hoteles, habitaciones WHERE hoteles.hid = habitaciones.hid AND hoteles.estrellas > $estrellas;";

	$result = $db -> prepare($query);
	$result -> execute();
	$dataCollected = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Hotel</th>
      <th>Estrellas</th>
      <th>Habitacion</th>
      <th>Precio</th>
    </tr>
  <?php
	foreach ($dataCollected as $d) {
  		echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
