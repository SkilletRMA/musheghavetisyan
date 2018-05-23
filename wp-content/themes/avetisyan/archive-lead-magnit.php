<?php
//Template Name: Lead Magnit
?>
<?php get_header(); ?>

<section id="hero-general" style="height: 100% !important;">
    <div id="background" style="background-image: url('<?php echo get_the_post_thumbnail_url($pageaboutlg); ?>')"></div>
    <div class="intro parallax-container intro-overlayed">

        <div class="intro-bg parallax" style="background-image: url('<?php the_post_thumbnail_url(''); ?>');">
        </div><!-- /.intro-bg -->
        <div class="intro-content">
            <div class="container">
                <div class="col-md-6" style="float: right;">
                    <h2 class="percent" style="color: red; font-size: 150px;  float: left; margin-top: 0px;"><?php echo get_post_meta(apply_filters( 'wpml_object_id', 394, 'post' ), 'my_biography_title_textarea', true); ?></h2>
                    <h2 class="first-title" style="font-size: 60px; margin: 13px 0 1.5rem;"><?php echo get_post_meta(apply_filters( 'wpml_object_id', 394, 'post' ), 'my_biography_footer_textarea', true); ?></h2>
                </div>
            </div>
            <style>
                @media (max-width: 570px){
                    .percent {
                        font-size: 90px !important;
                    }
                .first-title {
                    font-size: 40px !important;
                }
                .second-title {
                    font-size: 20px !important;
                }
                }
            </style>
            <div class="container">
                <div class="col-md-6" style="float: right;">
                <h2 class="intro-title second-title" style="font-size: 30px; float: right;">
                    <?php echo get_post_meta(apply_filters( 'wpml_object_id', 394, 'post' ), 'my_meta_box_video', true); ?>
                </h2>
                </div>
            </div>

            <div class="intro-actions" style="width: 100%;">
                <a class="btn btn-grey intro-btn" href="<?php echo get_page_link(apply_filters( 'wpml_object_id', 145, 'post' )); ?>">More</a>
                <a class="btn newsletter opt-in-form" href=""><?php _e('Register Now', 'mushegh'); ?></a>
            </div><!-- /.intro-actions -->
            <style>
                .intro-actions a:hover {
                    background-color: red !important;
                }
            </style>
        </div><!-- /.intro-content -->
    </div><!-- /.intro -->
</section>
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
<!--                    <div class="row"><a href="https://www.skill.am/" style="color: yellow;">Skill</a></div>-->
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<section style="text-align: center;">
    <?php the_content(); ?>
</section>
<br>
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

<?php get_footer(); ?>
