<?php get_header(); ?>

<?php $postid = get_the_ID(); ?>




    <!-- heading images -->
    <section id="hero-general">
        <div id="background" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-size: 70px;"><?php _e('Podcast', 'musheghavetisyan'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="callout cta-bar-bottom">
        <div class="container-fluid">
            <p><?php _e('Ready to take the initiative &amp; join our newsletter?', 'musheghavetisyan'); ?></p>

            <a href="#" class="btn btn-blue newsletter"><?php _e('Sign Up Now', 'musheghavetisyan'); ?></a>
        </div>
    </div>

    <div class="container center col-xs-12">
        <div style="margin-top: 30px;">
            <?php echo get_template_part('template-parts/breadcrumbs'); ?>
        </div>
    </div>
    <article class="article article-secondary">

        <div class="container container-xs">
            <em class="tag micro" style="<?php
            echo 'color: #f7542b;';
            ?> padding-bottom: 13px; font-size: 15px;">
                <?php
                echo get_the_terms( $post->ID, 'podcast_category')[0] -> name;
                ?>
            </em>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <h4 class="subtitle"><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></h4>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <span class="article-author">
            <?php _e('Posted by:', 'musheghavetisyan'); ?>

            <strong><?php the_author(); ?></strong>
        </span>

                <!-- content -->

                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </article>
    <section class="section-posts">
        <div class="container">


            <h5><?php _e('related posts', 'musheghavetisyan'); ?></h5>

            <div class="row">
                <?php
                query_posts(array(
                    'post_type' => 'blog',
                    'showposts' => 3
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

                                    <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'musheghavetisyan'); ?></a>
                                </div>
                            </div>
                        </div><!-- /.col-sm-3 col-sm-6 -->
                    <?php $x++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>


    </div>
    </div>
    </section>


    <div class="callout cta-bar-bottom">
        <div class="container-fluid">
            <p><?php _e('Ready to take the initiative &amp; join our newsletter?', 'musheghavetisyan'); ?></p>

            <a href="#" class="btn btn-blue newsletter"><?php _e('Sign Up Now', 'musheghavetisyan'); ?></a>
        </div>
    </div>


    <div id="form-newsletter" class="overlay hidden"> <a class="overlay-close" href="#">
            <i class="fa fa-times-circle fa-lg"></i> <?php _e('close', 'musheghavetisyan'); ?></a>
        <div>
            <div class="col-xs-10 text-center center">
                <h2><?php _e('Join Our Newsletter!', 'musheghavetisyan'); ?></h2>
                <?php $post = get_post('394');
                $content = apply_filters('the_content', $post->post_content);
                echo $content; ?>
            </div>
        </div>
    </div>
    <!-- opt-in ad form pop up -->
<?php get_footer(); ?>