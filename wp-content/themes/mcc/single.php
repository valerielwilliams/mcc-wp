<?php get_header(); ?>
<?php get_sidebar() ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>



	<div>


	<h2><?php the_title(); ?></h2>



	<?php the_content(); ?>

	</div>
	<?php endwhile; endif; ?>

	<div class="comments">
		<h2>Comments</h2>
		<h3>Your Thoughts</h3>

	<!--Comments form-->

		<div class="comments__form">
			<form action="">
				<input type="text" placeholder="Name" />
				<input type="email" placeholder="Email" />
				<textarea placeholder="Comment"></textarea>
				<input type="submit" name="submit" value="Submit" />
			</form>
		</div>
		<div class="comments__responses">

			<div class="comments__responses__one">

				<div class="comments__responses__one__original">
					<div class="comments__responses__avatar">
						<img src="<?php bloginfo('template_url'); ?>/assets/dist/img/placeholder-avatar.jpg" class="avatar"/>
					</div>
					<div class="comments__responses__content">
					<h3 class="comments__responses__date">December 31, 2017</h3>
					<h3 class="comments__responses__subheading">Subheading</h3>
					<p>Elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
					<div class="comments__responses__reply">
						<a href="#">Reply</a>
					</div>
				</div>
			</div>

		    	<!--Threaded comment-->
				<div class="comments_responses__one__threaded">
					<div class="comments__responses__avatar">
						<img src="<?php bloginfo('template_url'); ?>/assets/dist/img/placeholder-avatar.jpg" class="avatar"/>
					</div>
				<div class="comments__responses__content">
					<h3 class="comments__responses__date">December 31, 2017</h3>
					<h3 class="comments__responses__subheading">Subheading</h3>
					<p>Elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation</p>
				<div class="comments__responses__reply"><a href="#">Reply</a>
				</div>
			</div>
		</div>
	</div>

</div>

</div><!--comments div-->




	<?php get_footer(); ?>
