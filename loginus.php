<?php
$host='localhost';
$username='root';
$password='';
$dbname='login';
$m=new mysqli($host,$username,$password,$dbname);
$m->set_charset('utf8');
$z1=$_POST['z1'];
$z2=$_POST['z2'];
$S="select * from loginuser where username='$z1' AND pass ='$z2' ";

$r=$m->query($S);
while($a=$r->fetch_assoc())
{
    $c=$r->num_rows;

}
if ($c >0){
header('location:http://localhost/login1/login0/rrosee[1]/rrosee/4_5825921050222793643/index.html');
}else {

    header('location:http://localhost/login1/login0/rrosee[1]/rrosee/4_5825921050222793643/addlogin.html');

}






?>