<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <section id="hero-general" >
            <div id="background" style="background-image: url('<?php echo get_the_post_thumbnail_url($pageteamlg); ?>')"></div>

            <div class="container-fluid top-content">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                        <div class="col-xs-12" style="margin-bottom: 20px;">
                            <div style="margin-top: 30px;">
                            <?php get_template_part('template-parts/breadcrumbs') ?>
                            </div>
                        </div>
                            <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- about info tab -->
                            <div role="tabpanel" class="tab-pane active" id="about">
                                <div class="tab-sections about-overview clearfix">
                                    <a name="about"></a>
                                    <h2 style="margin-left: 20px;"><?php _e('About Me', 'mushegh'); ?> </h2>
                                    <div class="col-md-3">
                                        <h3>
                                            <?php echo the_post_thumbnail('', array('class'=>'member-photo')); ?>
                                        </h3>
                                    </div>

                                    <div class="col-md-5">
                                        <?php the_content(); ?>
                                    </div>

                                    <div class="col-md-4">
                                        <h3><?php _e('Contact Information', 'mushegh'); ?></h3>
                                        <ul class="socialmedia">

                                        </ul>
                                        <div class="contact-info">
                                        <?php if(get_post_meta($post->ID, 'my_meta_box_name', true) != ''): ?>
                                            <div><strong><?php _e('Name:', 'mushegh'); ?>   </strong><?php echo get_post_meta($post->ID, 'my_meta_box_name', true); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_post_meta($post->ID, 'my_meta_box_name', true) != ''): ?>
                                            <div><strong><?php _e('Email:', 'mushegh'); ?>  </strong><?php echo get_post_meta($post->ID, 'my_meta_box_email', true); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_post_meta($post->ID, 'my_meta_box_name', true) != ''): ?>
                                            <div><strong><?php _e('Phone:', 'mushegh'); ?>  </strong><?php echo get_post_meta($post->ID, 'my_meta_box_phone', true); ?></div>
                                        <?php endif; ?>
                                        <?php if(get_post_meta($post->ID, 'my_meta_box_name', true) != ''): ?>
                                            <div><strong><?php _e('Skype:', 'mushegh'); ?>  </strong><?php echo get_post_meta($post->ID, 'my_meta_box_skype', true); ?></div>
                                        <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-sections extra-information-overview clearfix ex-odd" style="margin-bottom: 50px; margin-top: 30px; margin-left: 20px; margin-right: 20px;">
                                    <?php echo get_post_meta($post->ID , 'my-first-field-name', true); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
