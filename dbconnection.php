<?php
session_start();
//intializing variables
$fname="";
$lname="";
$username ="";
$email="";
$contactNo="";
//$password="";
//$confirmpassword="";


$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','registeruser');

//register user
if(isset($_POST['createaccount'])){
    $fname = mysqli_real_escape_string($db,$_POST['fname']);
    $lname = mysqli_real_escape_string($db,$_POST['lname']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $contactNo = mysqli_real_escape_string($db,$_POST['contactNo']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($db,$_POST['confirmpassword']);


    //form validation: ensure that the form is correctly filled..
    //by adding (array_push()) corresponding error into $errors array

    if(empty($fname)){ array_push($errors,"first name is required");}
    if(empty($lname)){ array_push($errors,"last name is required");}
    if(empty($username)){ array_push($errors,"Username is required");}
    if(empty($email)){ array_push($errors,"Email is required");}
    if(empty($contactNo)){ array_push($errors,"Contact No is required");}
    if(empty($password)){ array_push($errors,"Password is required");}
    if($password != $confirmpassword){
         array_push($errors,"The two password do not match");
                                     }

     //first check the database to make sure
     // a user does not allready exist with the same name and/or email
    $user_check_query = "SELECT * FROM user WHERE username='$username' email='$email' LIMIT 1" ;
     $result = mysqli_query($db,$user_check_query);
     $user = mysqli_fetch_assoc($result);

     if($user){ // if user exits
          if($user['username'] === $username){
          array_push($errors, "username already exits");
          }

     }
     if($user['email'] === $email){//if user exits
          array_push($errors, "Email already exits");

     }

     //Finally, register user if there are no errors in the forms
     if(count($errors) == 0){
         $password = md5($password);//md5 the password secure

         $query = "INSERT INTO user(fname,lname,username,email,contactNo,password)
         VALUES('$fname', '$lname', '$username', '$email', '$contactNo', '$password')";
         mysqli_query($db, $query);
         $_SESSION['username'] = $username;
         //$_SESSION['email'] = $email;
         $_SESSION['success'] = "You are now logged in";
         header('location: index.php');

     }






}




         //LOGIN USER
         if(isset($_POST['login'])){
          $username = mysqli_real_escape_string($db,$_POST['username']);
          $password = mysqli_real_escape_string($db, $_POST['password']);

          if(empty($username)){
               array_push($errors, "Username is required");

          }
          if(empty($password)){
               array_push($errors, "Password is required");
          }

          if(count($errors) == 0){
               $password = md5($password);
               $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
               $results = mysqli_query($db , $query);
               if(mysqli_num_rows($results) == 1){
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: index.php');
               }
               else{
                    array_push($errors, "Wrong username/password combination");
               }
          }
     }








/*define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASS', 'root');
define('DB_NAME','loginsystem');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//check */


?>
