<link rel="stylesheet" href="style.css">

<div class="welcome-container">

    <h1>Welcome!</h1>

<?php

 $email=$_POST['txtemail'];
 $pass=$_POST['txtpass'];
 $date=$_POST['txtdate'];
 $gender=$_POST['gender'];
 $firstname=$_POST['txtfirstname'];
 $middlename=$_POST['txtmiddlename'];
 $lastname=$_POST['txtlastname'];
 $age=$_POST['txtage'];
 $address=$_POST['txtaddress'];
 $city=$_POST['txtcity'];
 $province=$_POST['txtprovince'];
 $zipcode=$_POST['txtzipcode'];
 $contact=$_POST['txtcontact'];
 $nationality=$_POST['txtnationality'];
 $civilstatus=$_POST['civilstatus'];
 $course=$_POST['txtcourse'];
 $yearlevel=$_POST['yearlevel'];
 $studentid=$_POST['txtstudentid'];
 $school=$_POST['txtschool'];
 $guardian=$_POST['txtguardian'];

 print "<div class='welcome-message'>Welcome $email</div>";

 print "<table class='info-table'>

     <Tr><td>Email<td>$email

     <Tr><td>Password<td>$pass

     <Tr><td>Birthday<td>$date

     <Tr><td>Gender<td>$gender

     <Tr><td>First Name<td>$firstname

     <Tr><td>Middle Name<td>$middlename

     <Tr><td>Last Name<td>$lastname

     <Tr><td>Age<td>$age

     <Tr><td>Address<td>$address

     <Tr><td>City<td>$city

     <Tr><td>Province<td>$province

     <Tr><td>Zip Code<td>$zipcode

     <Tr><td>Contact Number<td>$contact

     <Tr><td>Nationality<td>$nationality

     <Tr><td>Civil Status<td>$civilstatus

     <Tr><td>Course<td>$course

     <Tr><td>Year Level<td>$yearlevel

     <Tr><td>Student ID<td>$studentid

     <Tr><td>School<td>$school

     <Tr><td>Guardian Name<td>$guardian";

 print "</table>";

 print "<div class='logout-container'>

     <a class='logout-button' href='logout.php?email=$email'>Logout</a>

     </div>";

?>

</div>