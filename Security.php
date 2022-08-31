<?php

if (isset($_POST['login'])) {

    $uname = $_POST['Uname'];
    $password = $_POST['Password'];
    
    if($uname=="admin@gmail.com" && $password=="admin@123"){
        header("Location: Dashboard/dashboard.php");
    }
}

?>