<?php
// Database connection
$conn = mysqli_connect("localhost","root","","product_db");

// Check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

// Check if 'id' is passed in URL
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Delete query
    $sql = "DELETE FROM product WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        // Redirect back to index page after deletion
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. No ID provided.";
}

// Close connection
mysqli_close($conn);
?>