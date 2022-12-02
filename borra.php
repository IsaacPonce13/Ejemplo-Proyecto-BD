
<?php
include("cabecera.php");
?>
	
<hr/>

<?php

	if(isset($_GET['id']))
	{
		//--- recuperar la información que introdujo el usuario
		$v1 = $_GET['id'];
		//--- Sanitizar la información
		$v1=intval($v1);
		//------ Establece la conexión con la BD ---
		$conx = mysqli_connect ('localhost','root','toortoor','3b_noticias');
		if (mysqli_connect_errno())
		{
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
		
		//------ armar la sentencia SQL  -------
		$sql="DELETE FROM reportero WHERE id='{$v1}'";
		// ----- borrarlo ---------------------------
		$result=mysqli_query($conx, $sql) or die(mysqli_error($conx));
		$idinsertado=mysqli_insert_id($conx);
		
		echo "<div> Se borró el reportero con el ID={$v1}</div>";
	}

?>

<div style='text-align: right; padding:20px;'>
	<a href='listar.php'> Regresar </a>
</div>

<?php
include("pie.php");
?>