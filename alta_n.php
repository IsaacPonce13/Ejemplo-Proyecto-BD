<?php
//------ Establece la conexión con la BD ---
$conx = mysqli_connect ('localhost','root','toortoor','3b_noticias');
if (mysqli_connect_errno())
{
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}


include("cabecera.php");

?>

<div style='margin:100px; border: 2px solid orange; padding:100px; background:#eeffaa; text-align: center; '>

	<form action='alta_grabar_n.php' method='post'>  
		
		<table>
			<tr> <td>Titulo:</td><td> <input type="text" name='titulo' size="50" maxlength="200"></td> </tr> 
			<tr> <td>Foto: </td><td> <input type="text" name='foto' size="40" maxlength="80"> </td> </tr> 
			<tr> <td>Contenido: </td><td> <input type="text" name='contenido' size="60"> </td> </tr> 
			<tr> <td>Reportero: </td><td> 
				<select name='id_reportero'>
			<?php
				//------ Armamos y ejecutamos la sentencia de búsqueda 
				$sql="select * from reportero";
				$result=mysqli_query($conx, $sql) or die(mysqli_error($conx));
				//------ Mostramos resultados 		
				while($r=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<option value='{$r['id']}'> {$r['nombre']} </option>";
				}
			?>
				</select>
			 </td> </tr> 
		</table>
		<input type='submit' value=' Guardar '>
	</form> 

</div>

<?php
include("pie.php");
?>

