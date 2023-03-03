<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  require("Function\CheckLogin.php");
  check_login();
  ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./home.css">
    <title>Home</title>
</head>

<body>
<div class="slide-bck-center"><h1>WELCOME</h1></div>
<div class=".slide-bck-top">
<nav>
  <ul>
   
  <a href="M_index.php"><li>
    HOME
      <span></span><span></span><span></span><span></span>
    </li></a>
    <!--<a href="M_edit.php"><li>
    EDIT
      <span></span><span></span><span></span><span></span>
    </li></a>-->
    <a href="M_index.php"><li>
      ABOUT ME
      <span></span><span></span><span></span><span></span>
    </li></a>
    <a href="Login_out\M_logout.php"><li>
      LOG OUT
      <span></span><span></span><span></span><span></span>
    </li></a>
  </ul>
</nav>
</div>
</body>

</html>