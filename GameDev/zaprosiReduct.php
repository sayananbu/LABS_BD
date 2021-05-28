<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<style>
		::-webkit-scrollbar-button {
		background-image:url('');
		background-repeat:no-repeat;
		width:6px;
		height:0px
		}

		::-webkit-scrollbar-track {
		background-color:#32312e;
		box-shadow:0px 0px 3px #000 inset;
		}

		::-webkit-scrollbar-thumb {
		-webkit-border-radius: 5px;
		border-radius: 5px;
		background-color:#ffcb17;
		box-shadow:0px 1px 1px #fff inset;
		//background-image:url('https://yraaa.ru/_pu/24/59610063.png');
		background-position:center;
		background-repeat:no-repeat;
		}

		::-webkit-resizer{
		background-image:url('');
		background-repeat:no-repeat;
		width:7px;
		height:0px
		}

		::-webkit-scrollbar{
		width: 11px;
}
	</style>
</head>
<body>
	<div class="menu">
				<!-- <div class="stat-block"><a href="menu.php" target="menu-page" id="back"><--Назад</a><hr class="red-hr"></div> -->

			<ul class="list">
					 <?php 
						if($_SESSION['user']=='moderator'||$_SESSION['user']=='root'):
					 ?>
					 
					<li><a href="zapros/insertForm.html" target="main-page">Добавить исполнителя</a></li>
					<hr>
					<li><a href="zapros/updateForm.html" target="main-page">Обновить рейтинг</a></li>
					
					<?php endif; ?>
					
					<?php 
						if($_SESSION['user']=='root'):
					?>
					<hr>
					<li><a href="zapros/deleteForm.html" target="main-page">Удалить исполнителя</a></li>
					<hr>
					<li><a href="zapros/updateCost.html" target="main-page">Обновить стоимость игры</a></li>

					<?php endif; ?>
				</ul>
	</div>
</body>
</html>
					