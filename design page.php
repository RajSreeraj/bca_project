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
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/sidenav_menu.css" rel="stylesheet" type="text/css"/>
        <script src="js/side_menu.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <div class="nav">
            <!--              <a href=""><div class="h_button"></a>
                            <img class="f_pass" src="images/hamburger-stale.png" alt=""/>
                        </div>
            -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
            <div style="font-size:30px;cursor:pointer" onclick="openNav()" > 
                 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <img class="f_pass" src="images/hamburger-stale.png" alt="" onclick=""/></a>
            </div>
            <div class="logo_div">
                <img class="logo" src="images/TN_Logo  copy.png " alt=""/>
            </div>
            <div class="search">
                <input class="search_box" type="text" name="search" placeholder="  Search">
                <a href="Test_page.php"><button class="search_btn" type="">
                    <i class="fa fa-search"></i></button></a>
            </div>
            <div class="upload">
                <button class="up_btn"><i class="fa fa-upload"></i></div></button>
        <div class="notification"></div>
        <div class="user_icon"></div>
    </div>
        
    <div class="player">
        
    </div>
    <div class="right_box">
        <div class="ads"></div>
        <div class="choice1"></div>
        <div class="choice2"></div>
        <div class="choice3"></div>
        <div class="choice4"></div>
    </div>
    <div class="bottam_menu">
        <div class="choice1"></div>
        <div class="choice1"></div>
        <div class="choice1"></div>
        <div class="choice1"></div>
        <div class="choice1"></div>
    </div>
    <?php
    // put your code here
    ?>
</body>
</html>
