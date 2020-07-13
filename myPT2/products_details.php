<?php
  include_once 'database.php';
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Zul's Mighty Car Radio System : Products Details</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_products_a166007_pt2 WHERE fld_product_num = :pid");
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $pid = $_GET['pid'];
      $stmt->execute();
      $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
      }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
    Product ID: <?php echo $readrow['fld_product_num'] ?> <br>
    Name: <?php echo $readrow['fld_product_name'] ?> <br>
    Price: RM <?php echo $readrow['fld_product_price'] ?> <br>
    Size: <?php echo $readrow['fld_product_size'] ?> <br>
    Type: <?php echo $readrow['fld_product_type'] ?> <br>
    Brand: <?php echo $readrow['fld_product_brand'] ?> <br>
    Description: <?php echo $readrow['fld_product_description'] ?> <br> <hr>
    Product image: <br><br>
    <img src="pictures/<?php echo $readrow['fld_product_num'] ?>.jpg" width="50%" height="50%">
  </center>
</body>
</html>