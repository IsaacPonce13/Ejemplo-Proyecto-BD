<?php
include("cabecera.php");
?>

<div style='margin:100px; border: 2px solid orange; padding:100px; background:#eeffaa; text-align: center; '>

	<form action='alta_grabar.php' method='post'>  
		
		<table>
			<tr> <td>Nombre:</td><td> <input type="text" name='nombre' size="60"></td> </tr> 
			<tr> <td>Alias: </td><td> <input type="text" name='alias' size="40"> </td> </tr> 
			<tr> <td>Foto: </td><td> <input type="text" name='foto' size="60"> </td> </tr> 
			<tr> <td>Sexo: </td><td> 
				<select name='sexo'>
					<option value='H'>Hombre</option>
					<option value='M'>Mujer</option>
				</select>
			 </td> </tr> 
		</table>
		<input type='submit' value='    Guardar    ' style='font-size:2em; '>
	</form> 

</div>

<?php
include("pie.php");
?>

