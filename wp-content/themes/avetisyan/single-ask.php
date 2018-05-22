<?php get_header(); ?>

<!-- breadcrumbs -->
<div class="container center col-xs-12">
    <div style="margin-top: 20px;">
    <?php echo get_template_part('template-parts/breadcrumbs'); ?>
    </div>
</div>


<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="section-article">
    <article class="article" style="padding-bottom: 0px;">
        <div class="flex-container">

            <div class="container container-xs">
                <h5 class="article-title-primary"><?php the_title(); ?></h5>
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
