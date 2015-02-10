<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar fiestas populares</h1>
	<section>
		<form name="fiestas_populares" action="guardar-fiestas.php" method="post">
			<input type="text" name="nombre" placeholder="nombre" required><br>
			<input type="text" name="fecha" placeholder="fecha"><br>
			<input type="text" name="descripcion" placeholder="descripcion" required><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html