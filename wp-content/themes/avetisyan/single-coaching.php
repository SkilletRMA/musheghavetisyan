<?php get_header(); ?>
<div class="container-xs container center">
    <div style="margin-top: 30px;">
        <?php get_template_part('template-parts/breadcrumbs') ?>
    </div>
</div>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="section-article">
            <article class="article">
                <div class="flex-container">
                    <h5 class="article-title-primary"><?php the_title(); ?></h5>
                    <div class="row" style="margin: 0;">
                        <div class="col-md-10 col-md-offset-1">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<!--coaching subscribe-->
<div class="callout">
    <div class="container-fluid">
        <p><?php _e('For more details register', 'mushegh'); ?></p>
        <a id="subnav-cta-button" class="opt-in-form btn btn-blue" href="#"><?php _e('Register NOW', 'mushegh'); ?></a>
    </div>
</div>

<div id="form" class="overlay" style="display: none; opacity: 0;">
    <a class="overlay-close" href="#"><i class="fa fa-times-circle fa-lg"></i></a>
    <div>
        <div class="col-xs-10 text-center center">
            <h2><?php _e(' Take your life to the next level', 'mushegh'); ?></h2>
            <?php
            if (ICL_LANGUAGE_CODE == "hy") {
                echo do_shortcode("[contact-form-7 id='1044' title='Programs contact-form_hy']");
            } else {
                echo do_shortcode("[contact-form-7 id='1050' title='Programs contact-form_en']");
            }
            ?>
<!--            <p>--><?php //_e('Your 30 Minutes to Thrive', 'mushegh'); ?><!--</p>-->
<!--            --><?php //wp_coach_subscribe(); ?>
<!--            <form method="post" class="wpcf7-form">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="cont-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Name', 'mushegh'); ?><!--:"></span></div>-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input type="text" name="cont-surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Surename', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-phone"><input type="tel" name="cont-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Phone number', 'mushegh'); ?><!--:"></span></div>-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="cont-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Email', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-country"><input type="text" name="cont-country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Country', 'mushegh'); ?><!--:"></span></div>-->
<!--                                <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-message"><input type="text" name="cont-message" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="--><?php //_e('Your comment', 'mushegh'); ?><!--:"></span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="cont-submit" value="--><?php //_e('Confirm', 'mushegh'); ?><!--" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="wpcf7-response-output wpcf7-display-none"></div>-->
<!--            </form>-->
        </div>
    </div>
</div>

<!--
<div class="callout cta-bar-bottom" style="background-color: #f7542b;">
    <div class="container-fluid">
        <p style="color: white;">  <?php /*_e('Did not find what you were looking for? Ask Your questions.', 'mushegh'); */?></p>

        <a href="#" class="newsletter btn btn-md blue-outline opt-in-form"><?php /*_e('Ask', 'mushegh'); */?></a>
    </div>
</div>
<div id="form-newsletter" class="overlay hidden"> <a class="overlay-close" href="#">
        <i class="fa fa-times-circle fa-lg"></i> <?php /*_e('close', 'mushegh'); */?></a>
    <div>
        <div class="col-xs-10 text-center center">
            <h2><?php /*_e('Ask Register', 'mushegh'); */?></h2>
            <?php /*wp_ask_subscribe(); */?>
            <form method="post" class="wpcf7-form">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input type="text" name="ask-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('First Name', 'mushegh'); */?>:"></span></div>
                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input type="text" name="ask-surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Last Name', 'mushegh'); */?>:"></span></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input type="email" name="ask-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Email', 'mushegh'); */?>:"></span></div>
                        <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-question"><input type="text" name="ask-question" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php /*_e('Your question', 'mushegh'); */?>:"></span></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit" name="ask-submit" value="<?php /*_e('SUBMIT', 'mushegh'); */?>" class="wpcf7-form-control wpcf7-submit contact-submit"><span class="ajax-loader"></span></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
-->


<?php get_footer(); ?>
