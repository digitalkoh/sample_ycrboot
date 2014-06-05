<?php
	// STATE page
	if (isset($_STATE) and $_STATE != ""){

		echo "<h3>".$stdPagesB_title."</h3>";
		echo "<ul>";
		
			// Generate highlighted link set B
			$dispStdLinks = "";
			$pages = count($stdSetB);
			for ($i = 0; $i < $pages; $i++) {
				$dispStdLinks .= "<li><a href=\"learn.php?cid=".$_CLIENT."&spage=".$stdSetB[$i][0]."\">".$stdSetB[$i][1]."</a></li> \n";
			}
			// Look for PDFs
			$pages = count($clientPdfB);
			for ($i = 0; $i < $pages; $i++) {
				$dispStdLinks .= "<li><i class=\"icon-file\"></i><a href=\"content/media/".$stdSetPdfB[$i][0].".pdf?cid=".$_CLIENT."\" target=\"_blank\">".$stdSetPdfB[$i][1]."</a></li> \n";
			}
			echo $dispStdLinks;
		
		echo "</ul>";

	// NON-STATE page
	} else {

		echo "<h3>".$stdPagesA_title."</h3>";
		echo "<ul>";
		
			// Generate highlighted link set A
			$dispStdLinks = "";
			$pages = count($stdSetA);
			for ($i = 0; $i < $pages; $i++) {
				$dispStdLinks .= "<li><a href=\"learn.php?cid=".$_CLIENT."&spage=".$stdSetA[$i][0]."\">".$stdSetA[$i][1]."</a></li> \n";
			}
			// Look for PDFs
			$pages = count($stdSetPdfA);
			for ($i = 0; $i < $pages; $i++) {
				$dispStdLinks .= "<li><i class=\"icon-file\"></i><a href=\"content/media/".$stdSetPdfA[$i][0].".pdf?cid=".$_CLIENT."\" target=\"_blank\">".$stdSetPdfA[$i][1]."</a></li> \n";
			}
			echo $dispStdLinks;
		
		echo "</ul>";

	}
?>