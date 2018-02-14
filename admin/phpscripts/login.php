<?php
function logIn($username, $password, $ip) {
  require_once('connect.php');
  $username = mysqli_real_escape_string($link, $username);
  $password = mysqli_real_escape_string($link, $password);
  $loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
  $userTest = mysqli_query($link, $loginstring);
  echo mysqli_num_rows($userTest);
  if(mysqli_num_rows($userTest)){
    $founduser = mysqli_fetch_array($userTest, MYSQLI_ASSOC);
    $id = $founduser['user_id'];
    $_SESSION['user_id'] = $id;
    $_SESSION['user_name']= $founduser['user_fname'];
    if(mysqli_query($link, $loginstring)){
      $update = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
      $updatequery = mysqli_query($link, $update);
      //date and time of LAST login
      $lastTime = "UPDATE tbl_user SET user_date = NOW()  WHERE user_id = {$id}";
      $showTime = mysqli_query($link,$lastTime);
    }
    redirect_to("admin_index.php");
  }else{
    $message = "Username and or password is incorrect. <br> Please make sure your caplock key is turned off.";
    return $message;
  }
  mysqli_close($link);
}
?>
