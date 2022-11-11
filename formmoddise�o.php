<?php 

$id=$_GET["id"];

$modelo=$_GET["modelo"];

$tipos=$_GET["tipos"];

$caracteristicas=$_GET["caracteristicas"];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosfaadpro.css">
    <title>Diseño</title>
</head>
<body>
<form action="cmoddiseño.php" method= "GET">
        <div class="form">
            <h1>Diseño</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' readonly="readonly" required><span class="barra"></span>
                <label>ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="modelo" value='<?php echo $modelo ?>' required><span class="barra"></span>
                <label>Modelo</label>
            </div>
            <div class="grupo">
                <input type="text" name="tipos" value='<?php echo $tipos ?>' required><span class="barra"></span>
                <label>Tipos</label>
            </div>
            <div class="grupo">
                <input type="text" name="caracteristicas" value='<?php echo $caracteristicas ?>' required><span class="barra"></span>
                <label>caracteristicas</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>