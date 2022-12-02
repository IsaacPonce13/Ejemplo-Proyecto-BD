<?php
include("cabecera.php");
?>

<script>
	function pregunta()
	{
		r=confirm('Estas seguro de borrar?');
		if(r==true) return true;
		else return false;
	}
</script>

<?php

		echo "<div> Reporteros registrados </div>";

		//------ Establece la conexión con la BD ---
		$conx = mysqli_connect ('localhost','root','toortoor','3b_noticias');
		if (mysqli_connect_errno())
		{
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
		//------ Armamos y ejecutamos la sentencia de búsqueda 
		$sql="select * from reportero";
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
						{$r['nombre']} <br>
						\"{$r['alias']}\"
				</td>".
				"<td> <a href='borra.php?id={$r['id']}' onClick='return pregunta();'> <img src='img/borra.png' width='32'> </a> </td> ".
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