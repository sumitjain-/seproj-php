<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Classroom home
	</title>
	<link rel="stylesheet" href="<?php echo site_url() ?>css/site.css">
	<link rel="stylesheet" href="<?php echo site_url() ?>css/header.css">
</head>
<body>
	<?php $this->load->view('components/header') ?>
	<div class="loginContainer">
		<h1 class="head">
			Sign In
		</h1>
		<form action="<?php echo site_url() ?>index.php/account/login" method="post">
			<input type="text" name="username" placeholder="Username" >
			<br>
			<input type="password" name="password" placeholder="Password" >
			<br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>