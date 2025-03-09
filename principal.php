<!DOCTYPE html>
<html lang="es-cl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reserva de Laboratorio de Computación</title>
  <script src="reserva.js"></script>
  <link rel="icon" href="https://insucodos.cl/wp-content/uploads/2022/05/cropped-INSUCODOS110x137-32x32.jpg" />
  <link rel="stylesheet" href="reserva.css">
</head>

<body>
  <header class="header">
    <h1>Reserva de Laboratorio de Computación</h1>
    <p>
      Las reservas de los laboratorios deben hacerse durante el inicio de jornada
      <span>(8:00 a 8:15)</span> o durante el recreo <span>(10:00 a 10:15)</span>.
    </p>
    <p>
      <span>¡Atención!</span> Las reservas realizadas fuera de estos horarios no serán
      consideradas.
    </p>
  </header>
  <nav class="navegacion">
    <ul class="menu">
      <li><a href="index.html" onclick="alert('Saliendo del sistema...')"><img src="269099.png" alt="Imagen de candado"
            class="img_logo"></a></li>
    </ul>
  </nav>
  <br>
  <form action="reserva.php" method="post" id="reservationForm">
    <label for="lab">Laboratorio:</label>
    <select id="lab" name="numero_laboratorio" required>
      <option value="1">Laboratorio 1</option>
      <option value="2">Laboratorio 2</option>
      <option value="3">Laboratorio 3</option>
      <option value="4">Laboratorio 4</option>
      <option value="5">Laboratorio 5</option>
    </select><br />

    <label for="date">Fecha de Reserva:</label>
    <input type="date" id="date" name="fecha_laboratorio" required /><br />

    <label for="startTime">Hora de Inicio:</label>
    <input type="time" id="startTime" name="startime_laboratorio" required /><br />

    <label for="endTime">Hora de Término:</label>
    <input type="time" id="endTime" name="endtime_laboratorio" required /><br />

    <label for="user">Nombre de profesor/a:</label>
    <input type="text" id="user" name="profesor_laboratorio" required /><br />
    <br>
    <input type="submit" name="ingresar_datos" id="btmsubmit" value="Ingresar" onclick="reserveLab();">
  </form>
  <br>
  <h2>Reservas Realizadas</h2>
  <table id="reservationTable">
    <thead>
      <tr>
        <th>Laboratorio</th>
        <th>Fecha</th>
        <th>Hora de Inicio</th>
        <th>Hora de Término</th>
        <th>Profesor/a</th>
      </tr>
    </thead>
    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "reservar";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if (!$con) {
      die("Error al conectarse a la DB: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM laboratorio";
    $result = mysqli_query($con, $sql);
    while ($mostrar = mysqli_fetch_array($result)) {
      ?>
      <tbody>
        <td>
          <?php echo $mostrar['N_lab'] ?>
        </td>
        <td>
          <?php echo $mostrar['fecha_lab'] ?>
        </td>
        <td>
          <?php echo $mostrar['startime_lab'] ?>
        </td>
        <td>
          <?php echo $mostrar['endtime_lab'] ?>
        </td>
        <td>
          <?php echo $mostrar['profesor_lab'] ?>
        </td>
        <?php
    }
    ?>
    </tbody>
  </table>
</body>

</html>