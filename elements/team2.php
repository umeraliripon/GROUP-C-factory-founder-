<?php
	add_shortcode('team2','team2_section_func');
	function team2_section_func($jekono){
		$result= shortcode_atts(array(
			'image' => '',
			'title' => '',
			'dsg' => '',
			'fb' => '',
            'tw' => '',
            'camera' => '',
			'skp' => '',
			'in' => '',
		),$jekono);
		extract($result);
	ob_start();
	?>
	
	<!--Start team section-->
	<section class="team-section-2 sec-pdd-90 color-f7f7f7">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 ">
					<div class="single-team-member itm-mgn-bot">
						<div class="img-holder">
								<?php
                        			$src = wp_get_attachment_url($image);
                        		?>
                            	<img src="<?php echo esc_url($src);?>" alt="Image" class="person-image">
							<div class="social-icons">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-camera-retro"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="content">
							<h3 class=""><?php echo esc_html($title);?></h3>
							<span><?php echo esc_html($dsg);?></span>
						</div>
					</div> 
				</div>
				<!-- End single-team-member -->
			</div>   
		</div>   
	</section>  
	 <!--End team section-->
		
                        <div class="team2-member">
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
                                <h3></h3>
                                <h4></h4>
                            </div>
                        </div>
                    
	<?php
	return ob_get_clean();
	}
	add_action( 'vc_before_init', 'team2_section_el' );
	function team2_section_el() {
	 vc_map( array(
	  "name" => __( "team2", "factory_founder" ),
	  "base" => "team2",
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
		  "param_name" => "camera",
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