<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Please fill out your first name</h1>
    <?php

    // This determines which request method by the user was used to access the page. In this case, you posted, aka clicked a submit button.
    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        //next, let's declare some variables real quick to use below 
        $firstName = $_POST['firstname'];
        //Remember: $_POST is a super global, so any section of the code below can pull data from here.

        if (!empty($_POST['firstname'])) {      //next, we need php to check if the field is empty or not using the !empty.
            $firstName = $_POST['firstname'];
        } else {
            $firstName = NULL;
        }




        // Once php checks the text field, this will determine what to do if the field is empty or not empty
        if ($firstName) {
            echo "<h3>Your first name is: $firstName</h3>";     //if not empty, it will show the name you entered
        } else {
            echo "<p>Please fill out all your first name</p>";   //if empty, it will give you this message
        }
    }
    ?>



    <!-- Form action=" "> Specifies where the form's data is sent to when submitted. In the case below, it is sent back to itself. So it will pop up on the screen. If you want to send it to a different form, use a different php name. -->

    <!-- Method="post" is designed to send data to a server or file from a specific source.  -->

    <form action="Making-a-form-to-type-in.php" method="post">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <!-- as you can see, the firstname is linked to the $_POST['firstname'] declared uptop. -->
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter your first name" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>"> <!-- value isset means the text you type will stay in the field after submitting -->


            <!-- this is a drop down menu that gives you options -->
            <select name="options">
                <option value="--Select--">--Select--</option>
                <option value="senior">Sr</option>
                <option value="junior">Jr</option>
                <option value="thesecond">II</option>
                <option value="thethird">III</option>
                <option value="thefourth">IV</option>
            </select>
        </div>



        <!-- This is a button created that allows you to submit (post) data -->
        <button type="submit" class="btn btn-primary">Submit</button>



</body>

</html>