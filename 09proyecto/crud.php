<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
    <title>JQuery CRUD</title>
    <link rel="stylesheet" href="../jquery-ui-1.11.4/jquery-ui.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="estilo.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

<div class="ui-widget">
<center>
  <h1>Proyecto CRUD - JQuery</h1>
  <a href="#" id="nuevo">Agregar usuario</a>
  <br><br>
</center>

<table class="tabla" align="center">
  <thead class="ui-widget-header">
      <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Operaciones</th>
      </tr>
  </thead>
  <tbody class="ui-widget-content">



          <?php
          include('conexion.php');
          $con = db_conn();
          $res = $con->query(
          "SELECT * FROM usuarios;"
          );
          while ($row = $res->fetch_assoc()) {
            echo '<tr>';
              echo '<td>'.$row['id'].'</td>';
              echo '<td>'.$row['usuario'].'</td>';
              echo '<td>'.$row['nombre'].'</td>';
              echo '<td>'.$row['app'].'</td>';
              echo '<td>'.$row['tel'].'</td>';
              echo '<td>'.$row['email'].'</td>';
              echo '<td> <a href="#" class="editar" id="'.$row['id'].'">Editar</a> | <a href="#" class="eliminar" id="'.$row['id'].'">Eliminar</a></td></tr>';
          }
           ?>
  </tbody>
</table>



</div>

<div id="agregar">
  <p class="titulo">Todos los campos son requeridos</p>
  <form action="" id="formulario">
    <fieldset>
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" class="text ui-widget-content ui-corner-all">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="text ui-widget-content ui-corner-all">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" class="text ui-widget-content ui-corner-all">
      <label for="telefono">Teléfono</label>
      <input type="text" name="telefono" class="text ui-widget-content ui-corner-all">
      <label for="email">Email</label>
      <input type="text" name="email" class="text ui-widget-content ui-corner-all">
      <label for="pass">Contraseña</label>
      <input type="password" name="pass" class="text ui-widget-content ui-corner-all">

    </fieldset>
  </form>
</div>

<div id="editar">
  <p class="titulo">Todos los campos son requeridos</p>
  <form action="" id="formulario2">
    <fieldset>
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" id="usuario" class="text ui-widget-content ui-corner-all">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="text ui-widget-content ui-corner-all">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido" class="text ui-widget-content ui-corner-all">
      <label for="telefono">Teléfono</label>
      <input type="text" name="telefono" id="telefono" class="text ui-widget-content ui-corner-all">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" class="text ui-widget-content ui-corner-all">
      <label for="pass">Nueva contraseña</label>
      <input type="password" name="pass" class="text ui-widget-content ui-corner-all">
    </fieldset>
  </form>
</div>
<input type="hidden" id="user">
<div id="dialogo-confirm" title="¿Estaseguro de eliminar?">
  <p>El usuario será eliminado de la base de datos</p>

</div>



    <script src="../js/jquery-2.2.3.min.js"/></script>
    <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script src="scriptjq.js" charset="utf-8"></script>
  </body>
</html>
