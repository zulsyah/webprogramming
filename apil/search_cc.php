<?php
	session_start();
	if(!isset($_SESSION['role'])){
    // not logged in
    header('Location: index.php');
    exit();
  }
	include_once 'database.php';

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>S&R : Search</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
	#pic{
		width:250px;
		height:300px; 
	}

  .thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}

.thumbnail img {
    width: 50%;
}

#a{
  background-color: #09ff93;
}

body{
  width:100%;
  height:80%;
  margin: 0px;
  padding: 0px;
  background:url(image4.jpg) center center no-repeat;
  min-height:100%;
  background-size: cover;
}



</style>
<script src="jquery-3.4.1.min.js"></script>
<script>

</script>
<body>
<?php include_once 'nav_bar.php'; ?>
		<div class="container-fluid">
			<div class="top">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="page-header">
						<h2></h2>
					</div>
				</div>
			</div>


			<div class="row" name="top">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="page-header">
						<h1 style="font-weight: bolder; color: #950000">What you want to search?</h1>
					</div>

					<form action="search_cc.php" method="post" class='form-horizontal'>
						<div class="form-group">
              <label for="searchname" class="col-sm-3 control-label">Search Product</label>
							<div class="col-sm-9">
								<div class="input-group">
									<input name="sear1" type="text" class="form-control"  id="sear1" placeholder="search for name, type or quality" required>
									<span class="input-group-btn">
										<button class="btn btn-default" style="margin-left: 10px; font-weight: bold;" type="submit" name="searchbutton" id="a"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Search</button>
									</span>
								</div>
							</div>
              </div>
          </form>

						
        </div>
      </div>
    </div>
    <hr>

        
     
    
		
<?php

if(isset($_POST['sear1'])){
	if(empty($_POST['sear1'])){
	    $message = "Please key in the key word.";
        echo "<script type='text/javascript'>alert('$message');</script>";
}else if(!empty($_POST['sear1'])){
try {
    
    $stmt = $conn->prepare("SELECT * FROM tbl_products_a166007_pt2 WHERE (fld_product_name like '%".$_POST['sear1']."%') or (fld_product_type like '%".$_POST['sear1']."%') or (fld_product_brand like '%".$_POST['sear1']."%')");
    $stmt->execute();
    $result = $stmt->fetchAll();
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
$conn=null;
?>

<?php if (!empty ($result) ){ ?>
<div class="container" id="tourpackages-carousel">
    <?php foreach($result as $readrow) { ?>
      <div class="row">

          <div class="col-md-6">
            <div class="thumbnail">
            <?php if ($readrow['fld_product_id'] == "" ) {
            echo "No image";
            }
            else { ?>
              
            <img src="pictures/<?php echo $readrow['fld_product_id'] ?>.jpg" class="img-responsive" id="pic" >
            <?php } ?>
            </div>
          </div>

            <div class="caption">
                <p><strong>Product ID : </strong> <?php echo $readrow['fld_product_id'] ?> </p>
                <p><strong>Name : </strong> <?php echo $readrow['fld_product_name'] ?> </p>
                <p><strong>Price : </strong> RM <?php echo $readrow['fld_product_price'] ?> </p>
                <p><strong>Type : </strong> <?php echo $readrow['fld_product_type'] ?> </p>
                <p><strong>Size : </strong> <?php echo $readrow['fld_product_size'] ?> </p>
                <p><strong>Brand : </strong> <?php echo $readrow['fld_product_brand'] ?></p> 
                <p><strong>Description : </strong> <?php echo $readrow['fld_product_description'] ?> </p>
            
           
            </div>
          </div>


          <?php }}
           
           if (empty($result)){
          	$message = "No this kind of products, please find other";
        echo "<script type='text/javascript'>alert('$message');</script>";
          }?>
    </div>
    
 

 <?php } }?>
			
	  
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
</body>
</html>