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
    $royal_canin = new food("Royal canin", "umido per gatti", 1);
    var_dump($royal_canin)
    // echo $royal_canin->getInfo();
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