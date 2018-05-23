<?php
/*
    Template Name: Team
 */
?>
<?php get_header(); ?>

<section id="hero-general">
    <div id="background" style="background-image: url('<?php echo get_the_post_thumbnail_url($pageteamlg); ?>')"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 70px;"><?php _e('Team Members', 'mushegh'); ?></h1>
            </div>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : ?>
<section id="content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 center">
                <div style="margin-left: 5rem; margin-top: 30px;">
                    <?php get_template_part('template-parts/breadcrumbs') ?>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="content clearfix">

                        <?php while ( have_posts() ) : the_post(); ?>

                        <div class="col-md-3">
                            <div class="box box-sm">
                                <?php the_post_thumbnail('', array('style'=>'', 'class'=>'velocity-animating')) ?>
                                <div class="box-content">
                                    <span class="category"></span>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog post Pagination -->
    <?php if(wp_count_posts('team')->publish > 10): ?>
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
</section>
<?php endif; ?>

<?php get_footer(); ?>
