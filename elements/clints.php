
<?php 
add_shortcode('client','clients_section_func');
function clients_section_func($jakono){
	$result= shortcode_atts(array(
			
			'h_clients' => '',	

	),$jakono);

	extract($result);
	ob_start();
 ?>
	        <!--Sponsors Section-->
            <section class="sponsors-section">
            <div class="container">
                <div class="slider-outer">
                    <!--Sponsors Slider-->
                    <ul class="sponsors-slider">
                        <?php
                        $client_i = vc_param_group_parse_atts($h_clients);
                        foreach($client_i as $theme):

                            $image_client= wp_get_attachment_url($theme['c_image']);

                        ?>
                            <a href="<?php echo $theme['url'];  ?>"><img src="<?php echo $image_client; ?>" alt="1st"></a>
                        <?php endforeach;?>	
                    </ul>
                </div>
                
            </div>
        </section>
	<?php
	return ob_get_clean();
}	

add_action( 'vc_before_init', 'clients_section_el' );
function clients_section_el() {
 vc_map( array(
  "name" => __( "Client", "factory_founder" ),
  "base" => "client",
  "category" => __( "Factory Founder", "factory_founder"),
  "params" => array(
		

	  array(
	  'type' => 'param_group',
	  'value' => '',
	  'param_name' => 'h_clients',
	  'params' => array(
			    array(
			  'type' => 'attach_image',
			  'value' => '',
			  'heading' => 'client_image',
			  'param_name' => 'c_image',
			  ),
			       array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'URL',
			  'param_name' => 'url',
			  )

      )
	)	
		
  )
 ) );
}
 

?>