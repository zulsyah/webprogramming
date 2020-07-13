<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
      $stmt = $conn->prepare("INSERT INTO tbl_products_a163776_pt2(fld_product_id,
        fld_product_name, fld_price, fld_designer, fld_sleeve_length,
        fld_fabric, fld_silhouette, fld_product_image) VALUES(:pid, :pname, :price, :designer,
        :sleevelength, :fabric, :silhouette, :imgname)");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $stmt->bindParam(':pname', $pname, PDO::PARAM_STR);
      $stmt->bindParam(':price', $price, PDO::PARAM_INT);
      $stmt->bindParam(':designer', $designer, PDO::PARAM_STR);
      $stmt->bindParam(':sleevelength', $sleevelength, PDO::PARAM_STR);
      $stmt->bindParam(':fabric', $fabric, PDO::PARAM_STR);
      $stmt->bindParam(':silhouette', $silhouette, PDO::PARAM_STR);
      $stmt->bindParam(':imgname', $imgname, PDO::PARAM_STR);
       
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $designer =  $_POST['designer'];
    $sleevelength = $_POST['sleevelength'];
    $fabric = $_POST['fabric'];
    $silhouette = $_POST['silhouette'];
    $imgname = $_POST['pid'].".jpg";
     
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
 
      $stmt = $conn->prepare("UPDATE tbl_products_a163776_pt2 SET fld_product_id = :pid,
        fld_product_name = :pname, fld_price = :price, fld_designer = :designer,
        fld_sleeve_length = :sleevelength, fld_fabric = :fabric, fld_silhouette = :silhouette, fld_product_image = :imgname
        WHERE fld_product_id = :oldpid");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $stmt->bindParam(':pname', $pname, PDO::PARAM_STR);
      $stmt->bindParam(':price', $price, PDO::PARAM_INT);
      $stmt->bindParam(':designer', $designer, PDO::PARAM_STR);
      $stmt->bindParam(':sleevelength', $sleevelength, PDO::PARAM_STR);
      $stmt->bindParam(':fabric', $fabric, PDO::PARAM_STR);
      $stmt->bindParam(':silhouette', $silhouette, PDO::PARAM_STR);
      $stmt->bindParam(':imgname', $imgname, PDO::PARAM_STR);
      $stmt->bindParam(':oldpid', $oldpid, PDO::PARAM_STR);
       
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $designer =  $_POST['designer'];
    $sleevelength = $_POST['sleevelength'];
    $fabric = $_POST['fabric'];
    $silhouette = $_POST['silhouette'];
    $imgname = $_POST['pid'].".jpg";
    $oldpid = $_POST['oldpid'];
     
    $stmt->execute();
 
    header("Location: products.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
      $stmt = $conn->prepare("DELETE FROM tbl_products_a163776_pt2 WHERE fld_product_id = :pid");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
       
    $pid = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: products.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
 
  try {
 
      $stmt = $conn->prepare("SELECT * FROM tbl_products_a163776_pt2 WHERE fld_product_id = :pid");
     
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
       
    $pid = $_GET['edit'];
     
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