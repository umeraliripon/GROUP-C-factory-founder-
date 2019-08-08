<?php
	add_shortcode('team1','team1_section_func');
	function team1_section_func($jekono){
		$result= shortcode_atts(array(
			'image' => '',
			'title' => '',
			'dsg' => '',
			'dsc' => '',
			'fb' => '',
            'tw' => '',
            'g' => '',
			'skp' => '',
			'in' => '',
		),$jekono);
		extract($result);
	ob_start();
	?>
		
    <!--Start single  item-->
		<section class="team-section sec-pdd-90-110 color-f7f7f7">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 ">
                        <div class="team-mamber item-margin-bot-60 rsp-pdd">
                            <div class="team-image">
								<?php
                        			$src = wp_get_attachment_url($image);
                        		?>
                            <img src="<?php echo esc_url($src);?>" alt="Image">
                            </div>
                            <div class="team-content">
                                <div class="team-text">
                                    <a href="<?php the_permalink();?>"><h2><?php echo esc_html($title);?></h2></a>
                                    <h6><?php echo esc_html($dsg);?></h6>
                                    <p><?php echo esc_html($dsc);?></p>
                                    <div class="social-link">
                                        <ul>
											<li><a href="<?php echo esc_url($fb);?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php echo esc_url($tw);?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="<?php echo esc_url($g);?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="<?php echo esc_url($skp);?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
											<li><a href="<?php echo esc_url($in);?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                <div class="team-button"><a href="<?php the_permalink();?>" class="theme-btn skew-btn"><span class="btn-text"><?php echo esc_html('View Details');?></span></a></div>
								
                            </div>
                        </div>
					</div>
                </div>    
            </div>
        </section>    
                    <!--End single  item-->

	<?php
	return ob_get_clean();
	}
	add_action( 'vc_before_init', 'team1_section_el' );
	function team1_section_el() {
	 vc_map( array(
	  "name" => __( "team1", "factory_founder" ),
	  "base" => "team1",
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
		  "heading" => __( "Description", "factory_founder" ),
		  "param_name" => "dsc",
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