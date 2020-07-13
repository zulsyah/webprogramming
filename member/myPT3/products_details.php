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
    <link rel="icon" href="icon.png">
    <title>Heartnet's Bridal Boutique : Products Details</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bg2.css">
</head>
<body>
  <?php include_once 'nav_bar.php'; ?>

    <?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_products_a163776_pt2 WHERE fld_product_id = :pid");
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
            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 well well-sm text-center">
                <?php
                $imgname = $readrow["fld_product_image"];
                if (file_exists("products/$imgname")) { ?>
                    <img src= "products/<?php echo $imgname; ?>" class="img-responsive">
                <?php }
                else { ?>
                    <img src= "products/nophoto.jpg" class="img-responsive">
                    <?php } ?>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Product Details</strong></div>
                        <div class="panel-body">
                            Below are specifications of the product.
                        </div>
                        <table class="table">
                            <tr>
                                <td class="col-xs-4 col-sm-4 col-md-4"><strong>Product ID</strong></td>
                                <td><?php echo $readrow['fld_product_id'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td><?php echo $readrow['fld_product_name'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Price</strong></td>
                                <td>RM <?php echo $readrow['fld_price'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Designer</strong></td>
                                <td><?php echo $readrow['fld_designer'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Sleeve length</strong></td>
                                <td><?php echo $readrow['fld_sleeve_length'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Fabric</strong></td>
                                <td><?php echo $readrow['fld_fabric'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Silhouette</strong></td>
                                <td><?php echo $readrow['fld_silhouette'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
</body>
</html>