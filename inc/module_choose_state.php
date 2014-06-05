<h3>View State Programs</h3>
<p>View health care programs in your state.</p>
<form id="choose-state-form" class="form-horizontal" action="state.php" method="get">
<fieldset>

<select id="select-state" name="state">
	<script>
		
		/* Show Choose... text on home page only */
		<?php
			if (!isset($_STATE) || $_STATE ==""){
		?>
			document.write("<option value=''>Choose State</option>");
		<?php
			}
		?>
	
		for(i=0; i<= AHX.states.length; i++){
			if(AHX.states[i][0] === "<?php echo $_STATE; ?>"){
				// Display selected State in the drop down
				document.write("<option selected='selected' value="+AHX.states[i][0]+">"+AHX.states[i][1]+"</option>");
			} else {
				document.write("<option value="+AHX.states[i][0]+">"+AHX.states[i][1]+"</option>");
			}
		};
	</script>
</select>
<input type="hidden" name="cid" value="<?php echo $_CLIENT; ?>" />

<button type="submit" onclick="_gaq.push(['_trackEvent', 'Form', 'States', 'Go-'+this.location,,false]);"  id="choose-state-bt" class="btn btn-primary" disabled>Go</button>

</fieldset>
</form>