<?php 
global $ecommerce_star_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $ecommerce_star_option = wp_parse_args(  get_option( 'ecommerce_star_option', array() ) , ecommerce_star_settings());  
}

 if(!$ecommerce_star_option['contact_section_hide_header']): ?>	      
		<div class="mini-header" >
			<div class="container vertical-center">
				
					<div id="mini-header-contacts" class="col-md-7 col-sm-7 col-xs-12 lr-clear-padding" >
					 
						<ul class="contact-list-top" >
						<?php if($ecommerce_star_option['contact_section_phone']!=''): ?><li><i class="fa fa-phone "></i><span style="margin-left:10px"><?php echo esc_html($ecommerce_star_option['contact_section_phone']); ?></span></li><?php endif; ?>
						<?php if($ecommerce_star_option['contact_section_email']!=''): ?><li><i class="fa fa-envelope" style="margin-left:10px"></i><a href="mailto:<?php echo esc_attr( $ecommerce_star_option['contact_section_email'] ); ?>" ><span style="margin-left:10px"><?php echo esc_html($ecommerce_star_option['contact_section_email']); ?></span></a></li><?php endif; ?>
						<?php if($ecommerce_star_option['contact_section_address']!=''): ?><li><i class="fa fa-globe" style="margin-left:10px"></i><a href="<?php echo esc_attr( $ecommerce_star_option['contact_section_map'] ); ?>" target="_blank" ><span style="margin-left:10px"><?php echo esc_html($ecommerce_star_option['contact_section_address']); ?></span></a></li><?php endif; ?>								
						<?php if($ecommerce_star_option['contact_section_hours']!=''): ?>
							<li><i class="fa fa-clock-o" style="margin-left:10px"></i><span style="margin-left:10px"><?php echo esc_html($ecommerce_star_option['contact_section_hours']); ?></span></li>
						<?php endif; ?>							
						</ul>
					 
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 lr-clear-padding">			
						<ul class="mimi-header-social-icon pull-right animate fadeInRight" >
							<?php echo '<li class="login-register"><i class="fa fa-user-circle"></i>&nbsp;<a class="account-link" href="'.esc_url($ecommerce_star_option['header_myaccount_link']).'">'.esc_html($ecommerce_star_option['header_myaccount_text']).'</a>  &nbsp;'; ?>							
							<?php if(!$ecommerce_star_option['header_woocommerce'] && function_exists('YITH_WCWL')) { ?><li class="my-wishlist"><?php ecommerce_star_wishlist_count(); ?></li><?php } ?>								
							<?php if(!$ecommerce_star_option['header_woocommerce'] && class_exists('woocommerce')) { ?><li class="my-cart"><?php do_action( 'woocommerce_cart_top' ); ?>&nbsp;</li><?php } ?>
							
							<?php if($ecommerce_star_option['social_facebook_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_facebook_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Facebook','ecommerce-star'); ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
							<?php if($ecommerce_star_option['social_twitter_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_twitter_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Twitter','ecommerce-star'); ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
							<?php if($ecommerce_star_option['social_skype_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_skype_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Skype','ecommerce-star'); ?>"><i class="fa fa-skype"></i></a></li><?php } ?>
							<?php if($ecommerce_star_option['social_pinterest_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_pinterest_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Pinterest','ecommerce-star'); ?>"><i class="fa fa-pinterest-p"></i></a></li><?php } ?>
							<?php if($ecommerce_star_option['social_instagram_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_instagram_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Instagram','ecommerce-star'); ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
							<?php if($ecommerce_star_option['social_linkdin_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_linkdin_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Linkedin','ecommerce-star'); ?>"><i class="fa fa-linkedin"></i></a></li><?php } ?>
							<?php if($ecommerce_star_option['social_youtube_link']!=''){?><li class="hsocial"><a href="<?php echo esc_url($ecommerce_star_option['social_youtube_link']); ?>" target="<?php if($ecommerce_star_option['social_open_new_tab']=='1'){echo '_blank';} ?>" data-toggle="tooltip" title="<?php esc_attr_e('Youtube','ecommerce-star'); ?>"><i class="fa fa-youtube"></i></a></li><?php } ?>					
						</ul>
					</div>	
				
			</div>	
		</div>
	<?php endif; ?>		
