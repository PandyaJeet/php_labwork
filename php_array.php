<!--Student Result Management System using php array-->
<?php
    $students =[
        
        [ //0
            "StudentID" => "24BCA001",
            "Name" => "Anuj",
            "Course" => "BCA",
            "Sem" => "4",
            "Marks" => [
                "PHP" => "70",
                "DBMS" => "80",
                "OS" => "87" 
            ]      
        ],
        [ //1
            "StudentID" => "24BCA002",
            "Name" => "Dhruv",
            "Course" => "BCA",
            "Sem" => "4",
            "Marks" => [
                "PHP" => "75",
                "DBMS" => "70",
                "OS" => "77" 
            ]      
        ],
        [ //2
            "StudentID" => "24BCA003",
            "Name" => "Darshan",
            "Course" => "BCA",
            "Sem" => "4",
            "Marks" => [
                "PHP" => "76",
                "DBMS" => "89",
                "OS" => "87" 
            ]      
        ],
        [ //4
            "StudentID" => "24BCA004",
            "Name" => "Aaryan",
            "Course" => "BCA",
            "Sem" => "4",
            "Marks" => [
                "PHP" => "60",
                "DBMS" => "50",
                "OS" => "97" 
            ]      
        ]
    ]
    
?> 
<html>
    <body style="display: flex; justify-content : center;align-items:center;">
        <table  style="width:60%;text-align:center;border:1px solid black;">
            <tr>
                    <th>Student ID</th><th>Name</th><th>Course</th><th>Semester</th><th >PHP</th><th>DBMS</th><th>OS</th>
            </tr> <?php
            
        foreach ($students as $student) {
            echo "<tr>";
            echo "
            <td>
            {$student['StudentID']}
            </td>";
            echo "<td>{$student['Name']}</td>";
            echo "<td>{$student['Course']}</td>";
            echo "<td>{$student['Sem']}</td>";
            echo "<td>{$student['Marks']['PHP']}</td>";
            echo "<td>{$student['Marks']['DBMS']}</td>";
            echo "<td>{$student['Marks']['OS']}</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>

