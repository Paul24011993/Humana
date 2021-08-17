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
						//validate_login_user();
						include 'views/modules/side_bar_menu.php';
						include 'views/modules/top_bar.php';
				?>
					<div class="right_col" role="main">
						<?php require_once $viewsLoad; ?>
						<?php get_bottom_bar(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php get_footer(); ?>
	</body>
</html>