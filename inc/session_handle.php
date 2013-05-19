<?php

error_reporting(0); // fuck da police
//watch out, badass detected

$vip = true;

function genSID($length) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}

switch ($_GET['action']) {
	case 'getusername':
		echo "[ERROR] NULL";
		// Or, echo "[SUCCESS] fakename";
		break;
	case 'validate':
		echo "[SUCCESS] SESSION IS VALID";
		break;
	case 'getdata':
		if ($vip)
			echo base64_encode("10\n" // Somehow related to VIP, not 100% sure (1X == VIP, 0X == not)
			. "fakename\n" // Username, of course
			. '123'); // User ID
		break;
	case 'isvip':
		if ($vip)
			echo "TRUE";
		else
			echo "FALSE";
		break;
	case 'action':
		echo "[SUCCESS] SESSION RENEWED";
		break;
	case 'create':
		// echo "[ERROR] PASSWORD ERROR";
		// echo "[ERROR] USERNAME ERROR";
		// echo echo "[SUCCESS] sessionid";
		echo "[SUCCESS] " . genSID(49);
		break;
	default:
		// If you get this, we should log it and figure out how to fix it and what it is
		echo "[ERROR] NULL";
		break;
}

