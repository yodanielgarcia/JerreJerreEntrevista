<HTML>
<HEAD>
<TITLE>Jerre Jerre Gema</TITLE>
</HEAD>
<BODY>
<?php
if (isset($_GET['proceso'])){
echo $_GET['proceso']."<br>";
}
?>
<FORM enctype="multipart/form-data" method="post" action="insertar.php">

<h1 style="    text-align: center;">Formulario De Carga De Informacion</h1>
<div>
<div style="    text-align: center;font-family: fantasy; background-color: #a7a4a4;">GEMA SAS</div>
<div style="    margin-left: 40%;margin-top: 2%">
Archivo: <INPUT type="file" name="archivo" size="30"><br><br>
<INPUT style="background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;" type="submit" name="submit" value="Subir archivo">
<img src="icon/txticon.png" alt="Smiley face" height="52" width="52">
</div>
</div>
</FORM>
</BODY>
</HTML>