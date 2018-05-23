<?php
//Template Name: Coaching
?>
<?php get_header(); ?>
<!-- breadcrumbs -->
<div class="container-xs container center">
    <div style="margin-top: 30px;">
        <?php get_template_part('template-parts/breadcrumbs') ?>
    </div>
</div>


<div class="section-article">
    <article class="article">
        <div class="flex-container">
            <?php echo apply_filters('the_content', $pagecoaching->post_content); ?>
<!--            <h5 class="article-title-primary" style="margin-bottom: 30px;">--><?php //_e('Growth Resources', 'mushegh'); ?><!--</h5>-->
            <?php if(have_posts()) : ?>
            <?php $x=0; while(have_posts() && $x<4) : the_post(); ?>
                <?php if($x == 0 || $x == 2){ echo '<div class="container container-xs coach-container" ><div class="cols">'; } ?>
                    <div class="col col-1of2">
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php the_post_thumbnail(); ?></p>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                  <?php if($x == 1 || $x == 3){ echo '</div></div>'; } ?>

                <?php $x++; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="container container-xs">
<!--                <h5>--><?php //_e('Life Programms FAQ\'s', 'mushegh'); ?><!--</h5>-->

                <div class="accordion">
                    <?php $queryfaq = new WP_Query(array('post_type' => 'faq',
                        'showposts' => -1));
                    ?>
                    <?php if ( $queryfaq->have_posts() ) : ?>
                        <?php $x=0; while ( $queryfaq->have_posts() ): $queryfaq->the_post(); ?>
                            <div class="accordion-section" id="my_post_accordion<?php echo $x; ?>">
                                <div class="accordion-head">
                                    <h5 class="accordion-title"><?php the_title(); ?></h5>
                                </div>

                                <div class="accordion-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php $x++; ?>
                            <script>
                                    $('#my_post_accordion').click(function () {
                                        var $input = $( this );
                                        $input.attr('class', 'accordion-expended');
                                    });
                            </script>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </article>
</div>

<?php get_footer(); ?>
