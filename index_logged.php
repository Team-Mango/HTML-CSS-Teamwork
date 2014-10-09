<?php
include 'common.php';
if($_SESSION['is_logged'] === true){
    include 'header.php';
    include 'footer.php';
}
else{
    header('Location: RegisterAndLogin.php');
    exit;
}
