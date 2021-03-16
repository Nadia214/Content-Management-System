  <?php
$session_role2 = $_SESSION['role'];
$session_username2 = $_SESSION['username'];
?>
    

        
            
                    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">TEDteenWORLD</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Welcome: <i class="fa fa-user"></i> <?php echo ucfirst($session_username2);?></a></li>
        <li><a href="add-post.php"><i class="fa fa-plus-circle"></i> ADD POST</a></li>
        <?php
                  if($session_role2 == 'admin'){
                  ?>
         <li><a href="add-user.php"><i class="fa fa-user-plus"></i> ADD USER</a></li>
         <?php }?>
          <li><a href="profile.php"><i class="fa fa-user"></i> PROFILE</a></li>
           <li><a href="logout.php"><i class="fa fa-power-off"></i> LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
  