
<?php
  //init_set('display');
//  error_reporting(!_ALL);

  require_once('phpscripts/config.php');
  confirm_logged_in();

?>

<!doctype html>
<html>
<head>
<meta charset ="UTF-8">
<title>CMS  PORTAL</title>
</head>
<body>

  <h1>Welcome Company Name</h1>
  <?php
  echo "<h2>Hi-{$_SESSION['user_name']}</h2>";
  ?>
</body>
</html>