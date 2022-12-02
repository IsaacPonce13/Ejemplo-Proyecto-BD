
<?php
include("cabecera.php");
?>
	
<hr/>

<?php

	if(isset($_POST['titulo']))
	{
		//--- recuperar la información que introdujo el usuario
		$v1 = $_POST['titulo'];
		$v2 = $_POST['foto'];
		$v3 = $_POST['contenido'];
		$v4 = $_POST['id_reportero'];
		//--- Sanitizar la información
		$v1=str_replace("'", "", $v1);
		$v2=str_replace("'", "", $v2);
		$v3=str_replace("'", "", $v3);
		$v4=intval($v4);
		//------ Establece la conexión con la BD ---
		$conx = mysqli_connect ('localhost','root','toortoor','3b_noticias');
		if (mysqli_connect_errno())
		{
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
		
		//------ armar la sentencia SQL de insertado -------
		$sql="INSERT INTO notas (titulo, foto, contenido, id_reportero) values ('{$v1}','{$v2}','{$v3}','{$v4}')";
		// ----- insertarlo ---------------------------
		$result=mysqli_query($conx, $sql) or die(mysqli_error($conx));
		$idinsertado=mysqli_insert_id($conx);
		
		echo "<div> Se insertó la nota {$v1} con el ID={$idinsertado}</div>";
	}

?>

<div style='text-align: right; padding:20px;'>
	<a href='index.php'> Regresar </a>
</div>

<?php
include("pie.php");
?>