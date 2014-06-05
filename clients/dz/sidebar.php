<?php
	// STATE page
	if (isset($_STATE) and $_STATE != ""){

		echo "<h3>".$clientPagesB_title."</h3>";
		echo "<ul>";
			
			// Generate highlighted external link set B
			$dispLinks = "";
			$pages = count($clientSetExternalB);
			for ($i = 0; $i < $pages; $i++) {
				$dispLinks .= "<li><a href=".$clientSetExternalB[$i][0]." target='_blank'>".$clientSetExternalB[$i][1]."</a></li> \n";
			}
			
			// Generate highlighted link set B
			$pages = count($clientSetB);
			for ($i = 0; $i < $pages; $i++) {
				$dispLinks .= "<li><a href=\"page_cl.php?cid=".$_CLIENT."&cpage=".$clientSetB[$i][0]."\">".$clientSetB[$i][1]."</a></li> \n";
			}
			// Look for PDFs
			$pages = count($clientSetPdfB);
			for ($i = 0; $i < $pages; $i++) {
				$dispLinks .= "<li><i class=\"icon-file\"></i><a href=\"clients/".$_CLIENT."/media/".$clientSetPdfB[$i][0].".pdf\" target=\"_blank\">".$clientSetPdfB[$i][1]."</a></li> \n";
			}
			echo $dispLinks;
		
		echo "</ul>";

	// NON-STATE page
	} else {

		echo "<h3>".$clientPagesA_title."</h3>";
		echo "<ul>";
			
			// Generate highlighted link set A
			$dispLinks = "";
			$pages = count($clientSetExternalA);
			for ($i = 0; $i < $pages; $i++) {
				$dispLinks .= "<li><a href=".$clientSetExternalA[$i][0]." target='_blank'>".$clientSetExternalA[$i][1]."</a></li> \n";
			}
			
			// Generate highlighted link set A
			$pages = count($clientSetA);
			for ($i = 0; $i < $pages; $i++) {
				$dispLinks .= "<li><a href=\"page_cl.php?cid=".$_CLIENT."&cpage=".$clientSetA[$i][0]."\">".$clientSetA[$i][1]."</a></li> \n";
			}
			// Look for PDFs
			$pages = count($clientSetPdfA);
			for ($i = 0; $i < $pages; $i++) {
				$dispLinks .= "<li><i class=\"icon-file\"></i><a href=\"clients/".$_CLIENT."/media/".$clientSetPdfA[$i][0].".pdf\" target=\"_blank\">".$clientSetPdfA[$i][1]."</a></li> \n";
			}
			echo $dispLinks;
		
		echo "</ul>";

	}
?>



