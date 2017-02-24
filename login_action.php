<?php
require './dbconnetion.php';
$name = $_POST['username'];
$pass = $_POST['password'];
/*echo $name;
print_r($phone);
*/
$query="SELECT id FROM user_registration where username='$name' and password='$pass'";
print_r($query);
$result=mysqli_query($db, $query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
$count = mysqli_num_rows($result);
if($count==1){
   echo "<script type='text/javascript'>alert('valid user')</script>";
       header("Location:design page.php");
}
 else {
       header("Location:index.php");
       echo "<script type='text/javascript'>alert('in valid user')</script>";
       
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

