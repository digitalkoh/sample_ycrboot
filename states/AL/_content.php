<div class="row-fluid statehead">
	<div class="span3">		
		<img class="state-map" src="img/states_al.png" />
	</div>		
	<div class="span9">
    <h2>Alabama</h2>
		<?php include("states/_globalstate/_s-state_sum.php");?>
	</div> <!-- /.span4 -->
</div> <!-- /.row-fluid -->

<div class="accordion programs">
	<a href="#" class="expandcollapseAll btn btn-mini show"><i class='icon-plus-sign'></i> <span>Expand All</span></a>
	
	<!-- ************************************************************************************************************************ -->
	
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle"><i class="icon-plus"></i>Health Insurance Marketplace (&#8220;Exchange&#8221;)</a>
		</div><!-- /.accordion-heaing -->
		
		<div class="accordion-body" style="display:none;">
			<div class="accordion-inner">
				<?php include("states/_globalstate/_s-marketplace_sum.php");?>				
			</div><!-- /.accordion-inner -->
		</div><!-- /.accordion-body -->
	</div><!-- /.accordion-group -->
	
	<!-- ************************************************************************************************************************ -->
	
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle"><i class="icon-plus"></i>Medicaid</a>
		</div><!-- /.accordion-heaing -->
		
		<div class="accordion-body programs" style="display:none;">
			<div class="accordion-inner">
				<?php include("states/_globalstate/_s-medicaid_sum.php");?>
				<div class="row-fluid state-contact">
					<div class="span7">
						<a href="http://www.medicaid.alabama.gov" class="btn" target="_blank"><i class='icon-info-sign'></i> <span>Learn More</span></a>
						<a href="https://insurealabama.adph.state.al.us/WEL" class="btn" target="_blank"><i class='icon-check'></i> <span>Apply</span></a>
					</div><!-- /.span6 -->
						
					<div class="span5">
						<strong>Contact Information</strong>
						Alabama Medicaid Agency<br>
						P.O. Box 5624<br>
						Montgomery, AL 36103-5624<br>
						Phone<span> +1.334.242.5000</span>
					</div><!-- /.span6 -->
				</div><!-- /.row-fluid state-contact -->
				<br class="clearfix">
			</div><!-- /.accordion-inner -->
		</div><!-- /.accordion-body -->
	</div><!-- /.accordion-group -->
	
	<!-- ************************************************************************************************************************ -->
	
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle"><i class="icon-plus"></i>Children's Health Insurance Program (ALL Kids)</a>
		</div><!-- /.accordion-heaing -->
		
		<div class="accordion-body programs" style="display:none;">
			<div class="accordion-inner">
             	<?php include("states/_globalstate/_s-chip_sum.php");?>
				
				<div class="row-fluid state-contact">
					<div class="span7">
						<a href="http://www.adph.org/allkids/" class="btn" target="_blank"><i class='icon-info-sign'></i> <span>Learn More</span></a>
						<a href="http://www.adph.org/allkids/index.asp?id=575" class="btn" target="_blank"><i class='icon-check'></i> <span>Apply</span></a>
					</div><!-- /.span6 -->
						
					<div class="span5">
						<strong>Contact Information</strong>
						ALL Kids<br>
						P.O. Box 304839<br/>
						Montgomery, AL 36130-4839<br/>
						Phone: <span>+1.888.373.KIDS (5437)</span><br/>
                        Fax:  <span>+1.334.206.3783</span><br/>
						Email: <span>allkids@adph.state.al.us</span>

					</div><!-- /.span -->
				</div><!-- /.row-fluid state-contact -->
				
			</div><!-- /.accordion-inner -->
		</div><!-- /.accordion-body -->
	</div><!-- /.accordion-group -->
	
	<!-- ************************************************************************************************************************ -->
    
    	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle"><i class="icon-plus"></i>Medicare</a>
		</div><!-- /.accordion-heaing -->
		
		<div class="accordion-body programs" style="display:none;">
			<div class="accordion-inner">
            	<?php include("states/_globalstate/_s-medicare_sum.php");?>				
				<div class="row-fluid state-contact">
					<?php include("states/_globalstate/_s-medicare_contact.php");?>		
				</div><!-- /.row-fluid state-contact -->
				
			</div><!-- /.accordion-inner -->
		</div><!-- /.accordion-body -->
	</div><!-- /.accordion-group -->
	
	<!-- ************************************************************************************************************************ -->
	
</div><!-- /.accordion -->