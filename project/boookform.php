<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
    <link rel="stylesheet" href="login-style.css"/>
</head>
<body>
<div class="dashboard">
    <h1>Booking Dashboard</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Guests</th>
                <th>Arrival Date</th>
                <th>Leaving Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'boook db');

            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM boookform";
            $result = mysqli_query($connection, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['phone']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "<td>{$row['location']}</td>";
                    echo "<td>{$row['guests']}</td>";
                    echo "<td>{$row['arrivals']}</td>";
                    echo "<td>{$row['leaving']}</td>";
                    echo "</tr>";
                }
            } else {
                echo '<tr><td colspan="8">No bookings available.</td></tr>';
            }

            mysqli_close($connection);
            ?>
        </tbody>
    </table>
        </div>
</body>
</html>
