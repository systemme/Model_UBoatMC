<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Module Web eMMe Corner Menu - Blue */


// Position
// $WM_Pstn = $_GET[WM_URI_PSTN]. '&amp;';

	// Link
	$WM_WMenu_30 = "\t".'<a accesskey="3" href="index.php?'.$WM_Pstn.'&amp;'.WM_SYS_VAL_BRDBOT.'=01"> ';	
	$WM_WMenu_31 = "\t".'<a accesskey="3" href="index.php?'.$WM_Pstn.'&amp;'.WM_SYS_VAL_BRDBOT.'=00"> ';

// Show/Hide Corner Menu
if( $WM_Settings[WM_SYS_VAL_WMCORNER] == "TRUE" ) { $Icons = 'src="./system/template/images/wmcorner/Crn_icon_100.svg'; }
if( $WM_Settings[WM_SYS_VAL_WMCORNER] == "FALSE" ) { $Icons = 'src="./system/template/images/wmcorner/Crn_icon_000.svg'; }

echo "\n\t".'<div class="WM_Menu">'."\n";

	// Show/Hide Border Bottom
	if( $WM_SCookies[WM_SYS_VAL_BRDBOT] == "00" ) { echo $WM_WMenu_30; $Icons = 'src="./system/template/images/wmcorner/Crn_icon_100.svg'; }
	if( $WM_SCookies[WM_SYS_VAL_BRDBOT] == "01" ) { echo $WM_WMenu_31; $Icons = 'src="./system/template/images/wmcorner/Crn_icon_100.svg'; }
	echo '<img class="WM_MenuImg" ';
	echo "\n\t".$Icons. '" '; 
	echo "\n\t".'title="' .WM_MOD_CORNER_BRDB. '" alt="' .WM_MOD_CORNER_BRDB. '" height="32" width="32" /></a>'."\n";

echo "\t".'</div>'."\n";

?>