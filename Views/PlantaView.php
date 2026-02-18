<!DOCTYPE html>
<html>
<head>
    <title>Árboles y plantas: </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista: </h1>
    <ul>
        <?php foreach ($plantas as $planta): ?>
            <li><?=  htmlspecialchars($planta['nombre'])?> (<?= htmlspecialchars($planta['tipo'])?></li>
        <?php endforeach;?>
    </ul>
</body>



</head>


</html>