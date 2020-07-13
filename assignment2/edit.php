<?php

$findmearray = array
  (
  array("name"=>"From a friend","abb"=>"friend"),
  array("name"=>"I googled you","abb"=>"google"),
  array("name"=>"Just surf on it","abb"=>"surf"),
  array("name"=>"From your Facebook","abb"=>"facebook"),
  array("name"=>"I clicked on ads","abb"=>"ads")
  );

$keyword = array
  (
  array("type"=>"checkbox", "name"=>"frontpage", "id"=>"f1", "value"=>"Yes"),
  array("type"=>"hidden", "name"=>"frontpage", "id"=>"f2", "value"=>"No")
  );
 
if (isset($_GET['id'])) {
 
  include "db.php";
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $conn->prepare("SELECT * FROM myguestbook2 WHERE id = :record_id");
      $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);
      $id = $_GET['id'];
 
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
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

 <!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
 
<body>
 
<form method="post" action="update.php">
  Nama :
  <input type="text" name="name" size="40" required value="<?php echo $result["user"]; ?>">
  <br>
  Email :
  <input type="text" name="email" size="25" required value="<?php echo $result["email"]; ?>">
  <br>

  How do you find me? 
  <select name="findme" required>
        <?php
          foreach ($findmearray as $u) {
            if ($u['abb'] == $result['findme'])
              echo "<option value=".$u['abb']." selected>".$u['name']."</option>";
            else 
              echo "<option value=".$u['abb'].">".$u['name']."</option>";
          }
          ?>
  
  </select>
  <br>
  I like your :
  <br>

  <?php 
     if ($result['frontpage'] == "Yes"){
      echo '<input type="hidden" name="frontpage" value="No">';
      echo '<input type="checkbox" name="frontpage" value="'.$result['frontpage'].'"checked="Yes">Front Page'."<br>";
     }
     else if ($result['frontpage'] != "Yes"){
      echo '<input type="hidden" name="frontpage" value="No">';
      echo '<input type="checkbox" name="frontpage" value="Yes">Front Page'."<br>";
     }

     if ($result['form'] == "Yes"){
      echo '<input type="hidden" name="form" value="No">';
      echo '<input type="checkbox" name="form" value="'.$result['form'].'"checked="Yes">Form'."<br>"; 
     }
    else if ($result['form'] != "Yes"){
      echo '<input type="hidden" name="form" value="No">'; 
      echo '<input type="checkbox" name="form" value="Yes">Form'."<br>";
     }

     if ($result['ui'] == "Yes"){
      echo '<input type="hidden" name="ui" value="No">';
      echo '<input type="checkbox" name="ui" value="'.$result['ui'].'"checked="Yes">User Interface'."<br>";
     }
     else if ($result['ui'] != "Yes"){
      echo '<input type="hidden" name="ui" value="No">';
      echo '<input type="checkbox" name="ui" value="Yes">User Interface'."<br>";
     }

   ?>
  

<br>
  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required><?php echo $result["comment"]; ?></textarea>
  <br>
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <input type="submit" name="edit_form" value="Modify Comment">
  <input type="reset">
  <br>
</form>
 
</body>
</html>
