<?php 
	require_once '_config.php'; 
	require_once 'function.php';  
	include("inc/inc_head.php");
?>

	<!-- ##################################### MASTHEAD ################################################ -->
	<div class="masthead">
		<h3 class="muted">
			<?php include("clients/".$_CLIENT."/header.php"); ?>
		</h3>
		
		<?php include("inc/inc_navbar.php"); ?>
	</div> <!-- /.masthead -->
	
	<!-- ##################################### CONTENT ################################################ -->
	<div class="row-fluid">
		
		<div class="span8">
			<div class="pg-option-bar">
				<?php include("inc/inc_optionsbar.php"); ?>
			</div>
			<div class="clearfix"></div>
			
			<div class="content" id="pg-client">
				<?php include("clients/".$_CLIENT."/".$_CPAGE.".php"); ?>
			</div> <!-- /.content -->
			
		</div> <!-- /.span8 -->
		
		<div class="span4">
			
			<div class="module borderless">
				<?php include("inc/module_choose_state.php"); ?>
			</div>
			
			<div class="module" id="modelerCollapsible">
				<?php include("inc/module_modeler.php"); ?>
			</div>
			
			<div class="module borderless">
				<?php include("inc/module_sidebar.php"); ?>
			</div>
			
			<div class="module borderless">
				<?php include("clients/".$_CLIENT."/sidebar.php"); ?>
			</div>
		</div> <!-- /.span4 -->
	
	</div> <!-- /.row-fluid -->
	
	<hr>
			
<?php include("inc/inc_footer.php"); ?>
