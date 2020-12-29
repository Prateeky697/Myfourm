<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" > Launch demo modal -->
</button>
<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupmodalLabel">SignUp here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- </div> <?php 

include "dbconnect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
if($password==$cpassword){
     
    //  $password_hash=password_hash("$password",PASSWORD_DEFAULT);

                $sql8="SELECT * FROM `users` WHERE  email='$email'";
                // $sql7="INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password_hash')";
                // $query=mysqli_query($conn,$sql7);
                $query8=mysqli_query($conn,$sql8);
                $numRow=mysqli_num_rows($query8);
                if($numRow>0){
                    // $showError="Email is already exists";
                   echo '<div class="alert alert-danger alert-dismissible fade show my-0" delay="2" role="alert">
                  <strong>Warnning! </strong>your Email id already exist in database: 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                }
               else {
                $sql7="INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
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
?> -->
