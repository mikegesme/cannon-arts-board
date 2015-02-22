<?php get_header(); ?>

<div class="main-content clearfix">
<article>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>


	<?php the_content(); ?>

	<?php endwhile; endif; ?>

	<p class="all-events-link mobile-link">
		<a href="/events" title="View All Upcoming Events">Events Calendar</a>
	</p>

	<?php dynamic_sidebar('home-middle'); ?>

	<div class="social-stream">
		<h3>Around Cannon Falls</h3>
		<?php echo do_shortcode('[dc_social_wall id="56"]'); ?>
	</div>

</article>
</div>

<?php get_footer(); ?>