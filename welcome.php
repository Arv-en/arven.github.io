<?php

// Prevent direct access to welcome.php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit();
}

$email = $_POST['txtemail'] ?? '';
$pass = $_POST['txtpass'] ?? '';
$date = $_POST['txtdate'] ?? '';
$gender = $_POST['gender'] ?? '';
$firstname = $_POST['txtfirstname'] ?? '';
$middlename = $_POST['txtmiddlename'] ?? '';
$lastname = $_POST['txtlastname'] ?? '';
$age = $_POST['txtage'] ?? '';
$address = $_POST['txtaddress'] ?? '';
$city = $_POST['txtcity'] ?? '';
$province = $_POST['txtprovince'] ?? '';
$zipcode = $_POST['txtzipcode'] ?? '';
$contact = $_POST['txtcontact'] ?? '';
$nationality = $_POST['txtnationality'] ?? '';
$civilstatus = $_POST['civilstatus'] ?? '';
$course = $_POST['txtcourse'] ?? '';
$yearlevel = $_POST['yearlevel'] ?? '';
$studentid = $_POST['txtstudentid'] ?? '';
$school = $_POST['txtschool'] ?? '';
$guardian = $_POST['txtguardian'] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="welcome-container">

    <h1>Welcome!</h1>

    <div class="welcome-message">
        Welcome <?php echo htmlspecialchars($email); ?>
    </div>

    <table class="info-table">

        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><?php echo htmlspecialchars($pass); ?></td>
        </tr>

        <tr>
            <td>Birthday</td>
            <td><?php echo htmlspecialchars($date); ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo htmlspecialchars($gender); ?></td>
        </tr>

        <tr>
            <td>First Name</td>
            <td><?php echo htmlspecialchars($firstname); ?></td>
        </tr>

        <tr>
            <td>Middle Name</td>
            <td><?php echo htmlspecialchars($middlename); ?></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><?php echo htmlspecialchars($lastname); ?></td>
        </tr>

        <tr>
            <td>Age</td>
            <td><?php echo htmlspecialchars($age); ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo htmlspecialchars($address); ?></td>
        </tr>

        <tr>
            <td>City</td>
            <td><?php echo htmlspecialchars($city); ?></td>
        </tr>

        <tr>
            <td>Province</td>
            <td><?php echo htmlspecialchars($province); ?></td>
        </tr>

        <tr>
            <td>Zip Code</td>
            <td><?php echo htmlspecialchars($zipcode); ?></td>
        </tr>

        <tr>
            <td>Contact Number</td>
            <td><?php echo htmlspecialchars($contact); ?></td>
        </tr>

        <tr>
            <td>Nationality</td>
            <td><?php echo htmlspecialchars($nationality); ?></td>
        </tr>

        <tr>
            <td>Civil Status</td>
            <td><?php echo htmlspecialchars($civilstatus); ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo htmlspecialchars($course); ?></td>
        </tr>

        <tr>
            <td>Year Level</td>
            <td><?php echo htmlspecialchars($yearlevel); ?></td>
        </tr>

        <tr>
            <td>Student ID</td>
            <td><?php echo htmlspecialchars($studentid); ?></td>
        </tr>

        <tr>
            <td>School</td>
            <td><?php echo htmlspecialchars($school); ?></td>
        </tr>

        <tr>
            <td>Guardian Name</td>
            <td><?php echo htmlspecialchars($guardian); ?></td>
        </tr>

    </table>

    <div class="logout-container">
        <a class="logout-button" href="logout.php?email=<?php echo urlencode($email); ?>">
            Logout
        </a>
    </div>

</div>

</body>
</html>