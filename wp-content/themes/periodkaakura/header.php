<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package periodkaakura
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="desktop-nav-container">
                <!-- .site-branding -->
                <div class="site-branding">
                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/temp/header-logo.svg"
                                 alt="header logo"/>
                        </figure>
                    </a>
                </div>
                <!-- .site-branding -->

                <!-- #site-navigation -->
                <nav id="site-navigation" class="main-navigation">
                    <div>
                        <ul>
                            <li class="active"><a href="#">About</a></li>
                            <li><a href="#">Posdcast</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- #site-navigation -->
            </div>
            <div class="flex">
                <div>
                    <div>
                        <h1>Know about period kaa kura</h1>
                        <span>A space for menstruators to speak on the silenced subject "Period"</span>
                    </div>
                    <div>
                        <span>Latest Episode: Period ka kura</span>
                        <div class="flex">
                            <button>Listen Now</button>
                            <button>Browser All</button>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <span></span>
                            <span>Subscribe us on</span>
                        </div>
                        <div class="flex">
                            <button>Apple Podcast</button>
                            <button>Sound Cloud</button>
                            <button>RSS Feed</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex">
                        <figure>
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/header-left.svg">
                        </figure>
                        <figure>
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/header-right.svg">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
