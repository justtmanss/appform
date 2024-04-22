<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "applicationform"; // Database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $department_id = $_POST['department_id'];

    // Insert data into student table
    $sql_student = "INSERT INTO student (name, dob, gender, address, mobile, email, department_id) 
                    VALUES ('$name', '$dob', '$gender', '$address', '$mobile', '$email', '$department_id')";

    if ($conn->query($sql_student) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_student . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>