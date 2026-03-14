<!DOCTYPE html>
<html>


<head>
    <title>Add Student</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #80f7d9;
    }

    header {
        background-color: #10715b;
        color: white;
        text-align: center;
        padding: 20px;
    }

    form {
        width: 400px;
        margin: 40px auto;
    }

    fieldset {
        border: 2px solid #10715b;
        border-radius: 10px;
        padding: 20px;
        background-color: white;
    }

    legend {
        font-size: 18px;
        font-weight: bold;
        color: #10715b;
        padding: 0 10px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        background-color: #10715b;
        color: white;
        border: none;
        margin-top: 15px;
        cursor: pointer;
        font-weight: bold;
    }

    input[type="submit"]:hover {
        background-color: #0c5545;
    }

    footer {
        background-color: #178972;
        color: white;
        text-align: center;
        padding: 10px;
        margin-top: 40px;
    }
    </style>

</head>

<body>

    <header>
        <h2>College Courses System</h2>
    </header>

    <form action="insert.php" method="POST">

        <fieldset>

            <legend>Registration Form</legend>

            <label>Student Name</label>
            <input type="text" name="student_name" required>

            <label>City</label>
            <input type="text" name="city" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Course</label>
            <select name="course_id">
                <option value="1">BCA</option>
                <option value="2">BBA</option>
                <option value="3">B.TECH</option>
                <option value="4">B.PHARM</option>
                <option value="5">MCA</option>
                <option value="6">MBA</option>
                <option value="7">M.TECH</option>
                <option value="8">M.PHARM</option>
            </select>

            <input type="submit" value="Submit">

        </fieldset>

    </form>

    <footer>
        <p><b><i>© Student Management Systems</i></b></p>
    </footer>

</body>

</html>