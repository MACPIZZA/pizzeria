<?php
$con=mysqli_connect('localhost','root','','macpizza1')or die ("Error en la conexion servidor");
$TELEFONO=$_POST[TELEFONO];
$DIRECCION=$_POST[DIRECCION];
$PIEZAS=$_POST[PIEZAS];
$TAMA�O=$_POST[TAMA�O];

	
$sql="INSERT INTO peperoni
VALUES (null,'".$_POST["DIRECCION"]."','".$_POST["TAMA�O"]."','".$_POST["PIEZAS"]."','".$_POST["TELEFONO"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo 'PEDIDO REALIZADO<br><br>';

?>





