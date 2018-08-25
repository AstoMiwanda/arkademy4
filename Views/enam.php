<!DOCTYPE html>
<html>
<head>
	<title>Arkademy Enam</title>
</head>
<body>
	<table>
		<?php foreach ($title as $value): ?>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><?php echo $value['title']; ?></td>
			</tr>
		<?php endforeach ?>

		<?php foreach ($username as $value): ?>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo "dibuat oleh ".$value['username']; ?></td>
			</tr>
		<?php endforeach ?>
		<tr>
			<td>Comments</td>
			<td>:</td>
			<td>
				<?php foreach ($comments as $value): ?>
					<?php echo $value['comment']."<br>"; ?>
				<?php endforeach ?>
			</td>
		</tr>
	</table>

</body>
</html>