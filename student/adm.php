<?php 
  if($_POST) {
  
  $servername = "localhost";
  $bookname = "root";
  $authorname="";
  $database = "details";
  
   
  // Database Connection
  $conn = new mysqli($servername, $bookname, $authorname, $database);
  
  // Check if error
  if($conn->connect_error) {
    echo "Connection Error";
  }
  
  // Username & Password
  $book= $_POST["bookname"];
  $author = $_POST["authorname"];
  
  // Sql Query
  $sql = "INSERT INTO name(bookname,authorname) VALUES ('$book', '$author')";
 
  if($conn->query($sql)) {
   echo "Data stored successfully";
  } else {
   echo "Something went wrong";
  }
   
   $conn->close();
  }
?>