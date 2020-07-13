<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
 
<body>
 
<form method="post" action="insert.php">
  Nama :
  <input type="text" name="name" size="40" required>
  <br>
  Email :
  <input type="text" name="email" size="25" required>
  <br>
  How do you find me? 
  <select name="findme" required>
        <option value="friend">From a friend</option>
        <option value="google">I googled you</option>
        <option value="surf">Just surf on in</option>
        <option value="facebook">From your Facebook</option>
        <option value="ads">I clicked an ads</option>
      </select>
  <br>
  I like your :
  <br>
  <input id="fp2" type="hidden" name="frontpage" value="No"/>
  <input id="fp1" type="checkbox" name="frontpage" value="Yes" >Front page &nbsp
  
  <br>
  <input id="f2" type="hidden" name="form" value="No"/>
  <input id="f1" type="checkbox" name="form" value="Yes">Form &nbsp
  
  <br>
  <input id="ui2" type="hidden" name="ui" value="No"/>
  <input id="ui1" type="checkbox" name="ui" value="Yes">User interface &nbsp
  
  <script>
    if (document.getElementById("fp1").checked) {
      document.getElementById("fp2").disabled = true; 
    
     if (document.getElementById("f1").checked) {
      document.getElementById("f2").disabled = true; 

       if (document.getElementById("ui1").checked) {
      document.getElementById("ui2").disabled = true; 

    }
  </script>

<br>
  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required></textarea>
  <br>
  <input type="submit" name="add_form" value="Add a New Comment">
  <input type="reset">
  <br>
</form>
 
</body>
</html>
