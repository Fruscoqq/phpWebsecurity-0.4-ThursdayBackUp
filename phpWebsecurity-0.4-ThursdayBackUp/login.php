<?php

session_start();

$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$dbName="websecurity";

$conn = mysqli_connect($dbServername, $dbUsername, $dbpassword, $dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}


if(isset($_POST['login-submit'])){

    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];

    if(empty($email) || empty($password)){
     echo "<script type='text/javascript'>";
     echo "alert('Empty field.');";
     echo "</script>";
     header("refresh:0; url=loginhtml.html");
    exit();
    }

    else{
      $sql = "SELECT * FROM users WHERE user_email='$email'";
      $result = mysqli_query($conn, $sql); 
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1) {
        echo "<script type='text/javascript'>";
        echo "alert('Incorrect email address.');";
        echo "</script>";
        header("refresh:0; url=loginhtml.html");
      } 
    

    else {
        if ($row = mysqli_fetch_assoc($result)) {
            $hashedPSwCheck = password_verify($password, $row['user_password']);
            if ($hashedPSwCheck == false) {
                echo "<script type='text/javascript'>";
                echo "alert('Incorrect password.');";
                echo "</script>";
                header("refresh:0; url=loginhtml.html");
            }
            elseif($hashedPSwCheck == true){
                // Log in the user here
                $_SESSION['user_em'] = $row['user_email'];
                $_SESSION['user_pw'] = $row['user_password'];
                echo "<script type='text/javascript'>";
                echo "alert('Login success.');";
                echo "</script>";
                header("refresh:0; url=index.php");
            }
        }
    }
}
}
else{

    echo "<script type='text/javascript'>";
     echo "alert('Error.');";
     echo "</script>";
     header("refresh:0; url=loginhtml.html");
    exit();
}

?>