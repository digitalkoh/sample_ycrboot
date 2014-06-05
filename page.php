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
	
	<!-- ##################################### PROMO BANNER ################################################ -->
	<div class="jumbotron">
		<?php
			echo "<h1>".$welcomeTextLarge."</h1>";
			echo "<p class=\"lead\">".$welcomeText."</p>";
			#include("clients/".$_CLIENT."/welcome.php"); 
		?>

	
	</div> <!-- /.jumbotron -->
	 
	 
	<!-- ####################################### CONTENT ################################################### -->
	<div class="row-fluid">
		
		<div class="span8">
			<?php include("inc/module_choose_state.php"); ?>
			
			<div class="module bgcolor-a">
				<?php include("inc/module_modeler.php"); ?>
			</div>
			
		</div> <!-- /.span8 -->
		
		<div class="span4">
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
