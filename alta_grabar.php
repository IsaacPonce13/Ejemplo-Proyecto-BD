
<?php
include("cabecera.php");
?>
	
<hr/>

<?php

	if(isset($_POST['nombre']))
	{
		//--- recuperar la información que introdujo el usuario
		$v1 = $_POST['nombre'];
		$v2 = $_POST['alias'];
		$v3 = $_POST['foto'];
		$v4 = $_POST['sexo'];
		//--- Sanitizar la información
		$v1=str_replace("'", "", $v1);
		$v2=str_replace("'", "", $v2);
		$v3=str_replace("'", "", $v3);
		$v4=str_replace("'", "", $v4);
		//------ Establece la conexión con la BD ---
		$conx = mysqli_connect ('localhost','root','toortoor','3b_noticias');
		if (mysqli_connect_errno())
		{
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
		
		//------ armar la sentencia SQL de insertado -------
		$sql="INSERT INTO reportero (nombre, alias, foto, sexo) values ('{$v1}','{$v2}','{$v3}','{$v4}')";
		// ----- insertarlo ---------------------------
		$result=mysqli_query($conx, $sql) or die(mysqli_error($conx));
		$idinsertado=mysqli_insert_id($conx);
		
		echo "<div> Se insertó el reportero {$v1} con el ID={$idinsertado}</div>";
	}

?>

<div style='text-align: right; padding:20px;'>
	<a href='index.php'> Regresar </a>
</div>

<?php
include("pie.php");
?>