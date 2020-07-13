<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">😊Shampu Untuk Semua😊</a>
    </div>
 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <?php if(isset($_SESSION['role'])){ ?>
        <li><a href="main.php">Home</a></li>
        <li><a href="catalogue.php">Catalogue</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="customers.php">Customers</a></li>
        <li><a href="staffs.php">Staffs</a></li>
        <li><a href="orders.php">Orders</a></li>
      <?php } else { ?>
        <li><a href="index.php">Login</a></li>
        <li><a href="catalogue.php">Catalogue</a></li>
      <?php } ?>
      <li><a><?php echo date("d M Y"); ?></a></li>
    </ul>
      <?php if(isset($_SESSION['role'])) { ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php echo "Welcome, {$_SESSION['name']}" ?></a></li>
         <li><a><?php echo "Your position: {$_SESSION['role']}" ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="products.php">Products</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="staffs.php">Staffs</a></li>
            <li><a href="orders.php">Orders</a></li>
          </ul>
        </li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    <?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>