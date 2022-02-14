<?php get_header(); ?>

	<main id="main" role="main">

		<div class="container">
			<div class="grid">
				<div class="col-12">

					<h1>Blog</h1>				

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article>
							<h2><?php the_title(); ?></h2>
						</article>

					<?php endwhile; endif; ?>

				</div>
			</div>
		</div>
		
	</main>

<?php get_footer(); ?>