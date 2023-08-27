<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>
>
		<?php wp_body_open();?>
	<header>
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-sm-3"><?php the_custom_logo();?></div>
					<div class="col-sm-3">
						<?php
						wp_nav_menu(
							array(
								'theme_location'=>'primary_menu',
								'container_class'=>'container_nav',
								'menu_class'=>'main_nav',
							));
							?>


							this is my header

						
					
				</div>
			</div>
			<div class="col-sm-3"><a href="#" class="btn btn-primary">Link Button</a>
				
			</div>

		</div>
	</header>
