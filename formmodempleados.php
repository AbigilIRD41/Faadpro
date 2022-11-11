<?php 

$id=$_GET["id"];
$nombre=$_GET["nombre"];
$departamento=$_GET["departamento"];
$telefono=$_GET["telefono"];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosfaadpro.css">
    <title>Empleados</title>
</head>
<body>
<form action="cmodempleados.php" method= "GET">
        <div class="form">
            <h1>Empleados</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' readonly="readonly" required><span class="barra"></span>
                <label>ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" value='<?php echo $nombre ?>' required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="departamento" value='<?php echo $departamento ?>' required><span class="barra"></span>
                <label>Departamento</label>
            </div>
            <div class="grupo">
                <input type="number" name="telefono" value='<?php echo $telefono ?>' required><span class="barra"></span>
                <label>Telefono</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>