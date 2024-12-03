<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Student Names</h1>

    <?php
    // Array of student names
    $students = ["Alice", "Bob", "Charlie", "David", "Eve"];

    echo "<h2>Original Array</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    // Sort in ascending order
    sort($students);
    echo "<h2>Array Sorted with sort()</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    // Reset array to original and use asort()
    $students = ["Alice", "Bob", "Charlie", "David", "Eve"];
    asort($students);
    echo "<h2>Array Sorted with asort() (Maintains Keys)</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    // Sort in descending order using arsort()
    arsort($students);
    echo "<h2>Array Sorted with arsort() (Maintains Keys)</h2>";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    ?>
</body>
</html>
