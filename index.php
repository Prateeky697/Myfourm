<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFourm</title>
</head>

<body> <?php 

include"header.php"; 
?> <?php include'dbconnect.php';

// echo $_GET["loginsuccess"];
// session_start();

?> <div class="fluied-container">
        <div class="row">
            <div class="row ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/slider1.jpg" class="d-block w-80%" width="100%" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/slider2.jpg" class="d-block w-80%" width="100%" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/slider3.jpg" class="d-block w-80%" width="100%" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">iDiscuss components</h3>
        <div class="row"> <?php
    $sql="SELECT * FROM `categories`";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($query)){
        $id=$row['category_id'];
        $name=$row['category_name'];
        $desc=$row['category_discription'];
        // $slic=slicc_srign
        
        echo '  <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/300x200/?'.$name.',programming" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-danger" href="threadlist.php?categoryid='.$id.'">'.$name.'</a></h5>
                        <p class="card-text">'.substr($desc,0,60).'...</p>
                        <a href="threadlist.php?categoryid='.$id.'" class="btn btn-danger">View Thead</a>
                    </div>
                </div>
            </div>';
          
     }
            ?> </div>
    </div> <?php include'footer.php'; ?>
</body>

</html>
