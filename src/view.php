<?php
session_start();
session_destroy();
if(!isset($_SESSION['details']))
{
    $_SESSION['details']=array();
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];

    $loginDetails=array($name,$password);

array_push($_SESSION['details'],$loginDetails);


if(isset($_SESSION['details']))
{
    foreach($_SESSION['details'] as $k => $v)
    {
echo "Name is : $v[0]<br> Password is : $v[1]<br><br>";
    }
    echo'<a href="index.php" name="LogOut">Click Here to logout</a>';
}

}

if(isset($_POST['LogOut']))
{
    session_destroy();
    echo 'destroy';
}

?>
