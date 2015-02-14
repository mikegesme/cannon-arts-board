<?php get_header(); ?>

<div class="main-content clearfix">
<div class="two-thirds">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; endif; ?>

</div>

<div class="sidebar one-third">
	<?php dynamic_sidebar('primary'); ?>
</div>
</div>

<?php get_footer(); ?>