<section class="hero">
	<h1 class="title">
		<?php the_title(); ?>
	</h1>
</section>
<?php if ( have_rows( 'panels' ) ): ?>
	<?php while ( have_rows( 'panels' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'full_width_text' ) : ?>
			<section class="full-width-text">
				<div class="container">
					<div class="content">
						<?php the_sub_field('content'); ?>
					</div>
				</div>
			</section>
		<?php elseif ( get_row_layout() == 'icon_panel' ) : ?>
			<section class="feature-panel">
				<div class="container">
					<div class="feature-content">
						<?php if ( have_rows('content_cards') ) : ?>
							<?php while ( have_rows('content_cards') ) : the_row(); ?>
								<div class="card">
									<?php $icon = get_sub_field('icon'); ?>
									<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
									<div class="card-text"><?php the_sub_field('text'); ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php elseif ( get_row_layout() == 'text_and_image' ) : ?>
			<section class="text-and-image">
				<div class="container">
					<div class="grid">
						<div class="col-sm-7">
							<?php the_sub_field('text_content'); ?>
						</div>
						<div class="col-sm-5">
							<div class="img">
								<?php $img = get_sub_field('image'); ?>
								<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php elseif ( get_row_layout() == 'recent_posts' ) : ?>
			<section class="recent-posts">
				<div class="container">
					<div class="grid">
						<?php $args = array(
										'post_type' => 'post',
										'posts_per_page' => 3,
										'order' => 'DESC',
										'orderby' => 'ID'
										); 
						$the_query = new WP_Query( $args );

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()): $the_query->the_post(); ?>
								<div class="col-sm-4">
									<div class="post-card">
										<a href="<?php the_permalink(); ?>">
											<img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt=""/>
										</a>
										<a href="<?php the_permalink(); ?>">
											<h3 class="post-title"><?php the_title(); ?></h3>
										</a>
										<div class="excerpt"><?php the_excerpt(); ?></div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>