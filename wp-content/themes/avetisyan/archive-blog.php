<?php

//Template Name: Blogs


$blog_arg = array(
    'type'         => 'blog',
    'child_of'     => 0,
    'parent'       => '',
    'order'        => 'ASC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'number'       => 0,
    'taxonomy'     => 'blog_category',
    'pad_counts'   => false,
);
$categories_blog =  get_terms($blog_arg);
?>

<?php get_header(); ?>
<?php if(isset($_GET['event-dropdown']) && !empty($_GET['event-dropdown'])): ?>
    <?php $querys = new WP_Query( array( 'tax_query' => array(array(
        'taxonomy' => 'blog_category',
        'field'    => 'slug',
        'terms'    => $_GET['event-dropdown']
    )),'post_status' => 'publish',
        'orderby' => 'rand',
        'order' => 'DESC', 'posts_per_page' => 1, 'paged' => get_query_var( 'paged' ) ) ); ?>
    <?php $x = 0; while ( $querys->have_posts() ): $querys->the_post(); ?>
        <?php if($x==0): ?>
        <div class="intro parallax-container intro-overlayed intro-overlayed-primary">
            <div class="intro-bg parallax" style="background-image: url('<?php if( class_exists('Dynamic_Featured_Image') ) {
                global $dynamic_featured_image;
                $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );
                echo $featured_images[0]['full'];
            } ?>');">
            </div>
            <div class="intro-content-secondary">
                <div class="container">

                    <em class="tag">
                        <?php
                        echo get_the_terms( $post->ID, 'blog_category')[0] -> name; ?>
                    </em>
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php _e('Read More', 'mushegh'); ?></a>
                </div>
            </div>
        </div>
            <?php endif; ?>
<?php endwhile; ?>
        <?php $query = new WP_Query( array( 'tax_query' => array(array(
            'taxonomy' => 'blog_category',
            'field'    => 'slug',
            'terms'    => $_GET['event-dropdown']
        )), 'posts_per_page' => 10, 'paged' => get_query_var( 'paged' ) ) ); ?>

        <?php $x = 0; while ( $query->have_posts() ): $query->the_post(); ?>
<?php if($x==0): ?>
        <!-- Blog's categories filter -->
        <div class="form-filters">
            <div class="container">
                <form class="blogForm" method="get">
                    <input type="hidden" name="lang" value="<?php echo ICL_LANGUAGE_CODE; ?>">

                    <div class="form-row">
                        <div class="form-controls">

                            <div class="select-container">
                                <select class="blogCategorySelect" name="event-dropdown">
                                    <option value="" style="display: none;"><?php echo esc_attr(_e('Filter by category', 'mushegh')); ?></option>
                                    <option value=""><?php _e('Filter by category', 'mushegh'); ?></option>
                                    <?php
                                    global $wpdb;
                                    foreach ($categories_blog as $category) {
                                        echo "<option value='".$category->slug."'>".$category->name."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="section-posts post-list ">
        <div class="container">
        <!-- Blog posts -->
        <div class="blog-items">
        <?php echo apply_filters('the_content', $pageblog->post_content); ?>
        <br>

        <?php endif; ?>


        <?php if($x == 0 || $x == 2 || $x == 5 || $x == 7){echo '<div class="row">';} ?>

        <div class="col-sm-6 blog-item blog-clear stories-item
                                <?php if($x == 0 || $x == 6) {
            echo 'col-md-8';
        }
        else {
            echo 'col-md-4';
        } ?>
                            ">
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
                <div class="post-content blog-post-contnet">
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
        </div>
        <?php if($x == 1 || $x == 4 || $x == 6 || $x == 9){echo '</div>';} ?>
        <?php $x++; ?>
    <?php endwhile; ?>
    </div>
    </div>
    <br>
    <!-- Blog post Pagination -->
<?php if($query->max_num_pages != 1): ?>
    <div class="pagination-container">
        <div class="pagination">
            <ul>
                <?php function my_pagenavi() {
                    global $query;
                    $big = 999999999; // уникальное число для замены
                    $args = array(
                        'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'current' => max( 1, get_query_var('paged')),
                        'total'   => $query->max_num_pages,
                        'show_all'     => False,
                        'end_size'     => 1,
                        'mid_size'     => 2,
                        'prev_next'    => True,
                        'prev_text'    => __('« '),
                        'next_text'    => __(' »'),
                        'type'         => 'plain',
                        'add_args'     => False,
                        'add_fragment' => '',
                        'before_page_number' => '',
                        'after_page_number'  => ''
                    );

                    $result = paginate_links( $args );

                    // удаляем добавку к пагинации для первой страницы
                    $result = str_replace( '/page/1/', '', $result );

                    echo $result;
                } ?>
                <?php my_pagenavi(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
    </section>
<?php else: ?>
<!-- Blog's example post showing in header -->
    <?php $queryst = new WP_Query( array( 'post_type' => 'blog','post_status' => 'publish',
        'orderby' => 'rand',
        'order' => 'DESC', 'posts_per_page' => 10, ) ); ?>
    <?php if($queryst->have_posts()): ?>
    <?php $x = 0; while ( $queryst->have_posts() ): $queryst->the_post(); ?>
<?php if($x==0): ?>
            <div class="intro parallax-container intro-overlayed intro-overlayed-primary">
                <div class="intro-bg parallax" style="background-image: url('<?php if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                    $featured_images = $dynamic_featured_image->get_featured_images( $post->ID );
                    echo $featured_images[0]['full'];
                } ?>');">
                </div>
                <div class="intro-content-secondary">
                    <div class="container">

                        <em class="tag">
                        <?php echo get_the_terms( $post->ID, 'blog_category')[0] -> name; ?>
                        </em>
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php _e('Read More', 'mushegh'); ?></a>
                    </div>
                </div>
            </div>
                <?php endif; ?>
            <?php $x++; ?>
        <?php endwhile; ?>
<?php endif; ?>
        <?php if(have_posts()): ?>
            <?php $x = 0; while(have_posts()): the_post();?>
                <?php if($x == 0):?>
            <!-- Blog's categories filter -->
            <div class="form-filters">
                <div class="container">
                    <form class="blogForm" method="get">
                        <input type="hidden" name="lang" value="<?php echo ICL_LANGUAGE_CODE; ?>">
                        <div class="form-row">
                            <div class="form-controls">

                                <div class="select-container">
                                    <select class="blogCategorySelect" name="event-dropdown">
                                        <option value=""><?php echo esc_attr(_e('Filter by category', 'mushegh')); ?></option>

                                        <?php
                                        global $wpdb;
                                        foreach ($categories_blog as $category) {
                                            echo "<option value='".$category->slug."'>".$category->name."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <section class="section-posts post-list">
            <div class="container blog-container">
            <!-- Blog posts -->
            <div class="blog-items">
            <?php echo apply_filters('the_content', $pageblog->post_content); ?>
            <br>
        <?php endif; ?>

<?php if($x == 0 || $x == 2 || $x == 5 || $x == 7){echo '<div class="row">';} ?>

        <div class="col-sm-6 blog-item blog-clear stories-item
                                <?php if($x == 0 || $x == 6) {
            echo 'col-md-8';
        }
        else {
            echo 'col-md-4';
        } ?>
                            ">
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
                <div class="post-content blog-post-contnet">
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
        </div>
        <?php if($x == 1 || $x == 4 || $x == 6 || $x == 9){echo '</div>';} ?>
        <?php $x++; ?>
        <?php endwhile; ?>
<?php endif; ?>

    </div>
    </div>
    <br>

    <!-- Blog post Pagination -->
    <?php global $wp_query; if($wp_query->max_num_pages > 1): ?>
    <div class="pagination-container">
        <div class="pagination">
            <ul>
                <?php function my_pagenavi() {
                    global $wp_query;

                    $big = 999999999; // уникальное число для замены
                    $args = array(
                        'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'format'  => '',
                        'current' => max( 1, get_query_var('paged') ),
                        'total'   => $wp_query->max_num_pages,
                        'show_all'     => False,
                        'end_size'     => 1,
                        'mid_size'     => 2,
                        'prev_next'    => True,
                        'prev_text'    => __('« '),
                        'next_text'    => __(' »'),
                        'type'         => 'plain',
                        'add_args'     => False,
                        'add_fragment' => '',
                        'before_page_number' => '',
                        'after_page_number'  => ''
                    );

                    $result = paginate_links( $args );

                    // удаляем добавку к пагинации для первой страницы
                    $result = str_replace( '/page/1/', '', $result );

                    echo $result;
                } ?>
                <?php my_pagenavi(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>
    </section>
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
                            <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-phone"><input type="text" name="contact-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?php _e('Surname', 'mushegh'); ?>:"></span></div>
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