<?php
	
	//ID of clients that have temp landing page
	$tmpClient = array(
		// 1 => "353VV2ZKBQFDWEB",  // Starbucks
		// 2 => "add more clients", // Name of some Client
		// 3 => "add more clients", // Name of some Client
	);
	
	
	// Modeler Questions
	define("_MOD_Q1_DEFAULT", "Annual Family Income");
	define("_MOD_Q2_DEFAULT", "State");
	define("_MOD_Q3_DEFAULT", "Do you have a spouse?");
	define("_MOD_Q4_DEFAULT", "How many children under age 26 are in your household?");
	define("_MOD_Q5_DEFAULT", "Can you obtain medical coverage through your employer or your spouse's employer?");
	
	
	// Standard Learn More Pages - These will display on Learn More home.
	$stdLinks = array(
		// First value is the name of the file. (DO NOT INCLUDE EXTENSION! such as .php)
		// Second value is the text displayed as link
		array("_page_learn_01", "This is the name of first article"),
		array("_page_learn_02", "Understanding Your Insurance Options"),
		array("_page_learn_03", "Vestibulum non elementum tellus"),
		array("_page_learn_04", "Donec faucibus odio vitae nibh ornare scelerisque "),
		array("_page_learn_05", "Vivamus sed neque elit"),
		array("_page_learn_06", "Fusce euismod tempor sapien, sed aliquam ligula"),
		array("_page_learn_07", "Elementum non. Duis tincidunt luctus elit"),
		array("_page_learn_08", "Id varius nisl rutrum vitae"),
		array("_page_learn_09", "Sed eros dolor, aliquam vitae"),
		array("_page_learn_10", "Blandit sit amet, tincidunt non nisl"),
		array("_page_learn_11", "Quisque faucibus mollis tempus"),
		array("_page_learn_12", "Donec sapien enim, tempus sit"),
		array("_page_learn_13", "Amet auctor at, luctus id nisi")
	);
	
	// PDF (if any) - define PDFs separately here.
	$stdPdf = array(
		// First value is the name of the file. (DO NOT INCLUDE EXTENSION! such as .pdf)
		// Second value is the text displayed as link
		array("Gateway_1.5_Branding_Styleguide", "Test PDF"),
		array("name_of_pdf_file_2", "Vivamus sed neque elit"),
		array("name_of_pdf_file_3", "Quisque faucibus mollis tempus")
	);
	
	
	
	// ==================================================================================================================
	// ===================================== HIGHLIGHTED SET for sidebar ================================================
	// ==================================================================================================================
	// Pick from array above. --> IMPORTANT! --> Index starts at "0" !
	
	// SET A ------ appears on Home page in sidebar
	// Leave array blank if there aren't any links
	
	// This is the title that appears on the sidebar box
	$stdPagesA_title = "General Resources";
	
	// Selected items that will show in the sidebar box 
	$stdSetA = array($stdLinks[0], $stdLinks[1], $stdLinks[3], $stdLinks[8], $stdLinks[11]);
	
	// Selected items (PDF links) that will show in the sidebar box 
	$stdSetPdfA = array($stdPdf[0], $stdPdf[1]);
	
	// SET B ------ appears on State page in sidebar
	
	// This is the title that appears on the sidebar box
	$stdPagesB_title = "General Resources 2";
	
	// Selected items that will show in the sidebar box 
	$stdSetB = array($stdLinks[0], $stdLinks[2], $stdLinks[3], $stdLinks[6], $stdLinks[9]);
	
	// Selected items (PDF links) that will show in the sidebar box 
	$stdSetPdfB = array($stdPdf[0], $stdPdf[2]);
	// ==================================================================================================================
	// ===================================== END HIGHLIGHTED SET for sidebar ============================================
	// ==================================================================================================================
	



	// ============  You rarely need to touch this ============================================================ 
	// Should the display/file names change, you can change them here in a single place.
	// Main page template
	define("_PG_HOME", "page.php");
	
	// State page template
	define("_PG_STATE", "state.php");
	
	// Learn More page
	define("_PG_LEARN", "learn.php");
	
	// Client Page
	define("_PG_CLIENT", "page_cl.php");
	
	// Legal Page
	define("_PG_LEGAL", "legal.php");
	
	// Privacy Page
	define("_PG_PRIVACY", "privacy.php");
?>