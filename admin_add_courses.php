<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
} elseif ($_SESSION['usertype'] != 'admin') {
    header("location: login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "uniproject";
$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_course'])) {
    $course_name = mysqli_real_escape_string($data, $_POST['course_name']);
    $course_description = mysqli_real_escape_string($data, $_POST['course_description']);
    $course_credit = mysqli_real_escape_string($data, $_POST['course_credit']);

    $sql = "INSERT INTO courses (name, description, credits) VALUES ('$course_name', '$course_description', '$course_credit')";
    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "<script type='text/javascript'> 
              alert('Course added successfully.');
              </script>";
    } else {
        echo "Error: " . mysqli_error($data);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard - Add Course</title>

    <?php include 'admin_css.php'; ?>
    <style>
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php include 'admin_sidebar.php'; ?>

<div class="content">
    <center>
        <h1>Add Course</h1>
        <div class="form-container">
            <form action="#" method="POST">
                <label for="course_name">Course Name:</label>
                <input type="text" name="course_name" id="course_name" required>

                <label for="course_description">Description:</label>
                <textarea name="course_description" id="course_description" required></textarea>

                <label for="course_credit">Credits:</label>
                <input type="number" name="course_credit" id="course_credit" required>

                <input type="submit" name="add_course" value="Add Course" class="btn btn-primary">
            </form>
        </div>
    </center>
</div>

</body>
</html>
