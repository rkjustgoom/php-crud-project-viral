<?php

$conn = mysqli_connect("localhost", "root", "", "student_db");

$row = [
    "id" => "",
    "student_name" => "",
    "city" => "",
    "email" => "",
    "course_id" => ""
];

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM student WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['yes'])) {
    $id = $_POST['id'];

    $delete = "DELETE FROM student WHERE id='$id'";
    mysqli_query($conn, $delete);

    header("Location:index.php");
}

if (isset($_POST['no'])) {
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Delete Product</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background-color: #80f7d9;
        }

        header {
            background: #10715b;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .box {
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #10715b;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .yes {
            background: #e74c3c;
            color: white;
        }

        .no {
            background: #2ecc71;
            color: white;
        }

        footer {
            background: #178972;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>

</head>

<body>

    <header>
        <h2>Product Management System</h2>
    </header>

    <div class="box">

        <h3>Are you sure you want to delete this student?</h3>

        <p><b><?php echo $row['student_name']; ?></b></p>

        <form method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <button type="submit" name="yes" class="yes">Yes, Delete</button>

            <button type="submit" name="no" class="no">No, Cancel</button>

        </form>

    </div>

    <footer>
        <p><b><i>© Product Management Systems</i></b></p>
    </footer>

</body>

</html>