<!DOCTYPE html>
<html lang="<?php _e('en_US', 'mushegh'); ?>">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<meta charset="UTF-8">
	<title><?php _e('Mushegh Avetisyan - Official Site', 'mushegh');?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<div id="my_video_popup"></div>
<div id="my_video_popup_content" style="display: none;" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-fade mfp-ready" tabindex="-1" style="overflow-x: hidden; overflow-y: auto;">
    <div class="mfp-container mfp-s-ready mfp-iframe-holder" style="position: absolute; top: 50%; transform: translateY(-50%);">
        <div class="mfp-content">
            <div class="mfp-iframe-scaler">
                <iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div>
        </div>
    </div>
</div>

<div id="header-bar-desktop" class="header-bar">
    <div class="header-container">
        <div class="header-socials">
            <p class="phone">
                <a href='tel://<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_telephone', true); ?>' class='phonenumber'>
                    <span class='mm-phone-number'><?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_telephone', true); ?></span>
                    <i class='fa fa-fw fa-lg fa-phone'></i>
                </a>
            </p>

            <ul>
                <li>
                    <a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_facebook', true); ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_twitter', true); ?>" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

                <li>
                    <a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_vk', true); ?>" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
            </ul>
            <style>
                .fa-facebook:hover {
                    color: #4267b2;
                }
                .fa-instagram:hover {
                    color: deeppink;
                }
                .fa-youtube:hover {
                    color: rgb(255, 0, 0);
                }
            </style>
        </div>
    </div>
</div>

<div id="desktop-nav" class="clearfix">
    <div class="header-container" style="position: relative;">
        <div class="mobile-nav nav-item hidden-md hidden-lg">
            <a href="#" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <ul class="nav-logo">
            <?php
            $my_home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>
            <li><a href="<?php echo $my_home_url; ?>"><img src="/wp-content/themes/avetisyan/images/Mushegh-Avetisyan-logo02.png"></a></li>
        </ul>
        <div class="main-nav-wrapper">
	        <?php
	       wp_nav_menu(array(
		        'theme_location' => 'primary',
		        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		        'menu_class' => 'nav-style hidden-xs hidden-sm',
		        'menu_id' => 'menu-main-nav',
		        'depth' => 2
	        ));
	        ?>
        </div>

        <script>
            var row_str = ' <i class="fa fa-angle-down"></i>';
            $('.menu-item-has-children > a').append(row_str);
        </script>
        <div class="nav-right">
            <div class="nav-item hidden-xs hidden-sm left">
                <a href="#" id="search"><i class="fa fa-fw fa-lg fa-search"></i></a>
            </div>
            <?php do_action('wpml_add_language_selector'); ?>
            <script>
                $('.nav-right div.lang_sel_list_horizontal ul li.icl-en a').html("Eng");
                $('.nav-right div.lang_sel_list_horizontal ul li.icl-hy a').html("Հայ");
            </script>

<!--
            <div class="menu-more">
                <p><?php _e('More', 'mushegh'); ?></p>
                <div class="right">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            -->
        </div>
    </div>
    <div class="hidden-search">
        <h3><?php _e('What can we help you find?', 'mushegh'); ?></h3>
        <?php echo get_search_form(); ?>
    </div>
</div>
<!--
<div class="side-nav-overlay" id="side-nav-1">
    <div id="side-nav">

        <span class="less"><?php _e('Less', 'mushegh'); ?>   </span>

        <ul id="menu-more-nav" class="">
            <li id="menu-item-21638" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21638"><a title="Stories" href="<?php echo get_page_link('58'); ?>" itemprop="url"><?php _e('Stories', 'mushegh'); ?></a></li>
            <li id="menu-item-20752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20752"><a title="Podcasts" href="<?php echo get_page_link('127'); ?>" itemprop="url"><?php _e('Podcasts', 'mushegh'); ?></a></li>
            <li id="menu-item-20753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20753"><a title="Ask Mushegh" href="<?php echo get_page_link('172'); ?>" itemprop="url"><?php _e('Ask Mushegh', 'mushegh'); ?></a></li>
        </ul>
        <div class="nav-sep"></div>

        <ul id="menu-more-nav-2" class="">
            <li id="menu-item-15985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15985"><a title="Team Members" href="<?php echo get_page_link('148'); ?>" itemprop="url"><?php _e('Team Members', 'mushegh'); ?></a></li>
        </ul>
    </div>
</div>
-->
<div id="mobile-menu" class="overlay hidden" style="background-color: white;">

    <div id="header-bar-mobile" class="header-bar">
        <div class="header-container">
            <div class="header-socials">
                <p class="phone">
                    <a href='tel://<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_telephone', true); ?>' class='phonenumber'>
                        <span class='mm-phone-number'><?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_telephone', true); ?></span>
                        <i class='fa fa-fw fa-lg fa-phone'></i>
                    </a>
                </p>

                <ul>
                    <li>
                        <a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_facebook', true); ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_twitter', true); ?>" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_vk', true); ?>" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <?php do_action('wpml_add_language_selector'); ?>
        </div>
    </div>
    <?php $jq_ajax_screen_widths = $_GET['ScreenWidth']; if($jq_ajax_screen_widths < 992): ?>
    <div style="background-color: white;">
        <?php echo get_search_form(); ?>
    </div>
<?php endif; ?>


    <div class="mobile-nav-container" style="background-color: white;">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'menu_class' => 'menu',
            'menu_id' => 'menu-main-nav-1',
            'depth' => 2
        )); ?>
        <!--
        <div class="nav-sep"></div>

        <ul id="menu-more-nav-1" class="side-menu">
            <li id="menu-item-21638" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21638"><a title="Stories" href="<?php echo get_page_link('58'); ?>" itemprop="url"><?php _e('Stories', 'mushegh'); ?></a></li>
            <li id="menu-item-20752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20752"><a title="Podcasts" href="<?php echo get_page_link('127'); ?>" itemprop="url"><?php _e('Podcasts', 'mushegh'); ?></a></li>
            <li id="menu-item-20753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20753"><a title="Ask Mushegh" href="<?php echo get_page_link('172'); ?>" itemprop="url"><?php _e('Ask Mushegh', 'mushegh'); ?></a></li>
        </ul>
        <div class="nav-sep"></div>

        <ul id="menu-more-nav-3" class="side-menu">
            <li id="menu-item-15985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15985"><a title="Team Members" href="<?php echo get_page_link('148'); ?>" itemprop="url"><?php _e('Team Members', 'mushegh'); ?></a></li>
        </ul>
        -->
    </div>
</div>
