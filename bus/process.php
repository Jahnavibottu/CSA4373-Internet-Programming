<?php
if ($_POST) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login";

    // Database Connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check if there is a connection error
    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    // Validate and sanitize user input (basic validation)
    $userName = $_POST["username"];
    $fromLocation = $_POST["fromlocation"] ;
    $toLocation = $_POST["tolocation"] ;
    $departureTime = $_POST["departuretime"];
    $returnTime = $_POST["returntime"];
    $seat = intval($_POST["seat"] ?? 0);

    // SQL Query without prepared statement (be cautious of SQL injection)
    $sql = "INSERT INTO fill (username, fromlocation, tolocation, departuretime, returntime, seat) 
            VALUES ('$userName', '$fromLocation', '$toLocation', '$departureTime', '$returnTime', $seat)";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location:ticket.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
