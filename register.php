<?php session_start(); ?>
<?php
$title = "Register";
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
					
								

<?
        echo \'<form action="process_login.php" method="POST">
        <div class="post">
        <h1 class="title">Login.</h1>
        
        <div class="entry">

        <br> <font color="black">Login ->U:</font>
        
        <input type="text" name="usernm">
        
        
        
        <font color="black">P:</font>
        <input type="password" name="pwd">
        <input type="submit" id="x" value="Login" />
        </form>\';
    }
    ?>
									<br><br>
<h1 class="title">Register.</h1>
										
									
										<table>
											<form action="process_register.php" method="POST">
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type=\'text\' size="30" maxlength="30" name=\'fnm\'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type=\'text\' size="30" maxlength="30" name=\'unm\'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type=\'password\' name=\'pwd\' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
                                        
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id=\'m\'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id=\'f\'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type=\'text\' name=\'mail\' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type=\'text\' name=\'contact\' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">
														
															<option>Dublim
															<option>Cork
															<option>Limerick

													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>

												<tr>
													<td colspan=\'2\' align=\'center\'>
														<input type=\'submit\' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
									</div>

								</div>
										
							</div>
				
						<!-- end content -->
						
						<!-- start sidebar -->
						<div id="sidebar">
								
						</div>

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
