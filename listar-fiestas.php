<?php
	include("conect.php");
	$sql_listar="select * from fiestas";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=20 align=center bgcolor='#BDEDFF' border=8>";
	echo "<tr>";
		echo "<td>nombre</td>";
		echo "<td>fecha</td>";
		echo "<td>descripcion</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['fecha']."</td>";
			echo "<td>".$row['descripcion']."</td>":
		echo "</tr>";
	}
	echo "</table>";
	?>