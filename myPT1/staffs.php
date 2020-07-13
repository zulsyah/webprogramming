<!DOCTYPE html>
<html>
<head>
  <title>Zul's Mighty Car Radio System : Staffs</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="staffs.php" method="post">
      Staff ID:
      <input name="sid" type="text"> <br>
      Name:
      <input name="fname" type="text"> <br>
      Gender:
      <input name="gender" type="radio" value="Male"> Male
      <input name="gender" type="radio" value="Female"> Female <br>
      Phone Number:
      <input name="phone" type="text"> <br>
      Email:
      <input name="address" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Staff ID</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Phone Number</td>
        <td>Email Address</td>
        <td></td>
      </tr>
      <tr>
        <td>S001</td>
        <td>Zul</td>
        <td>Male</td>
        <td>013-4946008</td>
        <td>zulsyah7@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>S002</td>
        <td>Syamil</td>
        <td>Male</td>
        <td>013-2456785</td>
        <td>syamilgendut@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
            <tr>
        <td>S003</td>
        <td>Hafizaniah</td>
        <td>Female</td>
        <td>015-4678649</td>
        <td>pijanboroi@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>