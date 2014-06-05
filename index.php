<?php
	//header('Location: http://www.example.com/');
?>
<?php 
	require_once '_config.php'; 
	require_once 'function.php';  
	include("inc/inc_head.php");
?>

		<div class="masthead">
			<h3 class="muted">Premier Exchange Program</h3>
		</div> <!-- /.masthead -->
		
		
		<div class="row-fluid">
			
			<div class="span12">
				<p>
					<div class="btn-group">
						<button class="btn btn-large">Choose Client...</button>
						<button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="page.php?cid=00001">Premier (Base)</a></li>
							<li><a href="page.php?cid=00002">Best Buy</a></li>
							<li><a href="page.php?cid=homedepot">Home Depot</a></li>
						</ul>
					</div>
				</p>
			</div> <!-- /.span8 -->
			
		</div> <!-- /.row-fluid -->
		
	</div> <!-- /.container -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
