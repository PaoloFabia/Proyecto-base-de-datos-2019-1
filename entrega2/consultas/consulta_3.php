<?php include('../templates/header.html');   ?>

<body>
  <h1>Consulta 3: Muestre todas las reservas a habitaciones realizadas por el usuario con id i entre las fechas a y b.</h1>
  <br>
  <br>
  <?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $id_usuario = $_POST["id_usuario"];  # asi se inicializan las vars que van en la consulta
  $id_usuario = intval($id_usuario);
  $fecha_a = $_POST["fecha_a"];
  $fecha_b = $_POST["fecha_b"];
  echo $fecha_a;
  echo '  |   ';
  echo $fecha_b;

 	$query = "SELECT * FROM reservas  WHERE uid = $id_usuario AND fecha_inicio >= $fecha_a AND fecha_inicio <= $fecha_b;";

	$result = $db -> prepare($query);
	$result -> execute();
	$dataCollected = $result -> fetchAll();
  ?>
  <table>
    <tr>
      <th>Reserva</th>
      <th>ID Usuario</th>
      <th>Habitacion</th>
      <th>fecha_inicio</th>
      <th>fecha_fin</th>
    </tr>
  <?php
	foreach ($dataCollected as $d) {
  		echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td><td>$d[4]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
