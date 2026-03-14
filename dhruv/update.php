<?php
$conn = mysqli_connect("localhost", "root", "", "product_db");

// Fetch student record
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

// Update record
if (isset($_POST['update'])) {
  $name = $_POST['product_name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $category = $_POST['category_id'];
  $update = "UPDATE product SET product_name='$name',  price='$price', quantity='$quantity',   category_id='$category'
           WHERE id='$id'";
    mysqli_query($conn, $update);

    header("Location:index.php");
    exit();
}
?>

<html>
<head>
<title> Update product</title>
</head> 

<body>
<h2>Update product</h2>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    product Name:
    <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>"><br><br>

    price:
    <input type="text" name="price" value="<?php echo $row['price']; ?>"><br><br>

    quantity:
    <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br><br>


    category:
    <select name="category_id">
        <option value="1" <?php if($row['category_id']==1) echo 'selected'; ?>>ball</option>
        <option value="2" <?php if($row['category_id']==2) echo 'selected'; ?>>bat</option>
        <option value="3" <?php if($row['category_id']==3) echo 'selected'; ?>>grip</option>
        <option value="4" <?php if($row['category_id']==4) echo 'selected'; ?>>blub</option>
        <option value="5" <?php if($row['category_id']==5) echo 'selected'; ?>>fan</option>
        <option value="6" <?php if($row['category_id']==6) echo 'selected'; ?>>swich</option>
        <option value="7" <?php if($row['category_id']==7) echo 'selected'; ?>>pen</option>
        <option value="8" <?php if($row['category_id']==8) echo 'selected'; ?>>book</option>

    </select><br><br>

    <input type="submit" name="update" value="Update">
</form>

</body>
</html>
