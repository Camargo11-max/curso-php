<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="d-flex justify-content-center mt-4">
<div class="container-center"> 
<div class="card-body border border-info rounded">
<form class="row col-md-8" method="POST" action="login_captura.php">
    <h2> Login  </h2>
  <div class="form-group ">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group ">
    <label for="Password" class="form-label"  >Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group mt-4">
  <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form> 
</div>
</div>
</div>
    
</body>
</html>