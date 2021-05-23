<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];


    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: crud/welcome.php");
            }
            else{
                $showError = "Invalid Credentials";
            }
        }

    }
    else{
        $showError = "Invalid Credentials";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style media="screen">
    body{
      /* background-color: rgba(30,30,20,0.5);     */
      background-image: url(https://jooinn.com/images/simple-starry-space-background.jpg);
      background-size: cover;
      color: whitesmoke;
    }
    body{
      background-image: url(https://jooinn.com/images/simple-starry-space-background.jpg);
      background-size: cover;
      color: whitesmoke;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    .box{
      width: 300px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      /* background: #35323f; */
      text-align: center;
      border-radius: 40px;
      opacity: 0.7;
      background-image: url(https://exoplanets.nasa.gov/home_stars/stars6.jpg);
      background-size: cover;
    }
    .box:hover{
      opacity: 1;
    }

    .box h1{
      color: white;
      text-transform: uppercase;
      font-weight: 500;
    }
    .box input[type = "text"],.box input[type = "password"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #44b3fd;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }
    .box input[type = "text"]:focus,.box input[type = "password"]:focus{
      width: 280px;
      border-color: #2ecc71;
    }
    .box input[type = "submit"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    .box input[type = "submit"]:hover{
      background: #2ecc71;
    }

    </style>
  </head>
  <body>
    <?php require '_nav.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <form action="/loginsystem/login.php" class="box" method="post">
        <div class="form-group">
            <label for="username">Crew Member ID</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" >

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
