<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processor</title>
</head>

<body>
    <h1>For Submission Results</h1>
    <?php

    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        header('Location: https://www.youtube.com');
    }


    // var_dump($_REQUEST); //$_REQUEST is referred to as a php superglobal
    // var dump is used to show the values of variables on your screen
    echo $_POST["name"];
    echo $_POST["street"];
    echo $_POST["state"];
    echo $_POST["comments"];



    $name = $_POST["name"]; // gets the value from the name field
    $street = $_POST["street"];
    $state = $_POST["state"];
    $comments = $_POST["comments"];




    $error_bucket = [];


    //Name
    if (!empty($name)) {
        // it was not empty
        // the filled something in
    } else {
        // if field is empty
        array_push($error_bucket, "You must enter a name");
    }




    //Street
    if (!empty($street)) {
        // it was not empty
        // the filled something in

    } else {
        // if field is empty
        array_push($error_bucket, "You must enter a street name");
    }




    //Displaying information in a list
    if (count($error_bucket) > 0) {
        echo "<h2>You have not entered the following</h2>";
        echo "<ul>";
        for ($i = 0; $i < count($error_bucket); $i++) {
            echo "<li>" . $error_bucket[$i] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Thank you, we will get back to you</p>";
    }

    ?>


    <!-- this is a link to go back to the form -->
    <a href="form.html" title"Form">Go back</a>


</body>

</html>