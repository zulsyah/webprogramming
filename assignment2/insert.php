<?php
 
if (isset($_POST['add_form'])) {
 
  include "db.php";
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      // Prepare the SQL statement
      $stmt = $conn->prepare("INSERT INTO myguestbook2(user, email, postdate, posttime, findme, frontpage, form, ui, comment) VALUES (:user, :email, :pdate, :ptime, :findme, :frontpage, :form, :ui, :comment)");
     
      // Bind the parameters
      $stmt->bindParam(':user', $name, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':pdate', $postdate, PDO::PARAM_STR);
      $stmt->bindParam(':ptime', $posttime, PDO::PARAM_STR);
      $stmt->bindParam(':findme', $findme, PDO::PARAM_STR);
      $stmt->bindParam(':frontpage', $frontpage, PDO::PARAM_STR);
      $stmt->bindParam(':form', $form, PDO::PARAM_STR);
      $stmt->bindParam(':ui', $ui, PDO::PARAM_STR);
       $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
     
       
      // Give value to the variables

       $name = $_POST['name'];
       $email = $_POST['email'];
       $postdate = date("Y-m-d",time());
       $posttime = date("H:i:s",time());
       $findme = $_POST['findme'];
       $frontpage = $_POST['frontpage'];
       $form = $_POST['form'];
       $ui = $_POST['ui'];
       $comment = $_POST['comment'];
      
     
     
    $stmt->execute();
 
      echo "New records created successfully";
      }
 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    $conn = null;
  }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}
 
 ?>