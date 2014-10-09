<?php
include 'common.php';
if($_SESSION['is_logged'] === true){
    header('Location: index.php');
    $_SESSION['content_enable'] = true;
}
else{
    header('Location: RegisterAndLogin.php');
    exit;
}
