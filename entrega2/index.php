<?php include('templates/header.html');   ?>

<body>

  <h1>Agencia de Informacion Turistica</h1>
  <p>Aquí podran consultar información sobre agencias, tours, restaurantes y hoteles.</p>

  <br>

  <h3>Consulta 1: Dada una región, muestre todos los platos de los restaurantes ubicados en dicha región.</h3>
  <form action="consultas/consulta_1.php" method="post">
    Ingrese ID de la region (0...15):
    <input type="text" name="region_id">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 2: Dado un número de estrellas, muestre todas las habitaciones de hoteles con más de esa cantidad de estrellas, junto al nombre del hotel en el que está</h3>
  <form action="consultas/consulta_2.php" method="post">
    Estrellas:
    <input type="text" name="estrellas">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 3: Muestre todas las reservas a habitaciones realizadas por el usuario con id i entre las fechas a y b.</h3>
  <form action="consultas/consulta_3.php" method="post">
    ID usuario:
    <input type="text" name="id_usuario">
    <br/>
    Fecha inicio (yy-mm-dd):
    <input type="date" name="fecha_a">
    <br/>
    Fecha fin (yy-mm-dd):
    <input type="date" name="fecha_b">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 4: Entregue todos los tour de las agencias que están presente sólo en una región.</h3>
  <form action="consultas/consulta_4.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 5: Para cada región, entregue la habitación que ha sido reservada más veces.</h3>
  <form action="consultas/consulta_5.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 6: Entregue todos los usuarios que han reservado la habitación más barata en la región II.</h3>
  <form action="consultas/consulta_6.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 7: Dado un id de reserva, muestre el nombre del usuario que hizo la reserva junto al monto total que paga por esa reserva.</h3>
  <form action="consultas/consulta_7.php" method="post">
    ID reserva:
    <input type="text" name="id_reserva">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3>Consulta 8: Dado un número i, entrega la i-ésima habitación más cara. En caso de empate muestre las dos.</h3>
  <form action="consultas/consulta_8.php" method="post">
    I-ésima habitación más cara:
    <input type="text" name="i">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
</body>
</html>
