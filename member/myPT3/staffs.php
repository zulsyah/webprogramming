<?php
  include_once 'staffs_crud.php';

  include_once 'logged_in.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Heartnet's Bridal Boutique : Staffs</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bg2.css">
  <script src="jquery-3.4.1.min.js"></script>
  <script type="text/javascript">

    var nomat = true;

    $(document).ready(function() {
      $(function() {
        $("#scpass").on({
          blur: function(){
            var cpass = document.getElementById("scpass");
            var pass = document.getElementById("spass");
            if(cpass.value != pass.value) {
              alert("Password does not match");
              nomat = false;
            }
          }, 
        });
      });
    });

    function chkmat() {
      if(nomat) {
        return false;
      }
      else {
        return true;
      }
    }
</script>
</head>
<body>
  <?php include_once 'nav_bar.php'; ?>
  <div class="container-fluid">
    <?php if($_SESSION['role'] == "Supervisor") {?>
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Add New Staff</h2>
      </div>
    <form action="staffs.php" method="post" class="form-horizontal">
      <div class="form-group">
        <label for="staffid" class="col-sm-3 control-label">Staff ID</label>
        <div class="col-sm-9">
          <input id="staffid" name="sid" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_id']; ?>" placeholder="SF##" pattern="SF\d{2}" required>
        </div>
      </div>
      <div class="form-group">
        <label for="staffname" class="col-sm-3 control-label">Staff Name</label>
        <div class="col-sm-9">
          <input id="staffname" name="sname" class="form-control" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_name']; ?>" placeholder="[First name] [Last name]" pattern=".{2,} .{2,}" required>
        </div>
      </div>    
      <div class="form-group">
        <label for="sgender" class="col-sm-3 control-label">Gender</label>
        <div class="col-sm-9">
          <div class="radio">
            <label>
              <input id="sgender" name="gender" type="radio" value="Male" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Male") echo "checked"; ?> checked> Male
            </label>
          </div>
          <div class="radio">
            <label>
              <input id="sgender" name="gender" type="radio" value="Female" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Female") echo "checked"; ?>> Female
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="staffnum" class="col-sm-3 control-label">Phone Number</label>
        <div class="col-sm-9">
          <input id="staffnum" name="phone" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_phoneno']; ?>" placeholder="01#-### ####" pattern="01\d{1}-\d{3} \d{4}" required>
        </div>
      </div>
      <div class="form-group">
        <label for="semail" class="col-sm-3 control-label">E-mail</label>
        <div class="col-sm-9">
          <input id="semail" name="email" type="email" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_email']; ?>" placeholder="Staff E-mail" required>
        </div>
      </div>
      <div class="form-group">
        <label for="spass" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-9">
          <input id="spass" name="pass" type="password" class="form-control" placeholder="Staff Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="scpass" class="col-sm-3 control-label">Confirm Password</label>
        <div class="col-sm-9">
          <input id="scpass" name="cpass" type="password" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_pass']; ?>" placeholder="Confirm Password" required>
        </div>
      </div>
      <div class="form-group">
          <label for="spost" class="col-sm-3 control-label">Position</label>
          <div class="col-sm-9">
            <select id="spost" name="post" class="form-control" required>
              <option value="Supervisor" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_post']=="Supervisor") echo "selected"; ?>>Supervisor</option>
              <option value="Normal Staff" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_post']=="Normal Staff") echo "selected"; ?>>Normal Staff</option>
            </select>
          </div>
        </div>    
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
            <input type="hidden" name="oldsid" value="<?php echo $editrow['fld_staff_id']; ?>">
            <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
            <button class="btn btn-default" type="submit" name="create" onsubmit="return chkmat()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
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
        <h2>Staff List</h2>
      </div>
      <table class="table table-striped table-bordered">
        <tr>
          <th>Staff ID</th>
          <th>Staff Name</th>
          <th>Gender</th>
          <th>Phone Number</th>
          <th>Email Address</th>
          <?php if($_SESSION['role'] == "Supervisor") {?> <th>Password</th> <?php } ?>
          <th>Position</th>
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
          $stmt = $conn->prepare("SELECT * FROM tbl_staff_a163776_pt2");
          $stmt->execute();
          $result = $stmt->fetchAll();
        }
        catch(PDOException $e){
          echo "Error: " . $e->getMessage();
        }
        foreach($result as $readrow) {
          ?>
          <tr>
            <td><?php echo $readrow['fld_staff_id']; ?></td>
            <td><?php echo $readrow['fld_staff_name']; ?></td>
            <td><?php echo $readrow['fld_staff_gender']; ?></td>
            <td><?php echo $readrow['fld_staff_phoneno']; ?></td>
            <td><?php echo $readrow['fld_staff_email']; ?></td>
            <?php if($_SESSION['role'] == "Supervisor") {?> <td><?php echo $readrow['fld_staff_pass']; ?></td> <?php } ?>
            <td><?php echo $readrow['fld_staff_post']; ?></td>
            <?php if($_SESSION['role'] == "Supervisor") {?>
            <td>
              <a href="staffs.php?edit=<?php echo $readrow['fld_staff_id']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
              <a href="staffs.php?delete=<?php echo $readrow['fld_staff_id']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
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
            $stmt = $conn->prepare("SELECT * FROM tbl_staff_a163776_pt2");
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
            <li><a href="staffs.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"staffs.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"staffs.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="staffs.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>