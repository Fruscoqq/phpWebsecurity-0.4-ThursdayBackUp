<?php
if(isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    echo "<script type='text/javascript'>";
       echo "alert('You successfully logged out.');";
       echo "</script>";
    header("refresh:1; url=index.php");
    exit();
}
