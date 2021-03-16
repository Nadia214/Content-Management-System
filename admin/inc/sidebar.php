<?php
$session_role1 = $_SESSION['role'];

$get_comment = "SELECT * FROM comments WHERE status = 'pending'";
$get_comment_run = mysqli_query($connection, $get_comment);
$num_of_rows = mysqli_num_rows($get_comment_run);
?>              <div class="list-group">
  <a href="index.php" class="list-group-item active">
  <i class="fa fa-columns"></i>
   Dashboard
  </a>
          <a href="posts.php" class="list-group-item">
         
           <i class="fa fa-file"></i>  All POSTS
           </a>
           <a href="media.php" class="list-group-item">
     
           <i class="fa fa-database"></i>  MEDIA
           </a>
             <?php
                        if($session_role1 == 'admin'){
                            
                        
                        ?>
            <a href="comments.php" class="list-group-item">
                <?php
                          if($num_of_rows > 0){
                              echo "<span class='badge'>$num_of_rows</span>";
                          }
                          ?>
            
                <i class="fa fa-comments"></i>  COMMENTS
            </a>
             <a href="categories.php" class="list-group-item">
                 <span class="badge"></span>
           <i class="fa fa-folder-open"></i>  CATAGORIES
             </a>
                  <a href="users.php" class="list-group-item">
                     
               <i class="fa fa-address-card"></i> USERS
                  </a>
                  <?php }?>
</div>