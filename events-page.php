<?php
/*
 * Template Name: Events
 */
?>

<?php get_header(); ?>

<div class="two-thirds">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>