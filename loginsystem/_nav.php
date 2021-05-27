<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg" style="background-image: url(https://jooinn.com/images/simple-starry-space-background.jpg);">
  <a class="navbar-brand" href="/loginsystem" ">iSPACE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/loginsystem/welcome.php"><span class="sr-only">Home</span></a>
      </li>';

      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/loginsystem/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
      </li>';
    }

    echo '</ul>
   
  </div>
</nav>';
?>

<!-- <img src="https://www.redwolf.in/image/cache/catalog/marketplace/Samay%20Raina/nasha-black-t-shirt-700x700.png"
     height="80px" width="80px"> -->