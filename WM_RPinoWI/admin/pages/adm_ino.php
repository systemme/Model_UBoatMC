<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin Arduino Command*/


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_INO; 
echo "\n\t".'</div>';


echo "\n\t".'<div class="WM_Outline">';


// RPi Output -> Reset Arduino
	
	echo "\n\t".'<a '.'href="index.php?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_INO_RST. '">';
	echo "\n\t".' <span class="WM_AdmBtn" > '; 
	echo "\n\t".WM_RPI_VAL_RST ;
	echo "\n\t".'</span>';	
	echo "\n\t".'</a>';
	
echo "\n\t".'</div>';
	

?>