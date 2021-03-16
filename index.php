<?php require_once('inc/top.php');
?>
    
  </head>
  <body>
  
  
   <?php require_once('inc/header.php');
      
      
      
      $number_of_posts=3;
         
      if(isset($_GET['page'])){
          $page_id=$_GET['page'];
      }
      else{
          $page_id=1;
      }
      
       if(isset($_GET['cat'])){
           $cat_id=$_GET['cat'];
           $cat_query="SELECT *FROM catagories WHERE id=$cat_id";
            $cat_run=mysqli_query($connection,$cat_query);
           $cat_row = mysqli_fetch_array($cat_run);
           $cat_name=$cat_row['catagory'];
       }
      
      if(isset($_POST['search'])){
          $search=$_POST['search-title'];
          $all_posts_query="SELECT *FROM posts  WHERE status='publish'";
         
      $all_posts_query .=" and tags LIKE '%$search%'";
        
      $all_posts_run=mysqli_query($connection,$all_posts_query);
      $all_posts=mysqli_num_rows($all_posts_run);
      $total_pages=ceil($all_posts/  $number_of_posts);
      $posts_start_from=($page_id -1)* $number_of_posts;
      }
      else{
      $all_posts_query="SELECT *FROM posts  WHERE status='publish'";
      if(isset($cat_name)){
          $all_posts_query .=" and catagories ='$cat_name'";
      }
      $all_posts_run=mysqli_query($connection,$all_posts_query);
      $all_posts=mysqli_num_rows($all_posts_run);
      $total_pages=ceil($all_posts/  $number_of_posts);
      $posts_start_from=($page_id -1)* $number_of_posts;
      
      }
      
      
      
?>
  
  
  <div class="jumbotron">
     <div class="container">
        <div id="details" class="animated fadeInLeft">
           <h1>WelcomeTo<span>Blog</span></h1>
           <h3>WANT    TO    WRITE   SOMETHING </h3>
            
        </div>
         
     </div>
      <img src="img/2.png" alt="top">
       </div>
       
       
       
       <section>
        <div class="container">
            <div class="row">
               
                <div class="col-md-8">
                  <div class="row2">
                  
               </div>
                  
                
                   <?php
                    $slider_query="SELECT *FROM posts  WHERE status='publish' ORDER BY id DESC LIMIT 5";
               $slider_run=mysqli_query($connection,$slider_query);
                        if(mysqli_num_rows($slider_run) >0){
                  while($row = mysqli_fetch_array($slider_run)){}
                    
                    ?>
                   
                    
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/1.png.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
        this is slider 1
      </div>
    </div>
    <div class="item">
      <img src="img/3.png.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
        this is slide2
      </div>
    </div>
    
       <div class="item">
      <img src="img/4.png.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
        this is slide3
      </div>
    </div>
    
      <div class="item">
      <img src="img/6.png.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
        this is slide4
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    
                    
                    
                     <?php
                        }
             if(isset($_POST['search'])){
                 $search=$_POST['search-title'];
                 $query="SELECT *FROM posts  WHERE status='publish'";
                 $query .=" and tags LIKE  '%$search%'" ;
                  $query  .=" ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";
             }
                    else{
                          $query="SELECT *FROM posts  WHERE status='publish'";
                         if(isset($cat_name)){
                           $query .=" and catagories = '$cat_name'" ; }
                        $query  .=" ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";
                           
                    }
               $run=mysqli_query($connection,$query);
                    if(mysqli_num_rows($run) >0){
                  while($row = mysqli_fetch_array($run)){
                   
                      $id=$row['id'];
                      $date=getdate($row['date']);
                      $day=$date['mday'];
                      $month=$date['month'];
                      $year=$date['year'];
                      $title=$row['title'];
                      $author=$row['author'];
                      $author_image=$row['author_image'];
                      $image=$row['image'];
                      $categories=$row['categories'];
                      $tags=$row['tags'];
                      $post_data=$row['post_data'];
                      $views=$row['views'];
                      $status=$row['status'];
                      
           
        
              ?>
                     <div class="row2">
                  
               </div>
               
              <div class="post">
                    
                 <div class="row">
                     <div class="col-md-2 post-date">
                         <div class="day"><?php  echo $day; ?></div>
                         <div class="month"><?php  echo $month; ?></div>
                         <div class="year"><?php  echo $year; ?></div>
                     </div>
                     <div class="col-md-8 post-title" >
                      <a href="post.php?post_id=<?php  echo $id; ?>"><h2><?php  echo $title; ?> </h2>                    </a> 
                      <p>writen By <span><?php  echo ucfirst($author);  ?></span></p>  
                     </div>
                     <div class="col-md-2 profile-dp">
                        <img src="img/<?php  echo $author_image;  ?>" alt="" class="img-circle">
                         
                     </div>
                 </div>
                <a href="post.php?post_id=<?php  echo $id; ?>"><img src="img/<?php  echo $image;  ?>" alt="picture"></a>
                <p class="description">
                    <?php  echo substr($post_data,0,400)."......";  ?>
                </p>
                <a href="post.php?post_id=<?php  echo $id; ?>" class="btn btn-primary">Read More.......</a>
                <div class="bottom">
                    <span class="first"><i class="fa fa-folder" aria-hidden="true"></i><a href=""><?php  echo ucfirst($categories); ?> 
                    
                    
                    </a></span>|
                    <span class="sec"><i class="fa fa-comments" aria-hidden="true"></i><a href=""> Comments</a></span>
                </div>
                     
                         
                      
                    
                </div>
                
                <?php
                    
                              
                  }
              }
              
              else{
                 echo "<center><h2>NO POSTS AVAILABLE</h2> </center> ";    
              }
                    ?>
                
                
                
                
             
                
                
                
                <nav id="Pagination">
     <ul class="pagination">
   <?php
       for($i=1 ; $i<= $total_pages; $i++){
       
    echo   "<li class='".($page_id==$i ? 'active' : '')."'><a href='index.php?page=".$i."&".(isset($cat_name) ? "cat=$cat_id" : "")."'>$i</a></li>";
   
 
           
       }               
         ?>
  </ul>
</nav>
                                  
            
                                   

                
                
                
                
                
                
                
                
                
            </div>
               
               
               
                <div class="col-md-4">
                  <?php require_once('inc/sidebar.php');
?>

                </div>
            </div>
        </div>
       </section>
      <?php require_once('inc/footer.php');
?>






