<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 5 - Temp. Converter</title>
</head>

<body>

    <?php
    $convertedTemp = '';
    $originalUnit = '--Select--';
    $conversionUnit = '--Select--';
    // function to calculate converted temperature
    function convertTemp($temp, $unit1, $unit2)
    {
        // conversion formulas
        // Celsius to Fahrenheit = T(°C) × 9/5 + 32
        // Celsius to Kelvin = T(°C) + 273.15
        // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
        // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
        // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
        // Kelvin to Celsius = T(K) - 273.15

        if ($temp == null) {
            $convertedTemp = null;
        } else if ($unit1 == "fahrenheit" and $unit2 == "celsius") {
            $convertedTemp = 5 / 9 * ($temp - 32);
        } else if ($unit1 == "fahrenheit" and $unit2 == "kelvin") {
            $convertedTemp = ($temp + 459.67) * 5 / 9;
        } else if ($unit1 == "fahrenheit" and $unit2 == "fahrenheit") {
            $convertedTemp = $temp;
        } else if ($unit1 == "celsius" and $unit2 == "fahrenheit") {
            $convertedTemp = $temp * 9 / 5 + 32;
        } else if ($unit1 == "celsius" and $unit2 == "kelvin") {
            $convertedTemp = $temp + 273.15;
        } else if ($unit1 == "celsius" and $unit2 == "celsius") {
            $convertedTemp = $temp;
        } else if ($unit1 == "kelvin" and $unit2 == "fahrenheit") {
            $convertedTemp = $temp * 9 / 5 - 459.67;
        } else if ($unit1 == "kelvin" and $unit2 == "celsius") {
            $convertedTemp = $temp - 273.15;
        } else if ($unit1 == "kelvin" and $unit2 == "kelvin") {
            $convertedTemp = $temp;
        } else if ($unit1 or $unit2 == "--Select--") {
            $convertedTemp = null;
        }

        return $convertedTemp;


        // You need to develop the logic to convert the temperature based on the selections and input made

    } // end function

    // Logic to check for POST and grab data from $_POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Store the original temp and units in variables
        // You can then use these variables to help you make the form sticky
        // then call the convertTemp() function
        // Once you have the converted temperature you can place PHP within the converttemp field using PHP
        // I coded the sticky code for the originaltemp field for you

        $originalTemperature = $_POST['originaltemp'];
        $originalUnit = $_POST['originalunit'];
        $conversionUnit = $_POST['conversionunit'];
        $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
        echo $convertedTemp;
        $error_bucket = [];

        if (!empty($originalTemperature)) {
        } else {
            array_push($error_bucket, "Please enter a temperature");
        }
        if ($originalUnit != "--Select--") {
        } else {
            array_push($error_bucket, "Please enter a temperature type");
        }
        if ($conversionUnit != "--Select--") {
        } else {
            array_push($error_bucket, "Please enter a converted temperature type");
        }

        if (count($error_bucket) > 0) {
            echo "<h3>Please fill out both temp boxes</h3>";
            echo "<ul>";
            for ($i = 0; $i < count($error_bucket); $i++) {
                echo "<li>" . $error_bucket[$i] . "</li>";
            }
            echo "</ul>";
        }
    } // end if

    if (isset($_POST['conversionunit'])) {
        $conversionUnit = $_POST['conversionunit'];
    } else {
        $conversionTemp = '';
    }

    if (isset($_POST['originalunit'])) {
        $originalUnit = $_POST['originalunit'];
    } else {
        $originalUnit = '';
    }

    if (!empty($convertedTemp)) {
    } else {
        $convertedTemp = '';
    }
    ?>

    <!-- Form starts here -->
    <h1>Temperature Converter</h1>
    <h4>CTEC 127 - PHP with SQL 1</h4>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="group">
            <label for="temp">Temperature</label>
            <input type="text" value="<?php if (isset($_POST['originaltemp'])) {
                                            echo $_POST['originaltemp'];
                                        }
                                        ?>" name="originaltemp" size="14" maxlength="7" id="temp">

            <select name="originalunit">
                <option value="--Select--">--Select--</option>
                <option <?php if ($originalUnit == "celsius") echo 'selected="selected"'; ?> value="celsius">Celsius</option>
                <option <?php if ($originalUnit == "fahrenheit") echo 'selected="selected"'; ?> value="fahrenheit">Fahrenheit</option>
                <option <?php if ($originalUnit == "kelvin") echo 'selected="selected"'; ?> value="kelvin">Kelvin</option>
            </select>
        </div>

        <div class="group">
            <label for="convertedtemp">Converted Temperature</label>
            <input type="text" value="<?php echo $convertedTemp ?>" name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>

            <select name="conversionunit">
                <option value="--Select--">--Select--</option>
                <option <?php if ($conversionUnit == "celsius")     echo 'selected="selected"'; ?> value="celsius">Celsius</option>
                <option <?php if ($conversionUnit == "fahrenheit")      echo 'selected="selected"'; ?> value="fahrenheit">Fahrenheit</option>
                <option <?php if ($conversionUnit == "celsius")     echo 'selected="selected"'; ?> value="kelvin">Kelvin</option>
            </select>
        </div>
        <input type="submit" value="Convert" />
    </form>
</body>

</html>