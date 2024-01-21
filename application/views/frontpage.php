<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NeedCar Indonesia</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	
	<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/daterangepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
	
</head>
<body>
	<div class="page-content">
		<div class="wizard-v3-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Welcome to Needcar Indonesia</h3>
					<p>Fill all form field to go next step</p>
				</div>
		        <form name="f1" class="form-register" action="#" method="post" enctype="multipart/form-data" onsubmit="return validasi()">
				<input type="hidden" id="reservation_trx" name="reservation_trx" value="<?php echo $encry; ?>">
				<input type="hidden" id="id_country" name="id_country" value="<?php echo $id_country; ?>">
				
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">Reserve a Rental Car</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Account Information:</h3>
			                	<div class="form-row">
									<div class="form-holder">
										
											<select name="enter_pickup" id="enter_pickup" class="form-control" required>
												<option value="">Choose Pick up</option>
												<option value="CGK">Soekarno–Hatta International Airport(CGK)</option>
												<option value="JK2">Jakarta Downtown(JK2)</option>
												<option value="SUB">Surabaya(SUB)</option>
												<option value="DPS">Denpasar Bali(DPS)</option>
												<option value="JOG">Jogyakarta Downtown(JOG)</option>
											</select>										
										
									</div>
									
	
									<div class="form-holder">
										<label class="form-row-inner">
											<select name="enter_day" id="enter_day">
											<option value="00:00">midnight(00:00)</option>
											<option value="00:30">00:30</option>
											<option value="01:00">01:00</option>
											<option value="01:30">01:30</option>
											<option value="02:00">02:00</option>
											<option value="02:30">02:30</option>
											<option value="03:00">03:00</option>
											<option value="03:30">03:30</option>
											<option value="04:00">04:00</option>
											<option value="04:30">04:30</option>
											<option value="05:00">05:00</option>
											<option value="05:30">05:30</option>
											<option value="06:00">06:00</option>
											<option value="06:30">06:30</option>
											<option value="07:00">07:00</option>
											<option value="07:30">07:30</option>
											<option value="08:00">08:00</option>
											<option value="08:30">08:30</option>
											<option value="09:00">09:00</option>
											<option value="09:30">09:30</option>
											<option value="10:00">10:00</option>
											<option value="10:30">10:30</option>
											<option value="11:00">11:00</option>
											<option value="11:30">11:30</option>
											<option value="12:00" selected="selected">12:00</option>
											<option value="12:30">12:30</option>
											<option value="13:00">13:00</option>
											<option value="13:30">13:30</option>
											<option value="14:00">14:00</option>
											<option value="14:30">14:30</option>
											<option value="15:00">15:00</option>
											<option value="15:30">15:30</option>
											<option value="16:00">16:00</option>
											<option value="16:30">16:30</option>
											<option value="17:00">17:00</option>
											<option value="17:30">17:30</option>
											<option value="18:00">18:00</option>
											<option value="18:30">18:30</option>
											<option value="19:00">19:00</option>
											<option value="19:30">19:30</option>
											<option value="20:00">20:00</option>
											<option value="20:30">20:30</option>
											<option value="21:00">21:00</option>
											<option value="21:30">21:30</option>
											<option value="22:00">22:00</option>
											<option value="22:30">22:30</option>
											<option value="23:00">23:00</option>
											<option value="23:30">23:30</option>
											<option value="24:00">24:00</option>
										</select>
											
										</label>
									</div>
									
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" id="pickcar" name="pickcar" value="" placeholder="Date reservation"/>
											

<script>
$(function() {
  $('input[name="pickcar"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: false,
  
  });
});
</script>
											
					  						<span class="border"></span>
										</label>
									</div>
									
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<select name="retur" id="retur" class="form-control" required>
												<option value="">Choose Return To</option>
												<option value="CGK">Soekarno–Hatta International Airport(CGK)</option>
												<option value="JK2">Jakarta Downtown(JK2)</option>
												<option value="SUB">Surabaya(SUB)</option>
												<option value="DPS">Denpasar Bali(DPS)</option>
												<option value="JOG">Jogyakarta Downtown(JOG)</option>
											</select>
											
										</label>
									</div>
									<script type="text/javascript">
										$(document).ready(function(){
											$( "#retur" ).autocomplete({
											  source: "<?php echo site_url('frontpage/get_autocomplete/?');?>"
											});
										});
									</script>
									<div class="form-holder">
										<label class="form-row-inner">
											<select name="return_day" id="return_day" >
											<option value="00:00">midnight(00:00)</option>
											<option value="00:30">00:30</option>
											<option value="01:00">01:00</option>
											<option value="01:30">01:30</option>
											<option value="02:00">02:00</option>
											<option value="02:30">02:30</option>
											<option value="03:00">03:00</option>
											<option value="03:30">03:30</option>
											<option value="04:00">04:00</option>
											<option value="04:30">04:30</option>
											<option value="05:00">05:00</option>
											<option value="05:30">05:30</option>
											<option value="06:00">06:00</option>
											<option value="06:30">06:30</option>
											<option value="07:00">07:00</option>
											<option value="07:30">07:30</option>
											<option value="08:00">08:00</option>
											<option value="08:30">08:30</option>
											<option value="09:00">09:00</option>
											<option value="09:30">09:30</option>
											<option value="10:00">10:00</option>
											<option value="10:30">10:30</option>
											<option value="11:00">11:00</option>
											<option value="11:30">11:30</option>
											<option value="12:00" selected="selected">12:00</option>
											<option value="12:30">12:30</option>
											<option value="13:00">13:00</option>
											<option value="13:30">13:30</option>
											<option value="14:00">14:00</option>
											<option value="14:30">14:30</option>
											<option value="15:00">15:00</option>
											<option value="15:30">15:30</option>
											<option value="16:00">16:00</option>
											<option value="16:30">16:30</option>
											<option value="17:00">17:00</option>
											<option value="17:30">17:30</option>
											<option value="18:00">18:00</option>
											<option value="18:30">18:30</option>
											<option value="19:00">19:00</option>
											<option value="19:30">19:30</option>
											<option value="20:00">20:00</option>
											<option value="20:30">20:30</option>
											<option value="21:00">21:00</option>
											<option value="21:30">21:30</option>
											<option value="22:00">22:00</option>
											<option value="22:30">22:30</option>
											<option value="23:00">23:00</option>
											<option value="23:30">23:30</option>
											<option value="24:00">24:00</option>
										</select>
											
										</label>
									</div>
									
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" id="returncar" name="returncar" value="" placeholder="Date reservation"/>
											

<script>
$(function() {
  $('input[name="returncar"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: false,
  
  });
});
</script>
											
					  						<span class="border"></span>
										</label>
									</div>
									
								</div>
								<i class="notes">AVAILABLE DELIVERY SERVICE AT SPECIAL COST FOR RETURNING AT DIFFERENT LOCATION AS PICK UP</i>
								<!--<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" id="daterange" name="daterange" value="" placeholder="Date reservation"/>
											

<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
	 autoApply: true,
	 locale:'id',
     format:'DD/MMM/YYYY',
     opens: 'up'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
											
					  						<span class="border"></span>
										</label>
									</div>
								
									
								</div>-->
								
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Select a Car</span>
			            </h2>
						
			            <section>
			                <div class="inner">
			                	<h3>Confirm Details:</h3>
			                	<div class="form-row">
									<div class="form-holder">
										<label>Pick-up</label>
									</div>
									<div class="form-holder">
										<label id="enter-val"></label>
									</div>
									<div class="form-holder">
										<label id="splitdatestart-val"></label>
										<label id="enter_day-val"></label>
									</div>
									<div class="form-holder form-holder-1">
										
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label>Return</label>	
									</div>
									<div class="form-holder">
										<label id="retur-val"></label>
									</div>
									<div class="form-holder">
										<label id="splitdateend-val"></label>
										<label id="return_day-val"></label>
									</div>
									<div class="form-holder form-holder-1">
										<label id="aa"></label>
										<label id="calcday-val"></label> Day(s)
									</div>

								</div>
								<div class="form-row">
									<div class="form-holder">
										
									</div>
								</div>
								
								<div class="form-row">

									<div class="form-check">
										<input class="form-check-input" name="car_select" type="radio" value="innova" id="innova" checked>
									</div>

										<div class="form-holder">
										<radio>
										<label class="form-check-label" for="innova"><img src="images/innova.jpg" alt="pay-2" width="190px" ></label>
										</div>
										<div class="form-holder">
													<div class="form-row">
														<div class="form-holder">
															<label>Toyota Innova</label>
														</div>
														<div class="form-holder">
															<label>6 seat(s)</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Engine Capacity</label>
														</div>
														<div class="form-holder">
															<label>2000cc / 2 L</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Fuel</label>
														</div>
														<div class="form-holder">
															<label>Gasoline</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Size</label>
														</div>
														<div class="form-holder">
															<label>Medium</label>
														</div>
													</div>
													
													<div class="form-row">
														<div class="form-holder">
															<label>Price</label>
														</div>
														<div class="form-holder">
															<label>Rp 825.000</label>
														</div>
													</div>
													
													<div class="form-row">
															<label><i class="notes">One way service available between cities, place</i></label>
													</div>
										</div>
									
			                	</div>

													<div class="form-row">
														<div class="form-holder">
															<label>&nbsp;</label>
														</div>
														<div class="form-holder">
															<label></label>
														</div>
													</div>

								<div class="form-row">
									<div class="form-check">
									<input class="form-check-input" name="car_select" type="radio" value="avanza" id="avanza">
									</div>

			                		<div class="form-holder">
									
									<label class="form-check-label" for="avanza"><img src="images/avanza.jpeg" alt="pay-2" width="190px" ></label>
			                		</div>
									<div class="form-holder">
												<div class="form-row">
													<div class="form-holder">
														<label>Toyota Avanza</label>
													</div>
													<div class="form-holder">
														<label>6 seat(s)</label>
													</div>													
												</div>

												<div class="form-row">
													<div class="form-holder">
														<label>Engine Capacity</label>
													</div>
													<div class="form-holder">
														<label>1500cc / 1.5 L</label>
													</div>
												</div>

												<div class="form-row">
													<div class="form-holder">
														<label>Fuel</label>
													</div>
													<div class="form-holder">
														<label>Gasoline</label>
													</div>
												</div>

												<div class="form-row">
														<div class="form-holder">
															<label>Size</label>
														</div>
														<div class="form-holder">
															<label>Small</label>
														</div>
												</div>
												
												<div class="form-row">
														<div class="form-holder">
															<label>Price</label>
														</div>
														<div class="form-holder">
															<label>Rp 625.000</label>
														</div>
													</div>
													
												<div class="form-row">
													<label><i class="notes">One way service available between cities, place</i></label>
												</div>
			                		</div>
									
			                	</div>					
								<i class="notes">Rental charges based on 24-hour start from pick up time. If you rent more than 5 hours from pick up time, it will be calculated as 1 day rental.</i>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-text">Rental Options</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Payment Information:</h3>
								
								<div class="form-row">
			                		<div class="form-holder">
			                			<label>Pick-up</label>
			                		</div>
									<div class="form-holder">
										<label id="enter-val2"></label>
			                		</div>
									<div class="form-holder">
										<label id="splitdatestart-val2"></label>
										<label id="enter_day-val2"></label>
									</div>
									<div class="form-holder form-holder-1">
									<label id="selcar" name="selcar"></label>
									<input type="hidden" id="sel_car" name="sel_car" >
									
									</div>
			                	</div>
								<div class="form-row">
			                		<div class="form-holder">
										<label>Return</label>
			                		</div>
									<div class="form-holder">
			                			<label id="retur-val2"></label>
			                		</div>
									<div class="form-holder">
										<label id="splitdateend-val2"></label>
										<label id="return_day-val2"></label>
									</div>
									<div class="form-holder form-holder-1">
										<!--<label id="calcday-val2"></label> Day(s)-->
										<label id="ss"></label>
			                		</div>
									
			                	</div>
								<div class="form-row">
									<div class="form-holder">
									<input type="hidden" id="price_val" name="price_val" >
									</div>
								</div>

								<div class="form-row" id="divinnova">
									<div class="form-holder">
										<img src="images/innova.jpg" alt="pay-2" width="190px" >
										</div>
										<div class="form-holder">
													<div class="form-row">
														<div class="form-holder">
															<label>Toyota Innova</label>
														</div>
														<div class="form-holder">
															<label>6 seat(s)</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Engine Capacity</label>
														</div>
														<div class="form-holder">
															<label>2000cc / 2 L</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Fuel</label>
														</div>
														<div class="form-holder">
															<label>Gasoline</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Size</label>
														</div>
														<div class="form-holder">
															<label>Medium</label>
														</div>
													</div>
													
													<div class="form-row">
														<div class="form-holder">
															<label>Price</label>
														</div>
														<div class="form-holder">
															<label>Rp 825.000</label>
															<input type="hidden" id="pricecar_val" name="pricecar_val" >
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Day</label>
														</div>
														<div class="form-holder">
															<label id="calcday-txt"></label> Day(s)
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Total</label>
														</div>
															<div class="form-holder">
															Rp <label id="calcdayscar_txt"></label>
															
														</div>
													</div>

													<div class="form-row">
														<label><i>One way service available between cities, place</i></label>
													</div>
										</div>
									
			                	</div>


								<div class="form-row" id="divavanza">
									<div class="form-holder">
										<img src="images/avanza.jpeg" alt="pay-2" width="190px" >
										</div>
										<div class="form-holder">
													<div class="form-row">
														<div class="form-holder">
															<label>Toyota Avanza</label>
														</div>
														<div class="form-holder">
															<label>6 seat(s)</label>
														</div>														
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Engine Capacity</label>
														</div>
														<div class="form-holder">
															<label>1500cc / 1.5 L</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Fuel</label>
														</div>
														<div class="form-holder">
															<label>Gasoline</label>
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Size</label>
														</div>
														<div class="form-holder">
															<label>Small</label>
														</div>
													</div>
													
													<div class="form-row">
														<div class="form-holder">
															<label>Price</label>
														</div>
														<div class="form-holder">
															<label>Rp 625.000</label>
															<input type="hidden" id="pricecar_val" name="pricecar_val" >
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Day</label>
														</div>
														<div class="form-holder">
															<label id="calcday-txt2"></label> Day(s)
														</div>
													</div>

													<div class="form-row">
														<div class="form-holder">
															<label>Total</label>
														</div>
															<div class="form-holder">
															Rp <label id="calcdayscar_txt2"></label>
															
														</div>
													</div>
													
													<div class="form-row">
														<label><i>One way service available between cities, place</i></label>
													</div>
										</div>
									
			                	</div>

								
			                	<!--<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="s_req" name="s_req" >
											<span class="label">Special Request</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>-->
			              
							</div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Your Information
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Confirm Details:</h3>
								<br>

								<div class="form-row">
									<div class="form-holder">	
										<label class="form-row-inner">									
											<select name="salutat" id="salutat" class="form-control" required>
												<option value="">Saturation</option>
												<option value="Mr">Mr</option>
												<option value="Mrs">Mrs</option>
												<option value="Ms">Ms</option>
												<option value="Miss">Miss</option>
											</select>
											<span class="label">Saturation</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
			                	<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="f_name" name="f_name" value="tom" required>
											<span class="label">First Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="m_name" name="m_name ">
											<span class="label">Middle Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="l_name" name="l_name" value="cruize" required>
											<span class="label">Last Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="email" name="email" value="tes@sd.com" required>
											<span class="label">Email Addres*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<label class="form-row-inner">										
											<input type="text" id="address" name="address" class="form-control" value="sawangan" required>						 
											<span class="label">Home Addres*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="m_phone" name="m_phone" value="+363456464" required>
											<span class="label">Customer WhatsApp*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="flight_number" name="flight_number" value="GA-3453" required>
											<span class="label">Flight Number*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								</div>
								
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
</body>
</html>