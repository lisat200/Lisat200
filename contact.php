<?php
session_start();


?>
<?php
$title = "Contact";
$content='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
</head>
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
								<div class="post">
									<h1 class="title">Contact us</h1>
									
									<div class="entry" >
									
									
												

											<br>Name :<br>
												<input type=\'text\' name=\'nm\' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type=\'text\' name=\'email\' size=35>
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name=\'query\' ></textarea>
												<br><br><br>

												<input  type=\'submit\' name=\'btn\' value=\'   OK   \'  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
			
</body>
</html>
';
include 'Template.php';
?>

  

   


