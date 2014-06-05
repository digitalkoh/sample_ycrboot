			<div class="footer">
				<div class="row-fluid">
		
					<div class="span6">
						<p>Delivered by Aon Hewitt</p>
					</div> <!-- /.span6 -->
						
					<div class="span6 footlinks">
						<a href="<?php echo _PG_LEGAL.'?cid='.$_CLIENT ?>">Legal Information</a> <a href="<?php echo _PG_PRIVACY.'?cid='.$_CLIENT ?>">Privacy Statement</a>
						<div id="copyright">&#169; 2005-<?php echo date_default_timezone_set('y'); ?> Aon plc</div>
					</div> <!-- /.span6 -->
					
					<div class="row-fluid">
                        <div class="span12">
                        	<p><strong>Disclaimer</strong></p>
							<em>Aon Hewitt does not give any warranty or other assurance as to the operation, quality, or functionality of the site. Access to the site may be interrupted, restricted, or delayed for any reason.</em>
							<?php

								// IMPORTANT! Assign section as function parameter
								// 1 = Market
								// 2 = Navigator (Medicaid)
								// 3 = Disclaimer
								// 4 = Terms
									
								// echo variableTextDisplay(3);
							?>
							<em>Aon Hewitt also does not give any warranty or other assurance as to the content of the material appearing on the site, its accuracy, completeness, timelessness, or fitness for any particular purpose.</em>
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