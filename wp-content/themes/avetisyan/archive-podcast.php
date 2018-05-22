<?php
/*
Template Name: Podcast
*/

$podcast_arg = array(
    'type'         => 'podcast',
    'child_of'     => 0,
    'parent'       => '',
    'order'        => 'ASC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'number'       => 0,
    'taxonomy'     => 'podcast_category',
    'pad_counts'   => false,
);
$categories_podcast =  get_terms($podcast_arg);
?>
<?php get_header(); ?>
<?php if(isset($_GET['event-dropdown']) && !empty($_GET['event-dropdown'])): ?>
    <?php $query = new WP_Query( array( 'podcast_category' => $_GET['event-dropdown'] ) ); ?>
    <?php $x = 0; while ( $query->have_posts() ):
        $query->the_post(); ?>
        <?php if($x == 0):?>
        <div class="intro parallax-container intro-overlayed intro-overlayed-primary">
            <div class="intro-bg parallax">
                <?php the_post_thumbnail('', array('class'=>'background', 'alt'=>''));?>
            </div>
            <div class="intro-content-secondary">
                <div class="container">

                    <em class="tag">
                        <?php the_time('F j, Y'); ?>
                    </em>
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></p>
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
                                    <option value=""><?php echo esc_attr('Filter by Category'); ?></option>
                                    <option value=""><?php _e('No Category', 'musheghavetisyan'); ?></option>
                                    <?php
                                    foreach ($categories_podcast as $category) {
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
        <section class="section-podcasts section-podcasts-secondary">
        <div class="container">
        <!-- Blog posts -->
        <div class="blog-items">
        <?php echo apply_filters('the_content', $pagepodcast->post_content); ?>
        <br>
        <div class="row">
    <?php endif; ?>
        <div class="col-sm-6 col-md-4">
            <div class="podcast">
                <a class="podcast-color" href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_post_meta($post->ID, 'custom_image_data', true)['src']; ?>">
                    <div class="podcast-content">
                        <em><?php the_time('F j, Y'); ?></em>
                        <h4 class="podcast-title"><?php the_title(); ?></h4>
                        <p><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></p>
                    </div>
                </a>
            </div>
        </div>
        <?php $x++; ?>
    <?php endwhile; ?>
    </div>
<?php else: ?>
    <?php $wpb_all_query = new WP_Query(array('post_type'=>'podcast', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
    <?php if ( $wpb_all_query->have_posts() ) : ?>
        <?php $x=0; while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php if($x == 0):?>
                <div class="intro parallax-container intro-overlayed intro-overlayed-primary">
                    <div class="intro-bg parallax">
                        <?php the_post_thumbnail('', array('class'=>'background', 'alt'=>''));?>
                    </div>
                    <div class="intro-content-secondary">
                        <div class="container">

                            <em class="tag">
                                <?php the_time('F j, Y'); ?>
                            </em>
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php _e('Read More', 'musheghavetisyan'); ?></a>
                        </div>
                    </div>
                </div>


                <div class="form-filters">
                    <div class="container">
                        <form class="blogForm" method="get">
                            <div class="form-row">
                                <div class="form-controls">

                                    <div class="select-container">
                                        <select class="blogCategorySelect" name="event-dropdown">
                                            <option value=""><?php echo esc_attr('Filter by Category'); ?></option>
                                            <?php
                                            foreach ($categories_podcast as $category) {
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
                <section class="section-podcasts section-podcasts-secondary">
                <div class="container">
                <!-- Blog posts -->
                <div class="blog-items">
                <?php echo apply_filters('the_content', $pagepodcast->post_content); ?>
                <br>
                <div class="row">
            <?php endif; ?>




            <div class="col-sm-6 col-md-4">
                <div class="podcast">
                    <a class="podcast-color" href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_post_meta($post->ID, 'custom_image_data', true)['src']; ?>">
                        <div class="podcast-content">
                            <em><?php the_time('F j, Y'); ?></em>
                            <h4 class="podcast-title"><?php the_title(); ?></h4>
                            <p><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php $x++; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    </div>
    </div>
    <br>

<?php endif; ?>
    </section>
<?php get_footer(); ?>