<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Questionnaire</title>
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>	
</head>
<?php
	function succ()
    {
        echo"
     	   <script type='text/javascript'>
            alert('Data Inserted Succesfully!!');
            </script>"
            ;
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
    }
?>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a></a></h1>
		<form id="form_1137901" class="appnitro" onsubmit="return confirm1();" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
			<div class="form_description">
				<h2>Questionnaire</h2>
				<p> Please fill in the following questionnaire for Kushal Gram Planning.</p>
			</div>						
			<ul>
				<li><p class="error_message_title" id="incor1"></p></li>
				<li id="li_31" >
					<label class="description" for="element_31">1. Form Number </label>
					<span>
						<input id="element_31" name= "element_31" class="element" maxlength="255" required="true" size="30" value=""/>
					</span>
					<span class="required">*</span>
				</li>
				<li id="li_0" >
					<label class="description" for="element_0">2. Village Name </label>
					<span>
						<select class="element select small" id="element_0" name="element_0" required="true" style="width:210px">  
							<option value="" selected="selected" disabled>select an option</option>
							<option value="Dayal">Dayal</option>
							<option value="Ranivada">Ranivada</option>
							<option value="Otha">Otha</option>
							<option value="Mota Khutavda">Mota Khutavda</option>
							<option value="Talgajarda">Talgajarda</option>
						</select>
					</span> 
					<span class="required">*</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">3. Name </label>
					<span>
						<input id="element_1" name= "element_1" class="element text" maxlength="255" required="true" size="30" value=""/>
					</span>
					<span class="required">*</span>
				</li>
				<li id="li_2" >
					<label class="description" for="element_2">4. Father's/Mother's Name </label>
					<span>
						<input id="element_2" name= "element_2" class="element text" maxlength="255" required="true" size="30" value=""/>
					</span>
					<span class="required">*</span>
				</li>
				<li id="li_3" >
					<label class="description" for="element_3">5. No. of members in the household </label>
					<span>
						<input id="element_3" name= "element_3" class="element" maxlength="255" required="true" size="30" value=""> 
						<label for="element_3">including all dependants</label>
					</span>
					<span class="required">*</span>
				</li>
				<li id="li_4" style="width:97%">
					<label class="description" for="element_4">6. Address </label>
					<span>
						<textarea id="element_4" cols="50" name="element_4"  class="element textarea medium"></textarea> 
						<label for="element_4">With Landmark </label>
					</span> 
					
				</li>
				<li id="li_5" >
					<label class="description" for="element_5">7. Mobile No. </label>
					<span>
						<input id="element_5" name="element_5" class="element text"  size="20" type="text" maxlength="255" value=""/> 
					</span>
					

				</li>
				<li id="li_6" >
					<label class="description" for="element_6">8. Date of Birth</label>
					<span>
						<input id="element_6" name="element_6" class="element text"  size="20" type="text" maxlength="255" value=""/> 
					</span>
				</li>
				<li id="li_7" >
					<div>
						<label class="description" for="element_7">9. Gender </label>
					</div>
					<div>
						<input id="element_7_1" name="element_7" class="element radio" type="radio"  value="Male" />
						<label class="choice" for="element_7_1">Male</label>
						<input id="element_7_2" name="element_7" class="element radio" type="radio" value="Female" />
						<label class="choice" for="element_7_2">Female</label>
						<input id="element_7_3" name="element_7" class="element radio" type="radio" value="Others" />
						<label class="choice" for="element_7_3">Others</label>
					</div> 
				</li>
				<li id="li_8" >
					<div>
						<label class="description" for="element_8">10. Educational Qualification </label>
					</div>
					<div>
						<input id="element_8_1" name="element_8" class="element radio" type="radio"  value="Below Class V" />
						<label class="choice" for="element_8_1">Below Class V</label>
						<input id="element_8_2" name="element_8" class="element radio" type="radio" value="Class VI-VIII" />
						<label class="choice" for="element_8_2">Class VI-VIII</label>
						<input id="element_8_3" name="element_8" class="element radio" type="radio" value="Class IX-XII" />
						<label class="choice" for="element_8_3">Class IX-XII</label>
						<input id="element_8_4" name="element_8" class="element radio" type="radio" value="Graduation & above" />
						<label class="choice" for="element_8_4">Graduation & above</label>
					</div> 
				</li>
				<li id="li_9" >
					<label class="description" for="element_9">11. MNREGA Card No. </label>
					<span>
						<input id="element_9" name="element_9" class="element text" size="30" type="text" maxlength="255" value=""/> 
					</span>
				</li>
				<li id="li_10" >
					<label class="description" for="element_10">12. Aadhar Card No. </label>
					<span>
						<input id="element_10" name="element_10" class="element text"  size="30" type="text" maxlength="255" value=""/> 
					</span>
					
				</li>
				<li id="li_11" >
					<label class="description" for="element_11">13. Ration Card No. </label>
					<span>
						<input id="element_11" name="element_11" class="element text"  size="30" type="text" maxlength="255" value=""/> 
					</span>
					
				</li>
				<li id="li_12" >
					<div>
						<label class="description" for="element_12">14. Are you a member of SHG ? </label>
					</div>
					<div id="group">
					<input id="element_12_1" name="element_12" class="element radio" type="radio"  value="Yes" />
					<label class="choice" for="element_12_1">Yes</label>
					<input id="element_12_2" name="element_12" class="element radio" type="radio" value="No" />
					<label class="choice" for="element_12_2">No</label>
					</div>
					<div id="grpname">
						<label class="description" for="element_12_a">Name of the Group </label>
						<input id="element_12_a" name="element_12_a" class="element text" size="30" type="text" maxlength="255" value=""/> 
					</div>
				</li>
				<li>
				<label class="description" for="element_13"><span>15. Current Occupation </span></label>
				</li>
				<li id="li_13_1" >
					<div>
						<label class="description" for="element_13_1"><span>a) Primary Activity? </span></label>	
					</div>
					<div id="prim">
					<br>
					<input id="element_13_1_1" name="element_13_1" class="element radio" type="radio"  value="Yes" />
					<label class="choice" for="element_13_1_1">Yes</label>
					<input id="element_13_1_2" name="element_13_1" class="element radio" type="radio" value="No" />
					<label class="choice" for="element_13_1_2">No</label>
					</div>
					<div id="primary">
						<label class="description" for="element_13_1_a">Name of the Primary Activity </label>
						<input id="element_13_1_a" name="element_13_1_a" class="element text" size="30" type="text" maxlength="255" value=""/> 
					</div>
				</li>
				<li id="li_13_2" >
					<div>
						<label class="description" for="element_13_2"><span>b) Secondary Activity? </span></label>	
					</div>
					
					<div id="seco">
					<br>
					<input id="element_13_2_1" name="element_13_2" class="element radio" type="radio"  value="Yes" />
					<label class="choice" for="element_13_2_1">Yes</label>
					<input id="element_13_2_2" name="element_13_2" class="element radio" type="radio" value="No" />
					<label class="choice" for="element_13_2_2">No</label>
					</div>
					<div id="secondary">
						<label class="description" for="element_13_2_a">Name of the Secondary Activity </label>
						<input id="element_13_2_a" name="element_13_2_a" class="element text" size="30" type="text" maxlength="255" value=""/> 
					</div>
				</li>
				<li id="li_13_3" >
					<div>
						<label class="description" for="element_13_3"><span>c) Tertiary Activity? </span></label>	
					</div>
					
					<div id="tert">
					<br>
					<input id="element_13_3_1" name="element_13_3" class="element radio" type="radio"  value="Yes" />
					<label class="choice" for="element_13_3_1">Yes</label>
					<input id="element_13_3_2" name="element_13_3" class="element radio" type="radio" value="No" />
					<label class="choice" for="element_13_3_2">No</label>
					</div>
					<div id="tertiary">
						<label class="description" for="element_13_3_a">Name of the Tertiary Activity </label>
						<input id="element_13_3_a" name="element_13_3_a" class="element text" size="30" type="text" maxlength="255" value=""/> 
					</div>
				</li>
				<li id="li_14" >
					<div>
						<label class="description" for="element_14">16. Do you migrate for any of your Ocuupations ? </label>
					</div>
					<div id="migrate">
						<input id="element_14_1" name="element_14" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_14_1">Yes</label>
						<input id="element_14_2" name="element_14" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_14_2">No</label>
					</div>
					<div id="activity">
						<label class="description" for="element_14_a">a) Activity Name </label>
						<input id="element_14_a" name="element_14_a" class="element text" size="30" type="text" maxlength="255" value=""/> 
						<br><br>
						<label class="description" for="element_14_b">b) Place Travelled </label>
						<input id="element_14_b" name="element_14_b" class="element text" size="30" type="text" maxlength="255" value=""/> 
					</div>
				</li>
				<li id="li_15" style="width:50%">
					<label class="description" for="element_15"><span>17. Problems faced in Occupation/Livelihood</span> </label>
					<div>
						<textarea id="element_15" name="element_15"  class="element textarea medium"></textarea> 
					</div> 
				</li>
				<li id="li_16" >
					<label class="description" for="element_16">18. Earnings per Occupation per year </label>
					<span>
						<input id="element_16" name= "element_16" class="element text" min="0" maxlength="255"  size="40" value=""> 
						<label for="element_16">For the HH</label>
					</span>
					
				</li>
				<li id="li_17" >
					<label class="description" for="element_17">19. What is the most profitable profession in your taluka/village cluster?</label>
					<span>
						<input id="element_17" name= "element_17" class="element text" maxlength="255"  size="40" value=""/>
					</span>
					
				</li>
				<li id="li_18" >
					<label class="description" for="element_18">20. What do you dream/aspire to become ?</label>
					<span>
						<input id="element_18" name= "element_18" class="element text" maxlength="255"  size="40" value=""/>
					</span>
					
				</li>
				<li id="li_19" >
					<div>
						<label class="description" for="element_19">21. Given a chance to train on this skill, will you be willing to learn on it today?</label>
					</div>
					<div>
						<input id="element_19_1" name="element_19" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_19_1">Yes</label>
						<input id="element_19_2" name="element_19" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_19_2">No</label>
					</div> 
				</li>
				<li id="li_20" >
					<label class="description" for="element_20">22. What have been your previous occupations?</label>
					<span>
						<input id="element_20" name= "element_20" class="element text" maxlength="255"  size="40" value=""/>
					</span>
					
				</li>
				<li id="li_21" >
					<div>
						<label class="description" for="element_21">23. Would you like to take advanced / next-level training for your previous occupations?</label>
					</div>
					<div>
						<input id="element_21_1" name="element_21" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_21_1">Yes</label>
						<input id="element_21_2" name="element_21" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_21_2">No</label>
					</div> 
				</li>
				<li id="li_22" >
					<div>
						<label class="description" for="element_22">24. Do you believe that skilling in any activity will help you earn more ?</label>
					</div>
					<div>
						<input id="element_22_1" name="element_22" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_22_1">Yes</label>
						<input id="element_22_2" name="element_22" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_22_2">No</label>
					</div> 
				</li>
				<li id="li_23" >
					<div>
						<label class="description" for="element_23">25. What time duration of courses are you willing to attend for skilling ?</label>
					</div>
					<div>
						<input id="element_23_1" name="element_23" class="element radio" type="radio"  value="Below 7 Days" />
						<label class="choice" for="element_23_1">Below 7 Days</label>
						<input id="element_23_2" name="element_23" class="element radio" type="radio" value="7 days to 30 days" />
						<label class="choice" for="element_23_2">7 days to 30 days</label>
						<input id="element_23_3" name="element_23" class="element radio" type="radio" value="1 Month to 3 Months" />
						<label class="choice" for="element_23_3">1 Month to 3 Months</label>
						<input id="element_23_4" name="element_23" class="element radio" type="radio" value="Beyond 3 Months" />
						<label class="choice" for="element_23_4">Beyond 3 Months</label>
					</div> 
				</li>
				<li id="li_24" >
					<div>
						<label class="description" for="element_24">26. What time period in the day are you willing to attend classes ?</label>
					</div>
					<div>
						<input id="element_24_1" name="element_24" class="element radio" type="radio"  value="Between 7am - 11am" />
						<label class="choice" for="element_24_1">Between 7am - 11am</label>
						<input id="element_24_2" name="element_24" class="element radio" type="radio" value="Between 11 am - 5 pm" />
						<label class="choice" for="element_24_2">Between 11 am - 5 pm</label>
						<input id="element_24_3" name="element_24" class="element radio" type="radio" value="After 5 pm" />
						<label class="choice" for="element_24_3">After 5 pm</label>
					</div> 
				</li>
				<li id="li_25" >
					<label class="description" for="element_25">27. How far will you travel to attend a skilling course?</label>
					<span>
						<input id="element_25" name= "element_25" min=0 maxlength="255" class="element"  size="40" value=""/>
						<label for="element_25">in Kms</label>
					</span>
					
				</li>
				<li id="li_26" >
					<div>
						<label class="description" for="element_26">28. What do you intend to start ?</label>
					</div>
					<div>
						<input id="element_26_1" name="element_26" class="element radio" type="radio"  value="Unit / setup of your own" />
						<label class="choice" for="element_26_1">Unit / setup of your own</label>
						<input id="element_26_2" name="element_26" class="element radio" type="radio" value="Work for someone else" />
						<label class="choice" for="element_26_2">Work for someone else</label>
						<input id="element_26_3" name="element_26" class="element radio" type="radio" value="Work for your own household" />
						<label class="choice" for="element_26_3">Work for your own household</label>
					</div> 
				</li>
				<li id="li_27" >
					<label class="description" for="element_27">29. Rank 3 Occupation on which you want to be skilled and answer the following questions </label>
					<br>
					<div>
					<br>
						<b>Rank 1 : </b><input id="element_27_1" name= "element_27" class="element text" maxlength="255"  size="30" value=""/>
						
					</div>
					<div>
						<label class="description" for="element_27a">a) Have you ever worked on the above ranked Occupations ?</label>
					</div>
					<div>
						<input id="element_27a_1" name="element_27a" class="element radio" type="radio"  value="Worked Before" />
						<label class="choice" for="element_27a_1">Worked Before</label>
						<input id="element_27a_2" name="element_27a" class="element radio" type="radio" value="Currently Working" />
						<label class="choice" for="element_27a_2">Currently Working</label>
						<input id="element_27a_3" name="element_27a" class="element radio" type="radio" value="Never worked" />
						<label class="choice" for="element_27a_3">Never worked</label>
					</div> 
					<div>
						<label class="description" for="element_27b">b) Where did you learn the above ranked Occupations ?</label>
					</div>
					<div>
						<input id="element_27b_1" name="element_27b" class="element radio" type="radio"  value="Family or Traditional means" />
						<label class="choice" for="element_27b_1">Family or Traditional means</label>
						<input id="element_27b_2" name="element_27b" class="element radio" type="radio" value="Formal Training" />
						<label class="choice" for="element_27b_2">Formal Training</label>
					</div> 
					<div >
						<label class="description" for="element_27c">c) Do you train or tutor others in your proffesion ?</label>
					</div>
					<div>
						<input id="element_27c_1" name="element_27c" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_27c_1">Yes</label>
						<input id="element_27c_2" name="element_27c" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_27c_2">No</label>
					</div>
				</li>
				<li id="li_28" >
					<div>
						<b>Rank 2 : </b>
						<input id="element_28_1" name= "element_28" class="element text" maxlength="255"  size="30" value=""/>
						
					</div>
					<div>
						<label class="description" for="element_28a">a) Have you ever worked on the above ranked Occupations ?</label>
					</div>
					<div>
						<input id="element_28a_1" name="element_28a" class="element radio" type="radio"  value="Worked Before" />
						<label class="choice" for="element_28a_1">Worked Before</label>
						<input id="element_28a_2" name="element_28a" class="element radio" type="radio" value="Currently Working" />
						<label class="choice" for="element_28a_2">Currently Working</label>
						<input id="element_28a_3" name="element_28a" class="element radio" type="radio" value="Never worked" />
						<label class="choice" for="element_28a_3">Never worked</label>
					</div> 
					<div>
						<label class="description" for="element_28b">b) Where did you learn the above ranked Occupations ?</label>
					</div>
					<div>
						<input id="element_28b_1" name="element_28b" class="element radio" type="radio"  value="Family or Traditional means" />
						<label class="choice" for="element_28b_1">Family or Traditional means</label>
						<input id="element_28b_2" name="element_28b" class="element radio" type="radio" value="Formal Training" />
						<label class="choice" for="element_28b_2">Formal Training</label>
					</div> 
					<div >
						<label class="description" for="element_28c">c) Do you train or tutor others in your proffesion ?</label>
					</div>
					<div>
						<input id="element_28c_1" name="element_28c" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_28c_1">Yes</label>
						<input id="element_28c_2" name="element_28c" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_28c_2">No</label>
					</div>
				</li>
				<li id="li_29" >
					<div>
						<b>Rank 3 : </b>
						<input id="element_29_1" name= "element_29" class="element text" maxlength="255"  size="30" value=""/>
						
					</div>
					<div>
						<label class="description" for="element_29a">a) Have you ever worked on the above ranked Occupations ?</label>
					</div>
					<div>
						<input id="element_29a_1" name="element_29a" class="element radio" type="radio"  value="Worked Before" />
						<label class="choice" for="element_29a_1">Worked Before</label>
						<input id="element_29a_2" name="element_29a" class="element radio" type="radio" value="Currently Working" />
						<label class="choice" for="element_29a_2">Currently Working</label>
						<input id="element_29a_3" name="element_29a" class="element radio" type="radio" value="Never worked" />
						<label class="choice" for="element_29a_3">Never worked</label>
					</div> 
					<div>
						<label class="description" for="element_29b">b) Where did you learn the above ranked Occupations ?</label>
					</div>
					<div>
						<input id="element_29b_1" name="element_29b" class="element radio" type="radio"  value="Family or Traditional means" />
						<label class="choice" for="element_29b_1">Family or Traditional means</label>
						<input id="element_29b_2" name="element_29b" class="element radio" type="radio" value="Formal Training" />
						<label class="choice" for="element_29b_2">Formal Training</label>
					</div> 
					<div >
						<label class="description" for="element_29c">c) Do you train or tutor others in your proffesion ?</label>
					</div>
					<div>
						<input id="element_29c_1" name="element_29c" class="element radio" type="radio"  value="Yes" />
						<label class="choice" for="element_29c_1">Yes</label>
						<input id="element_29c_2" name="element_29c" class="element radio" type="radio" value="No" />
						<label class="choice" for="element_29c_2">No</label>
					</div>
				</li>
				<li id="li_30" >
					<label class="description" for="element_30">30. Deprivation </label>
					<span>
						<input id="element_30_1" name="element_30_1" class="element checkbox" type="checkbox" value="D1" />
						<label class="choice" for="element_30_1">D1</label>
						<input id="element_30_2" name="element_30_2" class="element checkbox" type="checkbox" value="D2" />
						<label class="choice" for="element_30_2">D2</label>
						<input id="element_30_3" name="element_30_3" class="element checkbox" type="checkbox" value="D3" />
						<label class="choice" for="element_30_3">D3</label>
						<input id="element_30_4" name="element_30_4" class="element checkbox" type="checkbox" value="D4" />
						<label class="choice" for="element_30_4">D4</label>
						<input id="element_30_5" name="element_30_5" class="element checkbox" type="checkbox" value="D5" />
						<label class="choice" for="element_30_5">D5</label>
						<input id="element_30_6" name="element_30_6" class="element checkbox" type="checkbox" value="D6" />
						<label class="choice" for="element_30_6">D6</label>
						<input id="element_30_7" name="element_30_7" class="element checkbox" type="checkbox" value="D7" />
						<label class="choice" for="element_30_7">D7</label>
						<input id="element_30_8" name="element_30_8" class="element checkbox" type="checkbox" value="A1" />
						<label class="choice" for="element_30_8">A1</label>
						<input id="element_30_9" name="element_30_9" class="element checkbox" type="checkbox" value="A2" />
						<label class="choice" for="element_30_9">A2</label>
						<input id="element_30_10" name="element_30_10" class="element checkbox" type="checkbox" value="A3" />
						<label class="choice" for="element_30_10">A3</label>
						<input id="element_30_11" name="element_30_11" class="element checkbox" type="checkbox" value="A4" />
						<label class="choice" for="element_30_11">A4</label>
						<input id="element_30_12" name="element_30_12" class="element checkbox" type="checkbox" value="A5" />
						<label class="choice" for="element_30_12">A5</label>
					</span> 
				</li>
				<li class="buttons">
				    <input type="hidden" name="form_id" />
					<button id="saveForm" class="btn btn-success" name="submit">Submit</button> 
				</li>
			</ul>
		</form>	
		<?php
			if(isset($_POST['submit']))
			{
				require_once('db.php');
				$village=trim($_POST['element_0']);
				$form=trim($_POST['element_31']);
				$name=trim($_POST['element_1']);
				$parent=trim($_POST['element_2']);
				$member=trim($_POST['element_3']);
				$address=$mobile=$date=$gender=$edu=$mnrega=$aadhar=$ration=$problem=$earning=$profit=$dream=$train=$previous=$advanced=$help=$time=$period=$distance=$intend=$rank1=$rank2=$rank3=$worked1=$learn1=$tutor1=$worked2=$learn2=$tutor2=$worked3=$learn3=$tutor3="";
				if(isset($_POST['element_4']))
					$address=trim($_POST['element_4']);
				if(isset($_POST['element_5']))
					$mobile=trim($_POST['element_5']);
				if(isset($_POST['element_6']))
				{
					$date=trim($_POST['element_6']);
				}
				if(isset($_POST['element_7']))
					$gender=$_POST['element_7'];
				if(isset($_POST['element_8']))
					$edu=$_POST['element_8'];
				if(isset($_POST['element_9']))
					$mnrega=trim($_POST['element_9']);
				if($mnrega=="")
				{
					$mnrega="NONE";
				}
				if(isset($_POST['element_10']))
					$aadhar=trim($_POST['element_10']);
				if(isset($_POST['element_11']))
					$ration=trim($_POST['element_11']);
				$group="NONE";
				$primaryq=$secondaryq=$tertiaryq="NONE";
				$activity=$place="NONE";
				if(isset($_POST['element_12']))
				{
					if($_POST['element_12']=="Yes"&&isset($_POST['element_12_a']))
					{
						$group=trim($_POST['element_12_a']);
					}
				}
				if(isset($_POST['element_13_1'])&&isset($_POST['element_13_1_a']))
				{
					if($_POST['element_13_1']=="Yes")
					{
						$primaryq=trim($_POST['element_13_1_a']);
					}
				}
				if(isset($_POST['element_13_2'])&&isset($_POST['element_13_2_a']))
				{
					if($_POST['element_13_2']=="Yes")
					{
						$secondaryq=trim($_POST['element_13_2_a']);
					}
				}
				if(isset($_POST['element_13_3'])&&isset($_POST['element_13_3_a']))
				{
					if($_POST['element_13_3']=="Yes")
					{
						$tertiaryq=trim($_POST['element_13_3_a']);
					}
				}
				if(isset($_POST['element_14']))
				{
					if($_POST['element_14']=="Yes")
					{
						if(isset($_POST['element_14_a']))
							$activity=trim($_POST['element_14_a']);
						if(isset($_POST['element_14_b']))
							$place=trim($_POST['element_14_b']);
					}
				}
				if(isset($_POST['element_15']))
					$problem=trim($_POST['element_15']);
				if(isset($_POST['element_16']))
					$earning=trim($_POST['element_16']);
				if(isset($_POST['element_17']))
					$profit=trim($_POST['element_17']);
				if(isset($_POST['element_18']))
					$dream=trim($_POST['element_18']);
				if(isset($_POST['element_19']))
					$train=trim($_POST['element_19']);
				if(isset($_POST['element_20']))
					$previous=trim($_POST['element_20']);
				if(isset($_POST['element_21']))
					$advanced=trim($_POST['element_21']);
				if(isset($_POST['element_22']))
					$help=trim($_POST['element_22']);
				if(isset($_POST['element_23']))
					$time=trim($_POST['element_23']);
				if(isset($_POST['element_24']))
					$period=trim($_POST['element_24']);
				if(isset($_POST['element_25']))
					$distance=trim($_POST['element_25']);
				if(isset($_POST['element_26']))
					$intend=trim($_POST['element_26']);
				if(isset($_POST['element_27']))
					$rank1=trim($_POST['element_27']);
				if(isset($_POST['element_28']))
					$rank2=trim($_POST['element_28']);
				if(isset($_POST['element_29']))
					$rank3=trim($_POST['element_29']);
				if(isset($_POST['element_27a']))
					$worked1=trim($_POST['element_27a']);
				if(isset($_POST['element_27b']))
					$learn1=trim($_POST['element_27b']);
				if(isset($_POST['element_27c']))
					$tutor1=trim($_POST['element_27c']);
				if(isset($_POST['element_28a']))
					$worked2=trim($_POST['element_28a']);
				if(isset($_POST['element_28b']))
					$learn2=trim($_POST['element_28b']);
				if(isset($_POST['element_28c']))
					$tutor2=trim($_POST['element_28c']);
				if(isset($_POST['element_29a']))
					$worked3=trim($_POST['element_29a']);
				if(isset($_POST['element_29b']))
					$learn3=trim($_POST['element_29b']);
				if(isset($_POST['element_29c']))
					$tutor3=trim($_POST['element_29c']);
				$d1=$d2=$d3=$d4=$d5=$d6=$d7=$a1=$a2=$a3=$a4=$a5=FALSE;
				if(isset($_POST['element_30_1']))
					$d1=TRUE;
				if(isset($_POST['element_30_2']))
					$d2=TRUE;
				if(isset($_POST['element_30_3']))
					$d3=TRUE;
				if(isset($_POST['element_30_4']))
					$d4=TRUE;
				if(isset($_POST['element_30_5']))
					$d5=TRUE;
				if(isset($_POST['element_30_6']))
					$d6=TRUE;
				if(isset($_POST['element_30_7']))
					$d7=TRUE;
				if(isset($_POST['element_30_8']))
					$a1=TRUE;
				if(isset($_POST['element_30_9']))
					$a2=TRUE;
				if(isset($_POST['element_30_10']))
					$a3=TRUE;
				if(isset($_POST['element_30_11']))
					$a4=TRUE;
				if(isset($_POST['element_30_12']))
					$a5=TRUE;
				for($z=1;$z<=3;$z++)
				{
					if($z==1)
					{
						$learn=$learn1;
						$worked=$worked1;
						$tutor=$tutor1;
					}
					else if($z==2)
					{
						$learn=$learn2;
						$worked=$worked2;
						$tutor=$tutor2;
					}
					else if($z==3)
					{
						$learn=$learn3;
						$worked=$worked3;
						$tutor=$tutor3;
					}
					if($worked=="Never worked")
					{
						$level=1;
					}
					else if($worked=="Worked Before"&&$learn=="Family or Traditional means"&&$tutor=="No")
					{
						$level=2;
					}
					else if($worked=="Currently Working"&&$learn=="Family or Traditional means"&&$tutor=="No")
					{
						$level=3;
					}
					else if($worked=="Worked Before"&&$learn=="Formal Training"&&$tutor=="No")
					{
						$level=4;
					}
					else if($worked=="Currently Working"&&$learn=="Formal Training"&&$tutor=="No")
					{
						$level=5;
					}
					else if(($worked=="Currently Working"||$worked=="Worked Before")&&$learn=="Family or Traditional means"&&$tutor=="Yes")
					{
						$level=6;
					}
					else if(($worked=="Currently Working"||$worked=="Worked Before")&&$learn=="Formal Training"&&$tutor=="Yes")
					{
						$level=7;
					}
					else 
					{
						$level=0;
					}
					if($z==1)
						$level1=$level;
					else if($z==2)
						$level2=$level;
					else
						$level3=$level;
				}
				?>
                    <script>
                    var error="";
                    </script>
                <?php
				$f=0;
				//Dayal">Ranivada">Otha">Mota Khutavda Talgajarda">
				if($form=="")
				{
					?>
                    <script>
                    	error="Form No. cannot be empty!";
                    </script>
                    <?php
					
				}
				else if($village!="Dayal"&&$village!="Ranivada"&&$village!="Otha"&&$village!="Mota Khutavda"&&$village!="Talgajarda")
				{
					?>
                    <script>
                    	error="Village is wrong!";
                    </script>
                    <?php
				}
				else if($name=="")
				{
					?>
                    <script>
                    	error="Name cannot be empty!";
                    </script>
                    <?php
					
				}
				else if($parent=="")
				{
					?>
                    <script>
                    	error="Parent Name cannot be empty!";
                    </script>
                    <?php
				}
				else if($member=="")
				{
					?>
                    <script>
                    	error="No. of members cannot be empty!";
                    </script>
                    <?php	
				}
				
				else
				{
					$f=1;
					$query="INSERT INTO `form`(`id`, `form`, `village`, `name`, `parent`, `member`, `address`, `mobile`, `date`, `gender`, `education`, `mnrega`, `aadhar`, `ration`, `shg`, `primaryq`, `secondaryq`, `tertiaryq`, `activity`, `place`, `problem`, `earning`, `profit`, `dream`, `train`, `previous`, `advanced`, `help`, `time`, `period`, `distance`, `intend`, `rank1`, `rank2`, `rank3`, `worked1`, `learn1`, `tutor1`, `worked2`, `learn2`, `tutor2`, `worked3`, `learn3`, `tutor3`, `level1`, `level2`, `level3`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `A1`, `A2`, `A3`, `A4`, `A5`) VALUES (NULL,'$form','$village','$name','$parent','$member','$address','$mobile','$date','$gender','$edu','$mnrega','$aadhar','$ration','$group','$primaryq','$secondaryq','$tertiaryq','$activity','$place','$problem','$earning','$profit','$dream','$train','$previous','$advanced','$help','$time','$period','$distance','$intend','$rank1','$rank2','$rank3','$worked1','$learn1','$tutor1','$worked2','$learn2','$tutor2','$worked3','$learn3','$tutor3','$level1','$level2','$level3','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$a1','$a2','$a3','$a4','$a5')";
					mysqli_query($stat,$query);
					succ();
				}
				if($f==0)
				{
                    ?>
                    <script>
                    document.getElementById("incor1").innerHTML="ERROR : "+error;
                    </script>
                    <?php
				}
			}		
		?>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
	<script type="text/javascript">
		function confirm1()
		{
			if(confirm("Are you sure you want to submit the questionnaire?"))
				return true;
			else
				return false;
		}
	</script>
    <script src="jquery-1.12.0.min.js"></script>
    <script src="jquery-migrate-1.2.1.min.js"></script>
	
	<script src="form.js"></script>	

</html>