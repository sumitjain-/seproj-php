<?php $this->load->view('components/head') ?>
	<?php $this->load->view('components/header') ?>
	<?php $this->load->view('components/sidebar') ?>
	<section class="appView">
		<?php
		if($view_name){
			$this->load->view('blocks/'.$view_name);
		}else{
			$this->load->view('blocks/default');
		}
		?>
		
	</section>
	<script src="<?php echo site_url() ?>components/jquery/dist/jquery.min.js" ></script>
	

<?php $this->load->view('components/foot') ?>