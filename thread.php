<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFourm</title>
</head>

<body> <?php include"header.php"; ?> <?php include'dbconnect.php'; ?> <?php
        $id=$_GET["thread_id"];
        $sql2="SELECT * FROM `threads` WHERE `thread_id`=$id";
        $query=mysqli_query($conn,$sql2 );
        $noresult=true;
        while($row=mysqli_fetch_assoc($query)){
            $noresult=false;
            $thread_id=$row["thread_id"];
            $title=$row["thread_title"];
            $thread_desc=$row["thread_desc"];
            $thread_timestamp=$row["timestamp"];
        }
        ?>
    <!-- form in logical coding in store the database start  --> <?php
     $showalart=false;
     $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST'){
        //  $comment_title=$_POST['comment_title'];
         $comment_desc=$_POST['comment_desc'];
         $sql4="INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_time`) VALUES (NULL, '$comment_desc', '$id', current_timestamp())";
         $sql5="SELECT * FROM `comments` WHERE `thread_id`=$id";
         $result_comment=mysqli_query($conn,$sql4);
         $result_comment2=mysqli_query($conn,$sql5);
         
         $showalart=true;
         if($showalart){
                        echo '<div class="alert alert-success alert-dismissible fade show"       role="alert">
                              <strong>Success!</strong> your comment is added.
                              <button type="button" class="close" data-dismiss="alert"       aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>';
         }
     }
    
     ?>
    <!-- form in logical coding in store the database end  -->
    <div class="container">
        <div class="row">
            <!-- My jumbotron?/ -->
            <div class="jumbotron">
                <h1 class="display-4"><?php echo"$title";?></h1>
                <p class="lead">P<?php echo"$thread_desc";?> </p>
                <hr class="my-4">
                <p>It is a interpreter working in copliation time Python is very more inteligents. </p>
                <p>Posted by:Prateek yadav</p>
            </div>
        </div>
        <!-- comments form codeline is here start-->
        <div class="container">
            <!-- start discussion form is here -->
            <h3>Reply your commet</h3>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                <div class="form-group">
                    <label for="textarea">Post a comment </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" id="desc"
                        name="comment_desc"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-danger ">Submit</button>
            </form>
        </div>
        <!-- comments form codeline is here end-->
        <div class="container">
            <div class="row">
                <h3>your discussion is here</h3> <?php
                 
      while($row1=mysqli_fetch_assoc($result_comment2)){
          $noresult=false;
          $comment_id=$row1["comment_id"];
            $comment_content=$row1["comment_content"];
            $thread_id_in_comment=$row1["thread_id"];
            // $comment_timestamp=$row1["timestamp"];
             echo 
             
             '<div class="container">
             <div class="row">
         
            <div class="media py-3">
                <img src="img/userdefalt1.jpg" style="font-size:12px" width="34px" class="mr-3" alt="...">
                <div class="media-body">
                <b class="py-0 m-0">unknows users</b>
                 <h5 class="mt-0 py-0 "></a></h5> '.$comment_content.'
                </div>
            </div>
            </div>
            </div>';  
        }
        if($noresult){
             echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No result found</h3>
    <p class="lead">Be the first person ask first questions </p>
  </div>
</div>';
        }
        ?>
            </div>
        </div>
        <!-- commented block of start -->
        <!-- media object? <?php
        $id=$_GET["thread_id"];
        $sql2="SELECT * FROM `threads` WHERE `thread_cat_id`=$id";
        $query=mysqli_query($conn,$sql2 );
            while($row=mysqli_fetch_assoc($query)){
            $thread_id=$row["thread_id"];
            $title=$row["thread_title"];
            $thread_desc=$row["thread_desc"];
            $thread_timestamp=$row["timestamp"];
     
    echo '
    
    <div class="container">
    <div class="row">
         
            <div class="media py-3">
                <img src="img/userdefalt1.jpg" style="font-size:12px" width="34px" class="mr-3" alt="...">
                <div class="media-body">
                 <h5 class="mt-0 py-2 ">'.$title.': '.$thread_timestamp.'</a></h5> '.$thread_desc.'
                </div>
            </div>
        </div>';}
        ?> -->
        <!-- commented block of end -->
    </div> <?php include'footer.php'; ?>
</body>

</html>
