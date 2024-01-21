<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NeedCar Indonesia</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/roboto-font.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css'); ?>" >
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>"/>

</head>
<body>
	<div class="page-content" style="background-image: url('images/wizard-v3.jpg')">
		<div class="wizard-v3-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Welcome to Needcar Indonesia</h3>
					<p>Your detail Reservation</p>
				</div>
		        <div class="inner" style="padding-left:40px;">
			                	<h4><?php echo ucwords(strtolower($data_res->fullname)); ?></h4>
								<h4>Your Reservation Number is <?php echo $data_res->reservation_number ?></h4>
								<h4>The details are as follows:</h4>
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Reservation Number</label>
			                		</div>
									<div class="form-holder" align="left">
			                			<label><?php echo strtoupper($data_res->reservation_number) ?></label>
			                		</div>
									<div class="form-holder" align="left">
			                			<label></label>
			                		</div>
			                	</div>
								<div class="form-row">
			                		<div class="form-holder">
			                			<h3>Booking Details</h3>
			                		</div>
									<div class="form-holder">
			                			<label></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Rental From/To</label>
			                		</div>
									<div class="form-holder">
			                			<label id="retur-val"><?php 									 
										$datestart = $data_res->datetime_pick;
										$nameOfDayst = date('l', strtotime($datestart));										
										$tgl1=date("d.m.Y H:i", strtotime($datestart));										
										echo $nameOfDayst.' '.$tgl1;
										?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								<div class="form-row">
			                		<div class="form-holder">
			                			<label></label>
			                		</div>
									<div class="form-holder">
			                			<label id="retur-val"><?php 
										$dateend = $data_res->datetime_return;
										$nameOfDayen = date('l', strtotime($dateend));										
										$tgl2=date("d.m.Y H:i", strtotime($dateend));										
										echo $nameOfDayen.' '.$tgl2;										
										?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Charge</label>
			                		</div>
									<div class="form-holder">
			                			<label id="retur-val">
										<?php
										
										
										$datestart = $data_res->splitdatestart;
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
										echo $hari->d .' '.($hari->d > 1 ? 'Days' : 'Day').',  '.  $hari->h .' '.($hari->h > 1 ? 'Hours' : 'Hour').''.$addDay;
										?>

										</label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Rental Office</label>
			                		</div>
									<div class="form-holder">
			                			<label><?php echo $data_res->enter_pickup ?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Opening hours on the day of collection</label>
			                		</div>
									<div class="form-holder">
			                			<label>08:00-18:00 hours</label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Return Office</label>
			                		</div>
									<div class="form-holder">
			                			<label><?php echo $data_res->retur ?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Opening hours on the day of return</label>
			                		</div>
									<div class="form-holder">
			                			<label>08:00-18:00 hours</label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Car Group</label>
			                		</div>
									<div class="form-holder">
			                			<label><?php echo strtoupper($data_res->car_id) ?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Flight Number</label>
			                		</div>
									<div class="form-holder">
			                			<label><?php echo $data_res->flight_number ?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Pricing Details</label>
			                		</div>
									<div class="form-holder">
			                			<label id="retur-val"><?php echo number_format($data_res->pricecar,2,',','.'); ?> X <?php echo $data_res->day ?></label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"><?php echo number_format($data_res->price,2,',','.'); ?></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Rental Price</label>
			                		</div>
									<div class="form-holder">
			                			<label>@IDR 400.000 -> IDR 3.200.000</label>
			                		</div>
									<div class="form-holder">
			                			<label id="aa"></label>
			                		</div>
			                	</div>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label id="splitdatestart-val"></label>
										<label id="enter_day-val"></label>
			                		</div>
									<div class="form-holder">
			                			<label id="splitdateend-val"></label>
										<label id="return_day-val"></label>
			                		</div>
									<div class="form-holder">
										<label id="aa"></label>
										<label id="calcday-val"></label> 
			                		</div>
			                	</div>
							</div>
			</div>
		</div>
	</div>
	
</body>
</html>