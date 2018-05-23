<?php
/*
Template Name: Search Page
*/
?>


<?php get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php get_search_form(); ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->



    <section id="content-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 center">
                    <?php if(have_posts()): ?>
                    <div class="col-md-8">
                        <div class="content clearfix">
                            <h3><?php _e('We found', 'mushegh'); ?> <?php
                                global $wp_query;
                                echo $wp_query->found_posts;
                                ?> <?php _e('results containing', 'mushegh'); ?> "<?php echo get_search_query(); ?>"</h3>
                        <?php if($wp_query->found_posts > 10): ?>
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
                            <?php endif; ?>
                            <hr>
                            <?php while(have_posts()): the_post(); ?>
                            <article class="search-result row">
                                <div class="col-md-4">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="col-md-8">
                                    <p></p>
                                    <em style="<?php
                                    echo 'color: #337ab7;';
                                    ?> padding-bottom: 0px; font-size: 15px; padding-top: 15px;"><?php echo $post->post_type; ?></em>
                                    <a href="<?php the_permalink(); ?>"><h4 style="padding-top: 15px; margin-bottom: 0px;"><?php the_title(); ?></h4></a>
                                    <?php the_excerpt(); ?>

                                </div>
                            </article>
                            <hr>
                            <?php endwhile; ?>
                            <div class="pagination" style="margin-bottom: 50px;">
                                <ul>
                                    <?php function my_pagenavis() {
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
                                    <?php my_pagenavis(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-3 col-md-offset-1">
                        <div class="sidebar" style="margin-bottom: 70px;">
                            <div class="widget">
                                <h4><?php _e('Few Blogs', 'mushegh'); ?></h4>
                                <ul>
                                    <?php $querysts = new WP_Query(array('post_type'=>'blog', 'showposts'=>'5')) ?>
                                    <?php if($querysts->have_posts()) : ?>
                                    <?php while($querysts->have_posts()) : $querysts->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4><?php _e('My any other Contents', 'mushegh'); ?></h4>
                                <div class="menu-sidebar-categories-container">
                                    <ul id="menu-sidebar-categories" class="menu">
                                        <li id="menu-item-3471" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3471"><a href="<?php echo get_post_permalink(apply_filters( 'wpml_object_id', 5, 'post' ), true, true); ?>" itemprop="url"><?php _e('Blogs', 'mushegh'); ?></a></li>
                                        <li id="menu-item-3475" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3475"><a href="<?php echo get_post_permalink(apply_filters( 'wpml_object_id', 85, 'post' ), true, true); ?>" itemprop="url"><?php _e('Videoblogs', 'mushegh'); ?></a></li>
                                        <li id="menu-item-3476" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3476"><a href="<?php echo get_post_permalink(apply_filters( 'wpml_object_id', 148, 'post' ), true, true); ?>" itemprop="url"><?php _e('Team', 'mushegh'); ?></a></li>
                                        <li id="menu-item-3477" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3477"><a href="<?php echo get_post_permalink(apply_filters( 'wpml_object_id', 204, 'post' ), true, true); ?>" itemprop="url"><?php _e('Coachings', 'mushegh'); ?></a></li>
                                        <li id="menu-item-3478" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3478"><a href="<?php echo get_post_permalink(apply_filters( 'wpml_object_id', 190, 'post' ), true, true); ?>" itemprop="url"><?php _e('Asks', 'mushegh'); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();