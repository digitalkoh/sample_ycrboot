// Check IE 7
var isIE7;
if ($('html').hasClass('ie7')){
	isIE7 = 1;
}else{
	isIE7 = 0;
}

$('.accordion-toggle').click(function(){
	var el = $(this).parent().next();
	if($(el).is(':visible')){
		if(isIE7 === 1){
			$(el).hide();
		}else{
			$(el).slideUp();
		}
		$('i', this).addClass('icon-plus').removeClass('icon-minus');
	}else{
		if(isIE7 === 1){
			$(el).show();
		}else{
			$(el).slideDown();
		}
		$('i', this).addClass('icon-minus').removeClass('icon-plus');
	}
});

$('.expandcollapseAll').click(function(){
	exColAll(this);
});

function exColAll(bt){
	// If print, expand all regardless of current status
	if(bt === 'print'){
		bt = $('.expandcollapseAll');
		
		$('.accordion-toggle').each(function(i){
			$(this).parent().next().show();
			$('i', this).addClass('icon-minus').removeClass('icon-plus');
		});
		$(bt).removeClass('show').find('i').addClass('icon-minus-sign').removeClass('icon-plus-sign').end().find('span').html('Collapse All');
	}else{
		
		if($(bt).hasClass('show')){
			$('.accordion-toggle').each(function(i){
				$(this).parent().next().show();
				$('i', this).addClass('icon-minus').removeClass('icon-plus');
			});
			$(bt).removeClass('show').find('i').addClass('icon-minus-sign').removeClass('icon-plus-sign').end().find('span').html('Collapse All');
		}else{
			$('.accordion-toggle').each(function(i){
				$(this).parent().next().hide();
				$('i', this).addClass('icon-plus').removeClass('icon-minus');
			});
			$(bt).addClass('show').find('i').addClass('icon-plus-sign').removeClass('icon-minus-sign').end().find('span').html('Expand All');
		}
		return false;
	}
}

// Disable State Go button until State is selected
$('#select-state').change(function(){
	if($(this).val() != ''){
		$('#choose-state-bt').removeAttr("disabled");
	}else{
		$('#choose-state-bt').attr("disabled", "disabled");
	}
});

// Add comma
function commaSeparateNumber(val){
	while (/(\d+)(\d{3})/.test(val.toString())){
		val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
	}
	return val;
}

// Format State Info tags for IE workaround
$('.state-contact div:last-child strong').css('display','block');
$('.state-contact div:last-child span').css('font-weight','bold');



// Decision Tree **************************
dectreeHideAll();

function dectreeHideAll(){
	$('#treeQ2, #treeQ3, .yesresult, .noresult').hide();
}

$('.response .dt-res-yes').click(function(){
	$(this).addClass('btn-warning');
	$(this).next().removeClass('btn-warning');
	
	// hide future responses if backtracked
	$(this).parent().parent().next().hide();
	$(this).parent().parent().next().next().hide();
	$('.yesresult, .noresult').hide(); // catch all response
	
	//switch button colors
	$(this).parent().parent().next().find('button').removeClass('btn-warning');
	$(this).parent().parent().next().next().find('button').removeClass('btn-warning');
	
	$(this).parent().next().slideDown();
});

$('.response .dt-res-no').click(function(){
	$(this).addClass('btn-warning');
	$(this).prev().removeClass('btn-warning');
	
	$(this).parent().next().hide();
	if($(this).parent().parent().next().length){
		$(this).parent().parent().next().slideDown();
	}else{
		$(this).parent().next().next().slideDown();
	}	
});
// End Decision Tree **************************


// Language selection

	/* need to add function that populates button label if language automatically chose by system locale */
	/* currently, the label defaults to English */

$('#selectLang span:first').text("English");  // populate label. See note above.

$('#selectLang ul li a').click(function(){
	$('#selectLang span:first').text($(this).text()); // populate label with chosen language
});


// Navigator variability

// Hide Navigator phone and contact onload
$('#navigatorPhone, #navigatorBt').hide();

// Show if Navigator is on
if($('#navigatorOn').length){
	$('#navigatorPhone, #navigatorBt').show();
}
