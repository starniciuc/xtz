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
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div id="parallax-bg"></div>
        <div id="page" class="hfeed site">
            <?php do_action('inkness_before'); ?>
    
            <header id="masthead" role="banner" class="head-site">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-header">
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
                        <ul class="top-menu">
                            <li>
                                <div class="fb-like" data-href="https://www.facebook.com/xtremetrainingzone" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                            </li>
                            <li>
                                <ul class="lang-link">
                                    <li class="selected"><a href="#">Ro</a></li>
                                    <li><a href="#">Ru</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(92); ?>" class="price-btn">PRICELIST</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(18); ?>" class="adress-link">Adresa noastra</a>
                            </li>
                        </ul>
                    
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
                
                <div class="work-time">
                    <div class="arr-info"></div>
                    <div class="slide-h"></div>
                    <div class="info-block">
                        <div class="info">
                            <a href="tel:+37368110811" class="call-numb">068 11 08 11</a>
                            <p class="adress">Azi <i class="fa fa-clock-o"></i> 09:00–22:00</p>
                            <span class="str">Gh. Asachi 62/6</span>
                        </div>
                        <div class="hiden-block">
                            <p>078 11 08 11</p>
                            <p>022 60 58 98</p> 
                            <a href="#" class="show-map">Vezi harta</a>
                        </div>
                    </div>
                </div>
                    </div>
                            </div>
                </div>
               </div>
            </header><!-- #masthead -->
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
            <div class="site-content clearfix clear">
                <div class="container-fluid"> 
