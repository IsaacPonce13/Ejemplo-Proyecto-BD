<?php

include("cabecera.php");


		echo "<div> Notas registrados </div>";

		//------ Establece la conexión con la BD ---
		$conx = mysqli_connect ('localhost','root','toortoor','3b_noticias');
		if (mysqli_connect_errno())
		{
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
		//------ Armamos y ejecutamos la sentencia de búsqueda 
		$sql="select * from notas";
		//echo "<div>".$sql."</div>";
		$result=mysqli_query($conx, $sql) or die(mysqli_error($conx));
		//------ Mostramos resultados 
		echo "<table border='1'>";
		while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo "<tr>".
				"<td> <img src='{$r['foto']}' width='120'> </td>".
				"<td> 
						ID={$r['id']} <br>
						{$r['titulo']} <br>
						\"{$r['contenido']}\"
				</td>".
			"</tr>";
		}
		echo "</table>";


?>

<div style='text-align: right; padding:20px;'>
	<a href='index.php'> Regresar </a>
</div>

<?php
		
include("pie.php");
?>