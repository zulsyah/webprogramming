<?php
  include_once 'orders_crud.php';

  include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="icon.png">
  <title>Heartnet's Bridal Boutique : Orders</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bg2.css">

  <style>
    #odate {
      display: block;
      width: 100%;
      height: 34px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555555;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    }
  </style>
</head>
<body>
  <?php include_once 'nav_bar.php'; ?>
  <div class="container-fluid">
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Add New Order</h2>
      </div>
    <form action="orders.php" method="post" class="form-horizontal">
      <div class="form-group">
        <label for="orderid" class="col-sm-3 control-label">Order ID</label>
        <div class="col-sm-9">
          <input id="orderid" name="oid" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_order_id'];?>" placeholder="OD##" pattern="OD\d{2}" required>
        </div>
      </div>
      <div class="form-group">
        <label for="odate" class="col-sm-3 control-label">Order Date</label>
        <div class="col-sm-9">
          <input id="odate" name="orderdate" type="date" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_order_date']; else echo date('Y-m-d'); ?>" required>
        </div>
      </div>    
      <div class="form-group">
        <label for="ostaff" class="col-sm-3 control-label">Staff</label>
          <div class="col-sm-9">
            <select id="ostaff" name="sid" class="form-control">
              <?php
              try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM tbl_staff_a163776_pt2");
                $stmt->execute();
                $result = $stmt->fetchAll();
              }
              catch(PDOException $e){
                echo "Error: " . $e->getMessage();
              }
              foreach($result as $staffrow) { ?>
                <?php if((isset($_GET['edit'])) && ($editrow['fld_staff_id']==$staffrow['fld_staff_id'])) { ?>
                  <option value="<?php echo $staffrow['fld_staff_id']; ?>" selected><?php echo $staffrow['fld_staff_name'];?></option>
                <?php } else { ?>
                  <option value="<?php echo $staffrow['fld_staff_id']; ?>"><?php echo $staffrow['fld_staff_name'];?></option>
                <?php } ?>
                <?php
                } // while
                $conn = null;
                ?>
              </select>
            </div>
          </div>    
          <div class="form-group">
            <label for="ocust" class="col-sm-3 control-label">Customer</label>
            <div class="col-sm-9">
              <select id="ocust" name="cid" class="form-control">
              <?php
              try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM tbl_customer_a163776_pt2");
                $stmt->execute();
                $result = $stmt->fetchAll();
              }
              catch(PDOException $e){
                echo "Error: " . $e->getMessage();
              }
              foreach($result as $custrow) {
                ?>
                <?php if((isset($_GET['edit'])) && ($editrow['fld_cust_id']==$custrow['fld_cust_id'])) { ?>
                  <option value="<?php echo $custrow['fld_cust_id']; ?>" selected><?php echo $custrow['fld_cust_name']; ?></option>
                <?php } else { ?>
                  <option value="<?php echo $custrow['fld_cust_id']; ?>"><?php echo $custrow['fld_cust_name'];?></option>
                <?php } ?>
                <?php
                }
                $conn = null;
                ?>  
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <?php if (isset($_GET['edit'])) { ?>
                <input type="hidden" name="oldoid" value="<?php echo $editrow['fld_order_id']; ?>">
                <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
              <?php } else { ?>
                <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
              <?php } ?>
              <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="page-header">
          <h2>Order List</h2>
        </div>
        <table class="table table-striped table-bordered">
          <tr> 
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Staff ID</th>
            <th>Customer ID</th>
            <th></th>
          </tr>
          <?php
          // Read
          $per_page = 5;
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;
          $start_from = ($page-1) * $per_page;
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM tbl_order_a163776_pt2, tbl_staff_a163776_pt2, tbl_customer_a163776_pt2 WHERE ";
            $sql = $sql."tbl_order_a163776_pt2.fld_staff_id = tbl_staff_a163776_pt2.fld_staff_id and ";
            $sql = $sql."tbl_order_a163776_pt2.fld_cust_id = tbl_customer_a163776_pt2.fld_cust_id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          foreach($result as $orderrow) {
          ?>
          <tr>
            <td><?php echo $orderrow['fld_order_id']; ?></td>
            <td><?php echo date("d M Y", strtotime($orderrow['fld_order_date'])); ?></td>
            <td><?php echo $orderrow['fld_staff_name']; ?></td>
            <td><?php echo $orderrow['fld_cust_name']; ?></td>
            <td>
                <a href="orders_details.php?oid=<?php echo $orderrow['fld_order_id']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
                <a href="orders.php?edit=<?php echo $orderrow['fld_order_id']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
                <a href="orders.php?delete=<?php echo $orderrow['fld_order_id']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
              </td>
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
            $stmt = $conn->prepare("SELECT * FROM tbl_order_a163776_pt2");
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
            <li><a href="orders.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"orders.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"orders.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="orders.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
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