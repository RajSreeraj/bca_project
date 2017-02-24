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
        <script src="js/reg_val.js" type="text/javascript"></script>
        <title>Registration</title>
    </head>
    <body>
        <form action="db_user_reg.php" method="post" name="registration_form">
            <div class="reg_form">
            <label></label>
            <h1 class="h_reg">Registration Form</h1>
            <input class="reg_txtbox" type="text" name="name" placeholder=" Name" required>
            <input class="reg_txtbox" type="text" name="address" placeholder=" Address"required> 
            <label class="l_1">Date Of Birth</label>
            <input class="date_box" type="date" name="dob" placeholder="Date Of Birth"required>
            <label class="l_1">Gender</label><br>
            <select name="gender" class="gen_select">
                <option value="select">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <input class="reg_txtbox" type="text" name="email" placeholder=" E-mail"required>
            <input class="reg_txtbox" type="text" name="phone" placeholder=" Phone Number"required>
            <input class="reg_txtbox" type="text" name="username" placeholder=" Username"required>
            <input class="reg_txtbox" type="password" name="password" placeholder=" Password"required>
            <button class="reg_button" name="submit" type="submit">Submit</button>
            <button class="reg_button" name="reset" type="reset">Clear</button>
            </div>
        </form>
        <?php
//        // put your code here
//          <input class="gen_radio" type="radio" name="gender" value="Male"><br>
//            <label class="l_2">Male</label>
//            <input type="radio" name="gender" value="Female">
//            <label class="l_2">Female</label>
        ?>
    </body>
</html>
