<?php require "inc/db_connect.inc.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 forms</title>
</head>

<body>
    <?php
    $error_bucket = [];
    $output = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["form1"])) {
            if (empty($_POST["name"])) {
                array_push($error_bucket, "Please fill in first name!");
            } else {
                array_push($output, "Name: " . $_POST["name"]);
            }
        }
        if (isset($_POST["form2"])) {
            if (empty($_POST["pizza"])) {
                array_push($error_bucket, "Please fill in pizza field!");
            } else {
                array_push($output, "Pizza: " . $_POST["pizza"]);
            }
        }
        if (isset($_POST["form3"])) {
            if ($_POST["state"] == "-") {
                array_push($error_bucket, "Please select a state");
            } else {
                array_push($output, "State: " . $_POST["state"]);
            }
            if ($_POST["degreeprogram"] == "-") {
                array_push($error_bucket, "Please select a degree program");
            } else {
                array_push($output, "Degree Program: " . $_POST["degreeprogram"]);
            }
        }

        if (count($error_bucket) > 0) {
            echo "<h3>You need to fill in these fields</h3>";
            echo "<ul>";
            foreach ($error_bucket as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }

        if (count($output) > 0 && count($error_bucket) == 0) {
            echo "<h3>Here's the info you filled out:</h3>";
            echo "<ul>";
            foreach ($output as $thing) {
                echo "<li>$thing</li>";
            }
            echo "</ul>";
        }
    }

    ?>
    <h1>Loc's Question Answered</h1>
    <h2>Form 1</h2>
    <form action="loc.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="Submit" name="form1">
    </form>
    <h2>Form 2</h2>
    <form action="loc.php" method="POST">
        <input type="text" name="pizza" placeholder="pizza">
        <input type="submit" value="Submit" name="form2">
    </form>
    <h2>Form 3</h2>
    <form action="loc.php" method="POST">
        <select name="state" id="state">
            <option value="-">-Select a State-</option>
            <?php
            $stmt = $pdo->query('SELECT * FROM states ORDER BY name ASC');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row["abv"] . "'>" . $row["name"] . "</option>";
            }
            ?>
        </select>
        <br>
        <select name="degreeprogram" id="degreeprogram">
            <option value="-">-Select a Degree Program-</option>
            <?php
            $stmt = $pdo->query('SELECT * FROM programs ORDER BY name ASC');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row["abv"] . "'>" . $row["name"] . "</option>";
            }
            ?>
        </select>
        <!-- <?php require "inc/states.html" ?> -->
        <input type="submit" value="Submit" name="form3">
    </form>
    <?php
    if (count($error_bucket) > 0) {
        echo "<h3>You need to fill in these fields</h3>";
        echo "<ul>";
        foreach ($error_bucket as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }

    if (count($output) > 0) {
        echo "<h3>Here's the info you filled out:</h3>";
        echo "<ul>";
        foreach ($output as $thing) {
            echo "<li>$thing</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>