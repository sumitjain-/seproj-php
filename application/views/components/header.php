<header>
	<h1 class="brand"><a href="<?php echo site_url() ?>index.php/site/home">Classroom</a></h1>
	<?php 
	if ($this->flexi_auth->is_logged_in()) {
		echo "<span><a href='".site_url()."index.php/account/logout'>Logout</a></span>";
	}
	?>
	
</header>