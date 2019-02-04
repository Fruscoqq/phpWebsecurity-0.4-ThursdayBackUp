<?php 

    session_start();

    $dbServername="localhost";
    $dbUsername="root";
    $dbpassword="";
    $dbName="websecurity";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbpassword, $dbName);

if(isset($_POST['bsubmit'])){

    //$Name = $_POST['bname'];
    $Location = $_POST['blocation'];
    $rn = $_SESSION['user_em'];

    if(empty($Location)){
        echo "<script type='text/javascript'>";
        echo "alert('Empty field.');";
        echo "</script>";
        header("refresh:0; url=bookings.php");
    exit();
    }

    else {
        $sql = "SELECT * FROM bookings WHERE booking_location='$Location'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck >= 1) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('Date taken');";
            echo "</script>";
            header("refresh:0; url=bookings.php");
            exit();
        }
        
 else {
// Inserting user data into the database
    $sql = "INSERT INTO bookings (booking_name, booking_location) 
    VALUES ('$rn', '$Location')";
 }
 if(!mysqli_query($conn, $sql))
   {
     echo 'Not inserted';
   }
   else {
       echo "<script type='text/javascript'>";
       echo "alert('Data successfully inserted.');";
       echo "</script>";
       header("refresh:0; url=bookings.php");
      }
    }
}

