<?php get_header(); ?>

<!--Hero-->
	<div class="hero_container blog">
		<h1>Blog</h1>
	</div>

		<?php if (have_posts()) : ?>
			    <div class="blog_wrapper">

		<?php while (have_posts()) :
			the_post(); ?>

	<!--Blog posts-->

            <div class="blog-card">
                <?php the_post_thumbnail(); ?>
                <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo get_the_date(); ?></p>
                <p><?php the_content(); ?></p>
            	<h3>
					<?php
						//GET THE CATEGORY CONTENT
						$categories = get_the_category();
						//var_dump($categories);

						//IF THERE'S A CATEGORY
						if ($categories) {


						//LOOP THROUGH THE CATEGORIES AND DISPLAY THEM
						$i = 1;
						foreach ($categories as $one) {
							echo $one->name;

						//IF THERE IS MORE THAN ONE CATEGORY
						if ( count($categories) > 0 && count($categories) > $i ) {
							echo ', ';
								}

								$i++;
							}

						}

					?>

				</h3>
            </div>



			<?php endwhile; ?>

			</div>


		<?php else: ?>
			<em>No Posts Found</em>
		<?php endif; ?>

<?php get_footer(); ?>
