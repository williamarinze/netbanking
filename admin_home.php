<?php
    include "validate_admin.php";
    include "custom_header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
</head>

<body>
    <div class="flex-container" style="background-color: rgba(23,23,23,0.5);">
        <div class="flex-item">
            <h1 id="customer" style="color: white; font-family: courier;">
                Welcome Admin !
            </h1>
            <p id="customer" style="max-width:800px; color: white; font-family: cursive;">
                From here you can manage all of core Internet Banking settings.
                You can add/manage customers, view their transactions, edit their
                details and even delete them. You can also post news on the website.
            </p>
        </div>
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
