<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="mysql.php" method="POST">
		<table>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" value="" name="name"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" value="0" name="gender">Nam
					<input type="radio" value="1" name="gender">Nữ
				</td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td><input type="date" value="" name="brithday"></td>
			</tr>
			<tr>
				<td>Chức vụ</td>
				<td><input type="text" value="" name="position"></td>
			</tr>
			<tr>
				<td>SĐT</td>
				<td><input type="text" value="" name="phone"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>				
</body>
</html>