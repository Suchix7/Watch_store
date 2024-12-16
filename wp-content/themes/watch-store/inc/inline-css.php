<?php
	
	$watch_store_custom_css = '';
	
	// site title and tagline font size option
	$watch_store_site_title_font_size = get_theme_mod('watch_store_site_title_font_size', 25);{
	$watch_store_custom_css .='.logo h1 a, .logo p a{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_site_title_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_site_tagline_font_size = get_theme_mod('watch_store_site_tagline_font_size', 12);{
	$watch_store_custom_css .='.logo p{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_site_tagline_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	//site logo css
	$watch_store_logo_size = get_theme_mod('watch_store_logo_size'); // This value should be a percentage (e.g., 50 for 50%)
	if ($watch_store_logo_size) {
		$logo_width_px = (350 * $watch_store_logo_size) / 100; // Calculate the pixel width based on the percentage
		$watch_store_custom_css .= '.site-logo img {';
		$watch_store_custom_css .= 'width: '.esc_attr($logo_width_px).'px !important;';
		$watch_store_custom_css .= '}';
	}

	$watch_store_bestseller_title_color = get_theme_mod('watch_store_bestseller_title_color');
	$watch_store_custom_css .= ' #best-seller .wc-block-components-product-title a {';
		$watch_store_custom_css .= 'color: ' . esc_attr($watch_store_bestseller_title_color) . ' !important;';
	$watch_store_custom_css .= '}';

	$watch_store_bestseller_price_color = get_theme_mod('watch_store_bestseller_price_color');
	$watch_store_custom_css .= ' #best-seller .wc-block-components-product-price {';
		$watch_store_custom_css .= 'color: ' . esc_attr($watch_store_bestseller_price_color) . ' !important;';
	$watch_store_custom_css .= '}';

	$watch_store_bestseller_btn_color = get_theme_mod('watch_store_bestseller_btn_color');
	$watch_store_bestseller_btnbg_color = get_theme_mod('watch_store_bestseller_btnbg_color');
	$watch_store_custom_css .= '#best-seller .wp-block-button__link {';
		$watch_store_custom_css .= 'color: ' . esc_attr($watch_store_bestseller_btn_color) . ' !important; background-color: ' . esc_attr($watch_store_bestseller_btnbg_color) . ' !important;';
	$watch_store_custom_css .= '}';

	/*----------------Width Layout -------------------*/
    $watch_store_theme_lay = get_theme_mod( 'watch_store_width_options','Full Width');
    if($watch_store_theme_lay == 'Full Width'){
		$watch_store_custom_css .='body{';
			$watch_store_custom_css .='max-width: 100%;';
		$watch_store_custom_css .='}';
	}else if($watch_store_theme_lay == 'Contained Width'){
		$watch_store_custom_css .='body{';
			$watch_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$watch_store_custom_css .='}';
	}else if($watch_store_theme_lay == 'Boxed Width'){
		$watch_store_custom_css .='body{';
			$watch_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$watch_store_custom_css .='}';
	}

	//Submenu Dropdown Effect
	$watch_store_dropdown_anim = get_theme_mod('watch_store_dropdown_anim');
	$watch_store_custom_css .='.primary-navigation ul ul{';
		$watch_store_custom_css .='animation: '.esc_attr($watch_store_dropdown_anim).' 1s ease;';
	$watch_store_custom_css .='}';

	//slider css
	$watch_store_slider_title_font_size = get_theme_mod('watch_store_slider_title_font_size');{
	$watch_store_custom_css .='#slider .inner_carousel h1{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_slider_title_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_slider_text_font_size = get_theme_mod('watch_store_slider_text_font_size');{
	$watch_store_custom_css .='#slider .inner_carousel p{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_slider_text_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_slider_btn_size = get_theme_mod('watch_store_slider_btn_size');{
	$watch_store_custom_css .='.read-btn a{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_slider_btn_size).'px;';
		$watch_store_custom_css .='}';
	}

	//best seller css
	$watch_store_bestseller_title_font_size = get_theme_mod('watch_store_bestseller_title_font_size');{
	$watch_store_custom_css .='#best-seller h3{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_bestseller_title_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_bestseller_section_text_font_size = get_theme_mod('watch_store_bestseller_section_text_font_size');{
	$watch_store_custom_css .='#best-seller p.section-text{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_bestseller_section_text_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_bestseller_product_title_font_size = get_theme_mod('watch_store_bestseller_product_title_font_size');{
	$watch_store_custom_css .='#best-seller .wc-block-components-product-title a{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_bestseller_product_title_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_bestseller_product_btn_font_size = get_theme_mod('watch_store_bestseller_product_btn_font_size');{
	$watch_store_custom_css .='#best-seller .wp-block-button__link{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_bestseller_product_btn_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	//Footer css
	$watch_store_footer_copy_font_size = get_theme_mod('watch_store_footer_copy_font_size');{
	$watch_store_custom_css .='.copyright a{';
	$watch_store_custom_css .='font-size: '.esc_attr($watch_store_footer_copy_font_size).'px;';
		$watch_store_custom_css .='}';
	}

	$watch_store_footer_copy_padding = get_theme_mod('watch_store_footer_copy_padding');{
	$watch_store_custom_css .='.copyright {';
	$watch_store_custom_css .='padding-top: '.esc_attr($watch_store_footer_copy_padding).'px; padding-bottom: '.esc_attr($watch_store_footer_copy_padding).'px;';
		$watch_store_custom_css .='}';
	}