<?php

    $link = mysqli_connect("localhost", "root", "", "login") or die($link);

    $username = mysqli_real_escape_string($link, $_POST['user']);

    $password = mysqli_real_escape_string($link, $_POST['pass']);



    $result = mysqli_query($link, "select * from users where username = '$username' and password = '$password' ") or die ("Failed to query database");

    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        header("Location: indexLogged.php");}
    else
    {
header( "Location: https://www.google.pl/" );
         }
        
?>