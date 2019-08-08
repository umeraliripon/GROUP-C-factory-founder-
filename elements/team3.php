<?php
	add_shortcode('team3','team3_section_func');
	function team3_section_func($jekono){
		$result= shortcode_atts(array(
			'image' => '',
			'title' => '',
			'dsg' => '',
			'fb' => '',
            'tw' => '',
            'g' => '',
			'skp' => '',
			'in' => '',
		),$jekono);
		extract($result);
	ob_start();
	?>
		
                        <div class="team3-member">
                        	<?php
                        		$src = wp_get_attachment_url($image);
                        	?>
                            <img src="<?php echo esc_url($src);?>" alt="MICHAEL DJONSON">
                            <div class="member-social-icon">
                                <a href="<?php echo esc_url($fb);?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url($tw);?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url($ins);?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo esc_url($be);?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                            <div class="member-details">
                                <h3><?php echo esc_html($title);?></h3>
                                <h4><?php echo esc_html($dsg);?></h4>
                            </div>
                        </div>
                    
	<?php
	return ob_get_clean();
	}
	add_action( 'vc_before_init', 'team3_section_el' );
	function team3_section_el() {
	 vc_map( array(
	  "name" => __( "team3", "factory_founder" ),
	  "base" => "team3",
	  "category" => __( "Factory Founder", "factory_founder"),
		  "params" => array(
		 array(
		  "type" => "attach_image",
		  "heading" => __( "image", "factory_founder" ),
		  "param_name" => "image",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Title", "factory_founder" ),
		  "param_name" => "title",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Designation", "factory_founder" ),
		  "param_name" => "dsg",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Facebook url", "factory_founder" ),
		  "param_name" => "fb",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Twiter url", "factory_founder" ),
		  "param_name" => "tw",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "google+ url", "factory_founder" ),
		  "param_name" => "g",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "skype url", "factory_founder" ),
		  "param_name" => "skp",
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "linkedin url", "factory_founder" ),
		  "param_name" => "in",
		 ),
		  )
	 ) );
}
?>