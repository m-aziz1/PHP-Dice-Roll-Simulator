<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Distance Calculator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Distance Calculator</h1>
    <img src="./images/distance-between-2-points.jpg" alt="Triangle Diagram">
    <form action="./index.php" method="$_GET">
        <p>Point 1</p>
        <input type="number" name="x1" placeholder="x1" required>
        <input type="number" name="y1" placeholder="y1" required>
        <p>Point 2</p>
        <input type="number" name="x2" placeholder="x2" required>
        <input type="number" name="y2" placeholder="y2" required>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>

<?php
$responseLength = count($_GET);

// If Form Submitted
if ($responseLength > 0) {
    // Calculate and Output
    extract($_GET);
    $x = $x2 - $x1;
    $y = $y2 -$y1;
    $d = ($x**2 + $y**2)**0.5;

    echo "Distance between points is {$d}";
}
?>