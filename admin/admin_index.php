<?php
require_once('phpscripts/config.php');
confirm_logged_in();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to your admin panel</title>
</head>
<body>
<!--adding time zone-->
<?php
$timeZone = date("H");

if ($timeZone < "12") {
    $greeting = "Good morning!";
} else if ($timeZone >= "12" && $timeZone < "17") {
    $greeting = "Good afternoon!";
} else if ($timeZone >= "17" && $timeZone < "19") {
    $greeting = "Good evening!";
} else if ($timeZone >= "19") {
    $greeting = "Good night!";
}
?>
<h3><?php echo $greeting . ' ' . $_SESSION['user_name']; ?></h3>
<h5><?php echo 'Last Login in ' . $_SESSION['user_date']; ?></h5>
</body>
</html>
