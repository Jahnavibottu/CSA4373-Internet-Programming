<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>

    <style>
        body {
            text-align: center;
            padding: 50px;
            background-image: url(https://thumbs.dreamstime.com/b/travel-worldwide-vector-background-design-let-s-go-travel-text-d-travelling-elements-map-around-world-trip-travel-250189222.jpg); /* Specify the path to your background image */
            background-size: cover; /* Ensures the background image covers the entire body */
            background-repeat: no-repeat;
            position: relative;
        }

        h1 {
            color: #fff;
            font-size: 36px;
        }

        .slogan {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color:black;
            font-size: 24px;
            animation: moveSlogan 5s linear infinite;
        }

        @keyframes moveSlogan {
            0% {
                left: -100%;
            }
            100% {
                left: 100%;
            }
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #3498db;
            color:purple;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <!-- Heading and Slogan -->
    <h1>BlowTour Online Booking</h1>
    <div class="slogan">Let's Travel</div>

    <!-- Links for Book Ticket, Cancel Ticket, and Login -->
    <a href="book_ticket.php">Book Ticket</a>
    <a href="cancel_ticket.html">Cancel Ticket</a>
    <a href="login.php">Login</a>

</body>
</html>
