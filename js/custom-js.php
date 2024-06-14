<?php header("Content-type: text/javascript");
require( '../../../../wp-load.php' );
$ism_ops = get_option('ism_ops');

echo $ism_ops['custom_js']; ?>