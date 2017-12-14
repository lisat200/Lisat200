
<?php session_start();?>
<?php
$title = "Home";
$content='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
	
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry">
				
				<form action=\'process_addsubcategory.php\' method=\'POST\'>
							<h1 style="color:darkgreen">ADD SUB-CATEGORY </h1>
							<br><br>
							<u style="color:darkgreen">PARENT CATEGORY </u>
									<br>
										<select  name="parent">
											<?php
											
												require(\'includes/config.php\');
					
													$query="select * from category ";
					
													$res=mysqli_query($conn,$query);
													
													while($row=mysqli_fetch_assoc($res))
													{
														echo "<option value=\'".$row[\'cat_id\']."\'>".$row[\'cat_nm\'];
														//PASS ID NOT NAME
													}
					
													mysqli_close($link);
											?>
										</select>
									
									<br>
							<u style="color:darkgreen">SUB-CATEGORY:</u>
									<br><br>
										<input type=\'text\' name= \'subcat\' size=\'25\'>
										
										<input type=\'submit\'  value=\'  ADD  \'>
									
									<br><br>	
				</form>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			
</div>
<!-- end footer -->
</body>

';
include 'Template.php';
?>



















/**
 * Created by PhpStorm.
 * User: lisat
 * Date: 13/12/2017
 * Time: 00:50
 */