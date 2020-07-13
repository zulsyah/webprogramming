<?php
  include_once 'staffs_crud.php';
  include_once 'logged_in.php';
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Zul's Mighty Car Radio System : Staffs</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bg2.css">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">

var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('spass').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password match';
  } else {
    alert('Password not match, try again');
  }
}

</script>

</head>
<body>

  <?php include_once 'nav_bar.php'; ?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Staff</h2>
      </div>
    <form action="staffs.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="sid" class="col-sm-3 control-label">Staff ID :</label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <input name="sid" type="text" class="form-control" id="sid" placeholder="Staff ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_num']; ?>" required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <input name="sid" type="text" class="form-control" id="sid" placeholder="Staff ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_num']; ?>" required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <input name="sid" type="text" class="form-control" readonly>
        <?php } ?>

        </div>
        </div>
      <div class="form-group">
          <label for="fname" class="col-sm-3 control-label">First Name :</label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <input name="fname" type="text" class="form-control" id="fname" placeholder="Staff First Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_fname']; ?>" required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <input name="fname" type="text" class="form-control" id="fname" placeholder="Staff First Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_fname']; ?>" required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <input name="sid" type="text" class="form-control" readonly>
        <?php } ?>

        </div>
        </div>
      <div class="form-group">
          <label for="lname" class="col-sm-3 control-label">Last Name :</label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <input name="lname" type="text" class="form-control" id="lname" placeholder="Staff Last Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_lname']; ?>" required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <input name="lname" type="text" class="form-control" id="lname" placeholder="Staff Last Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_lname']; ?>" required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <input name="sid" type="text" class="form-control" readonly>
        <?php } ?>

        </div>
        </div>    
        <div class="form-group">
          <label for="gender" class="col-sm-3 control-label">Gender :</label>
          <div class="col-sm-9">

        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <div class="radio">
            <label>
      <input required name="gender" id="gender" type="radio" value="Male" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Male") echo "checked"; ?>> Male
                        </label>
          </div>
          <div class="radio">
            <label>
      <input required name="gender" id="gender" type="radio" value="Female" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Female") echo "checked"; ?>> Female
            </label>
            </div>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <div class="radio">
            <label>
      <input required name="gender" id="gender" type="radio" value="Male" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Male") echo "checked"; ?>> Male
                        </label>
          </div>
          <div class="radio">
            <label>
      <input required name="gender" id="gender" type="radio" value="Female" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Female") echo "checked"; ?>> Female
            </label>
            </div>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <div class="radio">
            <label>
      <input name="gender" id="gender" type="radio" readonly> Male
                        </label>
          </div>
          <div class="radio">
            <label>
      <input name="gender" id="gender" type="radio" readonly> Female
            </label>
            </div>
        <?php } ?>

          </div>
      </div>
        <div class="form-group">
          <label for="phone" class="col-sm-3 control-label">Phone Number :</label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <input name="phone" type="text" class="form-control" id="phone" placeholder="Staff Phone Number" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_phone']; ?>" required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <input name="phone" type="text" class="form-control" id="phone" placeholder="Staff Phone Number" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_phone']; ?>" required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <input name="sid" type="text" class="form-control" readonly>
        <?php } ?>

        </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email Address :</label>
          <div class="col-sm-9">
        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <input name="email" type="text" class="form-control" id="email" placeholder="Staff Email Address" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_email']; ?>" required>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <input name="email" type="text" class="form-control" id="email" placeholder="Staff Email Address" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_email']; ?>" required>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <input name="sid" type="text" class="form-control" readonly>
        <?php } ?>

        </div>
      </div>

        <?php if($_SESSION['role'] == "Supervisor"){ ?>
      <div class="form-group">
        <label for="spass" class="col-sm-3 control-label">Password :</label>
        <div class="col-sm-9">
          <input id="spass" name="spass" type="password" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_password']; ?>" placeholder="Staff Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="pass" class="col-sm-3 control-label">Confirm Password :</label>
        <div class="col-sm-9">
          <input id="pass" name="pass" type="password" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_password']; ?>" onchange='check();' placeholder="Confirm Password" required>
          <span id='message'></span>
        </div>
      </div>
      <div class="form-group">
          <label for="role" class="col-sm-3 control-label">Position :</label>
          <div class="col-sm-9">
            <select id="role" name="role" class="form-control" required>
              <option>Please select</option>
              <option value="Admin" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_role']=="Admin") echo "selected"; ?>>Admin</option>
              <option value="Supervisor" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_role']=="Supervisor") echo "selected"; ?>>Supervisor</option>
              <option value="Normal Staff" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_role']=="Normal Staff") echo "selected"; ?>>Normal Staff</option>
            </select>
          </div>
        </div>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
      <div class="form-group">
        <label for="spass" class="col-sm-3 control-label">Password :</label>
        <div class="col-sm-9">
          <input id="spass" name="spass" type="password" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_password']; ?>" placeholder="Staff Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="pass" class="col-sm-3 control-label">Confirm Password :</label>
        <div class="col-sm-9">
          <input id="pass" name="pass" type="password" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_password']; ?>" onchange='check();' placeholder="Confirm Password" required>
          <span id='message'></span>
        </div>
      </div>
      <div class="form-group">
          <label for="role" class="col-sm-3 control-label">Position :</label>
          <div class="col-sm-9">
            <select id="role" name="role" class="form-control" required>
              <option>Please select</option>
              <option value="Admin" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_role']=="Admin") echo "selected"; ?>>Admin</option>
              <option value="Supervisor" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_role']=="Supervisor") echo "selected"; ?>>Supervisor</option>
              <option value="Normal Staff" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_role']=="Normal Staff") echo "selected"; ?>>Normal Staff</option>
            </select>
          </div>
        </div>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>

        <?php } ?>

        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">

        <?php if($_SESSION['role'] == "Supervisor"){ ?>
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldsid" value="<?php echo $editrow['fld_staff_num']; ?>">
          <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" onclick=" confirm('You do not have right to add staff')" type="reset"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldsid" value="<?php echo $editrow['fld_staff_num']; ?>">
          <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <button class="btn btn-default" onclick=" confirm('You do not have right to add staff')" type="reset"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        <?php } ?>

       </div>
      </div>
    </form>
  </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Staffs List</h2>
      </div>
      <table class="table table-striped table-bordered">
      <tr>
        <th>Staff ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Email Address</th>
        <?php if($_SESSION['role'] == "Supervisor"){ ?>      
        <th>Position</th>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
        <th>Password</th>
        <th>Position</th>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
        <th>Position</th>
        <?php } ?>
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
          $stmt = $conn->prepare("SELECT * FROM tbl_staffs_a166007_pt2 LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['fld_staff_num']; ?></td>
        <td><?php echo $readrow['fld_staff_fname']; ?></td>
        <td><?php echo $readrow['fld_staff_lname']; ?></td>
        <td><?php echo $readrow['fld_staff_gender']; ?></td>
        <td><?php echo $readrow['fld_staff_phone']; ?></td>
        <td><?php echo $readrow['fld_staff_email']; ?></td>
        <?php if($_SESSION['role'] == "Supervisor"){ ?>      
        <td><?php echo $readrow['fld_staff_role']; ?></td>
        <?php } if($_SESSION['role'] == "Admin"){ ?>
        <td><?php echo $readrow['fld_staff_password']; ?></td>
        <td><?php echo $readrow['fld_staff_role']; ?></td>
        <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
        <td><?php echo $readrow['fld_staff_role']; ?></td>
        <?php } ?>
        <td>
          <?php if($_SESSION['role'] == "Supervisor"){ ?>      
          <a href="staffs.php?edit=<?php echo $readrow['fld_staff_num']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
          <a onclick=" confirm('You do not have right to delete staff named <?php echo $readrow['fld_staff_fname']; ?>! This is illigal');"class="btn btn-danger btn-xs" role="button">Delete</a>
          <?php } if($_SESSION['role'] == "Admin"){ ?>
          <a href="staffs.php?edit=<?php echo $readrow['fld_staff_num']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
          <a href="staffs.php?delete=<?php echo $readrow['fld_staff_num']; ?>" onclick="return confirm('Are you sure to delete?');"class="btn btn-danger btn-xs" role="button">Delete</a>
          <?php } if($_SESSION['role'] == "Normal Staff"){ ?>
          <a onclick=" confirm('You do not have right to edit staff named <?php echo $readrow['fld_staff_fname']; ?>! This is illigal');"class="btn btn-danger btn-xs" role="button">Edit</a>
          <a onclick=" confirm('You do not have right to delete staff named <?php echo $readrow['fld_staff_fname']; ?>! This is illigal');"class="btn btn-danger btn-xs" role="button">Delete</a>
          <?php } ?>

        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>
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
            $stmt = $conn->prepare("SELECT * FROM tbl_staffs_a166007_pt2");
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
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>