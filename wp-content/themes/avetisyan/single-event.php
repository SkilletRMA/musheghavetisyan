<?php get_header(); ?>
<?php if(have_posts()): ?>

    <div class="intro parallax-container intro-overlayed">

        <div class="intro-bg parallax" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">

            <?php
            $new = $post->ID;
            global $wpdb;
            $querycustomss = "SELECT * FROM `wp_em_events` WHERE `post_id` = $new" ;
            $resulter = $wpdb->get_results($querycustomss);

            $locationid = $resulter[0]->location_id;

            $querycustomsss = "SELECT * FROM `wp_em_locations` WHERE `location_id` = $locationid" ;
            $resulters = $wpdb->get_results($querycustomsss);

            $queryst = new WP_Query(array(
                'post_type' => 'success-story',
                'showposts' => -1,
                'tax_query' => array(array(
                    'taxonomy' => 'event-categories',
                    'field' => 'slug',
                    'terms' => array(get_the_terms( $new, 'event-categories')[0]->slug),
                    'operator' => 'IN'
                ))
            )); ?>
        </div><!-- /.intro-bg -->
        <div class="intro-content">


            <h2 class="intro-title">

                <?php the_title(); ?>

               <!-- <?php /*if(date_i18n('F', strtotime($resulter[0]->event_start_date)) == date_i18n('F', strtotime($resulter[0]->event_end_date))): */?>
                    <strong><?php /*echo $resulters[0]->location_town.', '; */?> <?php /*echo $resulters[0]->location_address; */?> | <?php /*echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n(' d', strtotime($resulter[0]->event_end_date)); */?></strong>
                <?php /*endif; */?>
                <?php /*if(date_i18n('F', strtotime($resulter[0]->event_start_date)) != date_i18n('F', strtotime($resulter[0]->event_end_date))): */?>
                    <strong><?php /*echo $resulters[0]->location_town.', '; */?> <?php /*echo $resulters[0]->location_address; */?> | <?php /*echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n('F d', strtotime($resulter[0]->event_end_date)); */?></strong>
                --><?php /*endif; */?>

            </h2>

            <div ></div>
<!--            <div id="countdown" rel="--><?php //echo $resulter[0]->event_start_date.' '.$resulter[0]->event_start_time; ?><!--"></div>-->

            <div class="intro-actions">
<!--                <a class="newsletter btn btn-grey intro-btn opt-in-form" href="">--><?php //_e('Register Now', 'mushegh'); ?><!--</a>-->
            </div><!-- /.intro-actions -->
        </div><!-- /.intro-content -->
    </div><!-- /.intro -->

    <div class="sticky-element" >
        <nav class="nav-teritary">
            <div class="container nav nav-tabs">
                <ul>
                    <li role="presentation" class=" about-tab active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab"><?php _e('about', 'mushegh'); ?></a></li>

                    <li role="presentation" class="event-tab"><a  href="#event-info" aria-controls="event-info" role="tab" data-toggle="tab"><?php _e('event info', 'mushegh'); ?></a></li>





                </ul>
            </div><!-- /.container -->
        </nav>
    </div>

    <!-- breadcrumbs -->
    <div class="container center col-xs-12 event-section">
        <p id="breadcrumbs" style="padding-top: 45px;">
            <span>
                <span><a href="<?php echo home_url(); ?>"><?php _e('Home', 'mushegh'); ?></a> »
                    <span><a href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 145, 'post' )); ?>"><?php _e('Events', 'mushegh'); ?></a> »
                        <span class="breadcrumb_last"><?php echo get_the_terms( $post->ID, 'event-categories')[0] -> name; ?> &#8211; <?php echo $resulters[0]->location_town.', '; ?> <?php echo $resulters[0]->location_address; ?></span>
                        <!--<span><a href="<?php echo get_term_link(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'event-categories'); ?>"><?php echo get_the_terms( $post->ID, 'event-categories')[0] -> name; ?></a> »</span>-->
                    </span>
                </span>
            </span>
        </p>
    </div>
    <section id="tab-area">
        <div class="clearfix">
            <div class="clearfix">
                <div class="clearfix">
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- about info tab -->
                        <div role="tabpanel" class="tab-pane active" id="about">
                            <div class="tab-sections overview clearfix" style="margin-bottom: 0;">

                                <section class="section-simple" style="padding-top: 0px;">
                                    <div class="container container-md event-section">
                                        <div class="section-entry">
                                            <?php echo get_post_meta($post->ID, 'event-media-field-name', true) ?>
                                        </div><!-- /.section-entry -->
                                    </div><!-- /.container-md -->
                                </section><!-- /.section-simple -->

                                <section class="section-features-secondary has-video">
                                    <div class="container">
                                        <div class="section-media">
                                            <a id="new_event_videos" rel="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_event_video', true); ?>" class="video-popup">
                                                <img src="<?php if( class_exists('Dynamic_Featured_Image') ) {
                                                    global $dynamic_featured_image;
                                                    $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );
                                                    echo $featured_images[0]['full'];
                                                } ?>" alt="" width="1030" height="517">

                                                <i class="ico-play"></i>
                                            </a>
                                        </div><!-- /.section-media -->
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
                                                $('#new_event_videos').click(function () {
                                                    var $input=$(this);
                                                    $('.mfp-iframe').attr('src', $input.attr('rel'));
                                                });
                                        </script>
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 event-section">
                                                <?php echo get_post_meta($post->ID, 'my-first-field-name', true) ?>
                                            </div>
                                        </div>

                                    </div><!-- /.container -->
                                </section><!-- /.section-features-secondary -->
                            </div>
                            <?php if ( $queryst->have_posts() ) : ?>
                                <section class="section-testimonials fix-bg">
                                    <?php echo get_the_post_thumbnail('282', '', array('class'=>'background')); ?>

                                    <div class="container">
                                        <div class="slider-images">
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

                                        <div class="slider-testimonials">
                                            <div class="slider-clip">
                                                <ul class="slides">
                                                    <?php while ( $queryst->have_posts() ): $queryst->the_post(); ?>
                                                        <?php $mypost_id = get_the_ID(); ?>
                                                        <li class="slide">
                                                            <h5><?php the_title(); ?></h5>

                                                            <em><?php echo get_post_meta($post->ID, 'my_meta_box_success', true); ?></em>

                                                            <p><?php echo get_post_meta($post->ID, 'my_meta_box_success_textarea', true); ?></p>

                                                            <a href="<?php if(get_post_meta($post->ID, 'my_meta_box_video', true) == ''){the_permalink();}else{echo 'https://www.youtube.com/watch?v='.get_post_meta($post->ID, 'my_meta_box_video', true);} ?>" class="link-more"><?php if(get_post_meta($post->ID, 'my_meta_box_video', true) == ''){/*echo _e('Read', 'mushegh');*/}else{ /*echo _e('Watch', 'mushegh');*/ }?> <?php /*the_title(); */?><!----><?php /*_e('\'s Story', 'mushegh'); */?></a>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php endif; ?>
                         </div>

                        <!-- event info tab -->

                        <div role="tabpanel" class="tab-pane active" id="event-info">
                            <!-- event info tab > location, reservations, schedule sections -->
                            <?php if(have_posts()): the_post(); ?>
                                <div class="tab-sections event-info clearfix">
                                    <div class="container">
                                        <h5 class="center" style="text-align:center;"><?php _e('EVENT INFORMATION', 'mushegh'); ?></h5>
                                    </div>
                                    <section class="section-map">
                                        <div class="container container-md"><aside class="section-aside">
                                                <div class="gmap-container">
                                                    <h3>“<?php echo $resulters[0]->location_name; ?>” <?php _e(' location', 'mushegh');   ?></h3>
                                                    <div class="map-container"><?php the_content(); ?></div>
                                                </div>
                                                <!-- /.gmap-container -->

                                            </aside><!-- /.section-aside -->
                                            <div class="section-content">
                                                <?php echo $resulters[0]->post_content; ?>
<!--                                                --><?php //var_dump($resulters[0]);
//                                                var_dump($post->ID);
                                                ?>
                                            </div>
                                        </div>
                                    </section>
                                        <!-- /.container -->
<!--                                    --><?php //echo the_post(); ?>



<!--                                    --><?php //var_dump($resulters[0]); ?>


                                    <div class="tab-sections clearfix">
                                        <div class="container container-md">
<!--                                            --><?php //echo get_post_field('post_content', $post->ID); ?>
                                            <?php echo get_post_field('post_content', $post->ID); ?>
<!--                                            --><?php //echo 'hello world!'; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<div class="callout cta-bar-bottom" style="background-color: #f7542b;">
    <div class="container-fluid">
        <p style="color: white;">  <?php _e('Register and receive the best offers first', 'mushegh'); ?></p>

        <a href="#" class="newsletter btn btn-md blue-outline opt-in-form"><?php _e('Learn More', 'mushegh'); ?></a>
    </div>
</div>

<div id="form-newsletter" class="overlay hidden"> <a class="overlay-close" href="#">
        <i class="fa fa-times-circle fa-lg"></i> <?php _e('close', 'mushegh'); ?></a>
    <div>
        <div class="col-xs-10 text-center center">
<!--            <h2>--><?php //_e('Events Register', 'mushegh'); ?><!--</h2>-->
            <h2><?php the_title(); ?></h2>
            <?php
            if (ICL_LANGUAGE_CODE == "hy") {
                echo do_shortcode("[contact-form-7 id='1046' title='Event contact-form_hy']");
            } else {
                echo do_shortcode("[contact-form-7 id='1048' title='Event contact-form_en']");
            }
            ?>
<!--            --><?php //wp_events_subscribe(); ?>
<!--            <form method="post" class="wpcf7-form">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="contact-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Name', 'mushegh'); ?><!--:"></span></div>-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input type="text" name="contact-surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Surename', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-phone"><input type="tel" name="contact-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Tel', 'mushegh'); ?><!--:"></span></div>-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="contact-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Email', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-country"><input type="text" name="contact-country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('City', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="submit" value="--><?php //_e('SUBMIT', 'mushegh'); ?><!--" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--<!--                    <div class="row"><a href="https://www.skill.am/" style="color: yellow;">Skill</a></div>-->-->
<!--                </div>-->
<!--            </form>-->
        </div>
    </div>
</div>


<!-- hide Ժամանակն է գործելու-->
<?php
/*if($_SERVER[REQUEST_URI] == "/events/second-event/"){
  echo  "<script>document.querySelector('.callout.cta-bar-bottom').style.display = 'none';</script>";}
*/?>
<?php get_footer(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#about").addClass('active');
        $(".about-tab").addClass('active');
        $(".event-tab").removeClass('active');
        setTimeout(function () {
            $("#event-info").removeClass('active');

        },1000);
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
