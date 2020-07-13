<?php
  include_once 'products_crud.php';
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>My Bike Ordering System : Products</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="products.php" method="post">
      Product ID
      <input name="pid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"> <br>
      Name
      <input name="name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"> <br>
      Price
      <input name="price" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>"> <br>
      Brand
      <select name="brand">
        <option value="Kawasaki" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Kawasaki") echo "selected"; ?>>Kawasaki</option>
        <option value="Honda" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Honda") echo "selected"; ?>>Honda</option>
        <option value="Suzuki" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Suzuki") echo "selected"; ?>>Suzuki</option>
      </select> <br>
      Condition
      <input name="cond" type="radio" value="New" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="New") echo "checked"; ?>> New
      <input name="cond" type="radio" value="Used" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Used") echo "checked"; ?>> Used <br>
      Manufacturing Year
      <select name="year">
        <option value="2013" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2013") echo "selected"; ?>>2013</option>
        <option value="2014" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2014") echo "selected"; ?>>2014</option>
        <option value="2015" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2015") echo "selected"; ?>>2015</option>
      </select> <br>
      Quantity
      <input name="quantity" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_quantity']; ?>"> <br>
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Product ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Brand</td>
        <td></td>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_products_a166007");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td><?php echo $readrow['fld_product_num']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td>
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>">Details</a>
          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>">Edit</a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
 
    </table>
  </center>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>