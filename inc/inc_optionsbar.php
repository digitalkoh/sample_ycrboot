
<button class="btn btn-mini printpg" type="button" onclick="exColAll('print'); print(); return false;"><i class="icon-print"></i> Print This Page</button>

<?php 
	if (isset($_SPAGE) && $_SPAGE != ''){
		if($_SPAGE != '_learn_faq' && $_SPAGE != '_learn_glo'){	
?>
				
<div class="btn-group viewtopic">
	<a class="btn btn-success btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
	View All Topics
	<span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		<?php
			$dispBt = "<li><a href=\"learn.php?cid=".$_CLIENT."\"><strong>View All</strong></a></li>\n";
			for ($i = 0; $i < count($stdLinks); $i++) {
				$dispBt .= "<li><a href=\"learn.php?cid=".$_CLIENT."&spage=".$stdLinks[$i][0]."\">".$stdLinks[$i][1]."</a></li> \n";
			}
			
			// List PDF 
			for ($i = 0; $i < count($stdPdf); $i++) {
				$dispBt .= "<li><a href=\"content/media/".$stdSetPdfB[$i][0].".pdf?cid=".$_CLIENT."\">".$stdSetPdfB[$i][1]."</a></li> \n";
			}
			echo $dispBt;
		?>
	</ul>
</div>	

<?php 
		}
	} 
?>

