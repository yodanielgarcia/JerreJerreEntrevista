<?php
//Primero, arranca el bloque PHP y checkea si el archivo tiene nombre.  Si no fue asi, te remite de nuevo al formulario de inserción:
// No se comprueba aqui si se ha subido correctamente.
if (empty($_FILES['archivo']['name'])){
header("location: index.php?proceso=falta_indicar_fichero"); //o como se llame el formulario ..
exit;
}

//establece una conexión con la base de datos.
$mysqli = new MySQLi("localhost", "root","", "gemadb");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else{
		echo "Conexión exitossa!";// tu_bd es el nombre de la Base de datos .. por siaca.
		}

// archivo temporal (ruta y nombre).
	

if (isset($_FILES['archivo'])) {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['archivo']['name'] ." subido." . "</h1>";
        echo "<h2>Datos subidos:</h2>";
        readfile($_FILES['archivo']['tmp_name']);
    }
 
    //Import uploaded file to Database
   $datostxt = fopen($_FILES['archivo']['tmp_name'], "r");
 
    while (($data = fgetcsv($datostxt, 1000, " ")) !== FALSE) {
    	$datos= split(',',$data[0]);
    	if($datos[3]== ' '){
    		echo 'error sin codigo';
    		break;
    	}else{
 mysqli_query($mysqli,"INSERT INTO usuarios VALUES ('".$datos[0]."', '".$datos[1]."', '".$datos[2]."', '".$datos[3]."')");
    	}
    }
}
	header("location:vistaTablaUsuarios.php"); 

exit;
?>