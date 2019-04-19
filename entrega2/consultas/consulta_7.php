<?php 'Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto total que paga por esa reserva.'; ?>



<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $var = $_POST[""];  # asi se inicializan las vars que van en la consulta


 	$query = "SELECT ... FROM datos where ...;";

	$result = $db -> prepare($query);
	$result -> execute();
	$dataCollected = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>atributo1</th>
      <th>atributo2</th>
      <th>atributo3</th>
    </tr>
  <?php
	foreach ($dataCollected as $d) {
  		echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
