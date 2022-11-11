<?php 

$id=$_GET["id"];

$nombre=$_GET["nombre"];

$versioon=$_GET["versioon"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosfaadpro.css">
    <title>Hardware</title>
</head>
<body>
<form action="cmodhardware.php" method= "GET">
        <div class="form">
            <h1>Hardware</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' readonly="readonly" required><span class="barra"></span>
                <label>ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" value='<?php echo $nombre ?>' required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="versioon" value='<?php echo $versioon ?>' required><span class="barra"></span>
                <label>Version</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>