<!doctype html>
	<html <?php language_attributes(); ?>>
		<head>		
			<?php wp_head(); ?>
		</head>
		
		<body <?php body_class(); ?>>
			<header>
				<div class="container">
					<div class="grid align-center">
						<div class="col-6">
							<?php $logo = get_field( 'logo', 'option' ); ?>
							<?php if ( $logo ) { ?>
								<a href="<?php echo get_site_url(); ?>">
									<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
								</a>
							<?php } ?>
						</div>
						<div class="col-6 text_align-right">
							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => '', ) ); ?>
							</nav>
							<a href="#" class="menu-icon"><span></span><span></span><span></span><span></span></a>
						</div>
					</div>
					<nav class="mobile">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => '', ) ); ?>
					</nav>
				</div>
			</header>