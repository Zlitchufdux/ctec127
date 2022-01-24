<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to the Washington State Community College Page</h1>
    <?php
    $college = "Clark college";
    ?>
    <h2>List of Colleges in the State</h2>
    <ul>
        <li>Evergreen College</li>
        <li>Longview Community College</li>
        <?php
        echo $college == "Clark college" ? "<li>Clark College in Vancouver, WA</li>" : "<li>Not Available</li>";
        ?>
        <li>College of Yakima</li>
    </ul>











</body>

</html>