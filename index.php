<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_sidebar('events-sidebar'); ?>

<?php get_footer(); ?>