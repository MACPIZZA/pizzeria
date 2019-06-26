<?php
$con=mysqli_connect('localhost','root','','macpizza1')or die ("Error en la conexion servidor");
$DIRECCION=$_POST[DIRECCION];
$TELEFONO=$_POST[TELEFONO];
$PIEZAS=$_POST[PIEZAS];
$TAMAÑO=$_POST[TAMAÑO];

	
$sql="INSERT INTO hawaina
VALUES (null,'".$_POST["DIRECCION"]."','".$_POST["TAMAÑO"]."','".$_POST["PIEZAS"]."','".$_POST["TELEFONO"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo 'PEDIDO REALIZADO<br><br>';

?>


