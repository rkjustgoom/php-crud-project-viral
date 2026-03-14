<?php include 'config.php'; ?>

<form method="POST">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
<button type="submit" name="submit">Save</button>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO users(name,email) VALUES('$name','$email')");
    header("Location:index.php");
}
?>