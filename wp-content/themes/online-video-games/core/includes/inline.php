<?php


$online_video_games_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$online_video_games_text_transform = get_theme_mod( 'menu_text_transform_online_video_games','CAPITALISE');
    if($online_video_games_text_transform == 'CAPITALISE'){

		$online_video_games_custom_css .='#main-menu ul li a{';

			$online_video_games_custom_css .='text-transform: capitalize ;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_text_transform == 'UPPERCASE'){

		$online_video_games_custom_css .='#main-menu ul li a{';

			$online_video_games_custom_css .='text-transform: uppercase ;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_text_transform == 'LOWERCASE'){

		$online_video_games_custom_css .='#main-menu ul li a{';

			$online_video_games_custom_css .='text-transform: lowercase ;';

		$online_video_games_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$online_video_games_container_width = get_theme_mod('online_video_games_container_width');

		$online_video_games_custom_css .='body{';

			$online_video_games_custom_css .='width: '.esc_attr($online_video_games_container_width).'%; margin: auto';

		$online_video_games_custom_css .='}';


	/*---------------------------Slider-content-alignment-------------------*/

$online_video_games_slider_content_alignment = get_theme_mod( 'online_video_games_slider_content_alignment','LEFT-ALIGN');

 if($online_video_games_slider_content_alignment == 'LEFT-ALIGN'){

		$online_video_games_custom_css .='.blog_box{';

			$online_video_games_custom_css .='text-align:left;';

		$online_video_games_custom_css .='}';


	}else if($online_video_games_slider_content_alignment == 'CENTER-ALIGN'){

		$online_video_games_custom_css .='.blog_box{';

			$online_video_games_custom_css .='text-align:center; right:30%; left:30%;';

		$online_video_games_custom_css .='}';


	}else if($online_video_games_slider_content_alignment == 'RIGHT-ALIGN'){

		$online_video_games_custom_css .='.blog_box{';

			$online_video_games_custom_css .='text-align:right; right:15%; left:55%;';

		$online_video_games_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


	$online_video_games_related_product_setting = get_theme_mod('online_video_games_related_product_setting',true);

		if($online_video_games_related_product_setting == false){

			$online_video_games_custom_css .='.related.products, .related h2{';

				$online_video_games_custom_css .='display: none;';

			$online_video_games_custom_css .='}';
		}


/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$online_video_games_scroll_top_position = get_theme_mod( 'online_video_games_scroll_top_position','Right');

	if($online_video_games_scroll_top_position == 'Right'){

		$online_video_games_custom_css .='.scroll-up{';

			$online_video_games_custom_css .='right: 20px;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_scroll_top_position == 'Left'){

		$online_video_games_custom_css .='.scroll-up{';

			$online_video_games_custom_css .='left: 20px;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_scroll_top_position == 'Center'){

		$online_video_games_custom_css .='.scroll-up{';

			$online_video_games_custom_css .='right: 50%;left: 50%;';

		$online_video_games_custom_css .='}';
	}

			/*---------------------------Copyright Text alignment-------------------*/

$online_video_games_copyright_text_alignment = get_theme_mod( 'online_video_games_copyright_text_alignment','LEFT-ALIGN');

 if($online_video_games_copyright_text_alignment == 'LEFT-ALIGN'){

		$online_video_games_custom_css .='.copy-text p{';

			$online_video_games_custom_css .='text-align:left;';

		$online_video_games_custom_css .='}';


	}else if($online_video_games_copyright_text_alignment == 'CENTER-ALIGN'){

		$online_video_games_custom_css .='.copy-text p{';

			$online_video_games_custom_css .='text-align:center;';

		$online_video_games_custom_css .='}';


	}else if($online_video_games_copyright_text_alignment == 'RIGHT-ALIGN'){

		$online_video_games_custom_css .='.copy-text p{';

			$online_video_games_custom_css .='text-align:right;';

		$online_video_games_custom_css .='}';

	}


 /*---------------------------Pagination Settings-------------------*/


$online_video_games_pagination_setting = get_theme_mod('online_video_games_pagination_setting',true);

	if($online_video_games_pagination_setting == false){

		$online_video_games_custom_css .='.nav-links{';

			$online_video_games_custom_css .='display: none;';

		$online_video_games_custom_css .='}';
	}

/*--------------------------- Slider Opacity -------------------*/

	$online_video_games_slider_opacity_color = get_theme_mod( 'online_video_games_slider_opacity_color','0.6');

	if($online_video_games_slider_opacity_color == '0'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.1'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.1';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.2'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.2';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.3'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.3';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.4'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.4';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.5'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.5';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.6'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.6';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.7'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.7';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.8'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.8';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '0.9'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.9';

		$online_video_games_custom_css .='}';

		}else if($online_video_games_slider_opacity_color == '1.0'){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.9';

		$online_video_games_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$online_video_games_overlay_option = get_theme_mod('online_video_games_overlay_option', true);

	if($online_video_games_overlay_option == false){

		$online_video_games_custom_css .='.blog_inner_box img{';

			$online_video_games_custom_css .='opacity:0.6;';

		$online_video_games_custom_css .='}';
	}

	$online_video_games_slider_image_overlay_color = get_theme_mod('online_video_games_slider_image_overlay_color', true);

	if($online_video_games_slider_image_overlay_color != false){

		$online_video_games_custom_css .='.blog_inner_box{';

			$online_video_games_custom_css .='background-color: '.esc_attr($online_video_games_slider_image_overlay_color).';';

		$online_video_games_custom_css .='}';
	}

	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$online_video_games_woocommerce_pagination_position = get_theme_mod( 'online_video_games_woocommerce_pagination_position','Center');

	if($online_video_games_woocommerce_pagination_position == 'Left'){

		$online_video_games_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$online_video_games_custom_css .='text-align: left;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_woocommerce_pagination_position == 'Center'){

		$online_video_games_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$online_video_games_custom_css .='text-align: center;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_woocommerce_pagination_position == 'Right'){

		$online_video_games_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$online_video_games_custom_css .='text-align: right;';

		$online_video_games_custom_css .='}';
	}


