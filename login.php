<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="registration-container">

    <div class="registration-header">
        <h1>Student Registration</h1>
        <p>Please fill in your information</p>
    </div>

    <form action="welcome.php" method="post">

        <div class="form-grid">

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="txtemail" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="txtpass">
            </div>

            <div class="form-group">
                <label>Birthday</label>
                <input type="date" name="txtdate">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="txtfirstname">
            </div>

            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="txtmiddlename">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="txtlastname">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" name="txtage">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="txtaddress">
            </div>

            <div class="form-group">
                <label>City</label>
                <input type="text" name="txtcity">
            </div>

            <div class="form-group">
                <label>Province</label>
                <input type="text" name="txtprovince">
            </div>

            <div class="form-group">
                <label>Zip Code</label>
                <input type="text" name="txtzipcode">
            </div>

            <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" name="txtcontact">
            </div>

            <div class="form-group">
                <label>Nationality</label>
                <input type="text" name="txtnationality">
            </div>

            <div class="form-group">
                <label>Civil Status</label>
                <select name="civilstatus">
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>

            <div class="form-group">
                <label>Course</label>
                <input type="text" name="txtcourse">
            </div>

            <div class="form-group">
                <label>Year Level</label>
                <select name="yearlevel">
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                </select>
            </div>

            <div class="form-group">
                <label>Student ID</label>
                <input type="text" name="txtstudentid">
            </div>

            <div class="form-group">
                <label>School</label>
                <input type="text" name="txtschool">
            </div>

            <div class="form-group full-width">
                <label>Guardian Name</label>
                <input type="text" name="txtguardian">
            </div>

        </div>

        <div class="form-buttons">
            <input type="submit" name="btnsubmit" value="Register">
            <input type="reset" name="btnreset" value="Clear">
        </div>

    </form>

</div>

</body>
</html>