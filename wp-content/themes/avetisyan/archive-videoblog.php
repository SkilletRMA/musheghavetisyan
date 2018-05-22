<?php
/*
Template Name: Videoblogs
*/
$args = array(
    'post_type'=> 'videoblog',
    'posts_per_page'=> -1,
);
$the_query = new WP_Query( $args );
?>
<?php get_header(); ?>

<?php if($the_query->have_posts() ) : ?>
    <?php $the_query->the_post();?>
<div class="intro intro-overlayed intro-overlayed-primary">

    <div class="intro-bg parallax" id="new_videoblog" rel="<?php echo $the_query->post_count; ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" width="1600" height="600">
    </div>

    <div class="intro-content">
        <h2 class="intro-title videoblog-title"><?php the_title(); ?></h2>
        <?php $mypost_id = get_the_ID(); ?>
        <div rel="https://www.youtube.com/embed/<?php echo get_post_meta($mypost_id, 'my_meta_box_video', true); ?>" class="play-btn video-popup" id="my_post_video<?php echo '0'; ?>">
            <i class="ico-play video-archive"></i>
        </div>
    </div>
</div>
    <div class="callout cta-bar-bottom">
        <div class="container-fluid">
            <p><?php _e('Ready to take the initiative &amp; join our newsletter?', 'mushegh'); ?></p>

            <a href="#" class="btn btn-blue newsletter"><?php _e('Sign Up Now', 'mushegh'); ?></a>
        </div>
    </div>


    <div id="form-newsletter" class="overlay hidden"> <a class="overlay-close" href="#">
            <i class="fa fa-times-circle fa-lg"></i> <?php _e('close', 'mushegh'); ?></a>
        <div>
            <div class="col-xs-10 text-center center">
                <h2><?php _e('Join Our Newsletter!', 'mushegh'); ?></h2>
                <?php wp_users_subscribe(); ?>
                <form method="post">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="contact-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php _e('First Name', 'mushegh'); ?>:"></span></div>
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-phone"><input type="text" name="contact-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php _e('Phone', 'mushegh'); ?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="contact-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="<?php _e('Email', 'mushegh'); ?>:"></span></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="submit" value="<?php _e('SUBMIT', 'mushegh'); ?>" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<section class="section-posts section-posts-secondary">
    <div class="container vlog-container">
        <?php $postx = get_post(apply_filters( 'wpml_object_id', 85, 'post' ));

        $content = get_post_meta($postx->ID, 'my-first-field-name', true);
        echo $content; ?>
        <br><br>
        <div class="row">
            <?php $x=1; while ( $the_query->have_posts() ) : $the_query->the_post();?>

                <?php $mypost_id = get_the_ID(); ?>
                <?php if(get_post_meta($mypost_id, '_add_to_top')[0] == '1'): ?>
                    <div class="col-sm-6 col-md-4">
                        <div rel="https://www.youtube.com/embed/<?php echo get_post_meta($mypost_id, 'my_meta_box_video', true); ?>" id="my_post_video<?php echo $x; ?>" class="section-link video-popup">
                        <span class="video-contain">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="">
                            <i class="ico-play video-archive"></i>
                            <span class="section-overlay">
                                <?php the_excerpt(); ?>
                            </span>
                        </span>
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
                    <?php $x++; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

                <?php $mypost_id = get_the_ID(); ?>
                <?php if(get_post_meta($mypost_id, '_add_to_top')[0] == '0'): ?>
                    <div class="col-sm-6 col-md-4">
                        <div rel="https://www.youtube.com/embed/<?php echo get_post_meta($mypost_id, 'my_meta_box_video', true); ?>" id="my_post_video<?php echo $x; ?>" class="section-link video-popup">
                        <span class="video-contain">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="">
                            <i class="ico-play video-archive"></i>
                            <span class="section-overlay">
                                <?php the_excerpt(); ?>
                            </span>
                        </span>
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
                    <?php $x++; ?>
                <?php endif; ?>
            <?php endwhile; ?>

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
        for( var i=0; i<$('#new_videoblog').attr('rel'); i++ ) {
            $('#my_post_video'+i).click(function () {
                var $input=$(this);
                $('.mfp-iframe').attr('src', $input.attr('rel'));
            });
        }
    </script>
        </div>
    </div>
</section>



<?php endif; ?>
<?php get_footer(); ?>

