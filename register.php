<meta charset="UTF-8">
<?php
include 'common.php';
try{
    $msg = '';
    if(isset($_POST["username"]) && isset($_POST["pass"]) && isset($_POST["user-mail"])) {
        $username =  mysql_real_escape_string(addslashes(trim($_POST['username'])));
        $email = mysql_real_escape_string($_POST["user-mail"]);
        $password =  mysql_real_escape_string(md5($_POST['pass']));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "Invalid email format";
            throw new Exception();
        }

        $sql=mysql_query("SELECT * FROM users WHERE login='$username'");
        if(mysql_num_rows($sql)>0){
            $msg = "Username already exists";
            throw new Exception();

        }

        $sql = mysql_query("SELECT * FROM users WHERE email='$email'");
        if(mysql_num_rows($sql)>0){
            $msg = "E-mail already exists";
            throw new Exception();
        }

        $query = "INSERT INTO users (login, pass, email) VALUES ('$username', '$password', '$email')";
        $result = run_q($query);
        if($result){
            echo('Congratulations! You can now log in!');
            header('refresh:2; url=RegisterAndLogin.php');
        }

    }
} catch (Exception $e){
    $_SESSION['msg'] = $msg;
    echo $msg;
    header('refresh:2; url=RegisterAndLogin.php');
}