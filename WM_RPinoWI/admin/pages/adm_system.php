<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin System Info Command*/


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_SYS; 
echo "\n\t".'</div>';


echo "\n\t".'<div class="WM_Outline">';

	/* Server Info */
	echo '<div id="WM_Main">';
	
	echo 'PHP Version: ' . phpversion();
	// echo phpinfo() ;
	
	$shell_uname= shell_exec('uname -v');
	echo "<pre>$shell_uname</pre>";
	
	echo '</div>';
	
	/* System Info */	
	$Icons = '<img class="WM_MenuImg" src="./system/template/images/modules/sysinfo/WM_';
        $Browser = $WM_SysInfo['Browser'];
        $OS = $WM_SysInfo['OS'];

	echo '<div class="WM_SysIcons">';

		// Browser Icons
		echo '<div class="WM_Menu">';
		echo $Icons.$Browser. '.png" title="' .$Browser. '" alt="' .$Browser. '" height="32" width="32" />'."\n";
		echo '</div>';
		
		// OS Icons
		echo '<div class="WM_Menu">';
		echo $Icons.$OS. '.png" title="' .$OS. '" alt="' .$OS. '" height="32" width="32" />'."\n";
		echo '</div>';

		// Text Info
		echo 'Browser:' .$WM_SysInfo['Browser']. '<br />';
		echo 'OS:' .$WM_SysInfo['OS']. '<br />';
		echo 'IP:' .$WM_SysInfo['IP']. '<br />';
		
	echo '</div>';

	echo 'DEMO MODE = ' .$WM_Settings[WM_SYS_VAL_DEMO];

echo "\n\t".'</div>';	

?>