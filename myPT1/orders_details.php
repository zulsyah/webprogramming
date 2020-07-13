<!DOCTYPE html>
<html>
<head>
  <title>Zul's Mighty Car Radio System : Order Details</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    Order ID: K001<br>
    Order Date: 29-08-2019 <br>
    Staff: Zul <br>
    Customer: Wani <br>
    <hr>
    <form action="orders_details.php" method="post">
      Product
      <select name="pid">
        <option value="P001">9 inch Android Car Player</option>
        <option value="P002">Reverse Camera</option>
        <option value="P003">Powered Antenna</option>
      </select>
      Quantity
      <input name="quantity" type="text">
      <button type="submit" name="addproduct">Add Product</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order Detail ID</td>
        <td>Product</td>
        <td>Quantity</td>
        <td></td>
      </tr>
      <tr>
        <td>K001</td>
        <td>9 inch Android Car Player</td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>K002</td>
        <td>Reverse Camera</td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
    </table>
    <hr>
    <a href="invoice.php" target="_blank">Generate Invoice</a>
  </center>
</body>
</html>