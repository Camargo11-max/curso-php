<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cerveza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    

    <div class="container-center"></div>
    <div class="card">
    <h1 class="card-title"> Crear Cerveza </h1>
    <div class="card-body">
    <form class="row g-3 needs-validation" action="Ejemplo.php" method="post">
    <div class="col-md-3">
    <label  class="form-label">Nombre: </label>
    <input required type="text" class="form-control">
    </div>
    <div class="col-md-3">
    <label  class="form-label">Marca: </label>
    <input required type="text" class="form-control">
    </div>
    <div class="col-md-3">
    <label  class="form-label">Precio: </label>
    <input required type="number" class="form-control">
    </div>

    <div class ="form-group mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    </form>
    </div>  

</body>
</html>