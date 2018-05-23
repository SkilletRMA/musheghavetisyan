<?php
/*
Template Name: Story
*/

$story_arg = array(
    'type'         => 'story',
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
$categories_story =  get_terms($story_arg);
?>

<?php get_header(); ?>

<?php if(isset($_GET['event-dropdown']) && !empty($_GET['event-dropdown'])): ?>
    <?php $query = new WP_Query( array( 'event-categories' => $_GET['event-dropdown'] ) ); ?>
    <?php $x = 0; while ( $query->have_posts() ):
        $query->the_post(); ?>
        <?php if($x == 0):?>
        <div class="intro parallax-container intro-overlayed intro-overlayed-primary">
            <div class="intro-bg parallax">
                <?php the_post_thumbnail('', array('class'=>'background', 'alt'=>''));?>
            </div>
            <div class="intro-content-secondary">
                <div class="container">

                    <em class="tag" style="font-size: 15px;">
                        <?php
                        echo get_the_terms( $post->ID, 'event-categories')[0] -> name; ?>
                    </em>
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php _e('Read More', 'musheghavetisyan'); ?></a>
                </div>
            </div>
        </div>
        <!--
            <?php
        echo get_the_terms( $post->ID, 'event-categories')[0] -> name;
        ?>
-->


        <!-- Blog's categories filter -->
        <div class="form-filters">
            <div class="container">
                <form class="blogForm" method="get">
                    <div class="form-row">
                        <div class="form-controls">

                            <div class="select-container">
                                <select class="blogCategorySelect" name="event-dropdown">
                                    <option value=""><?php echo esc_attr('Filter by category'); ?></option>
                                    <option value=""><?php _e('No Category', 'musheghavetisyan'); ?></option>
                                    <?php
                                    foreach ($categories_story as $category) {
                                        if($category->term_id != 1) {
                                            $option = '<option value="' . $category->name . '">';
                                            $option .= $category->name;
                                            $option .= '</option>';
                                            echo $option;
                                        }
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
        <div class="container">
        <!-- Blog posts -->
        <div class="blog-items">
        <?php $postx = get_post('58');
        $content = get_post_meta($postx->ID, 'my-first-field-name', true);
        echo $content; ?>
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
                        <img class="ico-handshake cat-icon" src="<?php echo category_image_src(array('term_id' => get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'size'=>'full'), false); ?>">
                    </div>
                </a>
                <style>
                    <?php echo '.color'.$x.':before'; ?> {
                        background-color: <?php echo get_term_meta(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'cc_color', true); ?>;
                    }
                </style>
                <div class="post-content">
                    <h5 style="color: <?php echo get_term_meta(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'cc_color', true); ?>" class="micro">
                        <?php
                        echo get_the_terms( $post->ID, 'event-categories')[0] -> name;
                        ?>
                    </h5>
                    <h4 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                    </h4>
                    <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'musheghavetisyan'); ?></a>
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
    <?php if(have_posts()): ?>
        <?php $x = 0; while(have_posts()): the_post();?>
            <?php if($x == 0):?>
                <div class="intro parallax-container intro-overlayed intro-overlayed-primary">
                    <div class="intro-bg parallax">
                        <?php the_post_thumbnail('', array('class'=>'background', 'alt'=>''));?>
                    </div>
                    <div class="intro-content-secondary">
                        <div class="container">

                            <em class="tag">
                                <?php
                                echo get_the_terms( $post->ID, 'event-categories')[0] -> name; ?>
                            </em>
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php _e('Read More', 'musheghavetisyan'); ?></a>
                        </div>
                    </div>
                </div>


                <!-- Blog's categories filter -->
                <div class="form-filters">
                    <div class="container">
                        <form class="blogForm" method="get">
                            <div class="form-row">
                                <div class="form-controls">

                                    <div class="select-container">
                                        <select class="blogCategorySelect" name="event-dropdown">
                                            <option value=""><?php echo esc_attr('Filter by category'); ?></option>
                                            <?php
                                            foreach ($categories_story as $category) {
                                                $option = '<option value="'.$category->name.'">';
                                                $option .= $category->name;
                                                $option .= '</option>';
                                                echo $option;
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
                <div class="container">
                <!-- Blog posts -->
                <div class="blog-items">
                <?php $postx = get_post('58');
                $content = get_post_meta($postx->ID, 'my-first-field-name', true);
                echo $content; ?>
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
                            <img class="ico-handshake cat-icon" src="<?php echo category_image_src(array('term_id' => get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'size'=>'full'), false); ?>">
                        </div>
                    </a>
                    <style>
                        <?php echo '.color'.$x.':before'; ?> {
                            background-color: <?php echo get_term_meta(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'cc_color', true); ?>;
                        }
                    </style>
                    <div class="post-content">
                        <h5 style="color: <?php echo get_term_meta(get_the_terms( $post->ID, 'event-categories')[0] -> term_id, 'cc_color', true); ?>" class="micro">
                            <?php
                            echo get_the_terms( $post->ID, 'event-categories')[0] -> name;
                            ?>
                        </h5>
                        <h4 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                        </h4>
                        <a href="<?php the_permalink(); ?>" class="link-more link-more-grey"><?php _e('Read More', 'musheghavetisyan'); ?></a>
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
    <?php if(wp_count_posts('story')->publish > 10): ?>
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
<?php get_footer(); ?>