<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Your style sheet -->
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 3 - Winter 2022</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <h1>CTEC 127 - Winter 2022</h1>
                <h2>Jason Lindley</h2>
                <div class="alert alert-info" role="alert">
                    <strong>PLEASE NOTE:</strong> You must enter information for all of the fields
                </div>
                <?php

                // Check to see if the PHP server received a POST request
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    /*

                    Write PHP code to check that all four of these fields have values:
                     - the First Name field value
                     - the Last Name field value
                     - the Email field value
                     - the Comments field value

                    If the fields are all not filled in, let the user know that all four fields are
                    required. The data that the user filled in must stay "sticky" and remain in 
                    the fields value attribute in the form.

                    If all four fields are filled in with data, then display each field and its associated
                    value in an unordered HTML list (ul) above the form.

                    Make sure that the page looks good and is readable.

                    The use of spacing (margin and padding) is allowed and encouraged.     
                    */

                    // The statement below has been provided for you
                    $firstName = $_POST["firstname"];
                    $lastName = $_POST["lastname"];
                    $email = $_POST["email"];
                    $comments = $_POST["comments"];






                    // Your code goes below this comment
                    if (!empty($_POST['firstname'])) {
                        $firstName = $_POST['firstname'];
                    } else {
                        $firstName = NULL;
                    }



                    // last name
                    if (!empty($_POST['lastname'])) {
                        $lastName = $_POST['lastname'];
                    } else {
                        $lastName = NULL;
                    }



                    // Email
                    if (!empty($_POST['email'])) {
                        $email = $_POST['email'];
                    } else {
                        $email = NULL;
                    }



                    // Comments
                    if (!empty($_POST['comments'])) {
                        $comments = $_POST['comments'];
                    } else {
                        $comments = NULL;
                    }



                    if ($firstName && $lastName && $email && $comments) {
                        echo "<strong><p>Thanks for filling out a wonderful form!</p></strong>";
                        echo "<strong><p>This is the data we recieved from you.</p></strong>";
                        echo "<ul>";
                        echo "<li>First name: $firstName</li>";
                        echo "<li>Last name: $lastName</li>";
                        echo "<li>Email: $email</li>";
                        echo "<li>Comments: $comments</li>";
                        echo "</ul>";
                    } else {
                        echo "<p>Please fill out all 4 fields</p>";
                    }
                }







                ?>
                <form action="ctec-127-lab-3.php" method="post">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <!-- The PHP code to make the firstname field sticky has been provided for you -->
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter your first name" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter your last name" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="comments" class="form-label">Comments</label>
                        <textarea name="comments" class="form-control" id="comments" rows="3" placeholder="Enter any feedback or comments that you have"><?php echo isset($_POST["comments"]) ? $_POST["comments"] : ''; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Cool SVG Wave Below -->
    <!-- Learn more at http://getwaves.io -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,224L7.3,234.7C14.5,245,29,267,44,240C58.2,213,73,139,87,144C101.8,149,116,235,131,245.3C145.5,256,160,192,175,186.7C189.1,181,204,235,218,245.3C232.7,256,247,224,262,186.7C276.4,149,291,107,305,101.3C320,96,335,128,349,128C363.6,128,378,96,393,96C407.3,96,422,128,436,160C450.9,192,465,224,480,245.3C494.5,267,509,277,524,266.7C538.2,256,553,224,567,229.3C581.8,235,596,277,611,298.7C625.5,320,640,320,655,314.7C669.1,309,684,299,698,282.7C712.7,267,727,245,742,250.7C756.4,256,771,288,785,277.3C800,267,815,213,829,192C843.6,171,858,181,873,170.7C887.3,160,902,128,916,122.7C930.9,117,945,139,960,154.7C974.5,171,989,181,1004,176C1018.2,171,1033,149,1047,149.3C1061.8,149,1076,171,1091,160C1105.5,149,1120,107,1135,101.3C1149.1,96,1164,128,1178,165.3C1192.7,203,1207,245,1222,250.7C1236.4,256,1251,224,1265,224C1280,224,1295,256,1309,245.3C1323.6,235,1338,181,1353,138.7C1367.3,96,1382,64,1396,48C1410.9,32,1425,32,1433,32L1440,32L1440,320L1432.7,320C1425.5,320,1411,320,1396,320C1381.8,320,1367,320,1353,320C1338.2,320,1324,320,1309,320C1294.5,320,1280,320,1265,320C1250.9,320,1236,320,1222,320C1207.3,320,1193,320,1178,320C1163.6,320,1149,320,1135,320C1120,320,1105,320,1091,320C1076.4,320,1062,320,1047,320C1032.7,320,1018,320,1004,320C989.1,320,975,320,960,320C945.5,320,931,320,916,320C901.8,320,887,320,873,320C858.2,320,844,320,829,320C814.5,320,800,320,785,320C770.9,320,756,320,742,320C727.3,320,713,320,698,320C683.6,320,669,320,655,320C640,320,625,320,611,320C596.4,320,582,320,567,320C552.7,320,538,320,524,320C509.1,320,495,320,480,320C465.5,320,451,320,436,320C421.8,320,407,320,393,320C378.2,320,364,320,349,320C334.5,320,320,320,305,320C290.9,320,276,320,262,320C247.3,320,233,320,218,320C203.6,320,189,320,175,320C160,320,145,320,131,320C116.4,320,102,320,87,320C72.7,320,58,320,44,320C29.1,320,15,320,7,320L0,320Z"></path>
    </svg>

</body>

</html>