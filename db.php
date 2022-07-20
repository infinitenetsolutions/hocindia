<?php
if($_SERVER['HTTP_HOST']== 'localhost')
$connection = mysqli_connect('localhost','root','','hariom_db');
else
$connection=mysqli_connect('localhost','hariom_db',"Hoc@123","hariom_db");
?>