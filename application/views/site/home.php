<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Admin home
	</title>
	<link rel="stylesheet" href="<?php echo site_url() ?>css/site.css">
	<link rel="stylesheet" href="<?php echo site_url() ?>css/header.css">
	<link rel="stylesheet" href="<?php echo site_url() ?>components/font-awesome/css/font-awesome.css">
	<script src="<?php echo site_url() ?>components/angular/angular.min.js" ></script>
	<script src="<?php echo site_url() ?>components/angular-route/angular-route.min.js" ></script>
	<script src="<?php echo site_url() ?>components/angular-animate/angular-animate.min.js" ></script>
</head>
<body ng-app="classroomAppOne" ng-controller="rootCtrl" >
	<?php $this->load->view('components/header') ?>
	<?php $this->load->view('components/sidebar') ?>
	<section class="appView" ng-view >
		
	</section>

	<script src="<?php echo site_url() ?>js/classroomAppOne/app.js" ></script>

	<!-- ------------------- Services ------------------------ -->
	<!-- <script src="<?php// echo site_url() ?>/js/classroomAppOne/services/*.js" ></script> -->


	<!-- ------------------- Controllers ------------------------ -->
	<!-- <script src="<?php// echo site_url() ?>/js/classroomAppOne/controllers/*.js" ></script> -->
	<script src="<?php echo site_url() ?>/js/classroomAppOne/controllers/RootCtrl.js" ></script>

	<!-- ------------------- Directives ------------------------ -->
	<!-- <script src="<?php// echo site_url() ?>/js/classroomAppOne/directives/*.js" ></script> -->

	<!-- ------------------- Services ------------------------ -->
	<!-- <script src="../js/seedonDevApp/filters/*.js" ></script> -->
</body>
</html>