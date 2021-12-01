<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laptop List</title>
      <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <table border="1" class="table table-light">
      <thead>
         <tr>
            <th>Laptop Number</th>
            <th>Laptop Name</th>
            <th>Laptop Price</th>
         </tr>
      </thead>
      <tbody>
         <?php 
            $i=1;
            foreach ($laptops as $laptop) { 
         ?>
         <tr>
            <td><?= $i ?></td>
            <td><a href="index.php?name=<?= $laptop->name ?>">
                  <?= $laptop->name ?>
               </a>              
            </td>
            <td><?= $laptop->price ?> $</td>
         </tr>
         <?php 
         $i++; } 
         ?>
      </tbody>
   </table>
</body>
</html>