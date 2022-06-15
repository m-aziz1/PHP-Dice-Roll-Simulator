<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dice Roll Simulator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Dice Roll Simulator</h1>
    <img src="./images/Rolling-Dice.jpg" alt="Rolling Dice">

    <form action="./index.php" method="$_GET">
        <label for="opt-list">Menu</label>
        <select name="option" id="opt-list">
            <option disabled selected>--- Options ---</option>
            <option value="1">Roll Dice Once</option>
            <option value="2">Roll Dice 5 Times</option>
            <option value="3">Roll Dice "n" Times</option>
            <option value="4">Roll Dice until Snake Eyes</option>
            <option value="5">Exit</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>

<?php
$responseLength = count($_GET);

// $diceValues = fillArray(1, 6);

// function fillArray($min, $max)
// {
//     $temp = [];
//     for ($i = $min; $i <= $max; $i++) {
//         array_push($temp, $i);
//     }
//     return $temp;
// }

function randomRoll($min, $max)
{
    $randInt = rand($min, $max);
    echo "{$randInt}";
}

// If Form Submitted
if ($responseLength > 0) {
    // Calculate and Output
    extract($_GET);

    if ($option === "1") {
        echo "selected one";
        echo '<script type="text/javascript">';
        echo 'alert("Hello World!")';
        echo '</script>';
    } else if ($option === "2") {
        echo "selected two";
    } else if ($option === "3") {
        echo "selected three";
    } else if ($option === "4") {
        echo "selected four";
    } else if ($option === "5") {
        echo "selected five";
    }
}
?>