	<div class="container review">
    <div class="row">
    	<div class="home-reviews">
        <h2>Our Reviews </h2>
            <?php echo do_shortcode("[show-testimonials orderby='menu_order' order='ASC' limit='1' layout='grid' options='theme:none,info-position:info-above,text-alignment:center,columns:1,quote-content:short,charlimit:300,charlimitextra:...,display-image:on,image-size:ttshowcase_small,image-shape:circle,image-effect:none,image-link:on']"); ?>
            <div class="review-link"><a href="/reviews/">View More Reviews  ></a></div>
        </div>
        </div>
    </div>
    
    <div class="container choose">
    <div class="row">
            <div class="home-choose-us">
            <h2>Why Choose Us</h2>
                <div class="three columns alpha">
                <div class="icon hour"></div>
                   <h4>24/7 Rapid <br>Response</h4>
                   <p>We are flexible with manpower so we can respond to needs promptly.</p>
                </div>
                <div class="three columns">
				<div class="icon like"></div>
                   <h4>Flexible <br>Programs</h4>
                   <p>From concept to completion, we work hard to meet all your needs.</p>
                </div>
                <div class="three columns">
                	<div class="icon group"></div>
                   <h4>On-Site <br>Personnel</h4>
                   <p>We’re right there with you, making sure the job is done right.</p>
                </div>
                <div class="three columns">
                	<div class="icon safety"></div>
                   <h4>Safety <br>Focused</h4>
                   <p>The IDG safety program is by far the best in the industry.</p>
                </div>
                <div class="three columns omega">
                	<div class="icon quality"></div>
                   <h4>Quality <br>Craftsmanship</h4>
                   <p>Consistent quality from start to finish sets us apart from the competition.</p>
                </div>
                
            </div>
        </div>
    </div>
	
	<?php global $minti_data; ?>
	
	<?php if($minti_data['switch_footerwidgets'] == 1 && get_post_meta( get_the_ID(), 'minti_footerwidgets', true ) != 'hide') { ?>
		<footer id="footer">
			<div class="container">
				<div class="clearfix">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')); ?>	</div>	
                    </div>
                    <div class="footer-credit">
                    <div class="container">
                    <div class="right"><p>© IDG Services Inc.</p></div>
<div class="credit"><span>Designed by</span><a target="_blank" href="https://thriveagency.com/"><img class="svg" src="http://idgservices.gowiththrive.net/wp-content/uploads/2017/08/thrive-logo.png" alt="Web Design by Thrive Internet Marketing"></a></div>
				</div>
                </div>
			</div>
		</footer>
	<?php } ?>
	
	<?php if($minti_data['switch_copyright'] == 1 && get_post_meta( get_the_ID(), 'minti_footercopyright', true ) != 'hide') { ?>
	<div id="copyright" class="clearfix">
		<div class="container">
			
			<div class="sixteen columns">

				<div class="copyright-text copyright-col1">
					<?php if($minti_data['textarea_copyright'] != "") { ?>
						<?php echo wp_kses_post($minti_data['textarea_copyright']); ?>
					<?php } else { ?>
						&copy; <?php _e('Copyright', 'minti') ?> <?php echo esc_html(date("Y ")); esc_html(bloginfo('name')); ?>
					<?php } ?>
				</div>
				
				<div class="copyright-col2">
					<?php if($minti_data['select_copyright'] == 'Navigation') { ?>
						<?php if(has_nav_menu('footer_navigation')) {
						    wp_nav_menu( array( 'theme_location' => 'footer_navigation' ) ); 
						} ?>
					<?php } elseif($minti_data['select_copyright'] == 'Social Media') { ?>
						<?php get_template_part( 'framework/inc/socialmedia' ); ?>
					<?php } elseif($minti_data['select_copyright'] == 'Leave Empty') { } ?>
				</div>

			</div>
			
		</div>
	</div><!-- end copyright -->
	<?php } ?>
		
	</div><!-- end wrapall / boxed -->
	
	<?php if($minti_data['switch_backtotop'] == 1) { ?>
	<div id="back-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
	<?php } ?>
	
	<?php wp_footer(); ?>
</body>

</html>