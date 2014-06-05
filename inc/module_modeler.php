<?php
	if(isset($pageId) && $pageId =="page"){
		$show = "in";
		
		$openHead = '<div class="modelerToggle;">';
		$closeHead ='</div>';
	}else{
		$openHead = '<a href="#" class="modelerToggle collapsed" onclick="return false;" data-toggle="collapse" data-target="#modeler">';
		$closeHead = '<i class="icon-ov-aup"></i></a>';
	}
	
	
?>

	<script type="text/javascript" src="js/messages.js"></script>
	
	<?php echo $openHead ?>
		<h3>Do I Qualify for Financial Help?</h3>
		<p class="modelerIntro-default"><script>document.writeln(arrMessages['TEXT_INTRO']);</script></p>		
		<p class="modelerIntro-summary" style="display:none;">
			Based on your answers, your income is <strong id="incomePrcntg"></strong>&nbsp;of the federal poverty level.
			Here's how you may qualify for financial help in <strong id="stateDisp"></strong>.
		</p>
	<?php echo $closeHead ?>
	
	<div id="userEntries" style="display:none;">
		<div class="userEntItemTrigger"><a href="#" onclick="userEntItemToggle(this); return false;"><!-- dynamic --></a></div>
		<div class="userEntItem">Annual Family Income: <span></span></div>
		<div class="userEntItem">State of Residence: <span></span></div>
		<div class="userEntItem">Spouse: <span></span></div>
		<div class="userEntItem" >Number of Children: <span></span></div>
		<div class="userEntItem">Coverage Available: <span></span></div>
	</div>
	
	<div class="clearfix"></div>
		
			
	<script type="text/javascript" src="js/modeler.js"></script>
	
	
	<?php
		// Use client specific questions. If not, use default
		$mod_q1 = _MOD_Q1_DEFAULT;
		$mod_q2 = _MOD_Q2_DEFAULT;
		$mod_q3 = _MOD_Q3_DEFAULT;
		$mod_q4 = _MOD_Q4_DEFAULT;
		$mod_q5 = _MOD_Q5_DEFAULT;
		
		if(_MOD_Q1 != ""){$mod_q1 = _MOD_Q1;}
		if(_MOD_Q2 != ""){$mod_q2 = _MOD_Q2;}
		if(_MOD_Q3 != ""){$mod_q3 = _MOD_Q3;}
		if(_MOD_Q4 != ""){$mod_q4 = _MOD_Q4;}
		if(_MOD_Q5 != ""){$mod_q5 = _MOD_Q5;}
	
	?>
	
	<form id="modeler" class="form-horizontal collapse <?php echo $show; ?>" method="get">
		<fieldset>

			<div id="input-errors" class="error" style = "display:none;"></div>
			<input type="hidden" name="cid" value="<?php echo $_CLIENT; ?>" />
			<ul>
				<li>
					<label><?php echo $mod_q1; ?> <i class="icon-question-sign" href="#mod-q1Tip" role="button" data-toggle="modal"></i></label>
					
					<div class="input-prepend">
						<span class="add-on">$</span>
						<input type="text" name="mod-income" id="mod-income" value="0" onclick="if(this.value === '0' || this.value === 0){this.value=''};" />
					</div>
				</li>
				<li>
					<label><?php echo $mod_q2; ?></label>
					<select id="mod-select-state" name="mod-state">
						<script>
							
							/* Show Choose... text on home page only */
							<?php
								if (!isset($_MODSTATE) || $_MODSTATE ==""){
							?>
								document.write("<option value=''>Choose State...</option>");
							<?php
								}
							?>
						
							for(i=0; i<= AHX.states.length; i++){
								if(AHX.states[i][0] === "<?php echo $_MODSTATE; ?>"){
									// Display selected State in the drop down
									document.write("<option selected='selected' value="+AHX.states[i][0]+">"+AHX.states[i][1]+"</option>");
								} else {
									document.write("<option value="+AHX.states[i][0]+">"+AHX.states[i][1]+"</option>");
								}
							};
						</script>
					</select>
				</li>
				<li>
					<label><?php echo $mod_q3; ?> <i class="icon-question-sign" href="#mod-q3Tip" role="button" data-toggle="modal"></i></label>
					<select id="mod-spouse" name="spouse">
						<!-- <option value="">Select...</option> -->
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
				</li>
				<li>
					<label><?php echo $mod_q4; ?> <i class="icon-question-sign" href="#mod-q4Tip" role="button" data-toggle="modal"></i></label>
					<select id="mod-child" name="child">
						<option value=0>0</option>
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
						<option value=11>11</option>
						<option value=12>12</option>
						<option value=13>13</option>
						<option value=14>14</option>
						<option value=15>15</option>
						<option value=16>16</option>
						<option value=17>17</option>
						<option value=18>18</option>
						<option value=19>19</option>
						<option value=20>20</option>
						<option value=21>21</option>
						<option value=22>22</option>
						<option value=23>23</option>
						<option value=24>24</option>
					</select>
				</li>
				<li>
					<label><?php echo $mod_q5; ?> <i class="icon-question-sign" href="#mod-q5Tip" role="button" data-toggle="modal"></i></label>
					<select name="medicalCoverage" id="mdclCvrg">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
				</li>
				<li>
					<a id="" class="btn btn-primary" onclick="calcResult(); scrollTo('error');">Results</a>
				</li>
			</ul>
			
			<input type="hidden" name="mcid" id="mcid" value="<?php echo $_CLIENT; ?>" />
			
		</fieldset>
	</form>

	<div id="modelerResult" style="display:none;">
	
		<div class="resultWrapper">
			<div class="resultBlock block-1">
				<div class="r1">Medicaid</div>
				<div class="r3" id="medicaidResult"></div>
			</div>
			
			<div class="resultBlock block-2">
				<div class="r1">Health Insurance Marketplace</div>
				<div class="r3" id="premmSubsidy"></div>
			</div>
			
			<div class="resultBlock block-3" style="display:none;">
				<div class="r1"></div>
				<div class="r3" id="costSubsidy"></div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		
		<div class="clearfix"></div>
		
		
		<a class="btn btn-success" id="gotoStateBt" href="#">Go to State Program</a>
		<a class="btn btn-default" id="clearForm" href="#" onclick="$('#modeler')[0].reset(); returnToForm(); return false;">Check Again</a>
		
		
		
		<p class="terms">Results are not guaranteed. See <a href="<?php echo _PG_LEGAL.'?cid='.$_CLIENT ?>">Terms of Use</a>.
		
		
	</div><!-- modelerResult -->
	
	<!-- ******************************************************************************************** -->
	<!-- *************************************** MODAL WINDOW *************************************** -->
	<!-- ******************************************************************************************** -->
	
	<?php include('content/_text_modeler_tip.php'); ?>
	
	<!-- ********************************************************************************************* -->
	<!-- *************************************** /MODAL WINDOW *************************************** -->
	<!-- ********************************************************************************************* -->

	<script>
		function dispUserInput(){
			$('#userEntries div:nth-child(2) span').html('$' + commaSeparateNumber($('#mod-income').val())); 	// Income
			$('#userEntries div:nth-child(3) span').html($('#mod-select-state option:selected').text()); 		// State
			$('#userEntries div:nth-child(4) span').html($('#mod-spouse option:selected').text()); 				// Spouse
			$('#userEntries div:nth-child(5) span').html($('#mod-child').val()); 								// Children
			$('#userEntries div:nth-child(6) span').html($('#mdclCvrg option:selected').text()); 				// Coverage
			$('#userEntries .userEntItem').hide();
			
			// Show input data
			$('#userEntries').show();
			
			//$('#modelerResult').show();
			
			// Hide inputs on successful submit
			$('#modeler').hide();
			// Analytics script goes here
			// _gaq.push(['_trackEvent', 'Form', 'Modeler','Success'+this.location,, false;]);
			
			// Switch intro text on success
			$('.modelerIntro-default').html($('.modelerIntro-summary').html());
			
			// Populate trigger text
			$('.userEntItemTrigger a').html(arrMessages['RESULT_ANSWER_SHOW']);
	
		}
		
		
		
		
		function scrollTo(dest){
			function animate(d){
				$('html, body').animate({
					scrollTop: $(d).offset().top
				}, 500);
			}
			
			if(dest === "error"){
				if($("#input-errors").html() != ""){
					animate("#input-errors");
				}
			}
			
			if(dest === "form"){
				animate(".modelerToggle");
			}
		}
		
		function scrollToFromTree(dest){
			function animate(d){
				$('html, body').animate({
					scrollTop: $(d).offset().top
				}, 500);
			}
			
			if(dest === "form"){
				animate(".modelerToggle");
			}
			
			$('.modelerToggle').trigger('click');
		}
		
		
		
		function userEntItemToggle(e){
			if($(e).html() === arrMessages['RESULT_ANSWER_SHOW']){
				$('#userEntries .userEntItem').show();
				$(e).html(arrMessages['RESULT_ANSWER_HIDE']);
				$(e).parent().parent().addClass('active');
			}else{
				$('#userEntries .userEntItem').hide();
				$(e).html(arrMessages['RESULT_ANSWER_SHOW']);
				$(e).parent().parent().removeClass('active');
			}
		}
		
		
		function returnToForm(){
			// Clear error style
			$('#mod-select-state').parent().removeClass('error');
			$('#mod-income').parent().parent().removeClass('error');
			
			// Switch intro text on return
			$('.modelerIntro-default').html(arrMessages['TEXT_INTRO']);
			
			// Hide input data
			$('#userEntries').hide();
			
			// Show inputs
			$('#modeler').show();
			
			// Hide Results
			$('#modelerResult').hide();
			
			// Reset entry display
			$('#userEntries div a').html(arrMessages['RESULT_ANSWER_HIDE']);
			userEntItemToggle($('#userEntries div a'));
			
			// scroll to top of form
			scrollTo('form');
		}
	</script>



