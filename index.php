<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/dessign page.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body link="red">
        <form action="login_action.php" method="post">
            <div class="login_form">
                <label><h1 class="h_1">User Login</h1></label>
            <input class="reg_txtbox" type="text" name="username" placeholder=" User name"><br>
            <input class="reg_txtbox" type="password" name="password" placeholder=" Password"><br>
            <a href="user_register.php"><button class="log_button" name="register" type="button">Register</button></a>
            <button class="log_button" name="login" type="submit">Login</button>
            <img class="f_pass" src="images/f2.png" alt="forgot_pass"/>
            <a href="forgot_password.php"><h4 class="h_4">Forgot Password..</h4></a>
            </div>
        </form>
        <?php
        //<button class="reg_button" name="login" type="submit">Login</button>
        //   <a href="user_register.php">Register</a>
        ?>
    </body>
</html>
