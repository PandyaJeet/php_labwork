<?php
session_start();

if (isset($_POST['submit'])) {

    $employee = [
        "emp_id"     => $_POST['emp_id'],
        "emp_name"   => $_POST['emp_name'],
        "department" => $_POST['department'],
        "salary"     => $_POST['salary']
    ];

    // Initialize array if not exists
    if (!isset($_SESSION['employees'])) {
        $_SESSION['employees'] = [];  // Blank array of Session variable
    }

    // Store employee data in session array
    $_SESSION['employees'][] = $employee;

    echo "<h3>Employee saved successfully!</h3>";
    echo "<a href='employee_form.php'>Add Another Employee</a><br>";
    echo "<a href='view_employee.php'>View Employees</a>";
}
?>
