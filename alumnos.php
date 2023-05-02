<?php
function conectar(){
$xc = mysqli_connect("localhost","root","","bd");
return $xc;
die();
}
function desconectar($xc){
mysqli_close($xc);
}
$xc = conectar();
$sql = "SELECT * FROM alumno";
$res = mysqli_query($xc,$sql);
desconectar($xc);
//$filas=mysqli_fetch_array($res);
//print_r($filas);
while ($filas=mysqli_fetch_array($res))
{
$id=$filas['idalumno'];
$nombre=$filas['nombre'];
$apellido=$filas['apellido'];
$curso=$filas['curso'];
$matricula=$filas['matricula'];
echo "<tr>";
echo "<th>$id</th>";
echo "<br>";
echo "<td>$nombre</td>";
echo "<br>";
echo "<td>$apellido</td>";
echo "<br>";
echo "<td>$curso</td>";
echo "<br>";
echo "<td>$matricula</td>";
echo "<br>";
echo "<td><a class='btn btn-success' href = '/editaralumno.php?
id=$id'>Editar</a><a class='btn btn-danger' href='/eliminaralumno.php?
id=$id'>Eliminar</a></td>";
echo "</tr><br>";
}
?>
