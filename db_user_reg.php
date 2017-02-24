<?php
require './dbconnetion.php';
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$pass_word = $_POST['password'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
/*echo $name;
print_r($phone);
*/
$query="insert into user_registration set name='$name',address='$address',gender = '$gender',dob = '$dob',email='$email', phone='$phone',username = '$username',password = '$pass_word'";
print_r($query);
$result=mysqli_query($db, $query);

if($result){
    echo 'data entered..';
}
 else {
echo 'data not entered';    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

