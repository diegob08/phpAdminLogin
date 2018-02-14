
<?php
  //init_set('display');
//  error_reporting(!_ALL);
  require_once('phpscripts/config.php');

  $ip = $_SERVER['REMOTE_ADDR'];
  //  echo $ip;

  if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username !== "" && $password !== ""){ //checking that both are not empty
        //echo "you can type;)";
        $result = login($username, $password, $ip);
        //$message = $result;
        redirect_to("admin_index.php");

    }else{
    $message = "Please fill in the required fields";
    //echo $message;
    }
  }


?>

<!doctype html>
<html>
<head>
<meta charset ="UTF-8">
<link rel="stylesheet" href="css/main.css">
<title>User Login</title>
</head>
<body>
<div id="loginCont">
  <h1 class="title">Admin Login</h1>
  <section class= "msg"><?php if(!empty($message)){echo $message;} ?></section>
  <section id="formSect">
  <form action="admin_login.php" method="post">
    <label class="hidden">Username:</label>
    <input type="text" name="username" value="" placeholder="username">
    <label class="hidden">Password:</label>
    <input type="password" name="password" value="" placeholder="password">
    <input type="submit" name="submit" value="Sign In">
  </form>
</section>
</div>
</body>
</html>
