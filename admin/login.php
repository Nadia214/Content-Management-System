<?php
ob_start();
session_start();

require_once('../inc/db.php');
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($connection,strtolower($_POST['username']));
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $check_username_run = mysqli_query($connection, $check_username_query);
    if(mysqli_num_rows($check_username_run) > 0){
        $row = mysqli_fetch_array($check_username_run);
        
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_role = $row['role'];
        $db_author_image = $row['image'];
        
        $password = crypt($password, $db_password);
        
        if($username == $db_username && $password == $db_password){
            header('Location: index.php');
             $_SESSION['username'] = $db_username;
            $_SESSION['role'] = $db_role;
            
            $_SESSION['author_image'] = $db_author_image;
        }
        else{
            $error = "Wrong Username or Password";
        }
    }
    else{
        $error = "Wrong Username or Password";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imgg/icon.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script src="js/bootstrap.js"></script>
     <script src="js/jquery-3.3.1.min.js"></script>
    
    <title>LOGIN | ADMIN PANEL</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">

 
  </head>
  
  <style type="text/css">
      
body{
      background: url('img/login.png')  no-repeat;
    width: 100%;
    height: 100%;
    
}
      h1 {color:white;
      text-align: center;
      }
p {color:white;}
          
#log{
  
    padding: 60px 40px;
    margin-top: 80px;


-webkit-box-shadow: -7px -3px 32px 19px rgba(0,0,0,0.75);
-moz-box-shadow: -7px -3px 32px 19px rgba(0,0,0,0.75);
box-shadow: -7px -3px 32px 19px rgba(0,0,0,0.75);
  }  
    </style>
  

  <body>

    <div class="container-fluid bg">

       <div class="row">
         <div class="col-md-4 col-sm-4 col-xs-12"></div>
          <div class="col-md-4 col-sm-4 col-xs-12">
              <form id="log" action="" method="post" >
                  <div class="form-group">
                      <h1 class="form-signin-heading">Please Log in</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username" >
                  </div>
                    <div class="form-group">
                   
        <label for="password" class="sr-only">password</label>
        <input type="password" id="password" class="form-control" name="password" placeholder="password" >
                  </div>
                  
                  <div class="checkbox">
                       <label>
           <?php
            if(isset($error)){
                echo "$error";
            }
                           ?>
          </label>
                  
                  </div>
                  <input type="submit" name="submit" value="SIGN IN" class="btn btn-danger btn-lg">
                  
              </form>
          </div>
           <div class="col-md-4 col-sm-4 col-xs-12"></div>
       </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>