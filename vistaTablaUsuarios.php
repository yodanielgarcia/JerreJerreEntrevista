
<HTML>
<HEAD>
<TITLE>Jerre Jerre Gemax</TITLE>
</HEAD>
<BODY>
<a href="index.php">Volver</a>
<FORM enctype="multipart/form-data" method="post" action="">
<?php 
$mysqli = new MySQLi("localhost", "root","", "gemadb");
        if ($mysqli -> connect_errno) {
            die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() . ") " . $mysqli -> mysqli_connect_error());
        }
        else{
        echo "Conexión exitossa!";// tu_bd es el nombre de la Base de datos .. por siaca.
        }

              
                $sql=("SELECT * FROM usuarios where codigo_ai = '1'");
    
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $query=mysqli_query($mysqli,$sql);
 echo "<h1>Usuarios Activos</h1>";
                echo "<table border='1'; class='table table-hover';>";
                    echo "<tr class='warning'>";
                        echo "<td>Email</td>";
                        echo "<td>Nombre</td>";
                        echo "<td>Apellido</td>";
                       
                       
                      
                    echo "</tr>";

                
              while($arreglo=mysqli_fetch_array($query)){
                    echo "<tr class='success'>";
                        echo "<td>$arreglo[0]</td>";
                        echo "<td>$arreglo[1]</td>";
                        echo "<td>$arreglo[2]</td>";
                      
                       
                  
                    echo "</tr>";
                }

                echo "</table>";


                 $sql1=("SELECT * FROM usuarios where codigo_ai = '2'");
    
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $query1=mysqli_query($mysqli,$sql1);
 echo "<h1>Usuarios Inactivos</h1>";
                echo "<table border='1'; class='table table-hover';>";
                    echo "<tr class='warning'>";
                        echo "<td>Email</td>";
                        echo "<td>Nombre</td>";
                        echo "<td>Apellido</td>";
                       
                       
                      
                    echo "</tr>";

                
              while($arreglo1=mysqli_fetch_array($query1)){
                    echo "<tr class='success'>";
                        echo "<td>$arreglo1[0]</td>";
                        echo "<td>$arreglo1[1]</td>";
                        echo "<td>$arreglo1[2]</td>";
                      
                       
                  
                    echo "</tr>";
                }

                echo "</table>";
                 $sql2=("SELECT * FROM usuarios where codigo_ai = '3'");
    
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $query2=mysqli_query($mysqli,$sql2);
 echo "<h1>Usuarios En Espera</h1>";
                echo "<table border='1'; class='table table-hover';>";
                    echo "<tr class='warning'>";
                        echo "<td>Email</td>";
                        echo "<td>Nombre</td>";
                        echo "<td>Apellido</td>";
                       
                       
                      
                    echo "</tr>";

                
              while($arreglo2=mysqli_fetch_array($query2)){
                    echo "<tr class='success'>";
                        echo "<td>$arreglo2[0]</td>";
                        echo "<td>$arreglo2[1]</td>";
                        echo "<td>$arreglo2[2]</td>";
                      
                       
                  
                    echo "</tr>";
                }

                echo "</table>";
?>


</FORM>
</BODY>
</HTML>