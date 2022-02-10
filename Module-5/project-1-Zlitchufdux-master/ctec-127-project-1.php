<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CTEC 127 - Project 1</title>
</head>

<body>
    <?php
    $error_bucket = [];
    $output = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST["form1"])) {
            if (empty($_POST["firstname"])) {
                array_push($error_bucket, "Please fill in form 1");
            } else {
                array_push($output, "First Name: " . $_POST["firstname"]);
                array_push($output, "Last Name: " . $_POST["lastname"]);
                array_push($output, "Age: " . $_POST["age"]);
                array_push($output, "Location: " . $_POST["location"]);
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST["movie"])) {
                array_push($error_bucket, "Please fill in form 2");
            } else {
                array_push($output, "Movie: " . $_POST["movie"]);
                array_push($output, "Destination: " . $_POST["destination"]);
                array_push($output, "Book: " . $_POST["book"]);
            }
        }
        if (isset($_POST["form3"])) {
            if ($_POST["food"] == "-") {
                array_push($error_bucket, "Please select a food");
            } else {
                array_push($output, "Food: " . $_POST["food"]);
            }
        }

        if (count($error_bucket) > 0) {
            echo "<h3>Fill in the fields</h3>";
            echo "<ul>";
            foreach ($error_bucket as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }

        if (count($output) > 0) {
            echo "<h3>Here is your info:</h3>";
            echo "<ul>";
            foreach ($output as $something) {
                echo "<li>$something</li>";
            }
            echo "</ul>";
        }
    }

    ?>
    <h2>Form 1</h2>
    <form action="ctec-127-project-1.php" method="POST">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="First Name"><br><br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name"><br><br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" placeholder="Age"><br><br>
        <label for="location">Location</label>
        <input type="text" name="location" id="location" placeholder="Location"><br><br>
        <input type="submit" value="Submit" name="form1">
    </form>


    <h2>Form 2</h2>
    <form action="ctec-127-project-1.php" method="POST">
        <input type="text" name="movie" placeholder="Favorite Movie"><br><br>
        <input type="text" name="destination" placeholder="Favorite Destination"><br><br>
        <input type="text" name="book" placeholder="Favorite Book"><br><br>

        <input type="radio" name="random_value1" id="radio1" value="radio1">
        <label for="radio1">Yes! </label> <br><br>

        <input type="radio" name="random_value2" id="radio2" value="radio2">
        <label for="radio2">But why though? </label> <br><br>


        <input type="submit" value="Submit" name="form2">
    </form>


    <h2>Form 3</h2>
    <form action="ctec-127-project-1.php" method="POST">
        <select name="food" id="food">
            <option value="-">--Please Select a Food--</option>
            <option value="sushi">Sushi</option>
            <option value="pizza">Pizza</option>
            <option value="pokebowls">Poke Bowls</option>
        </select><br><br>
        <input type="checkbox" name="check1"> No! <br><br>
        <input type="checkbox" name="check2"> Well, you don't say? <br><br>
        <input type="submit" value="Submit" name="form3">
    </form>

</body>

</html>