<?php
/**
 * Template Name: Landing Page
 *
 * This template removes header and footer. It's a very simple Landing Page template for Genesis Block Theme
 * Author: Mike @ SM3.dev
 *
 * @package Genesis Block Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
				<?php
					$hide_title = get_post_meta( get_the_ID(), '_genesis_block_theme_hide_title', true );
				if ( ! $hide_title ) {
					?>
						<header class="entry-header">
							<h1 class="entry-title">
							<?php the_title(); ?>
							</h1>
						</header>
						<?php
				} // End if hide title
					the_content();
				?>
				</article>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</body>
</html>