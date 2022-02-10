<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $error_bucket = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["form1"])) {
            if (empty($_POST["firstname"])) {
                array_push($error_bucket, "Please fill in your first name");
            }
        }
    }

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $movie = $_POST['movie'];
    $location = $_POST['location'];
    $book = $_POST['book'];


    ?>

    <h1><strong>Please fill out all forms</strong></h1><br>
    <h2>Form 1</h2>
    <form action="process_multiple_forms.php" method="POST">
        <input type="text" name="firstname" placeholder="First Name"><br><br>
        <input type="text" name="lastname" placeholder="Last Name"><br><br>
        <input type="text" name="age" placeholder="Age"><br><br>
        <input type="text" name="location" placeholder="Location">
        <input type="submit" value="Submit" name="form1">
    </form><br><br>
    <h2>Form 2</h2>
    <form action="process_multiple_forms.php" method="POST">
        <input type="text" name="movie" placeholder="Favorite movie"><br><br>
        <input type="text" name="song" placeholder="Favorite song"><br><br>
        <input type="text" name="book" placeholder="Favorite book"><br><br>
        <form action="" method="post">
            <input type="radio" name="yes" value="yes">Yes<br>
            <input type="radio" name="why" value="why">Why?<br><br>
        </form>
        <input type="submit" value="Submit" name="form2">
    </form> <br><br>
    <h2>Form 3</h2>
    <form action="process_multiple_forms.php" method="POST">
        <select name="food" id="food">
            <option value="sushi">Sushi</option>
            <option value="pizza">Pizza</option>
            <option value="pokebowls">Poke Bowls</option>
        </select>
        <input type="submit" value="Submit" name="form3"> <br><br><br>
    </form>
</body>

</html>