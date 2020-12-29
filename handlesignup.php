<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> <?php include "dbconnect.php";
    include "header.php";
   ?>
    <!-- logic in php_check_syntax --> <?php 

// include "dbconnect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
if($password==$cpassword){
     
     $password_hash=password_hash($password,PASSWORD_DEFAULT);
                $sql8="SELECT * FROM `users` WHERE  email='$email'";
                $query8=mysqli_query($conn,$sql8);
                $numRow1=mysqli_num_rows($query8);
                if($numRow1==1){
                    // $showError="Email is already exists";
                   echo '<div class="alert alert-danger alert-dismissible fade show my-0" delay="2" role="alert">
                  <strong>Warnning! </strong>your Email id already exist in database: 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                }
               else {
                $sql7="INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password_hash')";
                $query=mysqli_query($conn,$sql7);
               if($query){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                 <strong>Success</strong> your query is successfully done 
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                 </div>';
                //  $showAlert=true;
                
                }else{
                    echo '<div class="alert alert-secandory alert-dismissible fade show my-0" role="alert">
                  <strong>Success</strong> your query is not successfully done or your data not inserted on the server. 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                }
            }
     }
else{
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Success</strong> your password is not match please enter the same password:
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

}
?> <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h3 class="text-center p-2">SignUp form</h3>
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                    <div class="form-group">
                        <label for="name">Enter Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="cPassword1">Password</label>
                        <input type="password" class="form-control" name="cpassword" id="cPassword1">
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                </form>
            </div>
        </div>
    </div> <?php include"footer.php";?>
</body>

</html>
