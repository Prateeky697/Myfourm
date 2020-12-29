<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
                include "dbconnect.php";
                $email1=$_POST["loginemail"];
                $password=$_POST["loginpassword"];
                $sql="SELECT * FROM `users` WHERE `email`='$email1'";
                $query=mysqli_query($conn,$sql);   
                // echo $query; 
                // $row=mysqli_num_rows($query);
                // echo $row;
                // echo "helllo";
                // $numRow=;
                // echo "$  numRow";
                
                if(mysqli_num_rows($query)==1){
                    $row=mysqli_fetch_assoc($query);
                     $hash=$row['password'];
                     $userid=$row['email'];
                    // echo $password;
                    // $verify=password_verify("$password","$hash");
                    
                    // echo $verify;
                    if($password==$hash){
                        session_start();
                        echo "hellio this line is under the query command";
                        $_SESSION['loggedin']=true;
                        $_SESSION['useremail']=$email;
                        $a=1;
                        echo "logged in";
                        header("Location:/fourm/index.php");
                    }else{
                        echo "<br>error";
                    }
                }
                else{
                    echo "numrow column is not run";
                }
}

?>
