<?php
include 'config.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<form method="POST">
Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
<button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location:index.php");
}
?>