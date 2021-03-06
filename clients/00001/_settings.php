<?php
	// CLIENT SPECIFIC SETTINGS
	// =================================================================================
		/*
			If necessary, these settings can be converted to use database as a source.
			Run the appropriate SQL script on this page
			and assign the values to the existing variables and constants.
			
			The pages will be built as usual using existing names.
		*/
	// =================================================================================
	
	// Google Analytics Account
	define("_GA_ACCOUNT", "UA-31873580-47");
	
	// Site Title
	define("_SITE_TITLE", "States Exchange Program");
	
	// Site Name
	define("_SITE_NAME", "Premier States Exchange Program!");
	
	// Support Phone Number
	define("_PHONE_NUM", "Questions? 1 800 111 5678<br>Support: 000 222 2222");
	
	// Welcome Title (Large)
	$welcomeTextLarge = "Welcome Message";
	
	// Welcome Text Paragraph
	$welcomeText = "
		Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
		Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
		fermentum massa justo sit amet risus. Adding <a href='http://www.bbc.com' target='_blank'>link to BBC</a>.
	";
	
	// Modeler Questions
	// Leave BLANK if using default wording
	define("_MOD_Q1", "");
	define("_MOD_Q2", "");
	define("_MOD_Q3", "");
	define("_MOD_Q4", "");
	define("_MOD_Q5", "");
	
	
	// CSS OPTION **********************************************************************
	// Use client custom css?    1=ON
	// Not using custom css?     0=OFF
	define("_CUSTOM_CSS", 1);
	
	
	// DEFINE MARKETPLACE / MEDICARE OPTIONS *****************************************************
	
	// eHealth
		/*
			0 = default text
			1 = federal text
			2 = eHealth text
		*/
	define("_MARKETINDICATOR", 0);
	
	
	// eHealth URL
		/* 
			- Valid only when _MARKETINDICATOR is 2 
			- Leave blank when not used
		*/
	define("_EHEALTHURL", "http://www.bbc.com");
	
	
	// Navigators
		/* 
			0 = NO
			1 = YES
		*/
	define("_NAVIGATORS", 1);

	
	
	// ============================== DEFINE CLIENT PAGES ==============================
	
	$clientSetExternal = array(
		// First value is the name of the file. (DO NOT INCLUDE EXTENSION! such as .php)
		// Second value is the text displayed as link
		array("http://www.bbc.com", "Test")
	);
	
	$clientPages = array(
		// First value is the name of the file. (DO NOT INCLUDE EXTENSION! such as .php)
		// Second value is the text displayed as link
		array("_page_client_02", "Client Page Two"),
		array("_page_client_03", "Client Page Three"),
		array("_page_client_04", "Client Page Four"),
		array("_page_client_05", "Client Page Five")
	);
	
	// PDF (if any) - define PDFs separately here.
	$clientPdf = array(
		// First value is the name of the file. (DO NOT INCLUDE EXTENSION! such as .pdf)
		// Second value is the text displayed as link
		array("name_of_pdf_file_1", "Client PDF 1"),
		array("name_of_pdf_file_2", "Client PDF 2"),
		array("name_of_pdf_file_3", "Client PDF 3")
	);
	
	//Highlighted Sets
	// Pick from array above.
	// ============ Index starts at "0" ! ============
	
	// Set A (NON-STATE PAGES) - These are the set of links in the sidebar 
	// Leave array blank if there aren't any links
	$clientPagesA_title = "Premier Resources A";
	$clientSetExternalA = array($clientSetExternal[0]);
	$clientSetA = array($clientPages[0], $clientPages[1], $clientPages[3], $clientPages[4]);
	$clientSetPdfA = array($clientPdf[0], $clientPdf[1]);
	
	// Set B (STATE PAGES) - These are the set of links highlighted in the sidebar
	$clientPagesB_title = "Premier Resources B";
	$clientSetExternalB = array($clientSetExternal[0]);
	$clientSetB = array($clientPages[0], $clientPages[1], $clientPages[2], $clientPages[3]);
	$clientSetPdfB = array($clientPdf[0], $clientPdf[1]);


?>