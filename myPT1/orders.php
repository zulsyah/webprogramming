<!DOCTYPE html>
<html>
<head>
  <title>Zul's Mighty Car Radio System : Orders</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="orders.php" method="post">
      Order ID:
      <input name="oid" type="text" disabled> <br>
      Order Date:
      <input name="orderdate" type="date" disabled> <br>
      Staff:
      <select name="sid">
        <option value="S001">Zul</option>
        <option value="S002">Syamil</option>
        <option value="S003">Hafizaniah</option>
      </select> <br>
      Customer:
      <select name="cid">
        <option value="C001">Wani</option>
        <option value="C002">Azrina</option>
        <option value="C003">Iera</option>
      </select> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order ID</td>
        <td>Order Date</td>
        <td>Staff ID</td>
        <td>Customer ID</td>
        <td></td>
      </tr>
      <tr>
        <td>K001</td>
        <td>29-08-2019</td>
        <td>S001</td>
        <td>C001</td>
        <td>
          <a href="orders_details.php">Details</a>
          <a href="orders.php">Edit</a>
          <a href="orders.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>