<?php 

include_once 'database.php';

if(empty($_SESSION)) {
    session_start();
  }

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['email'])) {

    try {
 
    $stmt = $conn->prepare("SELECT * from tbl_staff_a163776_pt2 WHERE fld_staff_email = :email");

   
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
       
    $email = $_POST['email'];
    $pass = $_POST['pass'];
         
    $stmt->execute();

    $count = $stmt->rowCount();

    $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['sname'] = $readrow["fld_staff_name"];
 
    
    if ($count < 1) {
      echo "<script>alert('User does not exist');</script>";
    }
    else if($pass != $readrow["fld_staff_pass"]) {
      echo "<script>alert('Incorrect password. Note: Passwords are case-sensitive');</script>";
    }
    else if($count == 1) {
      echo "<script>alert('You have logged in as {$_SESSION['sname']}');document.location='main.php'</script>";
      if(!session_id()) 
        session_start();
      $_SESSION['role'] = $readrow["fld_staff_post"];
    }
    
  }
  catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
  }

 ?>