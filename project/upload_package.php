<?php
$connection = mysqli_connect('localhost','root','','tourstravels');


if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];

   
    $target_directory = "uploads/";
    $image_path = $target_directory . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
       
        $query = "INSERT INTO packages (name, description) VALUES ('$name', '$description')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $package_id = mysqli_insert_id($connection);
            $query = "INSERT INTO package_image (package_id, image_path) VALUES ('$package_id', '$image_path')";
            $image_result = mysqli_query($connection, $query);
            if ($image_result) {
                header("Location: admin_panel.php"); 
                exit();
            } else {
                echo "Image upload failed.";
            }
        } else {
            echo "Package upload failed.";
        }
    } else {
        echo "Failed to move the uploaded file.";
    }
}


mysqli_close($connection);
?>



