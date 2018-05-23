<div id="footer-wrapper">
	<footer id="sub-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 center">
					<article class="col-md-12">
                        <div class="col-md-3 col-sm-6">
						<div class="widget">
							<div class="address">
								<div class="schema" itemscope="">
									<span itemprop="name"><h4><?php _e('Mushegh Avetisyan', 'mushegh'); ?></h4></span>

									<div itemprop="address" itemscope="">
										<span itemprop="streetAddress"><?php _e('Address', 'mushegh'); ?>:<span style="margin-left: 10px;"><?php _e('Shirak 74/2 st.,', 'mushegh'); ?></span></span>
										<br><span itemprop="addressLocality"><?php _e('Tel', 'mushegh'); ?></span>: <a style="margin-left: 10px;" href='tel://<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_telephone', true); ?>' class='phonenumber'>
                                            <span class='phone-number'><?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_telephone', true); ?></span>
                                        </a>
                                    </div>
								</div>
							</div>
						</div>
                        </div>

                        <?php $queryst = new WP_Query( array(
                            'orderby' => 'rand',
                            'post_type' => 'blog',
                            'order' => 'DESC', 'showposts' => 2 ) ); ?>
                        <?php if($queryst->have_posts()): ?>
                        <?php while($queryst->have_posts()): $queryst->the_post(); ?>
                            <div class="col-md-3 nnn">
                                <div class="widget">
                                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                    <p style="height: 50px;"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                                <style>
                                    @media (max-width: 991px) {
                                        .nnn {
                                            display: none;
                                        }
                                    }
                                </style>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4><?php _e('Follow Mushegh on', 'mushegh'); ?></h4>
                                <ul class="socialmedia">
                                    <li><a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_facebook', true); ?>" target="_blank"><i class="fa yoyo fa-facebook"></i></a></li>
                                    <li><a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_twitter', true); ?>" target="_blank"><i class="fa yoyo fa-instagram"></i></a></li>
                                    <li><a href="<?php echo get_post_meta(apply_filters( 'wpml_object_id', 292, 'post'), '_header_vk', true); ?>" target="_blank"><i class="fa yoyo fa-youtube"></i></a></li>
                                    <style>
                                        .yoyo {
                                            font-size: 1.4em;
                                        }
                                    </style>
                                </ul>
                            </div>
                        </div>
					</article>


				</div>
			</div>
		</div>
	</footer>

	<div class="footer-bar clearfix">
		<p class="left">&copy; <?php echo date('Y'); ?> <?php _e('All rights reserved.', 'mushegh'); ?></p>
	</div>
</div>
<div class="scroll-back-to-top-wrapper">
	<span class="scroll-back-to-top-inner">
					<i class="fa fa-2x fa-angle-up"></i>
			</span>
</div>
<div class='asp_hidden_data' id="asp_hidden_data" style="display: none !important;">
	<svg style="position:absolute" height="0" width="0">
		<filter id="aspblur">
			<feGaussianBlur in="SourceGraphic" stdDeviation="4"/>
		</filter>
	</svg>
	<svg style="position:absolute" height="0" width="0">
		<filter id="no_aspblur"></filter>
	</svg>
</div>
<?php wp_footer(); ?>

</div> <!-- wrapper-->
</body>
</html>
