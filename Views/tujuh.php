<!DOCTYPE html>
<html>
<head>
	<title>Arkademy Tujuh</title>
	<style type="text/css">
	body{
		width: 100%;
		margin: 0;
		font-family: sans-serif;
	}
	#header{
		width: 100%;
		height: 55px;
		background-color: #3366cc;
	}
	#header .header{
		width: 80%;
		margin: auto;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	#header .menu{
		width: 30%;
		height: 55px;
	}
	#header .menu ul{
		display: flex;
		margin-top: 20px;
		justify-content: space-between;
	}
	#header .menu ul li {
		list-style: none;
	}
	#header .menu ul li a{
		text-decoration: none;
		color: #fff;
		font-size: 11pt;
	}
	#header .menu ul li a:hover{
		color: #aaa;
	}
	#header .menu ul li a:active{
		color: #aaa;
	}
	#header .cari{
		width: 3	0%;
		height: 55px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	#header .formCari{
		border: none;
		border-radius: 3px;
		background-color: #f4f6fb;
		padding: 7px 15px;
		font-size: 12px;
	}
	#header .submitCari{
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		border: none;
		border-radius: 5px;
		background-color: rgba(1,1,1,0);
		width: 19px;
		height: 20px;
		margin-left: 10px;
	}
	#header .submitCari:hover{
		opacity: .8;
		cursor: pointer;
	}

	#content{
		width: 100%;
		margin: 0;
	}
	#content h1{
		font-size: 18pt;
		color: #222;
		text-align: center;
		margin-top: 50px;
	}
	#content .berita{
		width: 60%;
		margin: 50px auto;
		border-radius: 5px;
	}
	#content .img-berita{
		width: 100%;
		height: 400px;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	#content .berita-img{
		width: 100%;
		height: 400px;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	#content .content-berita{
		width: calc(100% - 50px);
		padding: 25px;
		height: 200px;
		background-color: #fafafa;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
	}
	#content .status-penulis{
		height: 12px;
		width: 12px;
		background-color: #3366cc;
		margin-right: 8px;
	}
	#content .content-berita h2{
		font-size: 18pt;
		color: #222;
		margin-bottom: 8px;
	}
	#content .content-berita h3{
		font-size: 11pt;
		color: #444;
		margin: 0;
	}
	#content .content-berita p{
		margin-top: 35px;
		font-size: 12pt;
		color: #aaa;

	}
</style>
</head>
<body>

	<div id="header">
		<div class="header">
			<div class="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Berita</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Kontak</a></li>
				</ul>
			</div>

			<div class="cari">
				<form action="POST">
					<input type="text" name="cari" class="formCari" placeholder="Cari">
					<input type="submit" value="&nbsp" class="submitCari" style="background-image: url('./assets/cari.png');">
				</form>
			</div>
		</div>
	</div>

	<div id="content">
		<h1>Berita Hari Ini</h1>

		<?php
		for ($i=0; $i < 4; $i++) { ?>
			<div class="berita">
				<div class="img-berita">
					<img src="./assets/berita.jpg" class="berita-img">
				</div>
				<div class="content-berita">
					<?php foreach ($title as $value): ?>
						<h2><?php echo $value['title'] ?></h2>
					<?php endforeach ?>
					<?php foreach ($username as $value): ?>
						<div style="display: flex; align-items: center;">
							<div class="status-penulis"></div>
							<h3><?php echo $value['username'] ?></h3>
						</div>
					<?php endforeach ?>
					<?php foreach ($title as $value): ?>
						<p><?php echo $value['content'] ?></p>
					<?php endforeach ?>
				</div>
			</div>
		<?php } ?>
	</div>

</body>
</html>