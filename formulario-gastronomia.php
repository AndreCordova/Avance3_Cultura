<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Insertar gastronomia</h1>
	<section>
		<form name="gastronomia" action="guardar-gastronomia.php" method="post">
			<input type="text" name="nombre" placeholder="nombre" required><br>
			<input type="text" name="ingredientes" placeholder="ingredientes"><br>
			<input type="text" name="descripcion" placeholder="descripcion" required><br>
			<input name="guardar" value="Guardar" type="submit">
		</form>
	</section>
</body>
</html