<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php the_title(); ?></title>
	<script>
	// Picture element HTML5 shiv
	document.createElement( "picture" );
	</script>
	<script src="<?php bloginfo('template_url'); ?>/js/picturefill.js" async></script>
	<?php wp_head(); ?>
</head>
<body>
<div class="page-wrap fullwidth">
	<header>
		<?php wp_nav_menu(
			array(
				'menu' 				=> 'Top Nav',
				'menu_class' 	=> 'top-nav',
			)
		); 
		?>
		<div class="banner">
			<a href="/">
				<picture>
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="<?php bloginfo('template_url'); ?>/images/logo-2000.jpg" media="(min-width: 40rem)">
					<!--[if IE 9]></video><![endif]-->
					<!--[if lt IE 9]>
					<img src="<?php bloginfo('template_url'); ?>/images/logo-2000.jpg" alt="Cannon Arts Board">
					<![endif]-->
					<!--[if !lt IE 9]><!-->
					<img srcset="<?php bloginfo('template_url'); ?>/images/logo-1400.jpg" alt="Cannon Arts Board">
					<!-- <![endif]-->
				</picture>
			</a>
		</div>
		<nav class="main-nav clearfix">
			<?php wp_nav_menu(
				array(
					'menu'			=> 'Main Nav',
				)
			);
			?>
		</nav>
	</header>
