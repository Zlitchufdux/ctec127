<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Sticky Radio</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <?php

                $financial_aid_yes = true;
                $financial_aid_no = false;

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["financial_aid"])) {
                        if ($_POST["financial_aid"] == '1') {
                            $financial_aid = $_POST["financial_aid"];
                            $financial_aid_yes = true;
                            $financial_aid_no = false;
                        } else {
                            $financial_aid = $_POST["financial_aid"];
                            $financial_aid_yes = false;
                            $financial_aid_no = true;
                        }
                    } else {
                        echo '<div class="alert alert-warning">Please select a value for Financial Aid</div>';
                    }
                }
                ?>
                <form action="sticky-radio.php" method="post">
                    <!-- Bootstrap Radio Button Format -->
                    <p>Financial Aid</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="financial_aid" value="1" id="fin_aid_yes" <?= $financial_aid_yes ? 'checked' : null ?>>
                        <label class="form-check-label" for="fin_aid_yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="financial_aid" value="0" id="fin_aid_no" <?= $financial_aid_no ? 'checked' : null ?>>
                        <label class="form-check-label" for="fin_aid_no">
                            No
                        </label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>