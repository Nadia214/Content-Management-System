<?php require_once('inc/top.php');
require_once('../inc/db.php');
if(!isset($_SESSION['username'])){
     header('Location:login.php');
 }
else if(isset($_SESSION['username']) and   isset($_SESSION['role']) )    {
    if($_SESSION['role']=='author')
            header('location:index.php');
   
  
}

if(isset($_GET['edit'])){
  $edit_id=$_GET['edit'];
  $edit_query="SELECT * FROM users WHERE id =$edit_id";
  $edit_query_run=mysqli_query($connection ,$edit_query);
    if(mysqli_num_rows($edit_query_run)>0){
        $edit_row=mysqli_fetch_array($edit_query_run);
        $e_first_name=$edit_row['first_name'];
        $e_last_name = $edit_row['last_name'];
        $e_role = $edit_row['role'];
        $e_image = $edit_row['image'];
          $e_details = $edit_row['details'];
         
     
    }
    else{
      header('location:index.php');  
    }
}
else{
    header('location:index.php');
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
             <h1><i class="fa fa-user"></i>  EDIT   USER <small>EDIT  USER DETAILS</small></h1>
              <ol class="breadcrumb">
  <li ><a href="index.html"><i class="fa fa-tachometer"></i>  DASHBOARD</a></li>
  <li class="Active"><i class="fa fa-folder-user"></i>   EDIT USER </li>
  
</ol>
    <?php 
              if(isset($_POST['submit']))
                  
              {
                  
                  $first_name=mysqli_real_escape_string($connection,$_POST['first-name']);
                   $last_name=mysqli_real_escape_string($connection,$_POST['last-name']);
                  
                  
                   $password=mysqli_real_escape_string($connection,$_POST['password']);
                   $role=$_POST['role'];
                   $image=$_FILES['image']['name'];
                   $image_tmp=$_FILES['image']['tmp_name'];
                  
                   $details=mysqli_real_escape_string($connection,$_POST['details']);
                  
                  
                   if(empty($image)){
                            $image = $e_image;
                        }
                  
                  $salt_query="SELECT *FROM users ORDER BY id DESC LIMIT 1";
                  $salt_run=mysqli_query($connection, $salt_query);
                  $salt_row=mysqli_fetch_array($salt_run);
                   $salt=$salt_row['salt'];
                  
                    $insert_password=crypt($password,$salt);
                  
                  if(empty($first_name) or empty($last_name) or empty($image)){
                      
                      $error="all(*) fields are required ";
                      
                  }
                 
                  else{
                    
    $msg="good";
             $update_query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `image` = '$image', `role` = '$role', `details` = '$details'";
                            if(isset($password)){
                                $update_query .= ",`password` = '$insert_password'";
                            }
                            $update_query .= " WHERE `users`.`id` = $edit_id";
                            if(mysqli_query($connection, $update_query)){
                                $msg = "User Has Been Updated";
                                header("refresh:0; url=edit-user.php?edit=$edit_id");
                                if(!empty($image)){
                                    move_uploaded_file($image_tmp, "imgg/$image");
                                }
                            }
                            else{
                                $error = "User Has Not Been Updated";
                            }
                            
                  
                  
                  
                  
                  
                  
                  
                  
         }}
              
              
              ?>
   <div class="row">
       <div class="col-md-8">
           <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="first-name">First Name:* </label>
           <?php
             if(isset($error)){
                 echo  "<span style='color:red' class='pull-right'>$error</span>";
             }
           else if(isset($msg)){
                 echo  "<span style='color:green' class='pull-right'>$msg</span>";
             }
           
           
           ?>
           
           <input type="text" id="first-name" name="first-name" value="<?php echo $e_first_name;?>" class="form-control" placeholder="First Name">
               </div>
               
               
                     <div class="form-group">
           <label for="last-name">Last Name:* </label>
           <input type="text" name="last-name" value="<?php echo $e_last_name;?>" class="form-control" placeholder="Last Name">
       </div>
          
        
          
         
                <div class="form-group">
           <label for="Password">Password:* </label>
           <input type="password" id="password" name="password" class="form-control" placeholder="Password">
       </div>
                <div class="form-group">
           <label for="role">Role:* </label>
           <select name="role" id="role" class="form-control">
               <option value="author" <?php if($e_role == 'author'){echo "selected";}?>>Author</option>
               <option value="admin" <?php if($e_role == 'admin'){echo "selected";}?>>Admin</option>
           </select>
           
       </div>
                <div class="form-group">
           <label for="image">Profile Picture:* </label>
           <input type="file"  id="image" name="image" >
       </div>
                    
                    <div class="form-group">
                                   <label for="details">Details:*</label>
                                   <textarea name="details" id="details" cols="30" rows="10" class="form-control"><?php echo $e_details ?></textarea>
                               </div>
                    
                    
                    
                     <input type="submit" value="Update User" name="submit" class="btn btn-danger">
                
          
           </form>
           
       </div>
       <div class="col-md-4">
          <?php
           
             echo "<img src='img/$e_image' width='300px' class='img-circle img-thumbnail' >"  ;
           
           ?>
           
       </div>
   </div>
    
          </div>
      </div>
  </div>
    <hr>
     <?php require_once('inc/footer.php');
?>
