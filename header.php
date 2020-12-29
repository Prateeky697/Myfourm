<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>iDiscuss</title>
    <link rel="stylesheet" href="img/bootstrap.min.css">
</head>

<body> <?php include "signupmodal.php" ; 
    include "loginmodal.php" ; 
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="/fourm">iDiscuss</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/fourm">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categries</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Programing Language</a>
                        <a class="dropdown-item" href="#">Web disigning </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> Comptetive Programing</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contect.php" tabindex="-1" aria-disabled="true">Contect</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 row">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form> <?php 
            // session_start();
        //   echo  $_SESSION['useremail'];
            if($_SESSION['loggedin']=true)
            {
                echo '  <button class="btn btn-dark ml-4 " type="submit" ><a class="text-light" href="logout.php">logout</a></button>';
                // echo "$_SESSION['useremail']";
                
            }else{
                echo '<button class="btn btn-dark ml-4 " type="submit" data-toggle="modal"
                data-target="#loginmodal">Login</button>
                 <button class="btn btn-secondary ml-2 "><a class="text-light" href="handlesignup.php">SignUp</a></button>
                </div>';
            }
            ?>
            <!-- <button class="btn btn-dark ml-4 " type="submit" data-toggle="modal"
                data-target="#loginmodal">Login</button>
            <button class="btn btn-secondary ml-2 "><a class="text-light" href="handlesignup.php">SignUp</a></button> -->
        </div>
    </nav>
    <!-- <script src="bootstranp.bundle.min.js"></script> -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
