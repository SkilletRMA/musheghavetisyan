<?php get_header(); ?>
<?php
$new = get_queried_object()->term_id;
global $wpdb;
$querycustom = "SELECT `meta_value` FROM `wp_em_meta` WHERE `object_id` = $new AND `meta_key` = 'category-image'" ;
$result = $wpdb->get_results($querycustom);
?>




<?php
$event_arg = array(
    'type'         => 'event',
    'child_of'     => 0,
    'parent'       => '',
    'order'        => 'ASC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'number'       => 0,
    'taxonomy'     => 'event-categories',
    'pad_counts'   => false,
);
$categories_event =  get_terms($event_arg);
?>

<?php
$event_category_posts = array(
    'post_type' => 'event',
    'post_status' => 'publish',
    'numberposts' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'event-categories',
            'field' => 'id',
            'terms' => array(get_queried_object()->term_id),
        )
    )
);
?>
    <section id="hero-event" class="upw-event">
            <div id="background" style="background-image: url('<?php echo $result[0]->meta_value; ?>')"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-size: 9rem;"><?php single_term_title(); ?></h1>
                        <p class="sub-text"><?php _e('Learn the Secrets to ', 'mushegh'); ?><?php single_cat_title(); ?><?php _e(' with Mushegh Avetisyan', 'mushegh'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    <style>

    </style>
    <section class="section-simple" style="<?php if (get_option('taxonomy_'.get_queried_object()->term_id.'', true)['first_textarea_term_meta'] == ''){echo 'padding-bottom: 0px';} ?>">
        <div class="container container-md">
            <div class="section-entry">
                <h4 class="promo"><?php _e('Learn Secrets to', 'mushegh'); ?> <?php single_cat_title(); ?></h4>
                <p><?php echo get_option('taxonomy_'.get_queried_object()->term_id.'', true)['first_textarea_term_meta']; ?></p>
            </div><!-- /.section-entry -->
        </div><!-- /.container-md -->
    </section>
    <div class="section-features-secondary">
        <section class="event-list-section grey-section has-video" style="<?php if (get_option('taxonomy_'.get_queried_object()->term_id.'', true)['first_textarea_term_meta'] == ''){echo 'margin-top: 20px;';} ?>">
            <div class="container">
                <?php if(get_option('taxonomy_'.get_queried_object()->term_id.'', true)['video_term_meta'] != ''): ?>
                    <div class="row section-media">
                    <a id="my_event_category_video" rel="https://www.youtube.com/embed/<?php echo get_option('taxonomy_'.get_queried_object()->term_id.'', true)['video_term_meta']; ?>" class="video-popup">
                        <img src="<?php
                        echo $result[0]->meta_value;
                        ?>" alt="" width="1030" height="517">

                        <i class="ico-play"></i>
                    </a>
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
                        $('#my_event_category_video').click(function () {
                            var $input=$(this);
                            $('.mfp-iframe').attr('src', $input.attr('rel'));
                        });
                    </script>
                </div><!-- /.section-media -->
                <?php endif; ?>
                <section class="event-list">
                    <h4 class="promo" style="<?php if (get_option('taxonomy_'.get_queried_object()->term_id.'', true)['first_textarea_term_meta'] == ''){echo 'margin-top: 40px';} ?>"><?php _e('Location Dates & Times', 'mushegh'); ?></h4>


                            <?php $queryz = new WP_Query( $event_category_posts ); ?>
                            <?php if($queryz->have_posts()) : ?>
                                <?php while ( $queryz->have_posts() ): $queryz->the_post(); ?>
                                    <?php
                                    $new = $post->ID;
                                    global $wpdb;
                                    $querycustomss = "SELECT * FROM `wp_em_events` WHERE `post_id` = $new" ;
                                    $resulter = $wpdb->get_results($querycustomss);

                                    $locationid = $resulter[0]->location_id;

                                    $querycustomsss = "SELECT * FROM `wp_em_locations` WHERE `location_id` = $locationid" ;
                                    $resulters = $wpdb->get_results($querycustomsss);

                                    ?>
                    <ul class="list-jobs list-jobs-secondary">
                        <li>
                            <?php if(date_i18n('F', strtotime($resulter[0]->event_start_date)) == date_i18n('F', strtotime($resulter[0]->event_end_date))) {$enddate=date_i18n('d', strtotime($resulter[0]->event_end_date));} else {$enddate=date_i18n('F d', strtotime($resulter[0]->event_end_date));} ?>
                                    <strong><?php echo $resulters[0]->location_town.', '; ?> <?php echo $resulters[0]->location_address; ?> | <?php echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.$enddate; ?></strong>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-teal btn-small event-btn"><?php _e('More Info', 'mushegh'); ?></a>
                        </li>
                    </ul>
                                <?php endwhile; ?>
                            <?php endif; ?>


                </section>

            </div>
        </section>
    </div>



<?php $queryst = new WP_Query(array(
    'post_type' => 'success-story',
    'showposts' => -1
)); ?>
<?php if ( $queryst->have_posts() ) : ?>
    <section class="section-testimonials fix-bg">
        <?php echo get_the_post_thumbnail('282', '', array('class'=>'background')); ?>

        <div class="container">
            <div class="slider-images" style="z-index: 1;">
                <div class="slider-clip">
                    <ul class="slides">
                        <?php while ( $queryst->have_posts() ): $queryst->the_post(); ?>
                            <?php $mypost_id = get_the_ID(); ?>
                            <li class="slide" style="width: 100%; height: auto;">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" style="overflow: hidden; width: 100%; height: auto;">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>

            <div class="slider-testimonials" style="z-index: 1;">
                <div class="slider-clip">
                    <ul class="slides">
                        <?php while ( $queryst->have_posts() ): $queryst->the_post(); ?>
                            <?php $mypost_id = get_the_ID(); ?>
                            <li class="slide">
                                <h5><?php the_title(); ?></h5>

                                <em><?php echo get_post_meta($post->ID, 'my_meta_box_success', true); ?></em>

                                <p><?php echo get_post_meta($post->ID, 'my_meta_box_success_textarea', true); ?></p>

                                <a href="<?php if(get_post_meta($post->ID, 'my_meta_box_video', true) == ''){the_permalink();}else{echo 'https://www.youtube.com/watch?v='.get_post_meta($post->ID, 'my_meta_box_video', true);} ?>" class="link-more"><?php if(get_post_meta($post->ID, 'my_meta_box_video', true) == ''){/*echo _e('Read', 'mushegh');*/}else{ /*echo _e('Watch', 'mushegh'); */}?> <?php /*the_title(); */?><!----><?php /*_e('\'s Story', 'mushegh'); */?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<!--
    <section id="featured-stories" class="grey-section" style="padding-bottom: 10px;">
        <div class="container">
            <h4 class="promo"><?php _e('Featured', 'mushegh'); ?> <?php single_term_title(); ?> <?php _e('Stories', 'mushegh'); ?></h4>

            <div class="blog-items">
                <div class="row">



                    <?php
                    $story_category_post = array(
                        'post_type' => 'story',
                        'post_status' => 'publish',
                        'numberposts' => 3,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'event-categories',
                                'field' => 'id',
                                'terms' => get_queried_object()->term_id
                            )
                        )
                    );
                    ?>
                    <?php $x=0; $querys = new WP_Query( $story_category_post ); ?>
                    <?php if($querys->have_posts()) : ?>
                        <?php while ( $querys->have_posts() ): $querys->the_post(); ?>
                                    <div class="col-sm-6 blog-item blog-clear col-md-4" style="margin-bottom: 15px;">
                                        <div class="post">
                                            <a  style="background-image:url(<?php the_post_thumbnail_url() ?>);" class="post-item-image" href="<?php the_permalink(); ?>">
                                                <div class="post-item-container <?php echo 'color'.$x; ?>">

                                                    <img class="ico-handshake cat-icon" src="<?php echo category_image_src(array('term_id' => get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'size'=>'full'), false); ?>">
                                                </div>
                                            </a>
                                            <style>
                                                <?php echo '.color'.$x.':before'; ?> {
                                                    background-color: <?php echo get_term_meta(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'cc_color', true); ?>;
                                                }
                                            </style>
                                            <div class="post-content">
                                                <h5 style="color: <?php echo get_term_meta(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'cc_color', true); ?>;"
                                                    class="micro">
                                                    <?php
                                                    echo get_the_terms( $post->ID, 'event-categories')[0] -> name;
                                                    ?>
                                                </h5>
                                                <h4 class="post-title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                                </h4>
                                                <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'mushegh'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $x++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>
-->




    <section id="slider-section" class="grey-section">

            <?php if($queryz->have_posts()) : ?>
    <?php if(get_the_post_thumbnail_url() != '' && $queryz->found_posts > 1): ?>
        <div class="event-slider">
                <?php while ( $queryz->have_posts() ): $queryz->the_post(); ?>

                    <div class="slick-item" >
                        <div class="slick-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');background-size:cover;background-position:center;height: 475px;">

                        </div>
                    </div>

                <?php endwhile; ?>
        </div>
                    <div class="slick-nav">
                        <button type="button" class="slick-prev" style="background-color: rgba(0,0,0,0);"><i style="color: white;" class="fa fa-4x fa-angle-left" aria-hidden="true"></i> </button>
                        <button type="button" class="slick-next" style="background-color: rgba(0,0,0,0);"> <i style="color: white;" class="fa fa-4x fa-angle-right" aria-hidden="true"></i></button>
                    </div>

                <?php endif; ?>
            <?php endif; ?>



        <script>
            $('.event-slider').slick({
                centerMode: true,
                centerPadding: '120px',
                slidesToShow: 1,
                arrows: true,
                prevArrow: $('.slick-prev'),
                nextArrow: $('.slick-next'),
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            prevArrow: $('.slick-prev'),
                            nextArrow: $('.slick-next'),
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            prevArrow: $('.slick-prev'),
                            nextArrow: $('.slick-next'),
                            slidesToShow: 1
                        }
                    }
                ]
            });


        </script>
    </section>

    <section id="tony-note-section" class="grey-section">
        <div class="container">
            <div class="note-header">
                <img src="<?php echo get_the_post_thumbnail_url(apply_filters( 'wpml_object_id', 292, 'post')); ?>">
                <h4 class="promo" style="font-size: 1.6rem;"><?php _e('What Mushegh Has to Say About "', 'mushegh'); ?><?php single_cat_title(); ?><?php _e('"', 'mushegh') ?></h4>
            </div>
            <p><?php echo get_option('taxonomy_'.get_queried_object()->term_id.'', true)['second_textarea_term_meta']; ?></p>
            <p><img class="alignnone size-full wp-image-27479" src="" alt="" width="100" height="48" /></p>
        </div>
    </section>



    <div class="callout cta-bar-bottom" style="background-color: #f7542b;">
        <div class="container-fluid">
            <p style="color: white;">  <?php _e('Register to the Events', 'mushegh'); ?></p>

            <a href="#" class="newsletter btn btn-md blue-outline opt-in-form"><?php _e('Learn More', 'mushegh'); ?></a>
        </div>
    </div>



    <div id="form-newsletter" class="overlay hidden"> <a class="overlay-close" href="#">
            <i class="fa fa-times-circle fa-lg"></i> <?php _e('close', 'mushegh'); ?></a>
        <div>
            <div class="col-xs-10 text-center center">
                <h2><?php _e('Events Register', 'mushegh'); ?></h2>
                <?php wp_events_subscribe(); ?>
                <form method="post" class="wpcf7-form">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="contact-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php _e('First Name', 'mushegh'); ?>:"></span></div>
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input type="text" name="contact-surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php _e('Last Name', 'mushegh'); ?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-phone"><input type="tel" name="contact-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="<?php _e('Phone Number', 'mushegh'); ?>:"></span></div>
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="contact-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="<?php _e('Email', 'mushegh'); ?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-country"><input type="text" name="contact-country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php _e('Country', 'mushegh'); ?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="submit" value="<?php _e('SUBMIT', 'mushegh'); ?>" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
<!--                        <div class="row"><a href="https://www.skill.am/" style="color: yellow;">Skill</a></div>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>