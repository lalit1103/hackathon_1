<html>
    <head>
        <title>YOUR INFORMATION</title>
        <style>
            .form{
                margin-top:200px;
                margin-left:200px;
                margin-right:200px;
                margin-bottom:200px;
                text-align:center;
                font-size:19px;
                background-color:rgba(20,255,232);
            }
            </style>
            </head>
            <body style="background-color:rgb(23,201,200);">
<form>
<div class=form>
    <fieldset style="border-radius:10px;">
        <legend style="text-align:center; font-size:22px;"><h3>ENTERED INFORMATION</h3></legend>
<?php
if(isset($_POST['fname'])){
$name=$_POST['fname'];
//$color=$_POST['color'];
//echo "<h3>"."WELCOME!! "."</h3>"."<br>"."<b>".$name."</b>"."<br><br>";
}
if(isset($_POST['lname'])){
    $lname=$_POST['lname'];
    echo "<h3>"."WELCOME!! "."</h3>"."<br>"."<b>".$name." ".$lname."</b>"."<br><br>"; 
}
if(isset($_POST['date'])){
$date=$_POST['date'];
echo "<b>"." D.O.B:-  "."</b>".$date."<br><br>";
}
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    echo "<b>"."E-MAIL :- "."</b>".$email."<br><br>";
}
if(isset($_REQUEST['gender'])){
    $gender=$_REQUEST['gender'];
    echo "<b>"."GENDER  :- "."</b>".$gender."<br><br>";
}
if(isset($_POST['password'])){
    $pass=$_POST['password'];
    echo "<b>"."PASSWORD  :- "."</b>".$pass."<br><br>";
}
?>