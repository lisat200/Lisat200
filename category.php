<?php session_start();?>
<?php
$title = "Home";
$content='

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
			<div class="entry" style="min-height:400px">
				<form action=\'process_addcategory.php\' method=\'POST\'>
						<b style="color:darkgreen">ADD CATEGORY </b>
							<br/>
							<input type=\'text\' name= \'cat\' size=\'25\'>
							
							<input type=\'submit\'  value=\'  ADD  \'>
							
							<br><br>
				</form>
				<hr>
				<form action=\'process_addsubcategory.php\' method=\'POST\'>
							
							
							
									
							
							
						
				</form>

				<form action=\'process_delsubcategory.php\' method=\'POST\'>
							<hr>
						
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
</html>


';
include 'Template.php';
?>