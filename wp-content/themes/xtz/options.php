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
		'name' => __('Banner Oferte Rus', 'inkness'),
		'desc' => __('Top banner for oferte speciale page.', 'inkness'),
		'id' => 'banner_oferte_rus',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'name' => __('More Romanian', 'inkness'),
		'desc' => __('More in romanian', 'inkness'),
		'id' => 'more',
		'class' => '',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('More Russian', 'inkness'),
		'desc' => __('More in russian', 'inkness'),
		'id' => 'more_rus',
		'class' => '',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Price', 'inkness'),
		'desc' => __('List of price.', 'inkness'),
		'id' => 'price',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'name' => __('Work time', 'inkness'),
		'desc' => __('Work time', 'inkness'),
		'id' => 'work_time',
		'class' => '',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Work time weekend', 'inkness'),
		'desc' => __('Work time in weekend', 'inkness'),
		'id' => 'work_time_weekend',
		'class' => '',
		'type' => 'text');	
        
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
        
	$options[] = array(
		'name' => __('Slider Image 6', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide6',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle6',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl6',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 7', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide7',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle7',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl7',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 8', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide8',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle8',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl8',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 9', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide9',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle9',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl9',
		'std' => '',
		'type' => 'text');	
        
	$options[] = array(
		'name' => __('Slider Image 10', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide10',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle10',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl10',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 11', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide11',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle11',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc11',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl11',
		'std' => '',
		'type' => 'text');	
			
	//SLIDER SETTINGS RUSSIAN

	$options[] = array(
		'name' => __('Slider Settings Russian', 'inkness'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Enable Slider', 'inkness'),
		'desc' => __('Check this to Enable Slider.', 'inkness'),
		'id' => 'slider_enabled_rus',
		'type' => 'checkbox',
		'std' => '0' );
			
		
	$options[] = array(
		'name' => __('Using the Slider', 'inkness'),
		'desc' => __('This Slider supports upto 5 Images. To show only 3 Slides in the slider, upload only 3 images. Leave the rest Blank. For best results, upload images of same dimensions.', 'inkness'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Slider Image 1', 'inkness'),
		'desc' => __('First Slide', 'inkness'),
		'id' => 'slide1_rus',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle1_rus',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc1_rus',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl1_rus',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'inkness'),
		'desc' => __('Second Slide', 'inkness'),
		'class' => '',
		'id' => 'slide2_rus',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle2_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc2_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl2_rus',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'inkness'),
		'desc' => __('Third Slide', 'inkness'),
		'id' => 'slide3_rus',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle3_rus',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc3_rus',
		'std' => '',
		'type' => 'textarea');	
			
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl3_rus',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 4', 'inkness'),
		'desc' => __('Fourth Slide', 'inkness'),
		'id' => 'slide4_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle4_rus',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc4_rus',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl4_rus',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 5', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide5_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle5_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc5_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl5_rus',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 6', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide6_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle6_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc6_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl6_rus',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 7', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide7_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle7_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc7_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl7_rus',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 8', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide8_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle8_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc8_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl8_rus',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 9', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide9_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle9_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc9_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl9_rus',
		'std' => '',
		'type' => 'text');	
        
	$options[] = array(
		'name' => __('Slider Image 10', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide10_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle10_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc10_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl10_rus',
		'std' => '',
		'type' => 'text');
        
	$options[] = array(
		'name' => __('Slider Image 11', 'inkness'),
		'desc' => __('Fifth Slide', 'inkness'),
		'id' => 'slide11_rus',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'inkness'),
		'id' => 'slidetitle11_rus',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'inkness'),
		'id' => 'slidedesc11_rus',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'inkness'),
		'id' => 'slideurl11_rus',
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