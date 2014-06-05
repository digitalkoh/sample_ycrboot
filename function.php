<?php
	
	// Get Client ID
	if (isset($_GET["cid"])){
		define("_CLIENT", $_GET["cid"]); 
		$_CLIENT = $_GET["cid"];
	}else{
		define("_CLIENT", "base");
		$_CLIENT = "base";
	}
	
	// CLIENT LANDING PAGES REDIRECT *******************************************
	
	// $tmpClient is defined in the root config
	
	// If 'admin' parameter is in the URL, display as usual.
	// Otherwise, display temp landing page
	if(!isset($_GET["admin"])){
		// Check if current cid is listed in the tmpClient array
		if(in_array(_CLIENT, $tmpClient)){
			$loc = "clients/"._CLIENT."/index.php";
			header('Location:'.$loc);
		}
	}
	// END LANDING PG REDIRECT *************************************************
	
	
	
	// Get State ID
	if (isset($_GET["state"])){
		//define("_STATE", $_GET["state"]); 
		$_STATE = $_GET["state"];
	}else{
		//define("_STATE", "");
		$_STATE = "";
	}
	
	// Get State ID for Modeler
	if (isset($_GET["mod-state"])){
		$_MODSTATE = $_GET["mod-state"];
	}else{
		$_MODSTATE = "";
	}
	
	// Standard Pages
	if (isset($_GET["spage"])){ 
		$_SPAGE = $_GET["spage"];
	}else{
		$_SPAGE = "";
	}
	
	// Client Pages
	if (isset($_GET["cpage"])){ 
		$_CPAGE = $_GET["cpage"];
	}else{
		$_CPAGE = "";
	}
	
	// apply client specific settings
	// check readable
	$fileIs = 'clients/'.$_CLIENT.'/_settings.php';
	if(is_readable($fileIs)){
		//require_once 'clients/'.$_CLIENT.'/_settings.php';
		require_once $fileIs;
	}else{
		header('Location: 404.php');
	}
	
	
function variableTextDisplay($section){
	// 1 = Market
	// 2 = Navigator (Medicaid)
	// 3 = Disclaimer
	// 4 = Terms
	
	if($section == 1){
		if(defined('_MARKETINDICATOR')){

			if(_MARKETINDICATOR == 0){
 				include("content/_vartxt_market_default.php");
			}
			
			if(_MARKETINDICATOR == 1){
				include("content/_vartxt_market_federal.php");
 			}
 			
 			if(_MARKETINDICATOR == 2){
 				include("content/_vartxt_market_ehealth.php");
 			}
		}
	}
	
	if($section == 2){
		if(defined('_NAVIGATORS')){
			if(_NAVIGATORS == 1){
				include("content/_vartxt_navigator.php");
 			}
		}
	}
	
	
	// Section 3, 4 not used as of 2013-09-13. (Disclaimers in these area will appear at all times)
	if($section == 3){
		if(defined('_MARKETINDICATOR')){
			if(_MARKETINDICATOR == 2){
				include("content/_vartxt_disc_ehealth.php");
 			}
		}
		
		if(defined('_NAVIGATORS')){
			if(_NAVIGATORS == 1){
				include("content/_vartxt_disc_navigator.php");
 			}
		}
	}
	
	if($section == 4){
		if(defined('_MARKETINDICATOR')){
			if(_MARKETINDICATOR == 2 || _NAVIGATORS == 1){
				include("content/_vartxt_terms.php");
 			}
		}
	}

}


	