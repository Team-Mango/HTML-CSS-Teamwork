<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/regAndLog.css">
<?php
include 'header.php';
?>
<section class="authentication">
    <h3>Нямате акаунт? РЕГИСТРИРАЙТЕ СЕ!</h3>
    <form action="register.php" method="post" class="form">
        <div>
            <label for="username">Име: </label><input type="text" id="username" name="username" placeholder="Username"/>
            <label for="passReg">Парола: </label><input type="password" id="passReg" name="pass" placeholder="Password"/>
        </div>
        <div>
            <label for="user-mail">E-Mail: </label><input type="email" id="user-mail" name="user-mail" placeholder="E-mail"/>
        </div>
        <?php if(isset($_SESSION['msg'])): ?>
            <div><p><?php echo $_SESSION['msg']; session_destroy(); ?></p></div>
        <?php endif; ?>
        <input type="submit" value="Register"/>
    </form>
    <h3>Вече си направихте акаунт? ВЛЕЗТЕ!</h3>
    <form action="login.php" method="post" class="form">
        <label for="login">Име: </label> <input type="text" id="login" name="login" placeholder="Username"/>
        <label for="pass">Парола: </label> <input type="password" id="pass" name="pass" placeholder="Password"/>
        <input type="submit" value="Login"/>
        <input type="hidden" name="log_post" value="1"/>
    </form>
</section>
<?php
include 'footer.php';
?>