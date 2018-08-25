<!DOCTYPE html>
<html>
<head>
	<title>Arkademy Dua</title>
</head>
<body>

	<?php
	$error = array();

	if (isset($_POST['submit'])) {
		if ($_POST['username'] == "" ) {
			$error['username'] = "Nama Belum Dimasukan !!";
		}
		if ($_POST['email'] == "") {
			$error['email'] = "E-mail Belum Dimasukan !!";
		}
		if ($_POST['phone_number'] == "") {
			$error['phone_number'] = "Phone Number Belum Dimasukan !!";
		}
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
	}else {
		$username = "";
		$email = "";
		$phone_number = "";
		$error['username'] = "";
		$error['email'] = "";
		$error['phone_number'] = "";
	}

	?>

	<table><form method="POST">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td style="color: red;"><?php echo $error['username']; ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td style="color: red;"><?php echo $error['email']; ?></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td>:</td>
			<td><input type="text" name="phone_number"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td style="color: red;"><?php echo $error['phone_number']; ?></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><input type="submit" value="Submit">
				<input type="reset" value="Reset"></td>
			</tr>
		</form></table>

		<div style="margin-top: 100px;">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><?php echo $username;?></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>:</td>
					<td><?php echo $email; ?></td>
				</tr>
				<tr>
					<td>Phono Number</td>
					<td>:</td>
					<td><?php echo $phone_number; ?></td>
				</tr>
			</table>
		</div>

	</body>
	</html>