<?php 
add_shortcode('h_slider','h_slider_section_func');
function h_slider_section_func($slider){
	$result= shortcode_atts(array(
			'h_slider' => '',
	),$slider);

	extract($result);
	ob_start();
?>
	<!--Start slider--> 
        <section class="home-section">

        	<?php 

			$slider = vc_param_group_parse_atts($h_slider);
			foreach($slider as $item):
				$s_image_src= wp_get_attachment_url($item['ima']);
        	?>
            <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <img src="<?php echo $s_image_src;?>"  alt="slider" width="1920" height="1020" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    
                    <div class="tp-caption tp-resizeme factory-founder"
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="200" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"  
                        data-start="500">
                        <h2><?php echo $item['title']; ?></h2>
                        <h4><?php echo $item['m_title']; ?></h4>
                        <p><?php echo $item['cont']; ?></p>
                        <a class="button-1" href="<?php echo $item['l_url']; ?>"><?php echo $item['l_nam'];?></a>
                        <a class="button-2" href="<?php echo $item['r_url']; ?>"><?php echo $item['r_nam'];?></a>
                    </div>
                </li>
            </ul>
            </div>
			<?php endforeach;?>
        </section>
        <!--End slider -->
<?php
return ob_get_clean();
}	

add_action( 'vc_before_init', 'h_slider_section_el' );
function h_slider_section_el() {
 vc_map( array(
  "name" => __( "H-slider", "factory_founder" ),
  "base" => "h_slider",
  "category" => __( "Factory Founder", "factory_founder"),
  "params" => array(
		

	  array(
	  'type' => 'param_group',
	  'value' => '',
	  'param_name' => 'h_slider',
	  'params' => array(
			  array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Slider-Title',
			  'param_name' => 'title',
			  ),
                array(
                'type' => 'textfield',
                'value' => '',
                'heading' => 'M-Title',
                'param_name' => 'm_title',
                ),
			   array(
			  'type' => 'textarea',
			  'value' => '',
			  'heading' => 'Content',
			  'param_name' => 'cont',
			  ),
			    array(
			  'type' => 'attach_image',
			  'value' => '',
			  'heading' => 'Slider-image',
			  'param_name' => 'ima',
			  ),
			 	 array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Left-Button-name',
			  'param_name' => 'l_nam',
			  ),
			 	  array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Right-Button-name',
			  'param_name' => 'r_nam',
			  ),
			 	  	 array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Left-Button-URL',
			  'param_name' => 'l_url',
			  ),
			 	  array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Right-Button-URL',
			  'param_name' => 'r_url',
			  ),

      )
	)	
		
  )
 ) );
}
 

?>