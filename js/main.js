$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Previous',
            next : 'Next Step',
            finish : 'Submit',
            current : ''
        },
		
		
		onStepChanging: function (event, currentIndex, newIndex) { 
           
			//var splitdate = $('#daterange').val().split(' - ');
			
			var pickcar = $('#pickcar').val();
            var returncar = $('#returncar').val();			
            var enter = $('#enter_pickup').val();
            var enter_day = $('#enter_day').val();
            var retur = $('#retur').val();
			var return_day = $('#return_day').val();
			var daterange = $('#daterange').val();	
            var sel_car = $("input[name='car_select']:checked").val();
			
			
			var monthMap = {
			  "Jan": 0,
			  "Feb": 1,
			  "Mar": 2,
			  "Apr": 3,
			  "May": 4,
			  "Jun": 5,
			  "Jul": 6,
			  "Aug": 7,
			  "Sep": 8,
			  "Oct": 9,
			  "Nov": 10,
			  "Dec": 11
			};
			
			const ArrPick = pickcar.split("/");
			var day = parseInt(ArrPick[0], 10);
			var month = ArrPick[1];
			var year = parseInt(ArrPick[2], 10);			
			var monthNumber = monthMap[month];
			//time
			const ArrPickDay = enter_day.split(":");
			var hour = ArrPickDay[0];
			var minute = ArrPickDay[1];
			
			var Pickdatecar =new Date(year,monthNumber,day,hour,minute);
			//-------------------------------------------------------
			const ArrReturn = returncar.split("/");
			var day2 = parseInt(ArrReturn[0], 10);
			var month2 = ArrReturn[1];
			var year2 = parseInt(ArrReturn[2], 10);			
			var monthNumber2 = monthMap[month2];
			//time
			const ArrReturnDay = return_day.split(":");
			var hour2 = ArrReturnDay[0];
			var minute2 = ArrReturnDay[1];
			
			var returcar =new Date(year2,monthNumber2,day2,hour2,minute2);
			//alert(Pickdatecar);
			var now = new Date(Pickdatecar);
			var bitDate = new Date(returcar);
			
			//var now = new Date(2020,0,18,10,45);		
			//var bitDate = new Date(2020,0,18,11,00);
			console.log(now);
			console.log(bitDate);
			
			var n 		= now-bitDate;
			var detik	= Math.round(n/1000);
			var menit	= Math.round(detik/60);
			var jam		= Math.round(menit/60);
			var hari	= Math.round(jam/24);
			var minggu	= Math.round(hari/7);
			var waktu;
			
			if(detik < 60 && detik >= 0){waktu=detik+'s';}
			else if(menit < 60){waktu=menit+'m';}
			else if(jam < 24){waktu=jam+'h';}
			else if(hari < 7){waktu=hari+'d';}
			else {waktu=minggu+'w';}
			var resultString = waktu.replace(/[-m]/g, '');
			//console.log(resultString);
			//var totalMenit = waktu;
			//console.log(waktu);
			// Hitung jumlah hari
			var jumlahHari = Math.floor(resultString / (24 * 60));

			// Sisa menit setelah menghitung jumlah hari
			var sisaMenit = resultString % (24 * 60);

			// Hitung jumlah jam dari sisa menit
			var jumlahJam = Math.floor(sisaMenit / 60);

			// Sisa menit setelah menghitung jumlah jam
			var sisaMenitAkhir = sisaMenit % 60;
			
			if(jumlahJam > 5)
			{
				var addDay = jumlahHari + 1;
				var days = addDay;
			} else {
				var days = jumlahHari;
			}
			// Output hasil
			//console.log("Jumlah Hari:", jumlahHari, "hari");
			//console.log("Jumlah Jam:", jumlahJam, "jam");
			//console.log("Sisa Menit:", sisaMenitAkhir, "menit");

			//var diff = new Date(end - start);
			//var days = diff / 1000 / 60 / 60 / 24;
			
			
			
			if (enter == "") {
				alert("Enter Pickup");
				enter.focus();
				return false;
			} else if (retur == "") {
				alert("Enter Return");
				retur.focus();
				return false;
			} else if (now == "") {
				alert("Enter Start");
				now.focus();
				return false;
			} else if (bitDate == "") {
				alert("Enter End");
				bitDate.focus();
				return false;
			} else if (bitDate < now) {
				alert('Return date cannot be smaller than pickup date');
				return false;
			}

			$('#splitdatestart-val').text(pickcar);
            $('#splitdateend-val').text(returncar);
			$('#splitdatestart-val2').text(pickcar);
            $('#splitdateend-val2').text(returncar);				
            $('#enter-val').text(enter);
			$('#enter-val2').text(enter);
            $('#enter_day-val').text(enter_day);
			$('#enter_day-val2').text(enter_day);
            $('#retur-val').text(retur);
			$('#retur-val2').text(retur);
            $('#return_day-val').text(return_day);
			$('#return_day-val2').text(return_day);
            $('#daterange-val').text(daterange);
			$('#calcday-val').text(days);
			$('#calcday-val2').text(days);

			$('#calcday-txt').text(days);
			$('#calcday-txt2').text(days);

			
			$('#selcar').text(sel_car);
			$('#sel_car').val(sel_car);
			$('#calcday-txt').text(days);
			//alert(sel_car);
			if(sel_car == "innova"){
				$('#divinnova').show();
				$('#divavanza').hide();
				
				var pricecar = 825000;
				var calcdayscar = days * pricecar ;				
				var outputrp = calcdayscar.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
				$('#calcdayscar_txt').text(outputrp);
				$('#pricecar_val').val(pricecar);
				$('#price_val').val(calcdayscar);
				$('#day_txt').text(days);

			} else if(sel_car == "avanza"){
				$('#divavanza').show();
				$('#divinnova').hide();

				var pricecar = 625000;
				var calcdayscar = days * pricecar ;
				var outputrp = calcdayscar.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
				$('#calcdayscar_txt2').text(outputrp);
				$('#pricecar_val').val(pricecar);
				$('#price_val').val(calcdayscar);
				$('#day_txt').text(days);
			}

			return true;
			
			 //var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
			//var gender = $('form input[type=radio]:checked').val();
            //var address = $('#address').val();

            //$('#fullname-val').text(fullname);
        },		
		onFinishing: function (event, currentIndex) { 
          
			var reservation_trx = $('#reservation_trx').val(); 
			//var splitdate = $('#daterange').val().split(' - ');
			var pickcar = $('#pickcar').val();
            var returncar = $('#returncar').val();
			var enter = $('#enter_pickup').val();
            var enter_day = $('#enter_day').val();
            var retur = $('#retur').val();
			var return_day = $('#return_day').val();
			var daterange = $('#daterange').val();
			
			var selectcar = $("input[name='car_select']:checked").val();
			var car_id = $('#sel_car').val();
            var id_country = $('#id_country').val();
			var price = $('#price_val').val();
			var pricecar = $('#pricecar_val').val();		
			
//			var start =new Date(pickcar);
//			var end =new Date(returncar);
//			var diff = new Date(end - start);
//			var days = diff / 1000 / 60 / 60 / 24;

		var monthMap = {
			  "Jan": 0,
			  "Feb": 1,
			  "Mar": 2,
			  "Apr": 3,
			  "May": 4,
			  "Jun": 5,
			  "Jul": 6,
			  "Aug": 7,
			  "Sep": 8,
			  "Oct": 9,
			  "Nov": 10,
			  "Dec": 11
			};
			
			const ArrPick = pickcar.split("/");
			var day = parseInt(ArrPick[0], 10);
			var month = ArrPick[1];
			var year = parseInt(ArrPick[2], 10);			
			var monthNumber = monthMap[month];
			//time
			const ArrPickDay = enter_day.split(":");
			var hour = ArrPickDay[0];
			var minute = ArrPickDay[1];
			
			var Pickdatecar =new Date(year,monthNumber,day,hour,minute);
			//-------------------------------------------------------
			const ArrReturn = returncar.split("/");
			var day2 = parseInt(ArrReturn[0], 10);
			var month2 = ArrReturn[1];
			var year2 = parseInt(ArrReturn[2], 10);			
			var monthNumber2 = monthMap[month2];
			//time
			const ArrReturnDay = return_day.split(":");
			var hour2 = ArrReturnDay[0];
			var minute2 = ArrReturnDay[1];
			
			var returcar =new Date(year2,monthNumber2,day2,hour2,minute2);
			//alert(Pickdatecar);
			var now = new Date(Pickdatecar);
			var bitDate = new Date(returcar);
			
			//var now = new Date(2020,0,18,10,45);		
			//var bitDate = new Date(2020,0,18,11,00);
			console.log(now);
			console.log(bitDate);
			
			var n 		= now-bitDate;
			var detik	= Math.round(n/1000);
			var menit	= Math.round(detik/60);
			var jam		= Math.round(menit/60);
			var hari	= Math.round(jam/24);
			var minggu	= Math.round(hari/7);
			var waktu;
			
			if(detik < 60 && detik >= 0){waktu=detik+'s';}
			else if(menit < 60){waktu=menit+'m';}
			else if(jam < 24){waktu=jam+'h';}
			else if(hari < 7){waktu=hari+'d';}
			else {waktu=minggu+'w';}
			var resultString = waktu.replace(/[-m]/g, '');
			//console.log(resultString);
			//var totalMenit = waktu;
			//console.log(waktu);
			// Hitung jumlah hari
			var jumlahHari = Math.floor(resultString / (24 * 60));

			// Sisa menit setelah menghitung jumlah hari
			var sisaMenit = resultString % (24 * 60);

			// Hitung jumlah jam dari sisa menit
			var jumlahJam = Math.floor(sisaMenit / 60);

			// Sisa menit setelah menghitung jumlah jam
			var sisaMenitAkhir = sisaMenit % 60;
			
			if(jumlahJam > 5)
			{
				var addDay = jumlahHari + 1;
				var days = addDay;
			} else {
				var days = jumlahHari;
			}
			
			
			var salutat = $('#salutat').val();
			var f_name = $('#f_name').val();
            var m_name = $('#m_name').val();
            var l_name = $('#l_name').val();
			var email = $('#email').val();
			var address = $('#address').val();
			var m_phone = $('#m_phone').val();
			var flight_number = $('#flight_number').val();
			var s_req = $('#s_req').val();
						
			$('#splitdatestart-val').text(pickcar);
			$('#splitdateend-val').text(returncar);
			$('#splitdatestart-val2').text(pickcar);
            $('#splitdateend-val2').text(returncar);			
            $('#enter-val').text(enter);
			$('#enter-val2').text(enter);
            $('#enter_day-val').text(enter_day);
			$('#enter_day-val2').text(enter_day);
            $('#retur-val').text(retur);
			$('#retur-val2').text(retur);
            $('#return_day-val').text(return_day);
			$('#return_day-val2').text(return_day);
            $('#daterange-val').text(daterange);
			$('#calcday-val').text(days);
			$('#calcday-val2').text(days);
			$('#id_country').text(id_country);	
			



			var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			
			if (f_name == "") {
				alert("First Name must be filled out");
				f_name.focus();
				return false;
			} else if (l_name == "") {
				alert("Last Name must be filled out");
				l_name.focus();
				return false;
			} else if (email == "") {
				alert("Email must be filled out");
				email.focus();
				return false;
			} else if((!ck_email.test(email)) && (email!='')){
				alert("Wrong Format Email");
				email.focus();
				return false;
			} else if (address == "") {
				alert("Addres must be filled out");
				address.focus();
				return false;
			} else if (m_phone == "") {
				alert("WhatsApp Number must be filled out");
				m_phone.focus();
				return false;
			} else if (flight_number == "") {
				alert("Flight Number must be filled out");
				flight_number.focus();
				return false;
			}
  
  
			$extDate=pickcar;
			$extEndDate=returncar;			
			//alert(pickcar);			
			var date = $extDate.split("/");
			var dateEnd = $extEndDate.split("/");
			var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
			for(var j=0;j<months.length;j++){
				if(date[1]==months[j]){
					 date[1]=months.indexOf(months[j])+1;
				 }                      
			}		
			for(var j=0;j<months.length;j++){
				if(dateEnd[1]==months[j]){
					 dateEnd[1]=months.indexOf(months[j])+1;
				 }                      
			}			
			if(date[1]<10){
				date[1]='0'+date[1];
			}
			if(dateEnd[1]<10){
				dateEnd[1]='0'+dateEnd[1];
			}			
			var splitdatestart = date[2]+'-'+date[1]+'-'+date[0];
			var splitdateend = dateEnd[2]+'-'+dateEnd[1]+'-'+dateEnd[0];			
			var datetime_pick = splitdatestart+' '+enter_day;
			var datetime_return = splitdateend+' '+return_day;
			//alert(car_id);
			$.ajax({
                    url : 'http://localhost/multisri_wizard/index.php/InsertData/simpan',
				//url : '/InsertData/simpan',					
                    method:'POST',
                    data:{
						reservation_trx:reservation_trx,
                        enter:enter,
                        retur:retur,
						enter_day:enter_day,
                        return_day:return_day,
						splitdatestart:splitdatestart,
                        splitdateend:splitdateend,
						car_id:car_id,
						price:price,
						pricecar:pricecar,
						day:days,
						salutat:salutat,
						f_name:f_name,
                        m_name:m_name,
						l_name:l_name,
                        email:email,
						address:address,
                        m_phone:m_phone,
						flight_number:flight_number,
						id_country:id_country,
						datetime_pick:datetime_pick,
						datetime_return:datetime_return,
						s_req:s_req
                    },
                   success:function(data){
                       alert('Your data has Been Sent to us');
					   //var url = "/Doctor/ViewFile/" + getdoctorId;
					  var url = "index.php/summary/detil/" + reservation_trx;
					  window.open(url, "_self");
				
                   }
                });
				
			
 
            return true;
			
			 //var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
			//var gender = $('form input[type=radio]:checked').val();
            //var address = $('#address').val();
            //$('#fullname-val').text(fullname);
        }
		
	});
	
		
    $("#date").datepicker({
        dateFormat: "DD - MM - YYYY",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });
});
