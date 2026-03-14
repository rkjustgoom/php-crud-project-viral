<!DOCTYPE html>
<html>

<head>
    <title>Course Table</title>
    <style>
    body {
        font-family: arial;
        margin: 0;
    }

    header {
        background-color: #10715b;
        color: aqua;
        text-align: center;
        padding: 20px;
    }

    h2 {
        color: white;
        padding: 2px;
    }

    table {
        width: 70%;
        margin: 40px auto;
        border-collapse: collapse;
    }

    th {
        border: 1px solid #31f637;
        background-color: #5cd4b8;
        padding: 10px;
        text-align: center;
    }

    td {
        border: 1px solid #31f637;
        padding: 10px;
        text-align: center;
    }

    thead {
        background-color: #3498db;
        color: white;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #d6eaf8;
    }

    tfoot {
        background-color: #2ecc71;
        color: white;
        font-weight: bold;
    }

    footer {
        background-color: #178972;
        color: white;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <header>
        <h1><b><i>College Courses System</i></b></h1>
    </header>
    <h2>Student Details</h2>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "student_db");

    $sql = "SELECT student.*, course.course_name
        FROM student
        JOIN course
        ON student.course_id = course.id";

    $result = mysqli_query($conn, $sql);

    ?>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>City</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['course_name']; ?></td>


            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>

        </tr>

        <?php } ?>
    </table>
    <footer>
        <p><b><i>© Student Management Systems</i></b></p>
    </footer>
</body>

</html>