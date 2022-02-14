<?php get_header(); ?>

	<main id="main" role="main">
		<section class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			<h1 class="title post-title"><?php the_title(); ?></h1>
		</section>

		<div class="container">
			<div class="grid">
				<div class="col-12">
					<div class="post-content">													
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>