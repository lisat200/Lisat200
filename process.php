<?php
$username = $POST ['uername'];
$password = $POST ['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
//connect to server and select databse
mysql_connect("localhost", "root", "");
mysql_selectdb("login");
//query dataase fo user
$result = mysql_query("select * from users where username ='$username' and password ='$password'")
or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username']== $username && $row['password']== $password) {
    echo "Login sucess!!! Welcome " .$row["username"];
}else{
    echo "Failed to login!";

}


