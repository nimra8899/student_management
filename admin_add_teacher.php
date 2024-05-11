<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location: login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "uniproject";
$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_teacher'])) {
    $t_name = $_POST['name'];
    $t_description = $_POST['description'];
    $file = $_FILES['image']['name'];

    // Validate the teacher name
    if (!validateTeacherName($t_name)) {
        echo "<script type='text/javascript'> 
              alert('Teacher name should not contain numerical digits.');
              </script>";
        exit(); // Stop execution if validation fails
    }

    $dst = "./image/" . $file;
    $dst_db = "image/" . $file;

    // Ensure that the destination directory exists
    if (!is_dir("./image/")) {
        mkdir("./image/");
    }

    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    $sql = "INSERT INTO teacher(name, description, image) VALUES ('$t_name','$t_description','$dst_db')";
    $result = mysqli_query($data, $sql);

            if ($result) {
                echo "<script type='text/javascript'> 
                      alert('Data Upload Success');
                      </script>";
            }
}

// Function to validate teacher name
function validateTeacherName($name)
{
    // Check if the name contains any numerical digits
    if (preg_match('/\d/', $name)) {
        return false;
    }
    return true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style type="text/css">
        .div_deg {
            background-color: skyblue;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>

    <?php
    include 'admin_css.php'
    ?>
</head>
<body>

<?php
include 'admin_sidebar.php';
?>

<div class="content">
    <center>

        <h1>Add Teacher</h1>
        <br><br>
        <div class="div_deg">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Teacher Name</label>
                    <input type="text" name="name">
                </div>
                <br>
                <div>
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>
                <br>
                <div>
                    <label>Image</label>
                    <input type="file" name="image">
                </div>
                <br>
                <div>
                    <input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary">
                </div>
            </form>
        </div>

    </center>
</div>

</body>
</html>
