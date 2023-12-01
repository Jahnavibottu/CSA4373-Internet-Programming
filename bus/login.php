<?php

$servername = "localhost"; // Replace with your server name
$username = "root";       // Replace with your database username
$password = "";           // Replace with your database password
$dbname = "login";        // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a table named 'users' with columns 'username', 'mobilenumber', and 'email'
$createTableQuery = "CREATE TABLE IF NOT EXISTS log (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        username VARCHAR(255) NOT NULL,
                        email VARCHAR(255) NOT NULL
                    )";

$conn->query($createTableQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    
    $email = $_POST["email"];

    // Insert data into the 'users' table
    $insertQuery = "INSERT INTO log (username, email) VALUES ('$username', '$email')";

    if ($conn->query($insertQuery) === TRUE) {
        // Redirect to success page if record created successfully
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>
