<?php 

include_once 'database.php';

if(empty($_SESSION)) {
    session_start();
  }

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['email'])) {

    try {
 
    $stmt = $conn->prepare("SELECT * from tbl_staffs_a165731_pt2 WHERE fld_staff_email = :email");

   
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
       
    $email = $_POST['email'];
    $pass = $_POST['pass'];
         
    $stmt->execute();

    $count = $stmt->rowCount();

    $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['name'] = $readrow["fld_staff_fname"];
 
    
    if ($count < 1) {
      echo "<script>alert('User does not exist');</script>";
    }
    else if($pass != $readrow["fld_staff_password"]) {
      echo "<script>alert('Incorrect password. Note: Passwords are case-sensitive');</script>";
    }
    else if($count == 1) {
      $_SESSION['role'] = $readrow["fld_staff_role"];
      echo "<script>alert('You have logged in as {$_SESSION['name']} and your position is {$_SESSION['role']}');document.location='main.php'</script>";
      if(!session_id()) 
        session_start();
    }
    
  }
  catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
  }

 ?>