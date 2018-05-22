<?php
/*
    Template Name: Home Page
*/

?>
<?php get_header(); ?>
<?php
$news = apply_filters( 'wpml_object_id', 52, 'category' );
$argus=array(
    'showposts' => 1,
    'post_type' => 'event',
    'tax_query' => array(array(
            'taxonomy' => 'event-categories',
            'field'    => 'id',
            'terms'    => array($news),
        'operator'=> 'IN'
    )),
);
$wp_query = new WP_Query( $argus );
?>

<?php if($wp_query->have_posts()): ?>
<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
    <?php
        $new = $post->ID;
        global $wpdb;
        $querycustomss = "SELECT * FROM `wp_em_events` WHERE `post_id` = $new" ;
        $resulter = $wpdb->get_results($querycustomss);

        $locationid = $resulter[0]->location_id;

        $querycustomsss = "SELECT * FROM `wp_em_locations` WHERE `location_id` = $locationid" ;
        $resulters = $wpdb->get_results($querycustomsss);
        ?>
    <div class="intro intro-primary parallax-container intro-overlayed">

        <div id="background" class="home-hero-image"
             style="background-image: url('<?php echo get_the_post_thumbnail_url(apply_filters( 'wpml_object_id', 292, 'post')); ?>');"></div>
        <div id="video-background" class="home-video">
            <div class="adaptive-wrap">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), 'my_meta_box_video', true); ?>?controls=0&showinfo=0&rel=0&mute=1&autoplay=1&loop=1&autohide=1&playlist=<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), 'my_meta_box_video', true); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>



       <div class="intro-content" style="<?php if( strtotime( current_time( 'mysql' ) ) > strtotime($resulter[0]->event_end_date.' '.$resulter[0]->event_end_time)){ echo 'display: none;'; } ?>">
            <h1 class="armenian"><?php the_title(); ?></h1>
            <p><strong><?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), 'my_biography_footer_textarea', true); ?></strong></p>
            <?php if(date_i18n('F', strtotime($resulter[0]->event_start_date)) == date_i18n('F', strtotime($resulter[0]->event_end_date))): ?>
                <h6><?php echo $resulters[0]->location_town.', '; ?> <?php echo $resulters[0]->location_address; ?> | <?php echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n(' d', strtotime($resulter[0]->event_end_date)); ?></h6>
            <?php endif; ?>
            <?php if(date_i18n('F', strtotime($resulter[0]->event_start_date)) != date_i18n('F', strtotime($resulter[0]->event_end_date))): ?>
                <h6><?php echo $resulters[0]->location_town.', '; ?> <?php echo $resulters[0]->location_address; ?> | <?php echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n('F d', strtotime($resulter[0]->event_end_date)); ?></h6>
            <?php endif; ?>
            <div id="countdown" rel="<?php echo $resulter[0]->event_start_date.' '.$resulter[0]->event_start_time; ?>"></div>
            <div class="intro-actions" style="margin-top: 20px;">
                <a class=" btn-grey " href="<?php the_permalink(); ?>"><?php _e('More Info', 'mushegh'); ?></a>


            </div>
        </div>



    </div>
    <style>
        .intro-content h1 {
            font-size: 100px;
        }
        .armenian:lang(hy) {
            font-size: 65px;
        }

        @media screen and (min-width: 481px) and (max-width: 991px) {
            .home .intro {
                position: relative;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
            }
            .intro-primary .intro-content {
                margin-top:56.25%;
            }
            .intro-content h1 {
                font-size: 70px;
            }
        }
        @media screen and (min-width: 991px) {
            .home .intro {
                height: 552px;
            }
        }
        @media screen and (max-width: 480px) {
            .armenian:lang(hy) {
                font-size: 40px;
            }
            .intro-content h1 {
                font-size: 60px;
            }
        }
        @media screen and (min-width: 1080px) {
            .adaptive-wrap {
                top: -3vw;
            }
        }
        .adaptive-wrap {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        .adaptive-wrap iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .embed-container, #video-content {
            position: initial;
            overflow: hidden;
            max-width: 100%;
            height: auto;
        }
    </style>
<?php endwhile; ?>
<?php endif; ?>




    <!-- subscribe form-->

    <div class="callout">
        <div class="container-fluid">
            <p><?php _e('Join my newsletter', 'mushegh'); ?></p>
            <a id="subnav-cta-button" class="opt-in-form btn btn-blue" href="#"><?php _e('JOIN NOW', 'mushegh'); ?></a>
        </div>
    </div>

    <div id="form" class="overlay" style="display: none; opacity: 0;">
        <a class="overlay-close" href="#"><i class="fa fa-times-circle fa-lg"></i></a>
        <div>
            <div class="col-xs-10 text-center center">
                <h2><?php _e('Take your life to the next level!', 'mushegh'); ?></h2>
                <?php
                if (ICL_LANGUAGE_CODE == "hy") {
                    echo do_shortcode("[contact-form-7 id='1040' title='Home page contact-form_hy']");
                } else {
                    echo do_shortcode("[contact-form-7 id='1049' title='Home page contact-form_en']");
                }
                ?>
<!--                --><?php //wp_newsseller_subscribe(); ?>
<!--                    <form method="post" class="wpcf7-form">-->
<!--                        <div class="container-fluid">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="news-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Name', 'mushegh'); ?><!--:"></span></div>-->
<!--                                <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input type="text" name="news-surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Surename', 'mushegh'); ?><!--:"></span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="container-fluid">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="news-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Email', 'mushegh'); ?><!--:"></span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="container-fluid">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="news-submit" value="--><?php //_e('Confirm', 'mushegh'); ?><!--" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="wpcf7-response-output wpcf7-display-none"></div>-->
<!--                    </form>-->



            </div>
        </div>
    </div>
    <section class="section section-about">
        <div class="container">
            <div class="section-image" >
                <?php /*the_post_thumbnail('', array('style' => 'width: 372px;')); */?>
                <img src="<?php if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                    $featured_images = $dynamic_featured_image->get_featured_images( $pagehomelg );
                    echo $featured_images[0]['full'];
                } ?>">

            </div>

            <div class="section-content">
                <h5><?php _e('About Mushegh', 'mushegh'); ?></h5>
                <!--<p><em><?php echo get_post_meta(apply_filters( 'wpml_object_id', 190, 'post' ), 'my_biography_title_textarea', true); ?><br/>
                    </em></p>-->
                <div class="testimonial-inner">
                    <em><?php echo get_post_meta(apply_filters( 'wpml_object_id', 470, 'post' ), 'my_biography_footer_textarea', true); ?></em>
                </div>
                <p><em><a class="" href="<?php echo get_post_permalink(apply_filters( 'wpml_object_id', 470, 'post' ), true); ?>"><?php _e('read more', 'mushegh'); ?></a></em></p>

            </div>
        </div>
    </section>


<?php $queryst = new WP_Query(array(
    'post_type' => 'success-story',
    'showposts' => -1
)); ?>
<?php if ($queryst->have_posts()) : ?>
    <section class="section-testimonials fix-bg">
        <?php echo get_the_post_thumbnail('282', '', array('class' => 'background')); ?>

        <div class="container">
            <div class="slider-images">
                <div class="slider-clip">
                    <ul class="slides">
                        <?php while ($queryst->have_posts()): $queryst->the_post(); ?>
                            <?php $mypost_id = get_the_ID(); ?>
                            <li class="slide" style="width: 100%; height: auto;">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"
                                     style="overflow: hidden; width: 100%; height: auto;">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>

            <div class="slider-testimonials">
                <div class="slider-clip">
                    <ul class="slides">
                        <?php while ($queryst->have_posts()): $queryst->the_post(); ?>
                            <?php $mypost_id = get_the_ID(); ?>
                            <li class="slide">
                                <h5><?php the_title(); ?></h5>

                                <em><?php echo get_post_meta($post->ID, 'my_meta_box_success', true); ?></em>

                                <p><?php echo get_post_meta($post->ID, 'my_meta_box_success_textarea', true); ?></p>

                                <a href="<?php if (get_post_meta($post->ID, 'my_meta_box_video', true) == '') {
                                    the_permalink();
                                } else {
                                    echo 'https://www.youtube.com/watch?v=' . get_post_meta($post->ID, 'my_meta_box_video', true);
                                } ?>"
                                   class="link-more"><?php if (get_post_meta($post->ID, 'my_meta_box_video', true) == '') {
//                                        echo _e('Read', 'mushegh');
                                    } else {
//                                        echo _e('Watch', 'mushegh');
                                    } ?> <?php /*the_title(); */?><!----><?php /*_e('\'s Story', 'mushegh'); */?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php
query_posts(array(
    'post_type' => 'blog',
    'showposts' => 5
));
?>
<?php if (have_posts()) : ?>
    <?php $x = 0;
    while (have_posts()): the_post(); ?>
        <?php $mypost_id = get_the_ID(); ?>
        <?php if ($x == 0): ?>

            <section class="section-posts post-list">
            <div class="container blog-container">
            <!-- Blog posts -->
            <div class="blog-items ">
            <?php echo apply_filters('the_content', $pageblog->post_content); ?>
            <br>
        <?php endif; ?>


        <?php if ($x == 0 || $x == 2) {
            echo '<div class="row">';
        } ?>
        <div class="col-sm-6 blog-item blog-clear stories-item
                                <?php if ($x == 0 || $x == 6) {
            echo 'col-md-8';
        } else {
            echo 'col-md-4';
        } ?>
                            ">
            <div class="post">
                <a style="background-image:url(<?php the_post_thumbnail_url() ?>);" class="post-item-image"
                   href="<?php the_permalink(); ?>">
                    <div class="post-item-container <?php echo 'color'.$x; ?>">
                        <img class="ico-handshake cat-icon" src="<?php echo category_image_src(array('term_id' => get_the_terms( $post->ID, 'blog_category')[0] -> term_id, 'size'=>'full'), false); ?>">
                    </div>
                </a>
                <style>
                    <?php echo '.color'.$x.':before'; ?> {
                        background-color: <?php echo get_term_meta(get_the_terms( $post->ID, 'blog_category')[0] -> term_id, 'cc_color', true); ?>;
                    }
                </style>
                <div class="post-content">
                    <h5 style="color: <?php echo get_term_meta(get_the_terms( $post->ID, 'blog_category')[0] -> term_id, 'cc_color', true); ?>;"
                        class="micro">
                        <?php
                        echo get_the_terms($post->ID, 'blog_category')[0]->name;
                        ?>
                    </h5>
                    <h4 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'mushegh'); ?></a>
                </div>
            </div>
        </div>
        <?php if ($x == 1 || $x == 4) {
            echo '</div>';
        } ?>
        <?php $x++; ?>
    <?php endwhile; ?>
    </div>
    </div>
    <br>
    </section>
<?php endif; ?>


<?php $queryvideo = new WP_Query(array(
    'post_type' => 'custom_video',
    'showposts' => 3
)); ?>

    <section class="section-videos">
        <h5><?php _e('Media Library', 'mushegh'); ?></h5>

        <ul class="videos">
            <?php if ($queryvideo->have_posts()) : ?>
                <?php $x = 0;
                while ($queryvideo->have_posts()): $queryvideo->the_post(); ?>
                    <?php $mypost_id = get_the_ID(); ?>
                    <li class="video">
                        <a href="#"
                           rel="https://www.youtube.com/embed/<?php echo get_post_meta($mypost_id, 'my_meta_box_video', true); ?>"
                           class="video-popup" id="my_success_video<?php echo $x; ?>">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="" width="532" height="400">

                            <i class="ico-play"></i>

                            <div class="video-content">
                                <h6><?php the_title(); ?></h6>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </li>
                <?php $x++; ?>
                    <script>

                        $('.video-popup').on('click', function () {
                            $("html").attr('style', 'margin-right: 17px; overflow: hidden;');
                            $('#my_video_popup').attr('class', 'mfp-bg mfp-fade mfp-ready');
                            $('#my_video_popup_content').removeAttr('style');
                        });
                        $('.mfp-close').on('click', function () {
                            $("html").removeAttr('style');
                            $('#my_video_popup_content').attr('style', 'opacity: 0; transition: 0.5s opacity; top: -999px;');
                            $('#my_video_popup').removeAttr('class');
                            $('.mfp-iframe').removeAttr('src');
                        });
                        for (var i = 0; i < 3; i++) {
                            $('#my_success_video' + i).click(function () {
                                var $input = $(this);
                                $('.mfp-iframe').attr('src', $input.attr('rel'));
                            });
                        }
                    </script>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>

<!--
<div style="background-image: url('<?php /*if( class_exists('Dynamic_Featured_Image') ) {
    global $dynamic_featured_image;
    $featured_images = $dynamic_featured_image->get_featured_images( $pagehomelg );
    echo $featured_images[0]['full'];
} */?>'); background-repeat: no-repeat; background-size: cover;">-->


    <!--    <section class="section-events fix-bg">

<?php /*$queryevents = new WP_Query(array('post_type'=>'event', 'showposts'=>1)) */?>
<?php /*if($queryevents->have_posts()): */?>
    <?php /*while($queryevents->have_posts()): $queryevents->the_post(); */?>
        <?php
/*        $new = $post->ID;
        global $wpdb;
        $querycustomss = "SELECT * FROM `wp_em_events` WHERE `post_id` = $new" ;
        $resulter = $wpdb->get_results($querycustomss);

        $locationid = $resulter[0]->location_id;

        $querycustomsss = "SELECT * FROM `wp_em_locations` WHERE `location_id` = $locationid" ;
        $resulters = $wpdb->get_results($querycustomsss);
        */?>
    <div class="container">
        <h5><?php /*_e('upcoming events', 'mushegh'); */?></h5>

        <div class="section-inner">
            <div class="event">

                <?php
/*                $newss = apply_filters( 'wpml_object_id', 52, 'category' );
                $argus=array(
                    'numberposts' => 1,
                    'post_type' => 'event',
                    'tax_query' => array(array(
                        'taxonomy' => 'event-categories',
                        'field'    => 'id',
                        'terms'    => array($newss),
                        'operator'=> 'IN'
                    )),
                );
                $wp_queryst = new WP_Query( $argus );
                */?>




                <?php /*if($wp_queryst->have_posts()): */?>
                <?php /*while($wp_queryst->have_posts()): $wp_queryst->the_post(); */?>
                <?php
/*                $new = $post->ID;
                global $wpdb;
                $querycustomss = "SELECT * FROM `wp_em_events` WHERE `post_id` = $new" ;
                $resulter = $wpdb->get_results($querycustomss);

                $locationid = $resulter[0]->location_id;

                $querycustomsss = "SELECT * FROM `wp_em_locations` WHERE `location_id` = $locationid" ;
                $resulters = $wpdb->get_results($querycustomsss);
                */?>

                        <h5 style="margin-bottom: 40px;"><?php /*the_title(); */?></h5>
                <p><em>
                <?php /*if(date_i18n('F', strtotime($resulter[0]->event_start_date)) == date_i18n('F', strtotime($resulter[0]->event_end_date))): */?>
                    <?php /*echo $resulters[0]->location_town.', '; */?> <?php /*echo $resulters[0]->location_address; */?> | <?php /*echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n(' d', strtotime($resulter[0]->event_end_date)); */?>
                <?php /*endif; */?>
                <?php /*if(date_i18n('F', strtotime($resulter[0]->event_start_date)) != date_i18n('F', strtotime($resulter[0]->event_end_date))): */?>
                <?php /*echo $resulters[0]->location_town.', '; */?> <?php /*echo $resulters[0]->location_address; */?> | <?php /*echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n('F d', strtotime($resulter[0]->event_end_date)); */?>
                <?php /*endif; */?></em></p>

                        <p><?php /*echo get_post_meta(apply_filters( 'wpml_object_id', 190, 'post' ), 'my-first-field-name', true); */?></p>

                <div class="intro-actions">

                    <a style="margin-right: 20px;" class="btn-grey" href="<?php /*the_permalink(); */?>"><?php /*_e('More Info', 'mushegh'); */?></a>
                    <a class="newsletter btn btn-grey intro-btn opt-in-form" href=""><?php /*_e('Reserve your seat', 'mushegh'); */?></a>

                </div>
                <?php /*endwhile; */?>
                <?php /*endif; */?>
            </div>
        </div>
    </div>
    <?php /*endwhile; */?>
    <div id="form-newsletter" class="overlay hidden"> <a class="overlay-close" href="#">
            <i class="fa fa-times-circle fa-lg"></i> <?php /*_e('close', 'mushegh'); */?></a>
        <div>
            <div class="col-xs-10 text-center center">
                <h2><?php /*_e('Events Register', 'mushegh'); */?></h2>
                <?php /*wp_events_subscribe(); */?>
                <form method="post" class="wpcf7-form">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="contact-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('First Name', 'mushegh'); */?>:"></span></div>
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input type="text" name="contact-surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Last Name', 'mushegh'); */?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-phone"><input type="tel" name="contact-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Phone Number', 'mushegh'); */?>:"></span></div>
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="contact-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Email', 'mushegh'); */?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-country"><input type="text" name="contact-country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Country', 'mushegh'); */?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="submit" value="<?php /*_e('SUBMIT', 'mushegh'); */?>" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row"><a href="https://www.skill.am/" style="color: yellow;">Skill</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php /*endif; */?>

    </section>
    -->

</div>







<!--
<?php /*$wpb_all_querys = new WP_Query(array('post_type' => 'podcast', 'post_status' => 'publish', 'posts_per_page' => 3)); */?>
<?php /*if ($wpb_all_querys->have_posts()) : */?>
    <section class="section-podcasts">
        <div class="container">
            <h5><?php /*_e('Listen to the Podcast', 'mushegh'); */?></h5>

            <div class="row">

                <?php /*while ($wpb_all_querys->have_posts()) : $wpb_all_querys->the_post(); */?>
                    <div class="col-sm-6 col-md-4">
                        <div class="podcast">
                            <a href="<?php /*the_permalink(); */?>" style="color: #fff;">
                                <img src="<?php /*if( class_exists('Dynamic_Featured_Image') ) {
    global $dynamic_featured_image;
    $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );
    echo $featured_images[0]['full'];
} */?>">
                                <div class="podcast-content">
                                    <em><?php /*the_time('F j, Y'); */?></em>
                                    <h4 class="podcast-title"><?php /*the_title(); */?></h4>
                                    <p><?php /*echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); */?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php /*endwhile; */?>

            </div>

            <div class="section-actions">
                <a href="<?php /*echo get_page_link('127'); */?>" class="btn btn-teal"><?php /*_e('view all podcasts', 'mushegh'); */?></a>
            </div>
        </div>
    </section>
--><?php /*endif; */?>








    <script type="text/javascript">
        $(document).ready(function(){
            // countdown timer
            $newses = $('#countdown').attr('rel');
            $('#countdown').countdown({
                date: $newses,
                render: function(data) {
                    $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span><?php _e('days', 'mushegh'); ?></span></div><div class='counter-spacer'>:</div><div>" + this.leadingZeros(data.hours, 2) + " <span><?php _e('hrs', 'mushegh'); ?></span></div><div class='counter-spacer'>:</div><div>" + this.leadingZeros(data.min, 2) + " <span><?php _e('min', 'mushegh'); ?></span></div><div class='counter-spacer'>:</div><div>" + this.leadingZeros(data.sec, 2) + " <span><?php _e('sec', 'mushegh'); ?></span></div>");
                }
            });
        });
    </script>
<?php get_footer(); ?>