<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Perform necessary database operations here

    // For example, you might want to check login credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to the appropriate role-specific page
        switch ($role) {
            case 'admin':
                header("Location: admin.html");
                break;
            case 'teacher':
                header("Location: teacher.html");
                break;
            case 'parent':
                header("Location: parent.php");
                break;
            case 'student':
                header("Location: students.html");
                break;
            default:
                // Handle unexpected role (redirect to a default page, show an error, etc.)
                header("Location: default.php");
                break;
        }
        exit();
    } else {
        echo "Invalid login credentials. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>
