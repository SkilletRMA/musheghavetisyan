<?php
/*
    Template Name: Events
 */

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
<?php get_header(); ?>


<section id="hero-general">

    <div id="background" style="background-image: url('<?php echo get_the_post_thumbnail_url($pageeventlg); ?>')">
        <div class="intro-content intro-header" style="color: #fff; ">
            <h1><?php echo $pageevent->post_title; ?></h1>
        </div>
    </div>
</section>
<section class="section-simple section-eventss" style="padding-top: 20px;<?php if (get_post_meta($pageeventlg, 'my_meta_box_video', true) == ''){echo 'padding-bottom: 0px';} ?>">
    <div class="container container-md">
        <div class="section-entry">
            <?php echo $pageevent->post_content; ?>
        </div>
    </div>
</section>




<section class="section-features-secondary has-video" style="<?php if (get_post_meta($pageeventlg, 'my_meta_box_video', true) == ''){echo 'margin-top: 20px;';} ?>">
    <div class="container">
        <?php if (get_post_meta($pageeventlg, 'my_meta_box_video', true) != ''): ?>
        <div class="row section-media">
            <a rel="https://www.youtube.com/embed/<?php echo get_post_meta($pageeventlg, 'my_meta_box_video', true); ?>" class="video-popup" id="my_event_video" >
                <img src="<?php if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                    $featured_images = $dynamic_featured_image->get_featured_images( $pageeventlg );
                    echo $featured_images[0]['full'];
                } ?>" alt="" width="771" height="415">

                <i class="ico-play"></i>
            </a>
        </div><!-- /.section-media -->
        <?php endif; ?>
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
            $('#my_event_video').click(function () {
                var $input=$(this);
                $('.mfp-iframe').attr('src', $input.attr('rel'));
            });

        </script>
        <div class="row pre-events">
            <?php echo get_post_meta($pageeventlg , 'my-first-field-name', true); ?>
        </div> <!-- /pre-events -->


        <div class=" events-container container">
            
<!--            <h3 class="text-center event-header"><strong>--><?php //_e('UPCOMING EVENTS', 'mushegh'); ?><!--</strong></h3>-->

            <?php $x=0; foreach($categories_event as $categories):?>


                <?php if($x==0 || $x==3 || $x==4){echo "<div class='row'>";} ?>
                <div id="<?php if($x == 0){ echo 'upw'; }
                elseif($x == 1){ echo 'bm'; }
                elseif($x == 2){ echo 'la'; }
                elseif($x == 3){ echo 'dwd'; }
                elseif($x == 4){ echo 'lm'; }
                elseif($x == 5){ echo 'wm'; }
                ?>-main" class="col-sm-<?php if($x == 3){ echo '12'; } else{ echo '4'; } ?>">
                    <div class="main-top">
                        <h6><?php echo $categories->name; ?></h6>
                        <p><?php echo $categories->description; ?></p>
                        <button id="<?php if($x == 0){ echo 'upw'; }
                        elseif($x == 1){ echo 'bm'; }
                        elseif($x == 2){ echo 'la'; }
                        elseif($x == 3){ echo 'mu'; }
                        elseif($x == 4){ echo 'lm'; }
                        elseif($x == 5){ echo 'wm'; }
                        elseif($x == 6){ echo 'dwd'; }
                        ?>-read-more"> <?php _e('Read More', 'mushegh'); ?> ></button>

                    </div>
                    <div class="main-bottom hide-block">
                        <ul>
                            <?php $bye = $categories->term_id; ?>
                            <li><p><?php echo get_option('taxonomy_'.$bye.'', true)['first_term_meta']; ?></p></li>
                            <li><p><?php echo get_option('taxonomy_'.$bye.'', true)['second_term_meta']; ?></p></li>
                            <li><p><?php echo get_option('taxonomy_'.$bye.'', true)['thirth_term_meta']; ?></p></li>
                            <li><p><?php echo get_option('taxonomy_'.$bye.'', true)['fourth_term_meta']; ?></p></li>
                            <li><p><?php echo get_option('taxonomy_'.$bye.'', true)['fifth_term_meta']; ?></p></li>
                        </ul>

                        <div class="center-container">
                            <a class="btn" href="<?php
                            $args = array(
                                'post_type' => 'event',
                                'posts_per_page' => 1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'event-categories',
                                        'field' => 'slug',
                                        'terms' => $categories->slug
                                    )
                                )
                            );
                            $query = new WP_Query($args);
                        ?>
                        <?php if ($query->have_posts()): ?><?php while ($query->have_posts()): $query->the_post();?><?php the_permalink(); ?><?php endwhile; ?><?php endif; ?> "> <?php _e('Learn More', 'mushegh'); ?></a>

                            <?php $jq_ajax_screen_width = $_GET['ScreenWidth'];?>
                            <a id="<?php if($x == 0){ echo 'upw'; }
                            elseif($x == 1){ echo 'bm'; }
                            elseif($x == 2){ echo 'la'; }
                            elseif($x == 3){ echo 'dwd'; }
                            elseif($x == 4){ echo 'lm'; }
                            elseif($x == 5){ echo 'wm'; }
                            ?>_trigger" class="view-more"><?php _e('View Dates', 'mushegh'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div id="<?php if($x == 0){ echo 'upw'; }
                        elseif($x == 1){ echo 'bm'; }
                        elseif($x == 2){ echo 'la'; }
                        elseif($x == 3){ echo 'dwd'; }
                        elseif($x == 4){ echo 'lm'; }
                        elseif($x == 5){ echo 'wm'; }
                        ?>_dates" class="all-events" style=" display:none; width:100%;height:200px;">
                            <ul>

                                <?php
                                $event_category_post = array(
                                    'post_type' => 'event',
                                    'post_status' => 'publish',
                                    'numberposts' => -1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'event-categories',
                                            'field' => 'id',
                                            'terms' => array($bye),
                                        )
                                    )
                                );
                                ?>


                                <?php $queryx = new WP_Query( $event_category_post ); ?>
                                    <?php if($queryx->have_posts()) : ?>
                                    <?php while ( $queryx->have_posts() ): $queryx->the_post(); ?>

                                            <?php
                                            $new = $post->ID;
                                            global $wpdb;
                                            $querycustomss = "SELECT * FROM `wp_em_events` WHERE `post_id` = $new" ;
                                            $resulter = $wpdb->get_results($querycustomss);

                                            $locationid = $resulter[0]->location_id;

                                            $querycustomsss = "SELECT * FROM `wp_em_locations` WHERE `location_id` = $locationid" ;
                                            $resulters = $wpdb->get_results($querycustomsss);

                                            ?>
                                            <li style="display:flex; justify-content:space-between;">
                                                <div class="container container-eventss" style="width: 100%;">
                                                    <div class="col-xs-6" style="padding: 0; padding-right: 10px; text-align: center; margin: 0;">
                                                        <span ><i><?php echo $resulters[0]->location_town.', '; ?><br/><?php echo $resulters[0]->location_address; ?></i></span>
                                                    </div>
                                                    <div class="col-xs-6" style="padding: 0; padding-left: 10px; text-align: center; margin: 0;">
                                                        <span> <?php echo date_i18n('F d', strtotime($resulter[0]->event_start_date)).' - '.date_i18n('F d', strtotime($resulter[0]->event_end_date)); ?> </span>
                                                    </div>
                                                </div>
                                            </li>


                                    <?php endwhile; ?>
                                    <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if($x==2 || $x==3 || $x==6){ echo '</div>'; } ?>


                <?php $x++; ?>
            <?php endforeach; ?>

            <style>
                .main-bottom .center-container a.view-more {
                    padding:20px;
                    display:block;
                    background-color:transparent;
                }
                .all-events  ul li span{
                    color:#666666;
                }
            </style>

        </div>
        <script>

            $(document).ready(function () {
                var upwarrowset = 0;
                var bmarrowset = 0;
                var laarrowset = 0;
                var lmarrowset = 0;
                var wmarrowset = 0;
                var dwdarrowset = 0;
                $("#upw_trigger").click(function () {
                    $('#upw_dates').slideToggle(200);
                    if(upwarrowset == 0){
                        upwarrowset = 1;
                        $('#upw_trigger > i').addClass('event_rotate');
                    }else{
                        upwarrowset = 0;
                        $('#upw_trigger > i').removeClass('event_rotate');
                    }
                    return false;
                });
                $("#bm_trigger").click(function () {
                    $('#bm_dates').slideToggle(200);
                    if(bmarrowset == 0){
                        bmarrowset = 1;
                        $('#bm_trigger > i').addClass('event_rotate');
                    }else{
                        bmarrowset = 0;
                        $('#bm_trigger > i').removeClass('event_rotate');
                    }
                    return false;
                });
                $("#la_trigger").click(function () {
                    $('#la_dates').slideToggle(200);
                    if(laarrowset == 0){
                        laarrowset = 1;
                        $('#la_trigger > i').addClass('event_rotate');
                    }else{
                        laarrowset = 0;
                        $('#la_trigger > i').removeClass('event_rotate');
                    }
                    return false;
                });
                $("#lm_trigger").click(function () {
                    $('#lm_dates').slideToggle(200);
                    if(lmarrowset == 0){
                        lmarrowset = 1;
                        $('#lm_trigger > i').addClass('event_rotate');
                    }else{
                        lmarrowset = 0;
                        $('#lm_trigger > i').removeClass('event_rotate');
                    }
                    return false;
                });
                $("#wm_trigger").click(function () {
                    $('#wm_dates').slideToggle(200);
                    if(wmarrowset == 0){
                        wmarrowset = 1;
                        $('#wm_trigger > i').addClass('event_rotate');
                    }else{
                        wmarrowset = 0;
                        $('#wm_trigger > i').removeClass('event_rotate');
                    }
                    return false;
                });
                $("#dwd_trigger").click(function () {
                    $('#dwd_dates').slideToggle(200);
                    if(dwdarrowset == 0){
                        dwdarrowset = 1;
                        $('#dwd_trigger > i').addClass('event_rotate');
                    }else{
                        dwdarrowset = 0;
                        $('#dwd_trigger > i').removeClass('event_rotate');
                    }
                    return false;
                });
            });
            $('#upw-read-more').click(function(){
                if($('#upw-main > .main-bottom').hasClass('hide-block')){
                    $('#upw-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#upw-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#mu-read-more').click(function(){
                if($('#mu-main > .main-bottom').hasClass('hide-block')){
                    $('#mu-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#mu-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#bm-read-more').click(function(){
                if($('#bm-main > .main-bottom').hasClass('hide-block')){
                    $('#bm-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#bm-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#la-read-more').click(function(){
                if($('#la-main > .main-bottom').hasClass('hide-block')){
                    $('#la-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#la-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#lm-read-more').click(function(){
                if($('#lm-main > .main-bottom').hasClass('hide-block')){
                    $('#lm-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#lm-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#wm-read-more').click(function(){
                if($('#wm-main > .main-bottom').hasClass('hide-block')){
                    $('#wm-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#wm-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#dwd-read-more').click(function(){
                if($('#dwd-main > .main-bottom').hasClass('hide-block')){
                    $('#dwd-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#dwd-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });
            $('#bonus-read-more').click(function(){
                if($('#bonus-main > .main-bottom').hasClass('hide-block')){
                    $('#bonus-main > .main-bottom').removeClass('hide-block').addClass('show-block');
                }else{
                    $('#bonus-main > .main-bottom').removeClass('show-block').addClass('hide-block');
                };
            });

        </script>
    </div><!-- /.container -->

</section>


<style>
    /*hide second event ********************************************* */
    #bm-main{
        display:none;
    }
 /*hide first event ********************************************* */
    #upw-main{
        display:none;
    }

</style>



<?php get_footer(); ?>
