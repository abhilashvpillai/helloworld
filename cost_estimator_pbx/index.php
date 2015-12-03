<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cost Estimator For Hosted PBX </title>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link type="text/css" href="style.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jspatch.js"></script>
	<script src="js/jquery-1.7.2.js" type="text/javascript"></script>
	<script src="js/jquery-ui-min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	
	<!-- CUSTOM JAVASCRIPT FUNCTIONS -->
	<script src="js/functions.js" type="text/javascript"></script>
</head>

<body>

<!-- FIRST WINDOW -->

	<form name="first_form" action="#" method="get" id="form_1_submit">
		<div id="wrapper_area">
			
			
			<div class="wrapper">
				<div class="top_text"><span>Estimated cost for a Hosted PBX solution for your business</span></div>
				
				
				<div id="inner_text_area">
				
					<div class="ui_slider">
						<span class="num_user">no of users</span>
						<div id="label" class="user_no">Please slide !</div>
						<div id="slider"></div>
					</div>
					
					<div class="data_connection">
						<span class="data_title">Data Connection</span>
						<div class="connection_options">
							<div class="radio_inner">
							<input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" value="existing" checked="checked" />
							<label for="radio1" class="css-label radGroup1 radGroup1">Use Existing<br />Internet (BYOB)</label></div>
							
							<div class="radio_inner">
							<input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" value="dedicated"/>
							<label for="radio2" class="css-label radGroup1 radGroup1">Dedicated Data for Voice<br /> (For Voice Quality/Security <br />Guarantee)</label></div>
						</div>
						
						<div class="optional_checkbox"><input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" />
							<label for="checkboxG1" class="css-label radGroup1">Optional Add-on 4G/LTE - Backup Data<br />Connection For Voice</label>
						</div>
						
						<div class="total_cost">TOTAL ESTIMATED COST<span id="tot_cost">$0.00</span></div>
					</div>
	
					<div class="query_btn">
						<input type="button" value="get a detailed quote now" name="submit"  onclick="showUser2()" />
					</div>
				
				
				</div>
				
				
				<div class="power_by"><img src="images/broadsoft.png" /></div>
				<div class="" id="available_update2"></div>
				
				
				
				<div class="clear"></div>
			</div>
		</div>
		
		<!-- SECOND WINDOW -->
		
		<div id="wrapper_area2" >
			<div class="wrapper">
				<div class="top_text">
					<span>Estimated cost for a Hosted PBX solution for your business</span>
				</div>
				<div class="total_cost_second">TOTAL ESTIMATED COST<span id="tt_cost">$0.00</span></div>
				<div class="fill_info">please fill out the form below<br />so that we can send you the quote</div>
				
				<div class="form_feilds" id="form_fields">
					<input type="text" value="" name="name" id="name" placeholder="Your Name" class="input_feild" /> <!-- required -->
					<input type="text" value="" name="company" id="company" placeholder="Company" class="input_feild"  /> <!-- required -->
					<input type="text" value="" name="email" id="email" placeholder="Email Address" class="input_feild" /> <!-- required -->
					<input type="text" value="" name="phone" id="phone" placeholder="Phone" class="input_feild form_extra_bottom" />
					<input type="hidden" value="" name="numUser" id="numusers" />
					<input type="hidden" value="" name="dedicatedData" id="dedicateddata" />
					<input type="hidden" value="" name="optionalAddon" id="optionaladdon" />
					<input type="hidden" value="" name="estimatedCost" id="estimatedcost" />
				</div>
				
				<div class="query_btn_second">
					<input type="button" value="send me the quote" name="submit" onclick="showUser3()" />
				</div>
				<div class="power_by_second">
					<img src="images/broadsoft.png" />
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
	</form>
	
	<!-- THIRD WINDOW -->
	
	<div id="wrapper_message">
		<div class="wrapper">
			<div class="top_text">
				<span>Estimated cost for a Hosted PBX solution for your business</span>
			</div>
			<span class="message_success" id="success_message">&nbsp;</span>
			<div class="power_by_message"><img src="images/broadsoft.png" /></div>
		</div>
	</div>
</body>
</html>
