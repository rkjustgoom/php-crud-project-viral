<?php

$conn = mysqli_connect("localhost", "root", "", "student_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['student_name'];
$city = $_POST['city'];
$email = $_POST['email'];
$course_id = $_POST['course_id'];

$sql = "INSERT INTO student (student_name, city, email, course_id)
        VALUES ('$name', '$city', '$email', '$course_id')";

if (mysqli_query($conn, $sql)) {

    echo "<h3 style='color:light blue;'>Student Added Successfully</h3>";
    echo "<a href='index.php'>Tap Here To Student List</a>";
} else {

    echo "<h3 style='color:red;'>Error: " . mysqli_error($conn) . "</h3>";
    echo "<a href='index.php'>Back to Student List</a>";
}

mysqli_close($conn);
