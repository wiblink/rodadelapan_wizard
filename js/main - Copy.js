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
           
			var splitdate = $('#daterange').val().split(' - ');			
            var enter = $('#enter_pickup').val();
            var enter_day = $('#enter_day').val();
            var retur = $('#retur').val();
			var return_day = $('#return_day').val();
			var daterange = $('#daterange').val();	
            
			//var tes = 'aaada tes';	
			var start =new Date(splitdate[0]);
			var end =new Date(splitdate[1]);
			var diff = new Date(end - start);
			var days = diff / 1000 / 60 / 60 / 24;
//alert(days);		
			
			$('#splitdatestart-val').text(splitdate[0]);
            $('#splitdateend-val').text(splitdate[1]);
			$('#splitdatestart-val2').text(splitdate[0]);
            $('#splitdateend-val2').text(splitdate[1]);				
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
			

            return true;
			
			 //var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
			//var gender = $('form input[type=radio]:checked').val();
            //var address = $('#address').val();

            //$('#fullname-val').text(fullname);
        },
		
		
		onFinishing: function (event, currentIndex) { 
          
			var reservation_trx = $('#reservation_trx').val();
			var splitdate = $('#daterange').val().split(' - ');
            var enter = $('#enter_pickup').val();
            var enter_day = $('#enter_day').val();
            var retur = $('#retur').val();
			var return_day = $('#return_day').val();
			var daterange = $('#daterange').val();
			var car_id = $('#car_id').val();		
            var id_country = $('#id_country').val();
			
			var start =new Date(splitdate[0]);
			var end =new Date(splitdate[1]);
			var diff = new Date(end - start);
			var days = diff / 1000 / 60 / 60 / 24;

			var f_name = $('#f_name').val();
            var m_name = $('#m_name').val();
            var l_name = $('#l_name').val();
			var email = $('#email').val();
			var address = $('#address').val();
			var m_phone = $('#m_phone').val();
			
			$('#splitdatestart-val').text(splitdate[0]);
            $('#splitdateend-val').text(splitdate[1]);
			$('#splitdatestart-val2').text(splitdate[0]);
            $('#splitdateend-val2').text(splitdate[1]);				
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
			}
  
			$extDate=splitdate[0];
			$extEndDate=splitdate[1];
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
			
			$.ajax({
                    url : 'http://localhost/multisri_wizard/index.php/InsertData/simpan',				
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
						f_name:f_name,
                        m_name:m_name,
						l_name:l_name,
                        email:email,
						address:address,
                        m_phone:m_phone,
						id_country:id_country
                    },
                   success:function(data){
                       alert('Your data has Been Sent to us');
					   //var url = "/Doctor/ViewFile/" + getdoctorId;
					   var url = "reservation/Summary/";
                window.open(url, "_self");
				
					  // window.location = "//www.aspsnippets.com/";
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
