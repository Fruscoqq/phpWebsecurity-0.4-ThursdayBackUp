<?php

if(isset($_POST['submit-register'])){

$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$dbName="websecurity";

$conn = mysqli_connect($dbServername, $dbUsername, $dbpassword, $dbName);

$Name = $_POST['username'];
$Email = $_POST['email'];
$Street = $_POST['street'];
$City = $_POST['city'];
$Postcode = $_POST['postcode'];
$Phonenumber = $_POST['phonenumber'];
$Password = $_POST['password'];
$Rpassword = $_POST['rpassword'];

 if(!$conn)
 {
   echo 'Not connected to server';
 }

 if(!mysqli_select_db($conn, 'websecurity'))
 {
   echo 'Database not selected';
 }

 if(empty($Name) || empty($Email) || empty($Street)
 || empty($City) || empty($Postcode) || empty($Password) )
 {
     echo "<script type='text/javascript'>";
     echo "alert('Empty field.');";
     echo "</script>";
    header("refresh:1; url=registration.php");
    exit();
 }

 else{
   if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
   {
         echo "<script type='text/javascript'>";
         echo "alert('Invalid e-mail address.');";
         echo "</script>";
         header("refresh:1; url=registration.php");
       exit();
     }

  else{
    if($_POST["password"] != $_POST["rpassword"])
    {
         echo "<script type='text/javascript'>";
         echo "alert('Your passwords did not match.');";
         echo "</script>";
         header("refresh:1; url=registration.php");
      exit();
    }
     
    

     else {
         $sql = "SELECT * FROM users WHERE user_email='$Email'";
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);

         if($resultCheck > 1) 
         {
             echo "<script type='text/javascript'>";
             echo "alert('User taken');";
             echo "</script>";
             header("refresh:1; url=registration.php");
             exit();
         }

 else {
   //Hashing the password
   $hashedpsw = password_hash($Password, PASSWORD_DEFAULT);
   // Inserting user data into the database
   $sql = "INSERT INTO
   users(user_first, user_email, user_street, user_city, user_postcode, user_phone, user_password)
   VALUES ('$Name', '$Email', '$Street', '$City', '$Postcode', '$Phonenumber', '$hashedpsw')";

   if(!mysqli_query($conn, $sql))
   {
     echo 'Not inserted';
   }
   else
     {
       echo "<script type='text/javascript'>";
       echo "alert('User successfully created.');";
       echo "</script>";
       header("refresh:1; url=index.php");
      }
     }
    }
   }
  }
}
?>
