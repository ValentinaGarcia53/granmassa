<?php 
include 'global/config.php';
include 'carrito.php';
?>
<link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet" /> 
<body style="overflow-x:hidden ">
<div class="row bg-dark">
<h5><a class="badge btn-primary mt-3 ml-5 " href="menu.php" role="button">Volver</a></h5>
<br>
<img class="" src="assets/img/portfolio/carrito/carrito_de_compras.jpg" alt="Carrito"> 
<?php if(!empty($_SESSION['CARRITO'])){?>
<table class="table table-light table-bordered bg-secondary">
    <tbody>
        <tr>
            <th class="text-center" width="40%"><h4>Descripción</h4></th>
            <th width="15%" class="text-center"><h4>Cantidad</h4></th>
            <th width="20%" class="text-center"><h4>Precio</h4></th>
            <th width="20%" class="text-center"><h4>Total</h4></th>
            <th width="5%"></th>
        </tr>
        <hr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td class="text-center text-white" width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center text-white"><?php echo $producto['CANTIDAD']?></td>
            <td width="20%" class="text-center text-white">$<?php echo $producto['PRECIO']?></td>
            <td width="20%" class="text-center text-white">$<?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
    
            <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD,KEY);?>">
            <td width="5%"><button class="btn btn-danger text-center rounded-circle" type="submit" name="btnAccion" value="Eliminar">X</button></td>
            </form>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php } ?>
        <tr>
            <td colspan="3" align="right"><h3 class="text-white">Total</h3></td>
            <td align="right"><h3 class="text-center text-white">$<?php echo number_format($total,2); ?></h3></td>
            <td></td>
        </tr>
        <tr>
             <td colspan="5">
             <form action="pagar.php" method="post">
             
             <div class="col-4 form-group text-white mt-3">
                <label for="my-input"><h4>Nombre</h5></label>
                <input id="nombre" name="nombre" class="form-control" type="nombre" placeholder="Por Favor ingrese su nombre" required >
                <label for="my-input"><h4 class="mt-2">Dirección</h4></label>
                <input id="direccion" name="direccion" class="form-control" type="direccion" placeholder="Por Favor ingrese su dirección" required >
             </div>
             <small id="direcHelp" class="form-text text-muted mb-2" >Los productos se enviarán a esta dirección</small>
              <button class="btn btn-primary mx-3 pt-2" type="submit" value="proceder" name="btnAccion"><h6>Pagar</h6></button>
             </form>             
             </td>        
        </tr>
    </tbody>
</table>
<?php }else{?>
     <div class="col-12 alert alert-primary text-center">No hay productos en el carrito</div>

<?php } ?>

<div class="col-12">
<?php include("footer.php"); ?>
</div>