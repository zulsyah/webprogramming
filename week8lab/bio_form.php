<?php
 
$univ = array
  (
  array("name"=>"Universiti Putra Malaysia","abb"=>"UPM"),
  array("name"=>"Universiti Kebangsaan Malaysia","abb"=>"UKM"),
  array("name"=>"Universiti Malaya","abb"=>"UM"),
  array("name"=>"Universiti Sains Malaysia","abb"=>"USM"),
  array("name"=>"Universiti Teknologi Malaysia","abb"=>"UTM")
  );
 
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Biodata</title>
 <style type="text/css">

    body {
       font: 100% Lucida Sans, Verdana;
    }
 
    input {
        width: 100%;
        padding: 12px 20px;
        margin: 10px 0px 10px 0px;
        box-sizing: border-box;
        font: 100% Lucida Sans, Verdana;
    }

    #idsex {
        width: 3%;
        padding: 12px 20px;
        margin: 10px 0px 10px 0px;
        box-sizing: border-box;
        font: 100% Lucida Sans, Verdana; 
    }

    #idheight, #idcolor {
        width: 30%;
        padding: 12px 20px;
        margin: 10px 0px 10px 0px;
        box-sizing: border-box;
        font: 100% Lucida Sans, Verdana;       
    }

    #idaddress, #iduniv{
        width: 100%;
        padding: 12px 20px;
        margin: 10px 0px 10px 0px;
        box-sizing: border-box;
        font: 100% Lucida Sans, Verdana;
    }

    #biodata_form, #reset{
      background-color: #0000FF;
      border-style: none;
      color: #FFFFFF;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
    }

    #labelname, #labelage, #labelsex, #labeladdress, #labelemail, #labeldob, #labelheight, #labeltel, #labelcolor, #labelfbtwig, #labeluniv{
      font-weight: bold;
    }
</style>

</head>
<body>
<h1>Biodata Form</h1>
<hr>
<form action="validate_biodata.php" method="post">
     
<label for="idname" id="labelname">Name:</label>
<input type="text" name="name" id="idname" placeholder="Insert your name" autofocus><br>
     
<label for="idage" id="labelage">Age:</label>
<input type="number" name="age" id="idage" min="0" max="100" step="1"><br>
     
<label for="idsex" id="labelsex">Sex:</label><br>
<input type="radio" name="sex" id="idsex" value="male">Male<br>
<input type="radio" name="sex" id="idsex" value="female">Female<br>
       
<label for="idaddress" id="labeladdress">Address:</label>
<textarea name="address" id="idaddress" cols="50" rows="5" placeholder="Insert your address"></textarea><br>
     
<label for="idemail" id="labelemail">Email:</label>
<input type="email" id="idemail" name="email" placeholder="Insert your email"><br>
     
<label for="iddob" id="labeldob">Date of Birth:</label>
<input type="date" id="iddob" name="dob"><br>
     
<label for="idheight" id="labelheight">Height:</label><br>
<input type="range" name="height" id="idheight" min = "100" max = "200" oninput="outputId.value = idheight.value">
<output id="outputId">150</output>cm<br>
     
<label for="idtel" id="labeltel">Tel:</label>
<input type="tel" name="phone" id="idtel" pattern="\+60\d{2}-\d{7}" placeholder="+60##-#######"><br>
     
<label for="idcolor" id="labelcolor">My Favorite Color:</label><br>
<input type="color" name="color" id="idcolor"><br>
     
<label for="idfbtwig" id="labelfbtwig">FB/TW/IG:</label>
<input type="url" name="fbtwig" id="idfbtwig" placeholder="Insert the URL"><br>
     
<label for="iduniv" id="labeluniv">My University:</label>
<select name="university" id="iduniv">
  <option value="" selected>Select</option>
  <?php
  foreach ($univ as $u) {
    echo "<option value=".$u['abb'].">".$u['name']."</option>";
  }
  ?>
 
<input type="hidden" name="matricnum" value="a166007">
<input type="submit" name="biodata_form" id="biodata_form" value="Submit My Biodata">
<input type="reset" id="reset">
</form>
 
</body>
</html>