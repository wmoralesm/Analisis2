<?php
 
   $conectar= @mysql_connect('localhost','root','');
   if(!$conectar){
   echo"No se pudo conectar con el servidor";

}else{
 
 $base=mysql_select_db('datos');
 if(!$base){
  echo"No se encontro la base de datos";


 }


}
 $name=$_POST['name'];
 $lastName=$_POST['lastname'];
 $address=$_Post['address'];

 $sql="INSERT INTO registros VALUES('name','lastName','address')";


 $ejecutar=mysql_query($sql);

  if(!$ejecutar){
   echo "Existio Error";
   } else{
   echo"Datos Guardados <br><a href = 'index.html'>volver</a>";
   }
?>
