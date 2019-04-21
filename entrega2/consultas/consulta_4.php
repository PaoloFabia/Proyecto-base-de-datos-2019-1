<?php include('../templates/header.html');   ?>

<body>
  <h1>Consulta 4: Entregue todos los tour de las agencias que están presente sólo en una región.</h1>
  <br>
  <br>
  <?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $var = $_POST[""];  # asi se inicializan las vars que van en la consulta


 	$query = "SELECT agencias.aid, agencias.nombre, ar1.rid, tours.tid, tours.descripcion, tours.precio FROM agencia_region AS ar1, agencia_region AS ar2, tour_agencia AS ta, tours, agencias WHERE ar1.rid = ar2.rid AND ar1.aid = ar2.aid AND ta.aid = ar1.aid AND tours.tid = ta.tid AND agencias.aid = ar1.aid;";

	$result = $db -> prepare($query);
	$result -> execute();
	$dataCollected = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>ID agencia</th>
      <th>Agencia</th>
      <th>Region</th>
      <th>ID tour</th>
      <th>Descripcion tour</th>
      <th>Precio</th>
    </tr>
  <?php
	foreach ($dataCollected as $d) {
  		echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td><td>$d[4]</td><td>$d[5]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
