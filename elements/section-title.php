<?php
	add_shortcode('title_section','title_section_func');
	function title_section_func($f_founder){
		$result= shortcode_atts(array(
			'sec_title' => '',
			'sec_des' => '',
		),$f_founder);
		extract($result);
	ob_start();
	?>
		<div class="service-title-2">
            <h2><?php echo $sec_title;?></h2>
            <p><span class="border_dot"></span><?php  echo $sec_des; ?><span  class="border_dot_right"></span></p>
        </div>
	<?php
	return ob_get_clean();
	}
	add_action( 'vc_before_init', 'title_section_el' );
	function title_section_el() {
	 vc_map( array(
	  "name" => __( "Section Title", "factory_founder" ),
	  "base" => "title_section",
	  "category" => __( "Factory Founder", "factory_founder"),
		  "params" => array(
		 array(
		  "type" => "textfield",
		  "heading" => __( "section title", "factory_founder" ),
		  "param_name" => "sec_title",
		  "description" => __( "Description for foo param.", "factory_founder" )
		 ),
		 array(
		  "type" => "textfield",
		  "heading" => __( "section description", "factory_founder" ),
		  "param_name" => "sec_des",
		 ),
		 
  )
 ) );
}
?>