<?php
 
include_once 'database.php';
include_once 'logged_in.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['addproduct'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_items_a163776_pt2(fld_items_id, fld_order_id, fld_product_id, fld_items_qtt) VALUES(:did, :oid, :pid, :qtt)");
   
    $stmt->bindParam(':did', $did, PDO::PARAM_STR);
    $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
    $stmt->bindParam(':qtt', $qtt, PDO::PARAM_INT);
       
    $did = uniqid('DI', true);
    $oid = $_POST['oid'];
    $pid = $_POST['pid'];
    $qtt= $_POST['qtt'];
     
    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
  $_GET['oid'] = $oid;
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_items_a163776_pt2 where fld_items_id = :did");
   
    $stmt->bindParam(':did', $did, PDO::PARAM_STR);
       
    $did = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: orders_details.php?oid=".$_GET['oid']);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
?>