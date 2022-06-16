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
            <option value="1">1. Roll Dice Once</option>
            <option value="2">2. Roll Dice 5 Times</option>
            <option value="3">3. Roll Dice "n" Times</option>
            <option value="4">4. Roll Dice until Snake Eyes</option>
            <option value="5">5. Exit</option>
        </select>
        <input name="nAmount" type="number" placeholder="3. 'n' amount">
        <br>
        <button type="submit">Submit</button>
    </form>

    <p><em>first die / second die</em></p>
</body>

</html>

<?php
// Dice Roll Functions

// Process
function rollUntil($n)
{
    $totalRolls = [];
    for ($i = 0; $i < $n; $i++) {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $sum = $die1 + $die2;
        array_push($totalRolls, "<p>{$die1},{$die2}", "(sum: {$sum})</p>");
    }

    return $totalRolls;
}

// Split Values Array
function echoSplitValues($anArray)
{
    $splitArray = implode(" ", $anArray);
    echo "{$splitArray}";
}

// If Form Submitted
extract($_GET);

if (isset($option)) {
    // Calculate and Output
    if ($option === "1") {
        $values = rollUntil(1);
        echoSplitValues($values);
    } else if ($option === "2") {
        $values = rollUntil(5);
        echoSplitValues($values);
    } else if ($option === "3") {
        if ($nAmount !== "") {
            $values = rollUntil($nAmount);
            echoSplitValues($values);
        } else {
            echo "please specify 'n'";
        }
    } else if ($option === "4") {
        $rolls = 0;
        $snakeEyes = false;
        while (!$snakeEyes) {
            $die1 = rand(1, 6);
            $die2 = rand(1, 6);
            $sum = $die1 + $die2;
            echo "<p>{$die1},{$die2}", "(sum: {$sum})</p>";
            $rolls++;
            if ($sum === 2) {
                $snakeEyes = true;
                echo "<p class='red'>SNAKE EYES! It took {$rolls} rolls to get snake eyes.</p>";
            }
        }
    } else if ($option === "5") {
        header('location: ./pages/exit.php');
    }
}
?>