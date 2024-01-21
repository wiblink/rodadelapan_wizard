<?php

$mailhtm="

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Zap Lowest car ".$title."</title>
	<!-- Mobile Specific Metas -->
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
	<!-- Font-->
	
	
	
	<link rel=\"stylesheet\" type=\"text/css\" href='".base_url('css/roboto-font.css')."'>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"')'".base_url('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')."' >
	<!-- datepicker -->

	<!-- Main Style Css -->
    <link rel=\"stylesheet\" href='". base_url('css/style.css') ."'/>
	
	<!--<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery/latest/jquery.min.js\"></script>-->
	<script type='text/javascript' src='js/moment.min.js'></script>
	<script type='text/javascript' src='js/daterangepicker.min.js'></script>
	<script type='text/javascript' src='js/jquery-ui.min.js' ></script>
	<link rel='stylesheet' type='text/css' href='css/daterangepicker.css' />
</head>
<body>
	<div class='page-content' style='background-image: url('images/wizard-v3.jpg')'>
		<div class='wizard-v3-content'>
			<div class='wizard-form'>
				<div class='wizard-header'>
					<h3 class='heading'>Welcome to ZAP Lowest Car</h3>
					<p>Your detail Reservation</p>
				</div>
		        <div class='inner' style='padding-left:40px;'>
			                	<h4>".ucwords(strtolower($data_res->fullname))."</h4>
								<h4>Your Reservation Number is ".$data_res->reservation_number."</h4>
								<h4>The details are as follows:</h4>
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Reservation Number</label>
			                		</div>
									<div class='form-holder' align='left'>
			                			<label>".strtoupper($data_res->reservation_number)."</label>
			                		</div>
									<div class='form-holder' align='left'>
			                			<label></label>
			                		</div>
			                	</div>
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<h3>Booking Details</h3>
			                		</div>
									<div class='form-holder'>
			                			<label></label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Rental From/To</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='retur-val'>"; 									 
										$datestart = $data_res->datetime_pick;
										$nameOfDayst = date('l', strtotime($datestart));										
										$tgl1=date("d.m.Y h:i", strtotime($datestart));										
						$mailhtm.= $nameOfDayst.' '.$tgl1."</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label></label>
			                		</div>
									<div class='form-holder'>
			                			<label id='retur-val'>";
										
										$dateend = $data_res->datetime_return;
										$nameOfDayen = date('l', strtotime($dateend));										
										$tgl2=date("d.m.Y h:i", strtotime($dateend));
										
									$mailhtm.=$nameOfDayen.' '.$tgl2."</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Charge</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='retur-val'>";
										?>
								<?php   $datestart = $data_res->splitdatestart;
										$dateend = $data_res->splitdateend;
										$datetime_pick = $data_res->datetime_pick;
										$datetime_return = $data_res->datetime_return;
										
										$dt1 = new DateTime($datetime_pick);
										$dt2 = new DateTime($datetime_return);
										$hari = $dt1->diff($dt2);
										//echo 'jam->'.$hari->h.'< ';
										if($hari->h >= 5){
											$calcday = $hari->d + 1;
											$addDay= ' / '.$calcday.' '.($calcday > 1 ? 'Days' : 'Day');
										} else {
											$addDay= '';
										}
										$mailhtm.= $hari->d .' '.($hari->d > 1 ? 'Days' : 'Day').',  '.  $hari->h .' '.($hari->h > 1 ? 'Hours' : 'Hour').''.$addDay;
										?>
								<?php
									$mailhtm.="</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Rental Office</label>
			                		</div>
									<div class='form-holder'>
			                			<label>".$data_res->enter_pickup."</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Opening hours on the day of collection</label>
			                		</div>
									<div class='form-holder'>
			                			<label>08:00-18:00 hours</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Return Office</label>
			                		</div>
									<div class='form-holder'>
			                			<label>". $data_res->retur."</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Opening hours on the day of return</label>
			                		</div>
									<div class='form-holder'>
			                			<label>08:00-18:00 hours</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Car Group</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='retur-val'></label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Flight Number</label>
			                		</div>
									<div class='form-holder'>
			                			<label>". $data_res->flight_number."</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Pricing Details</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='retur-val'></label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label>Rental Price</label>
			                		</div>
									<div class='form-holder'>
			                			<label>@IDR 400.000 -> IDR 3.200.000</label>
			                		</div>
									<div class='form-holder'>
			                			<label id='aa'></label>
			                		</div>
			                	</div>
								
								<div class='form-row'>
			                		<div class='form-holder'>
			                			<label id='splitdatestart-val'></label>
										<label id='enter_day-val'></label>
			                		</div>
									<div class='form-holder'>
			                			<label id='splitdateend-val'></label>
										<label id='return_day-val'></label>
			                		</div>
									<div class='form-holder'>
										<label id='aa'></label>
										<label id='calcday-val'></label> 
			                		</div>
			                	</div>
							</div>
			</div>
		</div>
	</div>
		
</body>
</html>

";


?>