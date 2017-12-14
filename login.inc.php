<ul>
    <li id="login">

        <?php
        if(isset($_SESSION['status']))


            echo '<form action="process_login.php" method="POST">
                            
											<b>Username:</b>
											<input type="text" name="usernm">
											
											
											
											<b>Password:</b>
											<input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';

        ?>
    </li>


</ul>
