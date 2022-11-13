<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silvia Otaka</title>
</head>
<body>
    <h1>Tienda de ropa</h1>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    $conexion=mysqli_connect("127.0.0.1","root","root"); mysqli_select_db($conexion,"potrero_tienda");
    $consulta="SELECT*FROM ropa";

    $datos=mysqli_query($conexion,$consulta);
    
    while ($fila=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['tipo_prenda']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['talle']; ?></td>
        <td><?php echo $fila['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
    
    <br>
    <p>La siguiente lista muestra los datos de las ropas de marca Addidas.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    $consulta="SELECT * FROM ropa WHERE marca = 'addidas'";

    $datos=mysqli_query($conexion,$consulta);    
    while ($fila=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['tipo_prenda']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['talle']; ?></td>
        <td><?php echo $fila['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
