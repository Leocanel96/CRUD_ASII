<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- Iconos -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="css/style.css">
    <title>Productos</title>
  </head>
  <body>
    <nav class="navbar navbar-light barra" >
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1 class="titulo">Productos</h1>
                </div>
            </div>
        </div>
    </nav>
 

    <div class="container">
        <div class="row">
            <div class="agregar">
                <a href="agregarProductos.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Agregar Producto</span>
                </a>
            </div>  
        </div>
    </div>



             



    
    <div class="container tabla">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include '../capaDatos(DB)/conexion.php';
                    
                    $contador = 0;
                    $result = mysqli_query($mysqli, "SELECT * FROM productos;");
                    $contador = 0;
                    while ($row = mysqli_fetch_assoc($result)):
                        $contador++;
                ?>
                    <tr>
                        <td scope="row"><?=$contador?></th>
                        <td><?= $row['nombre_producto'];?></td>
                        <td><?= $row['descripcion_producto'];?></td>
                        
                        <td width="25%">

                                
                            <!-- Editar -->
                            <a class="btn btn-success btn-circle" href="editarProducto.php?id_producto=<?= $row['id_producto']; ?>">
                                <i class="fas fa-edit"></i>
                            </a> 

                            <!-- Eliminar -->
                            <a class="btn btn-danger btn-circle" href="eliminarProducto.php?id_producto=<?= $row['id_producto']; ?>">
                                <i class="fas fa-trash"></i>
                            </a>
                            
                        </td>
                    </tr>
                <?php endwhile?>
                </tbody>
            </table>
        </div>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>