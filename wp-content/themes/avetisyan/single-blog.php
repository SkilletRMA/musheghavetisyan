<?php get_header(); ?>

<?php $postid = get_the_ID(); ?>




<!-- heading images -->
    <!-- heading images -->
    <section id="hero-general">
        <div id="background" style="background-image: url('<?php if( class_exists('Dynamic_Featured_Image') ) {
            global $dynamic_featured_image;
            $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );
            echo $featured_images[0]['full'];
        } ?>')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-size: 70px;"><?php _e('Blog', 'mushegh'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="callout cta-bar-bottom">
        <div class="container-fluid">
            <p><?php _e('Ready to take the initiative &amp; join our newsletter?', 'mushegh'); ?></p>

            <a href="#" class="btn btn-blue newsletter"><?php _e('Sign Up Now', 'mushegh'); ?></a>
        </div>
    </div>
    <div class="container-xs container center">
        <div style="margin-top: 30px;">
            <?php get_template_part('template-parts/breadcrumbs') ?>
        </div>
    </div>
    <article class="article article-secondary">

        <div class="container container-xs">
            <em class="tag micro" style="color: <?php echo get_term_meta(get_the_terms( $post->ID, 'blog_category')[0] -> term_id, 'cc_color', true); ?>; padding-bottom: 13px; font-size: 15px;">
                <?php
                    echo get_the_terms( $post->ID, 'blog_category')[0] -> name;
                ?>
            </em>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <h4 class="subtitle"></h4>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <span class="article-author">
            <?php _e('Posted by:', 'mushegh'); ?>

            <strong><?php the_author(); ?></strong>
        </span>

            <!-- content -->

                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </article>
    <section class="section-posts">
        <div class="container">


            <h5><?php _e('related posts', 'mushegh'); ?></h5>

            <div class="row">
                <?php
                query_posts(array(
                    'post_type' => 'blog',
                    'showposts' => 3,
                    'post__not_in' => array(get_the_ID())
                ) );
                ?>
                <?php $x=0; if ( have_posts() ) : ?>
                    <?php while ( have_posts() ): the_post(); ?>
                        <div class="col-sm-6 blog-item blog-clear col-md-4" style="margin-bottom: 15px;">
                            <div class="post">
                                <a  style="background-image:url(<?php the_post_thumbnail_url() ?>);" class="post-item-image" href="<?php the_permalink(); ?>">
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
                                        echo get_the_terms( $post->ID, 'blog_category')[0] -> name;
                                        ?>
                                    </h5>
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                    </h4>
                                    <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'mushegh'); ?></a>
                                </div>
                            </div>
                        </div><!-- /.col-sm-3 col-sm-6 -->
                    <?php $x++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>


            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section-posts -->


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
<?php get_footer(); ?>