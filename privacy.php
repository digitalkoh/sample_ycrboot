<?php 
	require_once '_config.php'; 
	require_once 'function.php';
	include("inc/inc_head.php");
	
	// Used to expand modeler on this page onload
	$pageId = "page";
?>

	<!-- ##################################### MASTHEAD #################################################### -->
	<div class="masthead">
		<h3 class="muted">
			<?php include("clients/".$_CLIENT."/header.php"); ?>
		</h3>
		
		<?php include("inc/inc_navbar.php"); ?>
	</div> <!-- /.masthead -->
	
	<!-- ####################################### CONTENT ################################################### -->
	<div class="row-fluid">
		
		<div class="span8">

			<div class="module borderless" id="pg-privacy">
				<?php include("content/_text_privacy.html"); ?>
			</div>
			
		</div> <!-- /.span8 -->
		
		<div class="span4">
			&nbsp; <!-- blank -->
		</div> <!-- /.span4 -->
	
	</div> <!-- /.row-fluid -->
	
	<hr>
	
		
<?php include("inc/inc_footer.php"); ?>
