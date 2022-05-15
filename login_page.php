<?php
ob_start();
$user = 'umut.konukcu@ogr.sakarya.edu.tr';
$pass =  'b211210069';

if(isset($_POST['mail']))
{
    $username = $_POST['mail'];
    $password = $_POST['sifre'];
    
    if($username == $user && $password == $pass)
    {
        header('location:yonlendirme.html');
    
    }
    else
    {
    header('location:login_page.html');
    }
}
?>