<?php // Filename: form.inc.php 
?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->

<?php
// Button label logic
if (basename($_SERVER['PHP_SELF']) == 'create-record.php') {
    $button_label = "Save New Record";
} else if (basename($_SERVER['PHP_SELF']) == 'update-record.php') {
    $button_label = "Save Updated Record";
} else if (basename($_SERVER['PHP_SELF']) == 'advanced-search.php') {
    $button_label = "Search...";
}
?>
<!--Here are all the forms you will have on the create record area -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label class="col-form-label" for="first">First Name</label>
    <input class="form-control" type="text" id="first" name="first" value="<?= isset($first) ? $first : null ?>">
    <br>
    <label class="col-form-label" for="last">Last Name</label>
    <input class="form-control" type="text" id="last" name="last" value="<?= isset($last) ? $last : null ?>">
    <br>
    <label class="col-form-label" for="student_id">Student ID </label>
    <input class="form-control" type="number" id="student_id" name="student_id" value="<?= isset($student_id) ? $student_id : null ?>">
    <br>
    <label class="col-form-label" for="gpa">GPA </label>
    <input class="form-control" type="number" id="gpa" name="gpa" min="0" max="4" step="0.01" value="<?= isset($gpa) ? $gpa : null ?>">
    <br>

    <!-- financial_aid_yes is next to value=1 so it becomes sticky -->
    <p>Financial Aid</p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="financial_aid" value="1" <?= $financial_aid_yes ? 'checked' : null ?> id="fin_aid_yes">
        <label class="form-check-label" for="fin_aid_yes">
            Yes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="financial_aid" value="0" <?= $financial_aid_no ? 'checked' : null ?> id="fin_aid_no">
        <label class="form-check-label" for="fin_aid_no">
            No
        </label>
    </div><br>
    <label class="col-form-label" for="degree_program">Degree Program</label>
    <select class="form-control" name="degree_program" id="degree_program">
        <option selected value="Undeclared" <?= $degree_program == "Undeclared" ? "selected" : null ?>>Undeclared</option>
        <option value="AAT Web Development" <?= $degree_program == "AAT Web Development" ? "selected" : null ?>>AAT Web Development</option>
        <option value="AAT Computer Support" <?= $degree_program == "AAT Computer Support" ? "selected" : null ?>>AAT Computer Support</option>
        <option value="CP Information Technology Skills" <?= $degree_program == "CP Information Technology Skills" ? "selected" : null ?>>CP Information Technology Skills</option>
        <option value="AST2 Computer Science" <?= $degree_program == "AST2 Computer Science" ? "selected" : null ?>>AST2 Computer Science</option>
        <option value="AST2 Bioengineering and Chemical Engineering" <?= $degree_program == "AST2 Bioengineering and Chemical Engineering" ? "selected" : null ?>>AST2 Bioengineering and Chemical Engineering</option>
    </select> <br>
    <label class="col-form-label" for="email">Email</label>
    <input class="form-control" type="text" id="email" name="email" value="<?= isset($email) ? $email : null ?>">
    <br>
    <label class="col-form-label" for="phone">Phone</label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?= isset($phone) ? $phone : null ?>">
    <br>
    <br>
    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;
    <button class="btn btn-primary" type="submit"><?= $button_label ?></button>
</form>