<?php session_start();?>
<?php
$title = "Home";
$content='
	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can\'t Execute Query...");
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


-->
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
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border=\'1\' WIDTH=\'100%\'>
						<tr>
						<td colspan="7"><a href="addbook.php">Add New Book</a></td>
						</tr>
						<tr>
<td WIDTH=\'10%\' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH=\'50%\'><b><u>NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH=\'20%\'><b><u>PUBLISHER</u></b></TD>
<TD style="color:darkgreen" WIDTH=\'20%\'><b><u>ISBN</u></b></TD>
<TD style="color:darkgreen" WIDTH=\'25%\'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH=\'25%\'><b><u>IMAGE</u></b></TD>
				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo \'<tr>
										<td>\'.$count.\'
										<td>\'.$row[\'b_nm\'].\'
										<td>\'.$row[\'b_publisher\'].\'
										<td>\'.$row[\'b_isbn\'].\'
										<td>\'.$row[\'b_price\'];
				echo "<td><img src=\'../$row[b_img]\' width=\'50\'/>";
										
										
									\'<td>
												
									
									</tr>\';
									$count++;
							}
						?>

					</TABLE>
				
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