<?php get_header(); ?>
<?php if(have_posts()):?>
    <section id="hero-general">
        <div id="background" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-size: 70px;"><?php _e('Success Story', 'mushegh'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php while(have_posts()): the_post(); ?>
<section id="content-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 center">
                <!--
                <p class="stories-breadcrumb" style="margin-top: 20px;"><a href="<?php echo get_page_link('58'); ?>"> &lt; <?php _e('Back to all stories', 'mushegh'); ?></a></p>
                -->
                <h5 class="micro" style="color: #aaa; margin-bottom: 0px; margin-top: 20px;"><?php echo get_post_meta($post->ID, 'my_meta_box_success', true); ?></h5>
                <hr class="category-line" style="border-color: #aaa">
                <h1 class="content" style="font-size: 45px;"><?php the_title(); ?></h1>
                <h4 class="subtitle" style="font-size: 13px;"><?php echo get_post_meta($post->ID, 'my_meta_box_success_textarea', true); ?></h4>
                    <p class="author"><?php _e('Posted by:', 'mushegh'); ?> <span><?php the_author(); ?></span></p>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>



<?php $querysto = new WP_Query(array('post_type'=>'success-story', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>
<?php if($querysto->have_posts()): ?>
<section id="related-stories" style="padding-bottom: 20px;">
    <div class="container">
        <h4 class="promo" style="padding-bottom: 50px;"><?php _e('Related Success Stories', 'mushegh'); ?></h4>

        <div class="blog-items">
            <div class="row">
                <?php while($querysto->have_posts()): $querysto->the_post(); ?>
                <div class="col-sm-6 blog-item blog-clear stories-item col-md-4">
                    <div class="post">
                        <a  style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');" class="post-item-image" href="<?php the_permalink(); ?>">
                        </a>

                        <div class="post-content" style="padding-bottom: 29px;">

                            <h4 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>

                            <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'mushegh'); ?></a>
                        </div><!-- /.post-content -->
                    </div><!-- /.post -->
                </div><!-- /.col-sm-3 col-sm-6 -->
                <style>
                    .post .color3:before{
                        background-color: #aa2173;
                    }
                </style>
                <?php endwhile; ?>

            </div>
        </div>
        <!--
        <a class="btn outline" href="<?php echo get_page_link('58'); ?>" style="margin: 30px auto;"><?php _e('View all stories', 'mushegh'); ?></a>
        -->
    </div>

</section>
<?php endif; ?>
<?php get_footer(); ?>
