<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar tradiciones</h1>
	<section>
		<form name="tradiciones" action="guardar-tradiciones.php" method="post">
			<input type="text" name="nombre" placeholder="nombre" required><br>
			<input type="text" name="fecha" placeholder="fecha" required><br>
			<input type="text" name="descripcion" placeholder="descripcion"><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html