<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="logout-page">

    <div class="logout-box">

        <h1>Thank You!</h1>

        <?php

        $email = isset($_GET['email']) ? $_GET['email'] : '';

        print "<div class='logout-message'>
                Thank you for choosing me
                </div>";

        print "<p class='logged-user'>
                Welcome $email
                </p>";

        print "<a class='login-again' href='login.php'>
                Login Again
                </a>";

        ?>

    </div>

</div>

</body>
</html>