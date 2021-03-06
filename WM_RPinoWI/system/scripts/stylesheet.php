<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");

/* Script Stylesheet */
?>

	<link rel="stylesheet" type="text/css" href="system/template/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="system/template/css/system.css" />

	<!-- Layout Stylesheet -->
	<?php
		$WM_SysCSS = "\n\t". '<link rel="stylesheet" type="text/css" href="system/template/css/layout/';
		// Layout Style
		if( $WM_SCookies [WM_LAY_VAL_STYLE] == "01" ) {
			echo $WM_SysCSS . 'layout_style1.css" />'; } 
		if( $WM_SCookies [WM_LAY_VAL_STYLE] == "02" ) {
			echo $WM_SysCSS . 'layout_style2.css" />'; }
		if( $WM_SCookies [WM_LAY_VAL_STYLE] == "03" ) {
			echo $WM_SysCSS . 'layout_style3.css" />'; }
		// Layout Fonts
		if( $WM_SCookies [WM_LAY_VAL_FONTS] == "01" ) {
			echo $WM_SysCSS . 'layout_fonts1.css" />'; } 
		if( $WM_SCookies [WM_LAY_VAL_FONTS] == "02" ) {
			echo $WM_SysCSS . 'layout_fonts2.css" />'; }
		if( $WM_SCookies [WM_LAY_VAL_FONTS] == "03" ) {
			echo $WM_SysCSS . 'layout_fonts3.css" />'; }

		// Administrator
		if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_ADM ) {
			echo '<link rel="stylesheet" type="text/css" href="admin/template/css/admin.css"/>'; }
		// OperatorWI
		if( empty($WM_ReadGET[WM_URI_DESK]) or $WM_ReadGET[WM_URI_DESK] == WM_DESK_OWI ) {
			echo '<link rel="stylesheet" type="text/css" href="opwi/template/css/opwi_square368.css"/>'; }

	?>

	<!-- Module Stylesheet -->
	<link rel="stylesheet" type="text/css" href="system/template/css/modules.css" />