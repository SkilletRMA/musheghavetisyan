<?php
//Template Name: Ask

//    test

$ask_arg = array(
    'type' => 'ask',
    'child_of' => 0,
    'parent' => '',
    'order' => 'ASC',
    'hide_empty' => 1,
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => 0,
    'taxonomy' => 'ask_category',
    'pad_counts' => false,
);
$categories_ask = get_terms($ask_arg);
?>
<?php get_header(); ?>

<section id="hero-general">

    <div id="background" style="background-image: url('<?php echo get_the_post_thumbnail_url($pageasklg); ?>')">
        <div class="intro-content intro-header" style="color: #fff; ">
<!--            <h1 class="article-title-primary" style="">--><?php //_e('Ask Mushegh your question', 'mushegh'); ?><!--</h1>-->
            <h1 class="ask-header" style="color: #fff"><?php _e('Ask Mushegh your question', 'mushegh'); ?></h1>
        </div>
    </div>
</section>


<div class="container-xs container center ask_container " style='margin-top: 40px'>
    <div style="margin-top: 30px;">
        <?php get_template_part('template-parts/breadcrumbs') ?>
    </div>


    <div class="section-article">
        <article class="article" style="padding-bottom: 0px; padding-top: 30px;">
            <div class="flex-container">
                <div>
                    <div class="cols ask_content">
                        <div class="col col-1of2">
                            <?php echo apply_filters('the_content', $pageask->post_content); ?>
                        </div>
                        <div class="col col-1of2">
                            <div style="padding: 5px; background-color: #f5f5f5;">
                                <h6 style="padding-left: 10px;"><?php _e('Your preferred topic', 'mushegh'); ?></h6>
                                <ul>
                                    <?php
                                    foreach ($categories_ask as $category) {
                                        $option = '<li><a href="#' . $category->name . '">';
                                        $option .= $category->name;
                                        $option .= '</a></li>';
                                        echo $option;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div><!-- /.col col-1of2 -->
                    </div><!-- /.cols -->
                </div>


                <?php $x = 0;
                foreach ($categories_ask as $category) : ?>
                    <?php $x++; ?>
                    <div class="container container-xs" style="padding-bottom: 0px; padding-top: 20px;">
                        <h5 class="article-title-primary"><?php echo $category->name ?><a
                                    name="<?php echo $category->name ?>"></a></h5>
                    </div>
                    <style>
                        .section-posts-secondary.featured-section1 .col-sm-6:nth-child(3n+1) {
                            clear: none;
                        }

                        .featured-section1 a.section-link {
                            position: relative;
                            z-index: 1;
                            display: block;
                            background-size: cover;
                            background-position: center;
                        }

                        .featured-section1 a.section-link:before {
                            content: "";
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            opacity: .4;
                            background-color: #000;
                        }

                        .featured-section1 a.section-link:hover:before {
                            content: "";
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            opacity: .4;
                        }

                        .featured-section1 .resource-box img.overlay-image {
                            width: 50px;
                            margin-bottom: 25px;
                        }

                        .featured-section1 .overlay-box {
                            position: relative;
                            padding-top: 50px;
                            color: #fff;
                        }

                        .featured-section1 .section-posts .section-link {
                            padding-bottom: 0;
                        }

                        .featured-section1 .section-posts .section-link img {
                            margin-bottom: 0;
                        }

                        .featured-section1 .resource-box {
                            min-height: 300px;
                        }

                        .featured-section1 .resource-box img.overlay-image {
                            width: 50px;
                            margin-bottom: 25px;
                        }

                        .featured-section1 .resource-button {
                            padding: 5px 10px;
                            border: 1px solid #fff;
                            margin: 0 auto;
                            display: inline-block;
                            max-width: 250px;
                        }

                    </style>

                    <section class="section-posts section-posts-secondary featured-section<?php echo $x; ?>">
                        <?php $query = new WP_Query(array('post_type' => 'ask',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'ask_category',
                                    'field' => 'slug',
                                    'terms' => $category->slug
                                )
                            ))); ?>
                        <?php if ($query->have_posts()): ?>
                            <?php $y = 0;
                            while ($query->have_posts()):
                                $query->the_post(); ?>
                                <?php if ($y % 3 == 0) {
                                echo '<div class="row">';
                            } ?>

                                <div class="resource-box col-sm-6 col-md-4">

                                    <a href="<?php the_permalink(); ?>"
                                       style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); min-width: 0px;"
                                       class="section-link color-1<?php echo $x . $y; ?>">
                                        <div class="overlay-box center">
                                            <img class="overlay-image"
                                                 src="/wp-content/themes/avetisyan/images/unspecified.png" width="50"
                                                 height="50">
                                            <p class="resource-title"><?php the_title(); ?></p>
                                            <p class="resource-button"><?php _e('Explore', 'mushegh'); ?></p>
                                        </div>
                                    </a>
                                    <style>
                                        <?php echo 'a.section-link.color-1'.$x.$y.':hover:before' ?>
                                        {
                                            background-color:
                                        <?php echo get_term_meta($category -> term_id, 'cc_color', true); ?>
                                        ;
                                        }
                                    </style>
                                    <h4 style="font-weight: 600;font-family: proxima_nova_bold;"><?php echo get_post_meta($post->ID, 'my_meta_box_podcast_textarea', true); ?></h4>

                                </div>

                                <?php $y++; ?>
                                <?php if ($y % 3 == 0) {
                                echo "</div>";
                            } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </section>
                <?php endforeach; ?>
            </div>
        </article>
    </div>
</div>

<div class="callout cta-bar-bottom" style="background-color: #f7542b;">
    <div class="container-fluid">
        <p style="color: white;">  <?php _e('Ask Mushegh your question', 'mushegh'); ?></p>

        <a href="#" class="newsletter btn btn-md blue-outline opt-in-form"><?php _e('Ask', 'mushegh'); ?></a>
    </div>
</div>
<div id="form-newsletter" class="overlay hidden"><a class="overlay-close" href="#">
        <i class="fa fa-times-circle fa-lg"></i> <?php _e('close', 'mushegh'); ?></a>
    <div>
        <div class="col-xs-10 text-center center">
            <h2><?php _e('Ask', 'mushegh'); ?></h2>
<!--            --><?php //wp_ask_subscribe(); ?>
            <?php
            if (ICL_LANGUAGE_CODE == "hy") {
                echo do_shortcode("[contact-form-7 id='1042' title='Ask contact-form_hy']");
            } else {
                echo do_shortcode("[contact-form-7 id='1047' title='Ask contact-form_en']");
            }
            ?>
<!---->
<!--            -->
<!--            <form method="post" class="wpcf7-form">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-name"><input-->
<!--                                        type="text" name="ask-name" value="" size="40"-->
<!--                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"-->
<!--                                        aria-required="true" aria-invalid="false"-->
<!--                                        placeholder="--><?php //_e('Name', 'mushegh'); ?><!--:"></span></div>-->
<!--                        <div class="col-md-6 col-xs-12"><span class="wpcf7-form-control-wrap contact-surname"><input-->
<!--                                        type="text" name="ask-surname" value="" size="40"-->
<!--                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"-->
<!--                                        aria-required="true" aria-invalid="false"-->
<!--                                        placeholder="--><?php //_e('Surename', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-email"><input-->
<!--                                        type="email" name="ask-email" value="" size="40"-->
<!--                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"-->
<!--                                        aria-required="true" aria-invalid="false"-->
<!--                                        placeholder="--><?php //_e('Email', 'mushegh'); ?><!--:"></span></div>-->
<!--                        <div class="col-md-12 col-xs-12"><span class="wpcf7-form-control-wrap contact-question"><input-->
<!--                                        type="text" name="ask-question" value="" size="40"-->
<!--                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"-->
<!--                                        aria-required="true" aria-invalid="false"-->
<!--                                        placeholder="--><?php //_e('The question', 'mushegh'); ?><!--:"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="container-fluid">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1"><input type="submit"-->
<!--                                                                                               name="ask-submit"-->
<!--                                                                                               value="--><?php //_e('Confirm', 'mushegh'); ?><!--"-->
<!--                                                                                               class="wpcf7-form-control wpcf7-submit contact-submit"><span-->
<!--                                    class="ajax-loader"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
        </div>
    </div>
</div>

<?php get_footer(); ?>
