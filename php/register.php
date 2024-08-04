<?php 
include 'connect.php';

if(isset($_POST['signUp'])){
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

     $checkEmail="SELECT * FROM users WHERE email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows > 0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(Fname,Lname,email,password)
                       VALUES ('$Fname','$Lname','$email','$password')";
        if($conn->query($insertQuery) === TRUE){
            header("location: index.php");
        }
        else{
            echo "Error:".$conn->error;
        }
     }
}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   
   $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows > 0){
    session_start();
    $_SESSION['email']=$email; // Store email in session
    header("Location: startup.html");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }
}
?>
