<?php get_header(); ?>

<div class="main-content clearfix">
<article class="two-thirds">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<?php the_content(); ?>

	<?php endwhile; endif; ?>

</article>

<div class="sidebar one-third">
	<?php dynamic_sidebar('primary'); ?>
</div>
</div>

<?php get_footer(); ?>