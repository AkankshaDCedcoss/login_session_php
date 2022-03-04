<?php
session_start();
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
}



}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="index.php" method="POST">
<input type="submit" name="submit" value="LogOut">
</form> 
</body>
</html>