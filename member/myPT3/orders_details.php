<?php
  include_once 'orders_details_crud.php';

  include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="icon.png">
  <title>Heartnet's Bridal Boutique : Order Details</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" type="text/css" href="bg2.css">
  
</head>
<body>
  <?php include_once 'nav_bar.php'; ?>
    <?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_order_a163776_pt2, tbl_staff_a163776_pt2,
          tbl_customer_a163776_pt2 WHERE
          tbl_order_a163776_pt2.fld_staff_id = tbl_staff_a163776_pt2.fld_staff_id AND
          tbl_order_a163776_pt2.fld_cust_id = tbl_customer_a163776_pt2.fld_cust_id AND
          fld_order_id = :oid");
      $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
        $oid = $_GET['oid'];
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
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Order Details</strong></div>
        <div class="panel-body">
            Below are details of the order.
        </div>
        <table class="table">
          <tr>
            <td class="col-xs-4 col-sm-4 col-md-4"><strong>Order ID</strong></td>
            <td><?php echo $readrow['fld_order_id'] ?></td>
          </tr>
          <tr>
            <td><strong>Order Date</strong></td>
            <td><?php echo $readrow['fld_order_date'] ?></td>
          </tr>
          <tr>
            <td><strong>Staff</strong></td>
            <td><?php echo $readrow['fld_staff_name']?></td>
          </tr>
          <tr>
            <td><strong>Customer</strong></td>
            <td><?php echo $readrow['fld_cust_name']?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Add a Product</h2>
      </div>
    <form action="orders_details.php" method="post" class="form-horizontal" name="frmorder" id="forder"
    onsubmit= "return validateForm()">
      <div class="form-group">
        <label for="prd" class="col-sm-3 control-label">Product</label>
        <div class="col-sm-9">
          <select name="pid" class="form-control" id="prd">
            <option value="">Please select</option>
            <?php
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT * FROM tbl_products_a163776_pt2");
              $stmt->execute();
              $result = $stmt->fetchAll();
            }
            catch(PDOException $e){
              echo "Error: " . $e->getMessage();
            }
            foreach($result as $productrow) {
              ?>
              <option value="<?php echo $productrow['fld_product_id']; ?>"><?php echo $productrow['fld_designer']."'s : ".$productrow['fld_product_name']; ?></option>
              <?php
            }
            $conn = null;
            ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="qty" class="col-sm-3 control-label">&emsp;&emsp;&emsp;Quantity</label>
          <div class="col-sm-9">
            <input type="number" id="qty" name="qtt" class="form-control" min="1" max="100" step="1" value="1">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <input name="oid" type="hidden" value="<?php echo $readrow['fld_order_id'] ?>">
            <button class="btn btn-default" type="submit" name="addproduct"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Product</button>
            <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
          </div>
        </form>
      </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Products in This Order</h2>
      </div>
      <table class="table table-striped table-bordered">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th></th>
      </tr>
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_items_a163776_pt2,
            tbl_products_a163776_pt2 WHERE
            tbl_items_a163776_pt2.fld_product_id = tbl_products_a163776_pt2.fld_product_id AND
          fld_order_id = :oid");
          $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
          $oid = $_GET['oid'];
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $detailrow) {
      ?>
      <tr>
        <td><?php echo $detailrow['fld_product_name']; ?></td>
        <td><?php echo $detailrow['fld_items_qtt']; ?></td>
        <td>
          <a href="orders_details.php?delete=<?php echo $detailrow['fld_items_id']; ?>&oid=<?php echo $_GET['oid']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>
    <hr>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <a href="invoice.php?oid=<?php echo $_GET['oid']; ?>" target="_blank" role="button" class="btn btn-primary btn-lg btn-block">Generate Invoice</a>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function validateForm() {
      var x = document.forms["frmorder"]["prd"].value;
      var y = document.forms["frmorder"]["qtt"].value;
      //var x = document.getElementById("pid").value;
      //var y = document.getElementById("qty").value;
      if (x == null || x == "") {
        alert("Product must be selected");
        document.forms["frmorder"]["prd"].focus();
        //document.getElementById("prd").focus();
        return false;
      }
      if (y == null || y == "") {
        alert("Quantity must be filled out");
        document.forms["frmorder"]["qtt"].focus();
        //document.getElementById("qty").focus();
        return false;
      }
      return true;
    }
  </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>