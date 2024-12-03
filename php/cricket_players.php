<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body style="text-align: center;">
    <h1>Indian Cricket Players</h1>
    <table>
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
        $players = array(
            "Rohit Sharma","Virat Kohli","KL Rahul","Shubman Gill","Suryakumar Yadav","Hardik Pandya"
        );

        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </table>
</body>
</html>
