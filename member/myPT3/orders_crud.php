<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_order_a163776_pt2(fld_order_id, fld_staff_id,
      fld_cust_id, fld_order_date) VALUES(:oid, :sid, :cid, :orderdate)");
   
    $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
    $stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
    $stmt->bindParam(':cid', $cid, PDO::PARAM_STR);
    $stmt->bindParam(':orderdate', $orderdate, PDO::PARAM_STR);
       
    $oid = $_POST['oid'];
    $sid = $_POST['sid'];
    $cid = $_POST['cid'];
    $orderdate = $_POST['orderdate'];
     
    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Update
if (isset($_POST['update'])) {
   
  try {
 
    $stmt = $conn->prepare("UPDATE tbl_order_a163776_pt2 SET fld_order_id = :oid, fld_staff_id = :sid,
      fld_cust_id = :cid, fld_order_date = :orderdate WHERE fld_order_id = :oldoid");
   
    $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
    $stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
    $stmt->bindParam(':cid', $cid, PDO::PARAM_STR);
    $stmt->bindParam(':orderdate', $orderdate, PDO::PARAM_STR);
    $stmt->bindParam(':oldoid', $oldoid, PDO::PARAM_STR);
       
    $oid = $_POST['oid'];
    $sid = $_POST['sid'];
    $cid = $_POST['cid'];
    $orderdate = $_POST['orderdate'];
    $oldoid = $_POST['oldoid'];
     
    $stmt->execute();
 
    header("Location: orders.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_order_a163776_pt2 WHERE fld_order_id = :oid");
   
    $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
       
    $oid = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: orders.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
    try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_order_a163776_pt2 WHERE fld_order_id = :oid");
   
    $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
       
    $oid = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
?>