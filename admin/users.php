<?php require_once('inc/top.php');
require_once('../inc/db.php');



?>


 
<?php




 if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
else if(isset($_SESSION['username']) and   isset($_SESSION['role']) )    {
    if($_SESSION['role']=='author')
            header('location:index.php');
   
  
}




if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $del_check_query = "SELECT * FROM users WHERE id = $del_id";
    $del_check_run = mysqli_query($connection, $del_check_query);
    if(mysqli_num_rows($del_check_run) > 0){
        $del_query = "DELETE FROM `users` WHERE `users`.`id` = $del_id";
        if(isset($_SESSION['username']) && isset($_SESSION['role']) ){
            if($_SESSION['role'] == 'admin'){
            if(mysqli_query($connection, $del_query)){
                $msg = "User Has been Deleted";
            }
            else{
                $error = "User has not been deleted";
            } 
        }}
    }
    else{
        header('location: index.php');
    }
}

if(isset($_POST['checkboxes'])){
    foreach($_POST['checkboxes'] as $user_id){
        $bulk_option = $_POST['bulk-options'];
     
    
    if($bulk_option == 'delete'){
        $bulk_del_query="DELETE FROM `users` WHERE `users`.`id` = $user_id ";
        mysqli_query($connection, $bulk_del_query);
       
    }
    else if($bulk_option == 'author'){
        
         $bulk_author_query=" UPDATE `users` SET `role` = 'author' WHERE `users`.`id` = $user_id";
          mysqli_query($connection, $bulk_author_query);
    }
    
     else if($bulk_option == 'admin'){
       
         $bulk_admin_query=" UPDATE `users` SET `role` = 'admin' WHERE `users`.`id` = $user_id ";
          mysqli_query($connection, $bulk_admin_query);
    }
}
}


?>  
    
  </head>
  <body>

 <div id="wrapper">
   <?php require_once('inc/header.php');
?>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-3">
   <?php require_once('inc/sidebar.php');
?>
          </div>
          <div class="col-md-9">
             <h1><i class="fa fa-users"></i>Users <small>View All Users</small></h1>
              <ol class="breadcrumb">
  <li ><a href="index.html"><i class="fa fa-tachometer"></i>  DASHBOARD</a></li>
  <li class="Active"><i class="fa fa-folder-users"></i> Users</li>
  
</ol>
        <?php
          $query="SELECT *FROM users ORDER BY id DESC";
          $run=mysqli_query($connection,$query);
          if(mysqli_num_rows($run)> 0){
         
                  
           ?>
           <form action="" method="post">
          <div class="row">
              <div class="col-sm-8">
                  
                      <div class="row">
                          <div class="col-xs-4">
                              <div class="form-group">
                                  <select name="bulk-options" id="" class="form-control">
                                      <option value="delete">Delete</option>
                                      <option value="author">Change To Author</option>
                                      <option value="admin">Change to Admin</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-xs-8">
                              <input type="submit" class="btn btn-success" value="Apply">
                              <a href="add-user.php" class="btn btn-danger">Add New</a>
                          </div>
                      </div>
                  
              </div>
          </div>
          <?php
              if(isset($error)){
                                 echo  "<span style='color:red' class='pull-right'>$error</span>";  
              }
          else if(isset($msg)){
                                 echo  "<span style='color:green' class='pull-right'>$msg</span>";  
              }
              
              
              ?>
              
          
          <table class="table table-hover table-striped table-bordered">
              <thead>
                  <tr>
                     <th><input type="checkbox" id="selectallboxes"></th>
                      <th>Sr #</th>
                      <th>Date </th>
                      <th>Name</th>
                      <th>User_name</th>
                      <th>Email</th>
                      <th>Image</th>
                      <th>Password</th>
                      <th>Role</th>
                
                      <th>Edit</th>
                      <th>Del</th>
                  </tr>
              </thead>
              <tbody>
                 
                 <?php
                        while($row=mysqli_fetch_array($run)){
                                $id=$row['id'];
                                 $first_name=ucfirst($row['first_name']);
                             $last_name=ucfirst($row['last_name']);
                             $email=$row['email'];
                             $username=$row['username'];
                             $role=$row['role'];
                              $image=$row['image'];
                             $date=getdate($row['date']);
                            $day=$date['mday'];
                            $month=substr($date['month'],0,3);
                                 $year=$date['year'];
                        
                       
                  
                  ?>
                  <tr>
                      <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id;?>"<?php  echo $id;?>"></td>
                      <td><?php echo $id; ?></td>
                      <td><?php echo "$day $month $year"; ?></td>
                      <td><?php echo "$first_name $last_name"; ?></td>
                      <td><?php echo $username; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><img src="img/<?php echo $image; ?>" width="30px" class="img-circle"></td>
                      <td>*********</td>
                      <td><?php echo $role; ?></td>
                     
                      <td><a href="edit-user.php?edit=<?php echo $id; ?>"><i class="fa fa-pencil"></i></a></td>
                      <td><a href="users.php?del=<?php echo $id; ?>"><i class="fa fa-times"></i></a></td>
                  </tr>
                  
                  <?php 
                             }
                  ?>
                  
       </tbody>
          </table>
          
        <?php       
          }
              
    else{
                  echo "<center><h2>NO users Avaiable Now</h2></center>";}
        ?> 
         </form> 
          </div>
      </div>
  </div>
     <?php require_once('inc/footer.php');
?>
