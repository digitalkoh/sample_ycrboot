			<div class="footer">
				<div class="row-fluid">
		
					<div class="span6">
						<p>Delivered by Blah Blah Blah</p>
					</div> <!-- /.span6 -->
						
					<div class="span6 footlinks">
						<a href="<?php echo _PG_LEGAL.'?cid='.$_CLIENT ?>">Legal Information</a> <a href="<?php echo _PG_PRIVACY.'?cid='.$_CLIENT ?>">Privacy Statement</a>
						<div id="copyright">&#169; 2005-<?php echo date_default_timezone_set('y'); ?> Blah Blah Blah</div>
					</div> <!-- /.span6 -->
					
					<div class="row-fluid">
                        <div class="span12">
                        	<p><strong>Disclaimer</strong></p>
							<em>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</em>
							<?php

								// IMPORTANT! Assign section as function parameter
								// 1 = Market
								// 2 = Navigator (Medicaid)
								// 3 = Disclaimer
								// 4 = Terms
									
								// echo variableTextDisplay(3);
							?>
							<em>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</em>
                        </div>
                    </div>
				
				</div> <!-- /.row-fluid -->
				
				
			</div> <!-- /.footer -->
	
	</div> <!-- /.container -->
	
	<!-- including https protocol for local testing -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
	<!-- <script src="js/bootstrap-typeahead.js"></script> -->
	<script src="js/common.js"></script>
	
	
</body>
</html>