<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'inkness'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';	
	
	//Basic Settings
	
	$options[] = array(
		'name' => __('Basic Settings', 'inkness'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Site Logo', 'inkness'),
		'desc' => __('Leave Blank to use text Heading.', 'inkness'),
		'id' => 'logo',
		'class' => '',
		'type' => 'upload');		
		
	$options[] = array(
		'name' => __('Copyright Text', 'inkness'),
		'desc' => __('Some Text regarding copyright of your site, you would like to display in the footer.', 'inkness'),
		'id' => 'footertext2',
		'std' => '',
		'type' => 'text');
				
	$options[] = array(
		'name' => __('Banner Oferte', 'inkness'),
		'desc' => __('Top banner for oferte speciale page.', 'inkness'),
		'id' => 'banner_oferte',
		'class' => '',
		'type' => 'upload');	
	
        $options[] = array(
		'name' => __('Price', 'inkness'),
		'desc' => __('List of price.', 'inkness'),
		'id' => 'price',
		'class' => '',
		'type' => 'upload');	
        
	//SLIDER SETTINGS

	$options[] = array(
		'name' => __('Slider Settings', 'inkness'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Enable Slider', 'inkness'),
		'desc' => __('Check this to Enable Slider.', 'inkness'),
		'id' => 'slider_enabled',
		'type' => 'checkbox',
		'std' => '0' );
			
		
	$options[] = array(
		'name' => __('Using the Slider', 'inkness'),
		'desc' => __('This Slider supports upto 5 Images. To show only 3 Slides in the slider, upload only 3 images. Leave the rest Blank. For best results, upload images of same dimensions.', 'inkness'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Slider Image 1', 'inkness'),
		'desc' => __('First Slide', 'inkness'),
		'id' => 'slide1',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle1',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc1',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl1',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'inkness'),
		'desc' => __('Second Slide', 'inkness'),
		'class' => '',
		'id' => 'slide2',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle2',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc2',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'inkness'),
		'desc' => __('Third Slide', 'inkness'),
		'id' => 'slide3',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle3',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc3',
		'std' => '',
		'type' => 'textarea');	
			
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl3',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 4', 'inkness'),
		'desc' => __('Fourth Slide', 'inkness'),
		'id' => 'slide4',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 5', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide5',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');	
			
	//Social Settings
	
	$options[] = array(
	'name' => __('Social Settings', 'inkness'),
	'type' => 'heading');

	$options[] = array(
		'name' => __('Facebook', 'inkness'),
		'desc' => __('Facebook Profile or Page URL i.e. http://facebook.com/username/ ', 'inkness'),
		'id' => 'facebook',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Twitter', 'inkness'),
		'desc' => __('Twitter Username', 'inkness'),
		'id' => 'twitter',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Google Plus', 'inkness'),
		'desc' => __('Google Plus profile url, including "http://"', 'inkness'),
		'id' => 'google',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Feeburner', 'inkness'),
		'desc' => __('URL for your RSS Feeds', 'inkness'),
		'id' => 'feedburner',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Pinterest', 'inkness'),
		'desc' => __('Your Pinterest Profile URL', 'inkness'),
		'id' => 'pinterest',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Instagram', 'inkness'),
		'desc' => __('Your Instagram Profile URL', 'inkness'),
		'id' => 'instagram',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Linked In', 'inkness'),
		'desc' => __('Your Linked In Profile URL', 'inkness'),
		'id' => 'linkedin',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Youtube', 'inkness'),
		'desc' => __('Your Youtube Channel URL', 'inkness'),
		'id' => 'youtube',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Flickr', 'inkness'),
		'desc' => __('Your Flickr Profile URL', 'inkness'),
		'id' => 'flickr',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');	
									
		
	$options[] = array(
	'name' => __('Support', 'inkness'),
	'type' => 'heading');
	
	$options[] = array(
		'desc' => __('Inkness WordPress theme has been Created by <a href="http://starniciuc.com" target="_blank">Starniciuc Mihai</a>.', 'inkness'),
		'type' => 'info');		
	return $options;
}