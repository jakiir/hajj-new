<?php
	/* REQUIRE THE CORE CLASS */
	require_once ( 'option-admin.php' );
	/*
		Class Definition
	*/
	if (!class_exists( 'Hajj' )) {
		class hajj extends JestroCore {

			/* PHP4 Constructor */
			function hajj () {
				

				/* SET UP THEME SPECIFIC VARIABLES */
				$this->themename = "Hajj Portal";
				$this->themeurl = "http://hajj.bd";
				$this->shortname = "hajj";
				$directory = get_bloginfo( 'stylesheet_directory' );
				/*
					OPTION TYPES:
					- checkbox: name, id, desc, std, type
					- radio: name, id, desc, std, type, options
					- text: name, id, desc, std, type
					- colorpicker: name, id, desc, std, type
					- select: name, id, desc, std, type, options
					- textarea: name, id, desc, std, type, options
				*/
				$this->options = array(
									

                   /* For Weather Link  */
				   
				   
				   
                     array(
						"name" => __( 'Weather Links <span>control the weather links</span>', 'hajj' ),
						"type" => "subhead"),
						
						/* For weather 1 */
						
					array(
						"name" => __( 'Add weather place Name1', 'hajj' ),
						"id" => $this->shortname."_wname1",
						"desc" => __( 'Enter Weather Link .', 'hajj' ),
						"std" => '',
						"type" => "text"),
						
						
					array(
						"name" => __( 'Add weather place link1', 'hajj' ),
						"id" => $this->shortname."_wlink1",
						"desc" => __( 'Enter Weather Link like- Exp:bangladesh/dhaka.', 'hajj' ),
						"std" => '',
						"type" => "text"),
						
						
						/* For weather 2 */
						
						array(
						"name" => __( 'Add weather place Name2', 'hajj' ),
						"id" => $this->shortname."_wname2",
						"desc" => __( 'Enter Weather Link.', 'hajj' ),
						"std" => '',
						"type" => "text"),
						
						array(
						"name" => __( 'Add weather place link2', 'hajj' ),
						"id" => $this->shortname."_wlink2",
						"desc" => __( 'Enter Weather Link like- Exp:bangladesh/dhaka.', 'hajj' ),
						"std" => '',
						"type" => "text"),
						
						
						/* For weather 3 */
						
						array(
						"name" => __( 'Add weather place Name3', 'hajj' ),
						"id" => $this->shortname."_wname3",
						"desc" => __( 'Enter Weather Link.', 'hajj' ),
						"std" => '',
						"type" => "text"),
						
						array(
						"name" => __( 'Add weather place link3', 'hajj' ),
						"id" => $this->shortname."_wlink3",
						"desc" => __( 'Enter Weather Link link - Exp:bangladesh/dhaka.', 'hajj' ),
						"std" => '',
						"type" => "text"),

				
						
						
				
                       

				);
				parent::JestroCore();
			}

			/*
				ALL OF THE FUNCTIONS BELOW
				ARE BASED ON THE OPTIONS ABOVE
				EVERY OPTION SHOULD HAVE A FUNCTION

				THESE FUNCTIONS CURRENTLY JUST
				RETURN THE OPTION, BUT COULD BE
				REWRITTEN TO RETURN DIFFERENT DATA
			*/

			/* LOGO FUNCTIONS */
			function logoState () {
				return get_option($this->shortname.'_logo' );
			}
			function logoName () {
				return get_option($this->shortname.'_logo_img' );
			}
			function logoAlt () {
				return get_option($this->shortname.'_logo_img_alt' );
			}
			function logoTagline () {
				return get_option($this->shortname.'_tagline' );
			}


			
			/* CONTACT INFORMATION */
			
			function officeAddressToggle() {
			 return get_option($this->shortname.'_address' );
			}
			
			function address() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_address', UTF-8)));
			}
			
			
			function telephoneNumberToggle () {
				return get_option ($this->shortname.'_phone');
			}
			
			function phone() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_phone', UTF-8)));
			}
			
			function faxToggle () {
				return get_option ($this->shortname.'_fax');
			}
			
			function fax() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_fax', UTF-8)));
			}
			
			function emailToggle () {
				return get_option ($this->shortname.'_email');
			}
			
			function email() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_email', UTF-8)));
			}
			
			function websiteToggle () {
				return get_option ($this->shortname.'_website');
			}
			
			function website() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_website', UTF-8)));
			}
	
			

     
	 /* WEATHER  WEBSITE LINKS */
			
			/* website link 1 */
			
			function wname1() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_wname1', UTF-8)));
			}
			function wname1Toggle() {
			 return get_option($this->shortname.'_wname1' );
			}
			function wlink1() {
			 return htmlspecialchars(wp_filter_post_kses(get_option($this->shortname.'_wlink1', UTF-8)));
			}
			function wlink1Toggle() {
			 return get_option($this->shortname.'_wlink1' );
			}
			







			

			/* FOOTER FUNCTIONS */
			function footerFeedback() {
				return stripslashes(wpautop(get_option($this->shortname.'_feed' )));
			}
			function footerAboutState() {
				return stripslashes(get_option($this->shortname.'_about_state' ));
			}
			
			function copyrightName() {
				return wp_filter_post_kses(get_option($this->shortname.'_copyright_name' ));
			}
			function statsCode() {
				return stripslashes(get_option($this->shortname.'_stats_code' ));
			}
		}
	}
	/* SETTING EVERYTHING IN MOTION */
	if (class_exists( 'hajj' )) {
		$hajj = new hajj();
	}
	
				

	
		
			
?>