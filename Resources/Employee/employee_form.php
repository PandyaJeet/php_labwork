<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Basic Information</title>
</head>
<body>

<h2>Employee Basic Information Form</h2>

<form method="post" action="process_employee.php">
    <label>Employee ID:</label><br>
    <input type="text" name="emp_id" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="emp_name" required><br><br>

    <label>Department:</label><br>
    <input type="text" name="department" required><br><br>

    <label>Salary:</label><br>
    <input type="number" name="salary" required><br><br>

    <input type="submit" name="submit" value="Save Employee">
</form>

<br>
<a href="view_employee.php">View Employee Data</a>

</body>
</html>
