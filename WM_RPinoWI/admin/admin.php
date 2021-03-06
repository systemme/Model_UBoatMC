<?php 
	// No Direct Access	
	defined('_WMEX') or die("Access Denied!");	


/* Administration */

/*
	[WM_RPinoWI]
	U-boat Module Control Web Interface

    	Copyright (C) 2016 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

        /* Path Definitions */
        define('WM_ADM_SCT', WM_ADM.'/scripts');  		// Administration Script Path
        define('WM_ADM_TPT', WM_ADM.'/template');    		// Administration Template Path
        define('WM_ADM_PAG', WM_ADM.'/pages');    		// Administration Pages Path

	/* Page Admin Name */
	echo '<div id="WM_AdminInfo">';
	echo $WM_Admin[WM_ADM_NAME];
	// echo '</div>';
	
	echo '<br/>';

	// Prints Date Time
	// echo '<div class="WM_DteTme">';	
	echo '  '.$WM_SysInfo['Date'];
	echo ' - '.$WM_SysInfo['Time'];
	
	echo '</div>';
	
	
	/* Page Main */
	echo '<div id="WM_Main">';


	/* Select Items */

	// Settings
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_SET) { include (WM_ADM_PAG. '/adm_settings.php');  } 
	
	// Administrator
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_ADM) { include (WM_ADM_PAG. '/adm_administrator.php');  } 

	// Arduino Command
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_INO) { include (WM_ADM_PAG. '/adm_ino.php');  } 
		// Arduino Command - Reset
		if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_INO_RST) { include (WM_ADM_PAG. '/adm_ino-reset.php');  } 
	
	// RaspberryPi Command
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_RPI) { include (WM_ADM_PAG. '/adm_rpi.php');  } 
		// RaspberryPi Command - Reboot
		if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_RPI_RBT) { include (WM_ADM_PAG. '/adm_rpi-reboot.php');  } 
		// RaspberryPi Command - Halt
		if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_RPI_HLT) { include (WM_ADM_PAG. '/adm_rpi-halt.php');  } 
		
	// System Info
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_SYS) { include (WM_ADM_PAG. '/adm_system.php'); } 
	
	// Datalogger
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_DLG) { include (WM_ADM_PAG. '/adm_datalog.php'); } 
	
	// License
	if ($WM_ReadGET[WM_URI_PAGE] == WM_ADM_LIC) { include (WM_ADM_PAG. '/License_GPLV3.html'); } 


	echo '</div>';

	/* IP Info */
	echo '<div id="WM_AdminIP">';	
	echo 'IP:' .$WM_SysInfo['IP']. '<br />';
	echo '</div>';

?>
