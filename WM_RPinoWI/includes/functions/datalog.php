<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function DataLogger Script */

/* WM_DataLog */
 

/* Table Settings Retrieve DataLog Value Name */
/* WM_DataLogger_ValName('DataLog Value Name') */
function WM_DataLogger_ValName($Set) {
 
    switch ($Set) {
 			case 1:  
				$Name = INO_LOG_TIMES;	 // 'TimeSc'
				break;
 			case 2:  
				$Name = INO_LOG_DATEX;	// 'Date D+M+Y'
				break;
  			case 3:  
				$Name = INO_LOG_TIMEX;	// 'Time H+M'
				break;
  			case 4:  
				$Name = INO_LOG_GPSLT;	// 'GPS Latitude'
				break;
  			case 5:  
				$Name = INO_LOG_GPSLG;	// 'GPS Longitude'
				break;
			case 6:  
				$Name = INO_LOG_CMPSH;	// 'Compass Header'
				break;
			case 7:  
				$Name = INO_LOG_CMPSP;	// 'Compass Pitch'
				break;
			case 8:  
				$Name = INO_LOG_CMPSR;	// 'Compass Roll'
				break;
  			case 9:  
				$Name = INO_LOG_SPEED;	// 'Speed'
				break;
  			case 10:  
				$Name = INO_LOG_DEPTH;	// 'Depth'
				break;
  			case 11:  
				$Name = INO_LOG_TMPIN;	// 'Tmp Internal'
				break;
  			case 12: 
				$Name = INO_LOG_HMDIN;	// 'Hmd Internal'
				break;
  			case 13: 
				$Name = INO_LOG_TMPEX;	// 'Tmp External'
				break;
  			case 14: 
				$Name = INO_LOG_TMPH2;	// 'Tmp H2O'
				break;
  			case 15: 
				$Name = INO_LOG_TMPME;	// 'Main Engine Motor Temperature'
				break;
  			case 16: 
				$Name = INO_LOG_TMPBT;	// 'Ballast Tank Motor Temperature'
				break;
  			case 17: 
				$Name = INO_LOG_HDWBV;	// 'Hardware Battery Voltage'
				break;	
  			case 18: 
				$Name = INO_LOG_ENGBV;	// 'Engine Battery Voltage'
				break;									
  			case 19: 
				$Name = INO_LOG_ENGBI;	// 'Engine Current'
				break;	
							
  			case 20: 
				$Name = INO_LOG_RPIBV;	// 'RPi Voltage'
				break;
  			case 21: 
				$Name = INO_LOG_BTAMY;	// 'Battery Autonomy'
				break;	
  			case 22: 
				$Name = INO_LOG_MENGI;	// 'Main Engine Motor Current'
				break;
  			case 23: 
				$Name = INO_LOG_BTNKI;	// 'Ballast Tank Motor Current'
				break;
  			case 24: 
				$Name = INO_LOG_MENGI;	// 'Main Engine Motor Current'
				break;
  			case 25: 
				$Name = INO_LOG_BTNKI;	// 'Ballast Tank Motor Current'
				break;											
  			case 26: 
				$Name = INO_LOG_RD1TM;	// 'Rudders 1-3 Position Trim'
				break;
  			case 27: 
				$Name = INO_LOG_RD2TM;	// 'Rudders 2-4 Position Trim'
				break;
			case 28: 
				$Name = INO_LOG_OPRCM;	// 'Operator Command'
				break;
			case 29: 
				$Name = INO_LOG_PRMCM;	// 'Parameter Command'
				break;
			case 30: 
				$Name = INO_LOG_MGALM;	// 'Message Allarm'
				break;
			case 31: 
				$Name = INO_LOG_CMDST;	// 'Command Status'
				break;
			case 32: 
				$Name = INO_LOG_INPST;	// 'Input Status'
				break;
			case 33: 
				$Name = INO_LOG_OUTST;	// 'Output Status'
				break;
	}
 
	return $Name;
}
  
 
/* Read One DataLog */
/* WM_DBLogOne_Read('DataLog Name', 'Value Name') */
function WM_DBLogOne_Read($Log_ID, $Val) {
 
	$WM_DBDataLog = WM_DBConnect();	
 
  	$WM_SQL = "SELECT " .$Val.  " FROM " .WM_TAB_DATALOG. " WHERE " ."id". " = " . "'" .$Log_ID. "'";  
 
	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());
 
        $WM_Row = mysql_fetch_row($WM_DBRead); 
        $WM_DBRead = $WM_Row [0] ;
 
 	mysql_close($WM_DBDataLog); 
 
  	return $WM_DBRead;
}
 
/* Read All DataLog */
/* WM_DBLogAll_Read('DataLog Name') */
function WM_DBLogAll_Read($Log_ID) {
 
        global $WM_DataLogger;
 
        // Settings Array (DataLog Value)
    	$WM_DataLogger = array( );
 
	for ($Set = 1; $Set < 34; ++$Set) {	    // Retrieve 32 DataLog Value
 
	$Name = WM_DataLogger_ValName($Set);	    // Retrieve DataLog Name
	$WM_DataLogger [$Name] = WM_DBLogOne_Read($Log_ID, $Name);
 
	} 
 
  	return $WM_DataLogger;
} 
 
 
/* Write One DataLog */
/* WM_DBLogOne_Write('DataLog Name', 'Field Name', 'Value') */
function WM_DBLog_Write($Log) {
 
    $WM_DBDataLog = WM_DBConnect();	

	$WM_SQL = "INSERT INTO " .WM_TAB_DATALOG. "(".INO_LOG_TIMES. "," .INO_LOG_DATEX. "," .INO_LOG_TIMEX.
			"," .INO_LOG_GPSLT. "," .INO_LOG_GPSLG. 
			"," .INO_LOG_CMPSH. "," .INO_LOG_CMPSP. "," .INO_LOG_CMPSR. "," .INO_LOG_SPEED. "," .INO_LOG_DEPTH. 
			"," .INO_LOG_TMPIN. "," .INO_LOG_HMDIN. "," .INO_LOG_TMPEX. "," .INO_LOG_TMPH2.
			"," .INO_LOG_TMPME. "," .INO_LOG_TMPBT.
			"," .INO_LOG_HDWBV. "," .INO_LOG_ENGBV. "," .INO_LOG_ENGBI. "," .INO_LOG_RPIBV. "," .INO_LOG_BTAMY.
			"," .INO_LOG_MENGI. "," .INO_LOG_BTNKI. "," .INO_LOG_RD1TM. "," .INO_LOG_RD2TM.
			"," .INO_LOG_SONRF. "," .INO_LOG_SONRB. "," .INO_LOG_CLLSR.
			"," .INO_LOG_OPRCM. "," .INO_LOG_PRMCM. "," .INO_LOG_MGALM. 
			"," .INO_LOG_CMDST. "," .INO_LOG_INPST. "," .INO_LOG_OUTST.")".
		  " VALUES "."(".$Log.")" ;

	//echo $WM_SQL;

	mysql_query($WM_SQL) ;
 
 	mysql_close($WM_DBDataLog); 
 
  	return ;
}
 
 
/* Count Row Number DataLog */
/* WM_DBLog_RowNb () */
function WM_DBLog_RowNb() {
 
    $WM_DBDataLog = WM_DBConnect();	

	// SELECT COUNT("nome_di_colonna") FROM "nome_della_tabella";
	$WM_SQL = "SELECT * FROM " .WM_TAB_DATALOG;

	// echo $WM_SQL;

	$WM_Query = mysql_query($WM_SQL) ;
 	$WM_RowNb = mysql_num_rows($WM_Query);
 	
 
 	mysql_close($WM_DBDataLog); 
 
  	return $WM_RowNb ;
} 
 
?>