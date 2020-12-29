<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFourm</title>
</head>

<body> <?php include"header.php"; ?> <?php include'dbconnect.php'; ?> <?php
        $id=$_GET["categoryid"];
        $sql2="SELECT * FROM `categories` WHERE `category_id`=$id";
        $query=mysqli_query($conn,$sql2 );
            while($row=mysqli_fetch_assoc($query)){
            $catid=$row["category_id"];
            $catname=$row["category_name"];
            $catdesc=$row["category_discription"];
            // $thread_timestamp=$row["timestamp"];
     }
     ?>
    <!-- threa form coding is here means add any query --> <?php
     $showalart=false;
     $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST'){
         $th_title=$_POST['title'];
         $th_desc=$_POST['desc'];
         $sql3="INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', '$th_desc ', '$id', '0', current_timestamp())";
         $result_th=mysqli_query($conn,$sql3);
         $showalart=true;
         if($showalart){
             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your Question are added.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
         }
     }
     ?> <div class="container">
        <div class="row">
            <!-- My jumbotron?/ -->
            <div class="jumbotron">
                <h1 class="display-4"><?php echo"Welcome is $catname Fourm";?></h1>
                <p class="lead"><?php echo"$catdesc";?></p>
                <hr class="my-4">
                <p>It is a interpreter working in copliation time Python is very more inteligents. </p>
                <a class="btn btn-danger btn-lg" href="#" role="button">Extrack here</a>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- start discussion form is here -->
        <h3>Start your discussion</h3>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" id="title" name="title" class="form-control" require>
                <small id="emailHelp" class="form-text text-muted">ask your question write as well as here.</small>
            </div>
            <div class="form-group">
                <label for="textarea">Elaborate your problem </label>
                <textarea class="form-control" id="textarea" rows="2" name="desc" require></textarea>
            </div>
            <button type="submit" class="btn btn-outline-danger ">Submit</button>
        </form>
    </div>
    <div class="container">
        <h3>Browes your question</h3>
        <!-- media object? --> <?php
        $id=$_GET["categoryid"];
        $sql2="SELECT * FROM `threads` WHERE `thread_cat_id`=$id";
        $query=mysqli_query($conn,$sql2 );
        $noresult=true;
        while($row=mysqli_fetch_assoc($query)){
            $noresult=false;
            $thread_id=$row["thread_id"];
            $title=$row["thread_title"];
            $thread_desc=$row["thread_desc"];
            $thread_timestamp=$row["timestamp"];
        
        // echo var_dump($noresult);

        if($noresult){
            echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No result found</h3>
    <p class="lead">Be the first person ask first questions </p>
  </div>
</div>';

        }else{
        echo '<div class="row">
        
        <div class="media py-3">
        <img src="img/userdefalt1.jpg" style="font-size:12px" width="34px" class="mr-3" alt="...">
        <div class="media-body">
        <h5 class="mt-0 py-2 "><a class="text-dark" href="thread.php?thread_id='.$thread_id.'">'.$title.': '.$thread_timestamp.'</a></h5> '.$thread_desc.'
        </div>
            </div>
            </div>';}}
            ?>
    </div> <?php include'footer.php'; ?>
</body>

</html>
