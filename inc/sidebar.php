                   <div class="row2">
                   
               </div>
                    <div class="widgets">
                        <form action="index.php" method="post">

                        <div class="input-group">
      <input type="text" name="search-title"  class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
       <input type="submit" value="GO" class="btn btn-success" name="search">
      </span>
    </div></form>
    </div>
    <div class="widgets">
        <div class="popular">
           <hr>
            <h4>RECENT POSTS</h4>
        

             <?php
                    $p_query="SELECT * FROM posts  WHERE status='publish' ORDER BY id DESC LIMIT 5";
               $p_run=mysqli_query($connection,$p_query);
                        if(mysqli_num_rows($p_run) >0){
                          
                      while($p_row=mysqli_fetch_array($p_run)){
                          $p_id=$p_row['id'];
                          $p_date=getdate($p_row['date']);
                          $p_day=$p_date['mday'];
                      $p_month=$p_date['month'];
                      $p_year=$p_date['year'];
                          $p_title=$p_row['title'];
                          $p_image=$p_row['image'];
                      
                    
                    ?>
    <hr>
               <div class="row">
                <div class="col-xs-5">
                   <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php   echo $p_image;?>" alt=""></a>
                </div>
                <div class="col-xs-7 details">
                    <a href="post.php?post_id=<?php echo $p_id;?>"><h5><?php echo $p_title?></h5></a>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php   echo "$p_day $p_month $p_year";?></p>
                </div>
            </div>
            <?php
                      }
                        }
            
            else{
                echo "<h3>NO POSTS AVAILAVLE</h3>";}    ?>
            
            
        </div>
    </div>
                
                
                
                
   <div class="widgets">
        <div class="popular">
            <h4>POPULAR POSTS</h4>
        

             <?php
                    $p_query="SELECT * FROM posts  WHERE status='publish' ORDER BY views DESC LIMIT 5";
               $p_run=mysqli_query($connection,$p_query);
                        if(mysqli_num_rows($p_run) >0){
                          
                      while($p_row=mysqli_fetch_array($p_run)){
                          $p_id=$p_row['id'];
                          $p_date=getdate($p_row['date']);
                          $p_day=$p_date['mday'];
                      $p_month=$p_date['month'];
                      $p_year=$p_date['year'];
                          $p_title=$p_row['title'];
                          $p_image=$p_row['image'];
                      
                    
                    ?>
    <hr>
               <div class="row">
                <div class="col-xs-5">
                   <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php   echo $p_image;?>" alt=""></a>
                </div>
                <div class="col-xs-7 details">
                    <a href="post.php?post_id=<?php echo $p_id;?>"><h5><?php echo $p_title?></h5></a>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php   echo "$p_day $p_month $p_year";?></p>
                </div>
            </div>
            <?php
                      }
                        }
            
            else{
                echo "<h3>NO POSTS AVAILAVLE</h3>";}    ?>
            
            
        </div>
    </div>
                    
                
                
                
                
                
                 
 
        
        
        
        
        
        
        
        
        
    <div class="widgets">
        <div class="CATEGORIES">
            <h4>Recent Posts</h4>
            
    <hr>
    <div class="row">
        <div class="col-xs-6">
                <ul>
              <?php
                    $c_query="SELECT * FROM categories";
               $c_run=mysqli_query($connection,$c_query);
                     if(mysqli_num_rows($c_run) >0){
                            $count=2;
                         while($c_row=mysqli_fetch_array($c_run)){
                         
                           $c_id=$c_row['id'];
                            $c_category=$c_row['category'];
                             $count = $count+1;
                             
                             if(($count%2)==1){
                             
                             echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";}
                             
                             
                             
                             
                         }
                     }
                    else{
                        echo "<p>NO CATEGORY</p>";
                    }
                    ?>
                </ul></div>
        
        <div class="col-xs-6">
                <ul>
                    <?php
                    $c_query="SELECT * FROM categories";
               $c_run=mysqli_query($connection,$c_query);
                     if(mysqli_num_rows($c_run) >0){
                            $count=2;
                         while($c_row=mysqli_fetch_array($c_run)){
                         
                           $c_id=$c_row['id'];
                            $c_category=$c_row['category'];
                             $count = $count+1;
                             
                             if(($count%2)==0){
                             
                             echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";}
                             
                             
                             
                             
                         }
                     }
                    else{
                        echo "<p>NO CATEGORY</p>";
                    }
                    ?>
                </ul> </div></div></div>
    
    
    
    
    
     </div>
             
             
             
      <div class="widgets">
        <div class="popular">
            <h4>Social Icon</h4>
            <hr>

            <div class="row">
                <div class="col-xs-3">
                    <a href="#"><img src="img/facebook.png" alt="FACEBOOK"></a>
                </div>
                <div class="col-xs-3">
                    <a href="#"><img src="img/google.png" alt="GOOGLEPLUS"></a>
                </div>
                <div class="col-xs-3">
                    <a href="#"><img src="img/instagram.png" alt=""></a>
                </div>
                <div class="col-xs-3">
                    <a href="#"><img src="img/link.png" alt="FACEBOOK"></a>
                </div>
            </div>
            
    
    
  </div>
    </div>
              
    
              
                        
                                  
                                          
    
               
               
               
               
               
                </div>