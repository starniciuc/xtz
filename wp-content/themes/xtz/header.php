<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Inkness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="parallax-bg"></div>
        <div id="page" class="hfeed site">
            <?php do_action('inkness_before'); ?>
            <div class="container-fluid">
            <header id="masthead" role="banner" class="head-site">
                
                <div class="logo-side">
                    <?php if ((of_get_option('logo', true) != "") && (of_get_option('logo', true) != 1)) { ?>
                        <div class="logo-container">
                            <div class="arr-logo"></div>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                <?php
                                echo "<img class='main_logo' src='" . of_get_option('logo', true) . "' title='" . esc_attr(get_bloginfo('name', 'display')) . "'></a></div>";
                            } else {
                                ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1> 
                                <?php
                            }
                            ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                Imi place
                            </li>
                            <li>
                                Ro Ru
                            </li>
                            <li>
                                PRICELIST
                            </li>
                            <li>
                                Adresa noastra
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12"> 	
                        <div class="default-nav-wrapper ">
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                <div id="nav-container">
                                    <h1 class="menu-toggle"></h1>
                                    <div class="screen-reader-text skip-link">
                                        <a href="#content" title="<?php esc_attr_e('Skip to content', 'inkness'); ?>"><?php _e('Skip to content', 'inkness'); ?></a>
                                    </div>

                                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                                </div>                        
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
                <div class="work-time">
                    <div class="arr-info"></div>
                    <div class="slide-h"></div>
                    <div class="info-block">
                        <p>068 11 08 11</p>
                        <p>Azi  09:00–22:00</p>
                        <p>Gh. Asachi 62/6</p>
                    </div>
                </div>
               
            </header><!-- #masthead -->
 </div>
            <?php
            if ((function_exists('of_get_option')) && (of_get_option('slidetitle5', true) != 1)) {
                if (( of_get_option('slider_enabled') != 0 ) && (is_home())) {
                    ?>
                    <div class="slider-wrapper theme-default"> 
                        <div class="ribbon"></div>    
                        <div id="slider" class="nivoSlider">
                            <?php
                            $slider_flag = false;
                            for ($i = 1; $i < 6; $i++) {
                                $caption = ((of_get_option('slidetitle' . $i, true) == "") ? "" : "#caption_" . $i);
                                if (of_get_option('slide' . $i, true) != "") {
                                    echo "<a href='" . esc_url(of_get_option('slideurl' . $i, true)) . "'><img src='" . of_get_option('slide' . $i, true) . "' title='" . $caption . "'></a>";
                                    $slider_flag = true;
                                }
                            }
                            ?>  
                        </div><!--#slider-->
                        <?php
                        for ($i = 1; $i < 6; $i++) {
                            $caption = ((of_get_option('slidetitle' . $i, true) == "") ? "" : "#caption_" . $i);
                            if ($caption != "") {
                                echo "<div id='caption_" . $i . "' class='nivo-html-caption'><div class='nivocapper'>";
                                echo "<a href='" . esc_url(of_get_option('slideurl' . $i, true)) . "'><div class='slide-title'>" . of_get_option('slidetitle' . $i, true) . "</div></a>";
                                echo "<div class='slide-description'>" . of_get_option('slidedesc' . $i, true) . "</div>";
                                echo "</div></div>";
                            }
                        }
                        ?>
                    </div>	
                    <?php
                }
            }
            ?>
            <div id="content" class="site-content row clearfix clear">
                <div class="container col-md-12"> 
