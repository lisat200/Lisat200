<?php
$title = "Register";
$content='
	 session_start();
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST[\'fnm\']) || empty($_POST[\'unm\']) || empty($_POST[\'gender\']) || empty($_POST[\'pwd\']) || empty($_POST[\'cpwd\']) || empty($_POST[\'mail\'])||empty($_POST[\'city\']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		

		else
		{
			$fnm=$_POST[\'fnm\'];
			$unm=$_POST[\'unm\'];
			$pwd=$_POST[\'pwd\'];
			$gender=$_POST[\'gender\'];
			$email=$_POST[\'mail\'];
			$contact=$_POST[\'contact\'];
			$city=$_POST[\'city\'];
        
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			values(\'$fnm\',\'$unm\',\'$pwd\',\'$gender\',\'$email\',\'$contact\',\'$city\')";
			
			mysqli_query($conn,$query) or die("Can\'t Execute Query...");
            
			//header("location:register.php?ok=1");
            header("location:login.php");
		}
	}
';
include 'Template.php';
?>
/**
 * Created by PhpStorm.
 * User: lisat
 * Date: 13/12/2017
 * Time: 01:01
 */