<!-- Error detector -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- Error detector -->


<?php
    require_once __DIR__. "/product.php";
    require_once __DIR__. "/food.php";
    require_once __DIR__. "/accessory.php";
    require_once __DIR__. "/toy.php";
    require_once __DIR__. "/user.php";

    // products

    $catFood = new food("Royal canin", "Umido per gatti gusto tonno e formaggio", 1.19, "85gr");
    $dogFood = new food("Natural Trainer", "Croccantini per cane gusto anatra e patate", 9.99, "750gr");
    $catToy = new toy("cinesata", "Gioco d'intelligenza con due gradi di difficoltà", 2.50, "Rosso");
    $dogAccessory = new accessory("Elastofit", "Gilet rinfrescante", 30 , "PVA");

    // Users

    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
      
  ?>
</body>
</html>