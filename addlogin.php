<?php
$host='localhost';
$username='root';
$password='';
$dbname='login';
$m=new mysqli($host,$username,$password,$dbname);
$m->set_charset('utf8');
$username=$_POST['username'];
$tle=$_POST['tle'];
$pass=$_POST['pass'];
$S="INSERT INTO loginuser (username,tle,pass)VALUES('$username','$tle','$pass')";
$r=$m->query($S);
header('location:http://localhost/login1/login0/rrosee[1]/rrosee/4_5825921050222793643/index.html');







?>