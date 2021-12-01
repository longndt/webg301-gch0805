<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laptop Detail</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <h4 class="text text-primary">Laptop Name: <?= $laptop->name ?></h4>
   <h4 class="text text-primary">Laptop Brand: <?= $laptop->brand ?></h4>
   <h4 class="text text-primary">Laptop Price: <?= $laptop->price ?> $</h4>
   <h4 class="text text-primary">Laptop Color: <?= $laptop->color ?></h4>
   <h4 class="text text-primary">Laptop Year: <?= $laptop->year ?></h4>
</body>
</html>