<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <style>
        .seat-box {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .seat {
            width: 40px;
            height: 40px;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="process.php" method="POST">
        <label for="username">Name:</label>
        <input type="text" name="username" required><br>

        <label for="fromlocation">From Location:</label>
        <input type="text" name="fromlocation" required><br>

        <label for="tolocation">To Location:</label>
        <input type="text" name="tolocation" required><br>

        <label for="departuretime">Departure Time:</label>
        <input type="datetime-local" name="departuretime" required><br>

        <label for="returntime">Return Time:</label>
        <input type="datetime-local" name="returntime" required><br>

        <label for="seat">Select Seat:</label>
        <select name="seat" required>
            <?php
            for ($i = 1; $i <= 30; $i++) {
                echo "<option value=\"$i\">Seat $i</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Submit">
    </form>

    <div class="seat-box">
        <?php
        for ($i = 1; $i <= 30; $i++) {
            echo "<div class=\"seat\">$i</div>";
        }
        ?>
    </div>
</body>
</html>
