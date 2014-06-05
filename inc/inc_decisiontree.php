<!-- Decision Tree -->
<div id="decisiontree">
	<h3>Start Here</h3>
	
	<div class="treeblock" id="treeQ1">
		<div class="question">Are you or your family members eligible for <a href="#">Medicare</a>?</div><!-- /.question -->
		
		<div class="response">
			<button class="dt-res-yes btn">Yes</button>
			<button class="dt-res-no btn">No</button>
		</div><!-- /.response -->
		
		<div class="yesresult">
			<p>
				Enroll in Medicare Parts A and B as soon as you’re eligible (generally as early as three months before you reach age 65). 
				If you don’t enroll when you’re first eligible, you can enroll during Medicare’s annual enrollment period (January 1–March 31).
				<br><br>Contact Medicare for information on Medicare Parts A and B, or contact Aon Hewitt Navigators to learn about more comprehensive health coverage.
			
				<div style="float:left; padding-right:100px;">
					<strong>Medicare</strong><br>
					<strong>+1.800.MEDICARE</strong><br>
					<strong>(+1.800.633.4227)</strong><br>
					<a href="http://www.medicare.gov">www.medicare.gov</a>
				</div>
				<div>
					<strong>Comprehensive Health Coverage</strong><br>
					Aon Hewitt Navigators<br>
					<strong>+1.800.350.1470</strong><br>
					<a href="http://www.AonHewittNavigators.com">www.aonhewittnavigators.com</a>
				</div>
				
			</p>
			
		</div><!-- /.yesresult -->
		
	</div><!-- /.treeblock -->
	
	
	<div class="treeblock" id="treeQ2">
		<div class="treearrow"></div>
		<div class="question">Are you or your family members eligible for <a href="#">Medicaid</a>?<br>Use the <a href="#" onclick="scrollTo('form'); $('.modelerToggle').trigger('click');">"Do I Qualify for Financial Help"</a> tool on this page to find out.</div><!-- /.question -->
		
		<div class="response">
			<button class="dt-res-yes btn">Yes</button>
			<button class="dt-res-no btn">No</button>
		</div><!-- /.response -->
		
		<div class="yesresult">
			<p>
				Contact your state Medicaid agency. Use the "View State Programs" drop-down list located on this page to find your state. Then, expand the Medicaid section to find links to learn more and apply for coverage.
			</p>
		</div><!-- /.yesresult -->
	</div><!-- /.treeblock -->
	
	
	<div class="treeblock" id="treeQ3">
		<div class="treearrow"></div>
		<div class="question">If you have children and they're under age 19, are they eligible for <a href="#">CHIP</a>?</div><!-- /.question -->
		
		<div class="response">
			<button class="dt-res-yes btn">Yes</button>
			<button class="dt-res-no btn">No</button>
		</div><!-- /.response -->
		
		<div class="yesresult">
			<p>
				Contact your state CHIP office.
				Use the "View State Programs" drop-down list located on this page to find your state. Then, expand the CHIP section to find links to learn more and apply for coverage.
			</p>
		</div><!-- /.yesresult -->
		
		<div class="noresult">
			<div class="treearrow-yel"></div>
			<p>
				You can buy health insurance for yourself and your family members from the <a href="#">marketplace</a>.
			</p>
			<p>
				Depending on your income and how big your family is, you may qualify for <a href="#">financial help</a>.
			</p>
			<p>
				To find out if you might qualify, use the <a href="#" onclick="scrollTo('form'); $('.modelerToggle').trigger('click');">"Do I Qualify for Financial Help"</a> tool on this page.
			</p>
		</div><!-- /.noresult -->
	</div><!-- /.treeblock -->
	
</div>
<!-- /Decision Tree -->