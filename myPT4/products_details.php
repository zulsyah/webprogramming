<?php
  include_once 'database.php';
  include_once 'logged_in.php';
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Zul's Mighty Car Radio System : Products Details</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
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
 
<div class="container-fluid">
  <div class="row">
    <div class="panel panel-default" align="center">
     <?php if ($readrow['fld_product_num'] == "" ) {
        echo "No image";
      }
      else { ?>
      <img src="pictures/<?php echo $readrow['fld_product_num'] ?>.jpg" width="75%" height="75%" class="img-responsive">
      <?php } ?>
    </div></div>
    <div class="row">

      <div class="panel panel-default">
      <div class="panel-heading"><strong>Product Details</strong></div>
      <div class="panel-body">
          Below are specifications of the product.
      </div>
      <table class="table">
        <tr>
          <td class="col-xs-4 col-sm-4 col-md-4"><strong>Product ID:</strong></td>
          <td><?php echo $readrow['fld_product_num'] ?></td>
        </tr>
        <tr>
          <td><strong>Name:</strong></td>
          <td><?php echo $readrow['fld_product_name'] ?></td>
        </tr>
        <tr>
          <td><strong>Price:</strong></td>
          <td>RM <?php echo $readrow['fld_product_price'] ?></td>
        </tr>
        <tr>
          <td><strong>Size:</strong></td>
          <td><?php echo $readrow['fld_product_size'] ?></td>
        </tr>
        <tr>
          <td><strong>Type:</strong></td>
          <td><?php echo $readrow['fld_product_type'] ?></td>
        </tr>
        <tr>
          <td><strong>Brand:</strong></td>
          <td><?php echo $readrow['fld_product_brand'] ?></td>
        </tr>
        <tr>
          <td><strong>Description:</strong></td>
          <td><?php echo $readrow['fld_product_description'] ?></td>
        </tr>
      </table>
      </div>
    
  </div>
</div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>