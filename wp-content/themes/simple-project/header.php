<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple-project
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="body-bg">
    <header class="main-header">

        <div class="bg-top-triangle">
            <div class="container row -nav">
                <div class="logo">
					<?php
					the_custom_logo();
					?>
                </div>

                <nav class="main-menu" onclick="showMenu()">
                    <div class="mobile-menu-part"></div>
					<?php
					$custom_settings = array(
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s items-container">%3$s</ul>',
						'item_spacing'    => 'preserve',
						'depth'           => 0,
						'walker'          => '',
						'theme_location'  => 'menu-1'
					);
					wp_nav_menu( $custom_settings ); ?>

                </nav>
            </div>
        </div>


        <div class="container row -heading">
            <h1 class="title"><?php
				if ( is_page( 'Main' ) ) {
					bloginfo( 'description' );
				} else {
					wp_title( '' );
				}
				?>
            </h1>
        </div>


        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'simple-project' ); ?></button>

        </nav><!-- #site-navigation -->

		<?php
		if ( is_page( 'About' ) ):
			?>

            <section class="main-info-container">

                <div class="container">
                    <div class="main-info">
                        <h3 class="title">
							<?php the_field( 'about-page-heading1' ) ?>
                        </h3>

                        <p class="text">
							<?php the_field( 'about-page-info1' ) ?>
                        </p>
                    </div>

                    <div class="photo">
                        <img src="<?php the_field( 'about-photo' ); ?>" alt="">
                    </div>
                </div>

            </section>

			<?php
		endif;
		?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
