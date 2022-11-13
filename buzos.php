<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Silvia Otaka</title>
</head>
<body>
  <h1>Tienda de ropa</h1>
  <button type="submit"><a href="#">Inicio</a></button>
  <button type="submit"><a href="tp8_backend.php">Listar ropa</a></button>
  <button type="submit"><a href="addidas.php">Ropa Addidas</a></button>
  <button type="submit"><a href="nike.php">Ropa nike</a></button>
  <button type="submit"><a href="remeras.php">Remeras</a></button>
  <button type="submit"><a href="buzos.php">Buzos</a></button>
  <button type="submit"><a href="precio-menor-500.php">Productos menor a $500</a></button>
  <h2>Lista de ropa</h2>
  <p>La siguiente lista muestra los datos de las prendas de marca Addidas</p>

  <section>
    <div class="container">
      <div class="row">


        <?php
        
        $conexion=mysqli_connect("127.0.0.1","root","root"); mysqli_select_db($conexion,"potrero_tienda");
        $consulta="SELECT * FROM ropa WHERE tipo_prenda = 'buzo'";    
        $datos=mysqli_query($conexion,$consulta);
        
        
        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="card col-sm-12 col-md-6 col-lg-3">
            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="60px" )>
            <a href="ver.php?id=<?php echo $reg['id'];?>" class="card-body">
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
            </a>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
