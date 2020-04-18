<?php
$username   = $_POST['username'];
$pass       = md5($_POST['password']);


include 'koneksi_login.php';

$user = mysqli_query($connect,"select * from users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:?halaman=edit_data");
}else
{
    header("location:?halaman=login");
}
?>