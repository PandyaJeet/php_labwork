<!--Name : 
Gender : Radio btn
Hobbies : Chck box [Least 5]
City : Drop down [Nadiad, Anand, Surat]
Pincode : 
Email :
Contact No. :
Display in tabular format 	
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method ="POST">
        <table>
        <tr>
        <td>Enter Name : </td>
        <td><input type="text" name="txtname"></td>   
        </tr>
        <tr>
            <td>Enter Gender : </td>
            <td><input type="radio" name="radgender" value="Male"><label for="Male">Male
                <input type="radio" name="radgender" value="Female"><label for="Female">Female
            </td> 
        </tr>
        <tr>
            <td>Hobbies : </td>
            <td>
                <input type="checkbox" name="chkhobbies[]" value="Cricket"> Cricket
                <input type="checkbox" name="chkhobbies[]" value="Football"> Football
                <input type="checkbox" name="chkhobbies[]" value="Chess"> Chess
                <input type="checkbox" name="chkhobbies[]" value="Hockey"> Hockey
                <input type="checkbox" name="chkhobbies[]" value="VolleyBall"> VolleyBall
            </td>
        </tr>    
        <tr>
            <td>City : </td>
            <td>
                <select name="selcity" id="City">
                    <option value="Anand">Anand</option>
                    <option value="Nadiad">Nadiad</option>
                    <option value="Surat">Surat</option>
                </select>
            </td>
        </tr>
        <tr>
        <td>Enter Pincode : </td>
        <td><input type="text" name="txtpincode"></td>   
        </tr>
        <tr>
        <td>Enter Contact No. : </td>
        <td><input type="text" name="txtcontact"></td>   
        </tr>
        <tr>
            <td colspan ="2">
            <input type="submit" name="btnsubmit" value="Doom">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
    if (isset($_POST["btnsubmit"])){
        $name = $_POST["txtname"];
        $gender = $_POST["radgender"];
      //  $hobbies = $_POST["chkhobbies"];
        $city = $_POST["selcity"];
        $pin = $_POST["txtpincode"];
        $contact = $_POST["txtcontact"];
         print ("Entered Name: ". $name."<br>");    
        print ("Entered Gender : ". $gender."<br>"); 
        //print("Entered hobbies : ". $hobbies. "<br>");
        //echo implode(',', $hobbies);
        print("Entered Hobbies : ");
        foreach ($_POST["chkhobbies"] as $hobby){
            print ($hobby . " ");
        }
        print("<br>Entered City : ". $city. "<br>");
        print("Entered pincode : ". $pin. "<br>");
        print("Entered contact no. : ". $contact. "<br>");
    }
?>  