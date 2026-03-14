<html>
<head>
<title>product table</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
body{
    font-family: Arial, sans-serif;
}

header{
    background-color:black;
    color:white;
    font-family: Arial,bold,italic sans-serif;
    text-align:center;
    padding:15px;
}
h2{
    text-align: center;
    padding: 15px;
}

footer{
    background-color:#333;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:20px;
}

table{
    width:60%;
    margin:20px auto;
    border-collapse:collapse;
}

th, td{
    border:1px solid black;
    padding:15px;
    text-align:center;
}

th{
    background-color:#4CAF50;
    color:black;
}

tr:nth-child(even){
    background-color:white;
}
</style>

</head>

<body>

<header>
<h2 style="color:white; font-weight:bold; font-style:italic;">
Product Management System
</h2>
</header>

<?php

$conn = mysqli_connect("localhost","root","","product_db");

$sql = "SELECT product .* , categories.category
FROM product
JOIN categories
ON product.category_id = categories.id";
        

$result = mysqli_query($conn,$sql);

?>

<h2> Product list </h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>price</th>
<th>quantity</th>
<th>category</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['category']; ?></td>


<td>
<a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>



<footer>
<p>2026 Product System | All Rights Reserved</p>
</footer>

</body>
</html>
