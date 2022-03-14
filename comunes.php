<?php 
include_once 'global/config.php';
include_once 'global/conexion.php';
include_once 'carrito.php';
?>
<link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" /> 
<body style="overflow-x:hidden ">
<div class="row bg-dark">
<h5><a class="badge btn-primary mt-3 ml-5 " href="menu.php" role="button">Volver</a></h5>
<h5><a class="badge btn-primary mt-3 ml-5 " href="mostrarcarrito.php" role="button">Carrito (<?php
     echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
?>)</a></h5>
<br/>
<div class="container">
    <br> 
    <?php if ($mensaje="") {?>
    <div class="alert alert-success">
        <?php echo ($mensaje);?>
        <a href="mostrarcarrito.php" class="badge badge-danger">Ver carrito</a>
    </div>
    <?php }?>
    <div class="row">
    <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `comunes`");
      $sentencia -> execute();
      $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      //print_r($listaProductos);
    ?>
    <img class="img-fluid" src="assets/img/portfolio/menu/comunes.jpg" alt="Comunes">
    <?php foreach($listaProductos as $producto){?>
        <div class="col-4">
            <div class="card bg-primary text-center mt-5 mx-2 rounded-0">
                
                <img class="card-img-top" src="<?php echo $producto['Imagen'];?>" alt="<?php echo $producto['Nombre'];?>" title="<?php echo $producto['Nombre'];?>">
               
                <div class="card-body text-white">
                    <span><h6><?php echo $producto['Nombre'];?></h6></span>
                    <h5 class="card-title text-white">$<?php echo $producto['Precio'];?></h5>

                <form action="" method="post" class="rounded-0">
                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD,KEY);?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD,KEY);?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD,KEY);?>">

                 
                <button class="btn btn-primary text-white btn-outline-dark border-white rounded-0" type="submit" name="btnAccion" value="Agregar">Agregar al carrito</button>
                </form>

                
                </div>
            </div>
        </div>

    <?php } ?>
    </div>
</div>
<div class="col-12">
<?php include("footer.php"); ?>
</div>
</section>

