<?php
$conn = new mysqli('localhost', 'root', '', 'multiwizard');


$parData=$_GET['data'];

if($parData=='resv'){
	$reservation_trx=$_POST['reservation_trx'];
	$enter_pickup=$_POST['enter'];
	$retur=$_POST['retur'];
	$enter_day=$_POST['enter_day'];
	$return_day=$_POST['return_day'];
	$splitdatestart=$_POST['splitdatestart'];
	$splitdateend=$_POST['splitdateend'];
	$car_id=$_POST['car_id'];
		
	$f_name=$_POST['f_name'];
	$m_name=$_POST['m_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$m_phone=$_POST['m_phone'];
	
	$sql="INSERT INTO reservation (reservation_trx, enter_pickup, retur, enter_day, return_day, splitdatestart, splitdateend, car_id) 
						   VALUES ('$reservation_trx', '$enter_pickup', '$retur', '$enter_day', '$return_day', '$splitdatestart', '$splitdateend', '$car_id')";
	if ($conn->query($sql) === TRUE) {
		echo "data inserted";
	}
	else 
	{
		echo "failed";
	}
	
	$chars = "abcdefghijkmnopqrstuvwxyz0123456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
		while ($i <= 9) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		$tgl_input=date('Y-m-d');
	$sqla="INSERT INTO costumer (reservation_trx, username, f_name, m_name, l_name, email, address, m_phone, tgl_input) 
						   VALUES ('$reservation_trx', '$pass', '$f_name', '$m_name', '$l_name', '$email', '$address', '$m_phone' ,'$tgl_input')";
						   #die(print_r($sqla));
	if ($conn->query($sqla) === TRUE) {
		echo "data costumer inserted";
	}
	else 
	{
		echo "failed";
	}

}




?>