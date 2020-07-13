<?php
  include_once 'products_crud.php';

  include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Heartnet's Bridal Boutique : Products</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bg2.css">
</head>
<body>
  <?php include_once 'nav_bar.php'; ?>
  <div class="container-fluid">
    <?php if($_SESSION['role'] == "Supervisor") {?>
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Product</h2>
      </div>
    <form action="products.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Product ID</label>
          <div class="col-sm-9">
            <input id="productid" name="pid" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_id']; ?>" placeholder="WD##" pattern="WD\d{2}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
            <input id="productname" name="pname" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>" placeholder="Style [name]" pattern="Style .{1,}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pprice" class="col-sm-3 control-label">Price(RM)</label>
          <div class="col-sm-9">
            <input id="pprice" name="price" type="number" min="0.00" step="0.01" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_price']; ?>" placeholder = "Price" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pdesigner" class="col-sm-3 control-label">Designer</label>
          <div class="col-sm-9">
            <input id="pdesigner" name="designer" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_designer']; ?>" placeholder="Designer" required>
          </div>
        </div>    
        <div class="form-group">
          <label for="psleevelength" class="col-sm-3 control-label">Sleeve length</label>
          <div class="col-sm-9">
            <select id="psleevelength" name="sleevelength" class="form-control" required>
              <option value="Sleeveless" <?php if(isset($_GET['edit'])) if($editrow['fld_sleeve_length']=="Sleeveless") echo "selected"; ?>>Sleeveless</option>
              <option value="Cap sleeve" <?php if(isset($_GET['edit'])) if($editrow['fld_sleeve_length']=="Cap sleeve") echo "selected"; ?>>Cap sleeve</option>
              <option value="Long sleeeve" <?php if(isset($_GET['edit'])) if($editrow['fld_sleeve_length']=="Long sleeve") echo "selected"; ?>>Long sleeeve</option>
              <option value="3/4 sleeve" <?php if(isset($_GET['edit'])) if($editrow['fld_sleeve_length']=="3/4 sleeve") echo "selected"; ?>>3/4 sleeve</option>
              <option value="Short sleeve" <?php if(isset($_GET['edit'])) if($editrow['fld_sleeve_length']=="Short sleeve") echo "selected"; ?>>Short sleeve</option>
            </select>
          </div>
        </div>    
        <div class="form-group">
          <label for="pfabric" class="col-sm-3 control-label">Fabric</label>
          <div class="col-sm-9">
          <div class="radio">
            <label>
              <input id="pfabric" name="fabric" type="radio" value="Lace" <?php if(isset($_GET['edit'])) if($editrow['fld_fabric']=="Lace") echo "checked"; ?> checked> Lace
            </label>
          </div>
          <div class="radio">
            <label>
              <input id="pfabric" name="fabric" type="radio" value="Organza" <?php if(isset($_GET['edit'])) if($editrow['fld_fabric']=="Organza") echo "checked"; ?>> Organza
            </label>
          </div>
          <div class="radio">
            <label>
              <input id="pfabric" name="fabric" type="radio" value="Satin" <?php if(isset($_GET['edit'])) if($editrow['fld_fabric']=="Satin") echo "checked"; ?>> Satin
            </label>
          </div>
          <div class="radio">
            <label>
              <input id="pfabric" name="fabric" type="radio" value="Tulle" <?php if(isset($_GET['edit'])) if($editrow['fld_fabric']=="Tulle") echo "checked"; ?>> Tulle
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="silhouette" class="col-sm-3 control-label">Silhouette</label>
        <div class="col-sm-9">
          <select id="silhouette" name="silhouette" class="form-control" required>
            <option value="Ballgown" <?php if(isset($_GET['edit'])) if($editrow['fld_silhouette']=="Ballgown") echo "selected"; ?>>Ballgown</option>
            <option value="Fit-and-flare" <?php if(isset($_GET['edit'])) if($editrow['fld_silhouette']=="Fit-and-flare") echo "selected"; ?>>Fit-and-flare</option>
            <option value="A-line" <?php if(isset($_GET['edit'])) if($editrow['fld_silhouette']=="A-line") echo "selected"; ?>>A-line</option>
            <option value="Sheath" <?php if(isset($_GET['edit'])) if($editrow['fld_silhouette']=="Sheath") echo "selected"; ?>>Sheath</option>
            <option value="Trumpet" <?php if(isset($_GET['edit'])) if($editrow['fld_silhouette']=="Trumpet") echo "selected"; ?>>Trumpet</option>
            <option value="Mermaid" <?php if(isset($_GET['edit'])) if($editrow['fld_silhouette']=="Mermaid") echo "selected"; ?>>Mermaid</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
            <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_id']; ?>">
            <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
            <input type="hidden" name="imgname" value="<?php echo $_POST['pid']; ?>.jpg">
          <?php } else { ?>
            <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php } ?>
<div class="row">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <div class="page-header">
      <h2>Product List</h2>
    </div>
    <table class="table table-striped table-bordered">
      <tr> 
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Designer</th>
        <th></th>
        <?php
        // Read
          $per_page = 10;
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;
          $start_from = ($page-1) * $per_page;
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a163776_pt2 LIMIT $start_from, $per_page");
            $stmt->execute();
            $result = $stmt->fetchAll();
          }
          catch(PDOException $e){
            echo "Error: " . $e->getMessage();
          }
          foreach($result as $readrow) {
            ?>   
            <tr>
              <td><?php echo $readrow['fld_product_id']; ?></td>
              <td><?php echo $readrow['fld_product_name']; ?></td>
              <td><?php echo $readrow['fld_price']; ?></td>
              <td><?php echo $readrow['fld_designer']; ?></td>
              <?php if($_SESSION['role'] == "Supervisor") {?>
              <td>
                <a href="products_details.php?pid=<?php echo $readrow['fld_product_id']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
                <a href="products.php?edit=<?php echo $readrow['fld_product_id']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
                <a href="products.php?delete=<?php echo $readrow['fld_product_id']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
              </td>
            <?php } ?>
            </tr>
            <?php
          }
          $conn = null;
          ?>
        </table>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
        <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a163776_pt2");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
 
</body>
</html>