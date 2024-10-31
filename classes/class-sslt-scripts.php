<?php
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );


class SsltScriptHandler {
/**
* Enqueue scripts
*/


public function __construct() {
	add_action('wp_footer', array($this,'sslt_scripts'),5);
}
public function sslt_scripts() { 
	//var_dump($name);
	$name = $_SERVER['SERVER_NAME'];
	 //var_dump($sslt_settings[$key]);//$var = get_option('wc_bom_option'); ?>

		
	    <script type="text/javascript">
	        
	        //jQuery(document).ready(function($) {
	        jQuery(document).ready(function($){
	        	var count = 0;
				var pathname = window.location.pathname; // Returns path only
				var url = window.location.href; 
				var pdf;

				$("a").each(function() {

			

					if ( ( $(this).attr('href') != '#' ) && ( $(this).attr('href') != null ) ) {

						var url =  $(this).attr('href');



							var pos = url.indexOf('.pdf');
							if (pos !== -1) {
								$(this).attr('target', '_blank');
							}
							var pos = url.indexOf('.docx');
							if (pos !== -1) {
								$(this).attr('target', '_blank');
							}
							var pos = url.indexOf('.doc');
							if (pos !== -1) {
								$(this).attr('target', '_blank');
							}
							var host = window.location.host;
							var pos = url.indexOf(host);
							if (pos === -1) {
								$(this).attr('target', '_blank');
							}
						
							
					}

				}); //each

				});

		    </script>

<?php }
}
$sslt = new SsltScriptHandler();