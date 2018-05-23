<?php
//Template Name: Biography
?>
<?php get_header(); ?>

<section id="hero-general">
    <div id="background" style="background-image: url('<?php echo get_the_post_thumbnail_url($pageaboutlg); ?>')"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php the_title(); ?></h1>
                <p class="sub-text"><?php echo get_post_meta(apply_filters( 'wpml_object_id', 938, 'post' ), 'my_biography_title_textarea', true); ?></p>
            </div>
        </div>
    </div>
</section>

<div class="sticky-element">
    <nav class="nav-teritary">
        <div class="container">
            <div class="menu-subnav-container nav nav-tabs">
                <ul id="menu-subnav" class="menu">
                    <li id="crewApplyNow"><a href="#bio_videos"><?php _e('Explore Mushegh\'s Best Videos', 'mushegh'); ?></a></li>
                    <li id="crewTeamMembers"><a href="#news"><?php _e('Blogs', 'mushegh'); ?></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container center col-xs-12">
    <div style="margin-top: 30px;">
    <?php get_template_part('template-parts/breadcrumbs') ?>
    </div>
</div>
<article class="article">
    <div class="container container-xs about-container">
<!--        --><?php //echo apply_filters('the_content', $pageabout->post_content); ?>
        <?php the_content(); ?>
    </div><!-- /.container -->
</article><!-- /.article -->

<a name="bio_videos" id="bio_videos"></a>
<section class="section-videos">
    <a class="lmn" href="<?php echo get_the_permalink($pagevideoblog); ?>"><h5><?php _e('Videos', 'mushegh'); ?></h5></a>

    <ul class="videos">
        <?php
        query_posts(array(
            'post_type' => 'videoblog',
            'showposts' => -1
        ) );
        ?>
        <?php $x = 0;
        if (have_posts()) : ?>
            <?php while (have_posts() && $x < 3): the_post();?>
                <?php $mypost_id = get_the_ID(); ?>
                <?php if (get_post_meta($mypost_id, '_add_to_top')[0] == '1'): ?>
                <li class="video">
                    <a href="#"
                       rel="https://www.youtube.com/embed/<?php echo get_post_meta($mypost_id, 'my_meta_box_video', true); ?>"
                       class="video-popup" id="my_biography_video<?php echo $x; ?>">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="" width="532" height="400">

                        <i class="ico-play"></i>

                        <div class="video-content">
                            <h6><?php the_title(); ?></h6>

                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </li>
            <?php $x++; ?>
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
                    for (var i = 0; i < 3; i++) {
                        $('#my_biography_video' + i).click(function () {
                            var $input = $(this);
                            $('.mfp-iframe').attr('src', $input.attr('rel'));
                        });
                    }
                </script>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</section>


<a name="#news" id="news"></a>
<div class="container aboutNews" style="padding-bottom: 75px;">
    <a class="lmn" href="<?php echo get_the_permalink($pageblog); ?>"><h5 class="newsTitle" style="text-align: center; margin-top: 100px; margin-bottom: 31px;"><?php _e('Mushegh\'s Blogs', 'mushegh'); ?></h5></a>
    <style>
        .lmn {
            color: black;
        }
        .lmn:hover {
            color: dimgray;
        }
    </style>
    <div class="row blog-items">
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
                    <div class="post-item-container <?php echo 'color2'.$x; ?>">

                        <img class="ico-handshake cat-icon" src="<?php echo category_image_src(array('term_id' => get_the_terms( $post->ID, 'blog_category')[0] -> term_id, 'size'=>'full'), false); ?>">
                    </div>
                </a>
                <style>
                    <?php echo '.color2'.$x.':before'; ?> {
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
    </div>
</div>

<div class="testimonial fix-bg">
    <img src="<?php if( class_exists('Dynamic_Featured_Image') ) {
        global $dynamic_featured_image;
        $featured_images = $dynamic_featured_image->get_featured_images( apply_filters( 'wpml_object_id', 470, 'post' ) );
        echo $featured_images[0]['full'];
    } ?>" class="background" style="height: 600px; width: 100%;" >

    <div class="container">
        <div class="testimonial-inner">
<!--            <em>--><?php //echo get_post_meta(apply_filters( 'wpml_object_id', 470, 'post' ), 'my_biography_footer_textarea', true); ?><!--</em>-->

<!--            <strong>&mdash; --><?php
//                $author_id = get_post_field ('post_author', apply_filters( 'wpml_object_id', 190, 'post' ));
//                $display_name = get_the_author_meta( 'display_name' , $author_id );
//                echo $display_name;
//                ?>
<!--            </strong>-->
        </div>
    </div>
</div>


<?php get_footer(); ?>
