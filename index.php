<!DOCTYPE html>
<html>
<head>
  <title>Formulario PHP</title> 
</head> 
   <link href="style.css" rel="stylesheet" type="text/css" />
<body>
  <h2>Formulario PHP</h2>
  <?php echo ''; ?> 
        <form action="acccion.php" method="post">
         <p>Nombre: <input type="text" name="nombre" required /></p>
        <p>Apellido paterno: <input type="text" name="paterno" required /></p>
        <p>Apellido materno: <input type="text" name="materno" required /></p>
         <p>Correo: <input type="email" name="correo" required /></p>
          <p>Direccion: <input type="text" name="dire" /></p>
         <p><input type="submit" /></p>
        </form>
  </form>
</body>
</html>









