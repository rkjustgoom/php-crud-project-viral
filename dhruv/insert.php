<?php

// database connection
$conn = mysqli_connect("localhost", "root", "", "product_db");

//check connection

if (!$conn) {
    die("connection failed:". mysqli_connect_error());
}
//Get form data
$name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category_id'];

// insert query

$sql = "INSERT INTO product(product_name,price,quantity,category_id)
         VALUES('$name','$price','$quantity','$category')";

?>         
<?php
// Run query
if (mysqli_query($conn, $sql)) {
    echo "<h3 style='color:violet;'>Product Added Successfully</h3>";
    echo "<a href='index.php'>Tap Here To Product List</a>";
} else {

    echo "<h3 style='color:blue;'>Error: " . mysqli_error($conn) . "</h3>";
    echo "<a href='index.php'>Back to Product List</a>";
}
// Close connection
mysqli_close($conn);  
?>
               


