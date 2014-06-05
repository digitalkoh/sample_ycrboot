<h2>Learn More Home</h2>

<div id="lm-dir">
	<ul>	
		<?php
			$dispStandardLinks = "";
			$spages = count($stdLinks);
			for ($i = 0; $i < $spages; $i++) {
				$dispStandardLinks .= "<li><a href=\"learn.php?cid=".$_CLIENT."&spage=".$stdLinks[$i][0]."\">".$stdLinks[$i][1]."</a></li> \n";
			}
			// Look for PDFs
			$spages = count($stdPdf);
			for ($i = 0; $i < $spages; $i++) {
				$dispStandardLinks .= "<li><i class=\"icon-file\"></i><a class=\"pdf\" href=\"content/media/".$stdPdf[$i][0].".pdf?cid=".$_CLIENT."\">".$stdPdf[$i][1]."</a></li> \n";
			}
			echo $dispStandardLinks;
		?>
	</ul>
</div>