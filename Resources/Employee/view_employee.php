<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Employees</title>
</head>
<body>

<h2>Employee List</h2>

<?php
if (!empty($_SESSION['employees'])) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Salary</th>
          </tr>";

    foreach ($_SESSION['employees'] as $emp) {
        echo "<tr>
                <td>{$emp['emp_id']}</td>
                <td>{$emp['emp_name']}</td>
                <td>{$emp['department']}</td>
                <td>{$emp['salary']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No employee data available.</p>";
}
?>

<br>
<a href="employee_form.php">Go Back</a>

</body>
</html>
