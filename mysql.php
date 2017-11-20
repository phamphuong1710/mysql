<?php

	try{
		if(isset($_POST['submit'])){
			$error=[];
			$name=isset($_POST['name']) ? $_POST['name'] : '';
			$gender=isset($_POST['gender']) ? $_POST['gender'] : '';
			$brithday=isset($_POST['brithday']) ? $_POST['brithday'] : '';
			$position =isset($_POST['position']) ? $_POST['position'] : '';
			$phone=isset($_POST['phone']) ? $_POST['phone'] : '';
			if($name == ''){
				$error['name']='Yêu cầu nhập họ và tên';
				echo $error['name']."<br>";
			} 
			if($gender == ''){
				$error['gender']='Yêu cầu nhập giới tính';
				echo $error['gender']."<br>";
			} 
			if($brithday== ''){
				$error['brithday']='Yêu cầu nhập ngày sinh';
				echo $error['brithday']."<br>";
			} 
			if($position == ''){
				$error['position']='Yêu cầu nhập chức vụ';
				echo $error['position']."<br>";
			} 
			if($phone == ''){
				$error['phone']='Yêu cầu nhập số điện thoại';
				echo $error['phone']."<br>";
			} 
			if(empty($error)){
				$host="localhost";
				$username="root";
				$password="";
				$dbname="danhsachnhanvien";
				$connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
				$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$mysql = "INSERT INTO nhanvien(name,gender,brithday,position,phone)
							VALUES('$name','$gender','$brithday','$position','$phone')";
				$connect->exec($mysql);
				echo "thêm vào thành công";
			}
		}
	}
	catch(Expection $e){
		echo "ket noi loi".$e->getMessage();
	} 
 ?>