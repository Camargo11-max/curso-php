<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Cervezas</title>
</head>
<body>
    
<ul> <?php foreach ($cervezas as $cerveza): ?>  
    <li> <?php echo $cerveza->getNombre(); ?> </li>  
    <?php endforeach ; ?>

</ul>
</body>
</html> 