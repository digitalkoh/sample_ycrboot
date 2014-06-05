/* Modeler Calculator JS */

		var arrFPLLower48 = {'1' : '$11,490', '2' : '$15,510', '3' : '$19,530', '4' : '$23,550', '5' : '$27,570', '6' : '$31,590', '7' : '$35,610', '8' : '$39,630', '9' : '$43,650', '10' : '$47,670', '11' : '$51,690', '12' : '$55,710', '13' : '$59,730', '14' : '$63,750', '15' : '$67,770' , '16' : '$71,790' , '17' : '$75,810' , '18' : '$79,830' , '19' : '$83,850' , '20' : '$87,870' ,  '21' : '$91,890' ,  '22' : '$95,910' ,  '23' : '$99,930' ,  '24' : '$103,950' , '25' : '$107,970'};
		var arrFPLAlaska  = {'1' : '$14,350', '2' : '$19,380', '3' : '$24,410', '4' : '$29,440', '5' : '$34,470', '6' : '$39,500', '7' : '$44,530', '8' : '$49,560', '9' : '$54,590', '10' : '$59,620', '11' : '$64,650', '12' : '$69,680', '13' : '$74,710', '14' : '$79,740', '15' : '$84,770' , '16' : '$89,800' , '17' : '$94,830' , '18' : '$99,860' , '19' : '$104,890', '20' : '$109,920' , '21' : '$114,950' , '22' : '$119,980' , '23' : '$125,010' , '24' : '$130,040' , '25' : '$135,070'};
		var arrFPLHawaii  = {'1' : '$13,230', '2' : '$17,850', '3' : '$22,470', '4' : '$27,090', '5' : '$31,710', '6' : '$36,330', '7' : '$40,950', '8' : '$45,570', '9' : '$50,190', '10' : '$54,810', '11' : '$59,430', '12' : '$64,050', '13' : '$68,670', '14' : '$73,290', '15' : '$77,910' , '16' : '$82,530' , '17' : '$87,150' , '18' : '$91,770' , '19' : '$96,390' , '20' : '$101,010' , '21' : '$105,630' , '22' : '$110,250' , '23' : '$114,870' , '24' : '$119,490' , '25' : '$124,110'};
		
		var arrState   = {'AL' : 'No', 'AK' : 'No', 'AZ' : 'Yes', 'AR' : 'Yes', 'CA' : 'Yes', 'CO' : 'Yes', 'CT' : 'Yes', 'DE' : 'Yes', 'DC' : 'Yes', 'FL' : 'No', 'GA' : 'No', 'HI' : 'Yes', 'ID' : 'No', 'IL' : 'Yes', 'IN' : 'No', 'IA' : 'No', 'KS' : 'No', 'KY' : 'Yes', 'LA' : 'No', 'ME' : 'No', 'MD' : 'Yes', 'MA' : 'Yes', 'MI' : 'Yes', 'MN' : 'Yes', 'MS' : 'No', 'MO' : 'No', 'MT' : 'No', 'NE' : 'No', 'NV' : 'Yes', 'NH' : 'No', 'NJ' : 'Yes', 'NM' : 'Yes', 'NY' : 'Yes', 'NC' : 'No', 'ND' : 'Yes', 'OH' : 'Yes', 'OK' : 'No', 'OR' : 'Yes', 'PA' : 'No', 'PR' : 'No', 'RI' : 'Yes', 'SC' : 'No', 'SD' : 'No', 'TN' : 'No', 'TX' : 'No', 'UT' : 'No', 'VT' : 'Yes', 'VA' : 'No', 'WA' : 'Yes', 'WV' : 'Yes', 'WI' : 'No', 'WY' : 'No'};
		var answerLabel = "<p class='answerLabel'>" + arrMessages['ANS_LABEL_1'] + "</p>";
		var answerLabel2 = "<p class='answerLabel'>" + arrMessages['ANS_LABEL_2'] +"</p>";

		function calcResult()
		{
			var income = document.getElementById('mod-income').value;
			var state = document.getElementById('mod-select-state').value;
			var spouse = document.getElementById('mod-spouse').value;
			var children = document.getElementById('mod-child').value;
			var coverageOnSpouseEmplyr = document.getElementById('mdclCvrg').value;
			
			
			//Validate fields data.
			if(!validate(income, state, spouse, children, coverageOnSpouseEmplyr))
				return ;
			
			//Calcualtation of "State to expand Medicaid?"
			var expandMedicaid = stateToExpandMedicaid(state);
			
			//Calculation of "2013 Federal Poverty Limit"
			var fpl = getFPL(state, spouse, children);
			
			//Calculation of "Income as % of FPL"
			var percentageFPL = getFamilyIncome(income) / parseInt(fpl.toString().replace("$","").replace(/,/g, ''));
			percentageFPL = Math.round(percentageFPL*10000)/10000;
			
			//Calculation of "Medicaid"
			var medicaid = getMedicaid(percentageFPL, expandMedicaid);
			
			//Calculation of "Exchange Premium Subsidy"
			var exchngPrmSubsidy = getExchangePremiumSubsidy(coverageOnSpouseEmplyr, medicaid, percentageFPL);
			
			//Calculation of "Exchange Premium Subsidy" additional text
			if(exchngPrmSubsidy == 0)
				exchngPrmSubsidy = arrMessages['TEXT_NO'] + getExchangePremiumSubsidyAddText(coverageOnSpouseEmplyr, medicaid, percentageFPL, income, exchngPrmSubsidy);
			else
				exchngPrmSubsidy = arrMessages['TEXT_YES'] + getExchangePremiumSubsidyAddText(coverageOnSpouseEmplyr, medicaid, percentageFPL, income, exchngPrmSubsidy);
				
			//Calculation of "Exchange Cost-Sharing Subsidy"
			var exchngCostSubsidy = getExchangeCostSharingSubsidy(coverageOnSpouseEmplyr, medicaid, percentageFPL);
			
			//Modeler Results		
			showModelerResult(percentageFPL, medicaid, exchngPrmSubsidy, exchngCostSubsidy);
				
		}
		
		function stateToExpandMedicaid(state){
			return arrState[state];
		}
		
		function getFPL(state, spouse, children){
			var fpl = 0;
			var familySize = 1;
			
			if(children == 'excess')
				familySize = children;
			else
			{
				children = parseInt(children);
				if(spouse == 'yes')
					familySize = familySize + children + 1;
				else 
					familySize = familySize + children;
			}
			
			if(state == 'AK'){
				fpl = arrFPLAlaska[familySize];
			}
			else if(state == 'HI'){
				fpl = arrFPLHawaii[familySize];
			}
			else{
				fpl = arrFPLLower48[familySize];
			}
			return fpl;
		}
		
		function getFamilyIncome(fmlyIncome)
		{
			var familyIncome = 0;
			fmlyIncome = fmlyIncome.toString().replace("$","").replace(/,/g, '');	
			if(fmlyIncome != '')
				familyIncome = parseInt(fmlyIncome);
			return familyIncome;
		}
		
		function getMedicaid(percentageFPL, expandMedicaid){
			var medicaid = 0;
			if(percentageFPL<1.38 && expandMedicaid == 'Yes')
				medicaid = 1;
			else if(percentageFPL >= 1.38 && percentageFPL < 2.15 && expandMedicaid == 'Yes')
					medicaid = "<p>" + arrMessages['MEDICAID_1.38_2.15_YES'] + "</p>";
				 else if(percentageFPL >= 2.15 && expandMedicaid == 'Yes')
					 	medicaid = 0;
					  else if(percentageFPL < 2.15 && expandMedicaid == 'No')
								medicaid = "<p>" + arrMessages['MEDICAID_2.15_NO'] + "</p>";
							else if(percentageFPL >= 2.15 && expandMedicaid == 'No')
									medicaid = 0;
								 else
									 medicaid = 0;
			return medicaid;
		}
		
		function getExchangePremiumSubsidy(coverageOnSpouseEmplyr, medicaid, percentageFPL){
			var exchngPrmSubsidy = "";
			if(coverageOnSpouseEmplyr == 'no' && medicaid != 1){
				if(percentageFPL >= 1 && percentageFPL < 4)
					exchngPrmSubsidy = 1;
				else
					exchngPrmSubsidy = 0;
			}
			else
				exchngPrmSubsidy = 0;
			return exchngPrmSubsidy;
		}
		
		function getExchangePremiumSubsidyAddText(coverageOnSpouseEmplyr, medicaid, percentageFPL, income, exchngPrmSubsidy){
		    var text = "";
		    var calc = "0";
		    
		    income = income.toString().replace("$","").replace(/,/g, '');
		    calc = Math.ceil(income * 0.095);
		    
		    calc = commaSeparateNumber(calc);
			
		    if(coverageOnSpouseEmplyr == "yes" && medicaid != 1 && percentageFPL >= 1 && percentageFPL < 4){
		        text = "<p style='padding-top:4px'>"+ arrMessages['CVRG_ON_SPOUSE_EMPLYR_1'] + " $"+ calc + "</span> "+ arrMessages['CVRG_ON_SPOUSE_EMPLYR_2'] + "<sup>1</sup>, " + arrMessages['CVRG_ON_SPOUSE_EMPLYR_3'] + " <br><br><sup>1</sup>9.5% " + arrMessages['CVRG_ON_SPOUSE_EMPLYR_4'] +"</p>";
		    }else{
                if(medicaid != 1 && exchngPrmSubsidy == 0) {
                    text = "<p style='padding-top:4px'>" + arrMessages['CVRG_ON_SPOUSE_EMPLYR_5'] +"</p>";
            	}
            }

		    return text;		   
		}
	
		function getExchangeCostSharingSubsidy(coverageOnSpouseEmplyr, medicaid, percentageFPL){
			var exchngCostSubsidy = "";
			if(coverageOnSpouseEmplyr == 'no' && medicaid != 1){
				if(percentageFPL >= 1 && percentageFPL < 2.5)
					exchngCostSubsidy = answerLabel+ "<strong>" + arrMessages['TEXT_YES'] +"</strong>";
				else
					exchngCostSubsidy = answerLabel + "<strong>" + arrMessages['TEXT_NO'] +"</strong>";
			}
			else
				exchngCostSubsidy = answerLabel + "<strong>" + arrMessages['TEXT_NO'] +"</strong>";
			return exchngCostSubsidy;
		}
		
		function showModelerResult(percentageFPL, medicaid, exchngPrmSubsidy, exchngCostSubsidy)
		{
			document.getElementById('incomePrcntg').innerHTML = Math.round(percentageFPL * 100) + '%';
			if(medicaid == 0)
				document.getElementById('medicaidResult').innerHTML = answerLabel + " " + " " + "<strong>" + arrMessages['TEXT_NO'] + "</strong>";
			else if(medicaid == 1)
					document.getElementById('medicaidResult').innerHTML = answerLabel + " " + " " + "<strong>" + arrMessages['TEXT_YES'] + "</strong>";
				else
					document.getElementById('medicaidResult').innerHTML = answerLabel + " " + " " + "<strong>" + medicaid + "</strong>";
			
			document.getElementById('premmSubsidy').innerHTML = answerLabel2 + " " + " " + "<strong>" + exchngPrmSubsidy + "</strong>";
			document.getElementById('costSubsidy').innerHTML = exchngCostSubsidy;
			
			// YK mod ******************************************************************************************************
			document.getElementById('modelerResult').style.display = 'block';
			
			// Modeler Display Results
			var mcid = document.getElementById("mcid").value; // client id
			var selValue = document.getElementById("mod-select-state").value;
			var selIndex = document.getElementById("mod-select-state").selectedIndex;
			var selOptions = document.getElementById("mod-select-state").options;
			var selText = selOptions[selIndex].text;
			
			document.getElementById('stateDisp').innerHTML = selText;
			document.getElementById('gotoStateBt').href = 'state.php?state='+selValue+'&cid='+mcid;
			
			//display user inputs
			dispUserInput();
		}
		
		function validateFamilyIncome(errors, income){
			var erTxt ="";
			function errorDisp(m){
				if(m !== ""){
					errors.innerHTML += m;
					document.getElementById("mod-income").parentNode.parentNode.className = "error";
				}else{
					document.getElementById("mod-income").parentNode.parentNode.className = ""; 
				}
			}
			
			income = income.toString().replace(/\$/g, '').replace(/,/g, '');
			
			if(income !== '' && income !== 0 && income !== '0'){
				var firstVal = income.substring(0,1);
								
				if(income > 999999999 || firstVal < 1){
					erTxt = arrMessages['INCOME_OUT_OF_LIMIT_ERROR'] + '<br>';
				}else{
					var intRegex = /^\d+$/;
					if(intRegex.test(income)) {
						// if integer
						erTxt ="";
					}else{
						// if not integer
						erTxt = arrMessages['INCOME_DECIMAL_ERROR'] + '<br>';
					}					
				}
				errorDisp(erTxt);
			}else{
				errorDisp(arrMessages['INCOME_NOT_ENTERED_ERROR'] + '<br>');
			}	
		}
		
		function validate(income, state, spouse, children, coverageOnSpouseEmplyr)
		{
			var errors = document.getElementById('input-errors');
			errors.innerHTML = '';
			
			//Validate Annual Family Income
			validateFamilyIncome(errors, income);
			
			//Validate State
			if(state == ''){
				errors.innerHTML += arrMessages['STATE_NOT_SELECTED_ERROR'] + '<br>';
				document.getElementById("mod-select-state").parentNode.className = "error";
			}else{
				document.getElementById("mod-select-state").parentNode.className = "";
			}
				
				
			if(errors.innerHTML != ''){
				errors.style.display = 'block';
				document.getElementById('mod-income').value = commaSeparateNumber(income.toString().replace(/\$/g, '').replace(/,/g, ''));
				return false;
				}
			else
				{
				errors.style.display = 'none';
				document.getElementById('mod-income').value = commaSeparateNumber(income.toString().replace(/\$/g, '').replace(/,/g, ''));
				return true;
				}
		}