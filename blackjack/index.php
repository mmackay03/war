<?php
require_once 'header.php';
?>
		<div id="bannermain">&nbsp;</div>
		<div class="post">
			<h1 class="title">Log in to play</h1>
			<div id="user">
				<div id="userleft">
                                    <form action="check_user.php" name ="cUserF" method="post" onsubmit="return cUser()">
					<div id="centerthis"><h4>Already a user?</h4></div>
					user name: <input type="text" name='cuser'><br />
					password:  <input type="password" name='cpass'><br />
                                        <button type="submit" name="csubmit">Log in
                                    </form>
				</div>
				<div id="userright">
                                    <form action="check_user.php" name="nUserF" method="post" onsubmit="return nUser()">
					<div id="centerthis"><h4>New user?</h4></div>
					user name: <input type="text" name="nuser"><br />
					password:  <input type="password" name="npass1"><br />
					re-enter password: <input type="password" name="npass2"><br />
                                        <button type="submit" name="nsubmit">Create account
                                    </form>                                     
				</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal">(c) 2014 BLACKJACK. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
</div>
<!-- end footer -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>