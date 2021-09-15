<?php
	
	global $viewsControllers;
	global $mainModel;
	
	get_header(); 
	
	//Guardar en una variable la instancia de la clase viewsControllers.
	$viewsLoad = $viewsControllers->get_views_controllers();
?>
<body <?php body_class($viewsLoad); ?>>
	<div class="container body">
		<div class="main_container">
			<?php
				$page_template = $mainModel->get_page_template($viewsLoad);
				
				if(!$page_template):
				validate_login_user();
				include 'views/modules/side_bar_menu.php';
				include 'views/modules/top_bar.php';
			?>
			<!-- page content -->
			<div class="right_col" role="main">
				<?php require_once $viewsLoad; ?>
				
			</div>
			<!-- /page content -->
			<!-- footer content -->
			<?php include 'views/modules/bottom_bar.php'; ?>
			<!-- /footer content -->
			<?php endif; ?>
		</div>
	</div>
	<?php 
		get_footer(); 
	
		include 'views/modal/notificaciones.php';
		include 'views/modal/planes.php';
		include 'views/modal/Afiliados.php';


	?>
	
 

	
</body>
</html>