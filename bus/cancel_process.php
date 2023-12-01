<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Validate and sanitize user input
    $ticketNumber = $_POST["ticketNumber"] ?? '';

    // SQL Query to delete the ticket based on the provided ticketNumber
    $sql = "DELETE FROM ticket WHERE ticketNumber = '$ticketNumber'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        $message = "Ticket with ticket number $ticketNumber canceled successfully.";
    } else {
        $message = "Error canceling ticket: " . $conn->error;
    }

    // Close the connection
    $conn->close();

    // Redirect back to the cancel_ticket.html page with the message
    header("Location: cancel_ticket.html?message=" . urlencode($message));
    exit();
}
?>
