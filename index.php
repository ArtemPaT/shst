<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		@font-face {
		    font-family: font1; 
		    src: url(20011.ttf);
		   }
		.fonty-font {
			font-family: font1;
		}
	</style>
</head>
<body class="bg-info">
	<?php 
		$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'project1');
		$con_table = mysqli_query($con_bd, 'SELECT * FROM tovari');
		$table_count = mysqli_num_rows($con_table);
		$result1 = $con_table -> fetch_assoc();
		$result2 = $con_table -> fetch_assoc();
		$result3 = $con_table -> fetch_assoc();
	 ?>
	<div class="col-12" style="height: 80px;">
		<div class="col-12 mx-auto pr-0 pl-0" style="height: 80px;">
			<div class="row">
				<div class="col-1 border border-dark pl-0 pr-0" style="height: 80px">
					<img src="phpred.png" class="w-100 h-100">
				</div>
				<div class="fonty-font col-7 bg-dark" style="height: 80px;">
					<div class="row text-center">
						<div class="col-3 border-right border-white" >
							<h3><a href="" class="">Лучшее</a></h3>
						</div>
						<div class="col-3 border-left border-white">
							<h3><a href="" class="">Каталог</a></h3>
						</div>
						<div class="col-3 border-left border-white">
							<h3><a href="" class="">Худшее</a></h3>
						</div>
						<div class="col-3 border-left border-right border-white">
							<h3><a href="" class="">Корзина</a></h3>
						</div>
					</div>
					
				</div>
				<div class="col-4 bg-dark border border-dark fonty-font" style="height: 80px;">
					<form action="admin.php" method="GET"> 
						<button class="btn btn-info border">Админ-панель</button>
					</form>
				</div>
			</div>
			
		</div>
		
	</div>
	<div class="col-12 mt-3 bg-secondary" style="height: 450px;">
		<div class="col-10 mx-auto pr-0 pl-0" style="height: 450px;">
			<div class="row fonty-font">
				<div class="col-7 bg-dark border border-dark text-white" style="background-image: url(cybertrack.png); height: 450px;">
					<div class="ml-3 mt-5">
						<h1>Не магазин</h1>
						<h1>Не Интернет</h1>
					</div>
					<h2 class="text-right mt-5">
						Зачем ты тут вообще?
					</h2>
				</div>
				<div class="col-5 bg-primary border border-dark text-danger" style="background-image: url(Снимок.PNG); background-size: 100%; height: 450px;">
					<div class="ml-3 mt-5">
						<h1 class="mt-5">Что ты тут забыл?..</h1>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-10 mx-auto mt-3">
			<div class="col-12 ">
				<div class="row border-top border-down">
					<div class="col-4 p-3">
						<?php  
							echo "<img src='". $result1["img"] ."' class='w-100'>
							<p class='font-weight-bold'>". $result1["name"] ."</p>
							<p>". $result1["text"] ."</p>
							<p>". $result1["price"] ."</p>";
						?>
						<button class='btn btn-success'>Купить</button>
					</div>	
					<div class='col-4 p-3 border-left'>
						<?php  
							echo "<img src='". $result2["img"] ."' class='w-100'>
							<p class='font-weight-bold'>". $result2["name"] ."</p>
							<p>". $result2["text"] ."</p>
							<p>". $result2["price"] ."</p>";
						?>
						<button class='btn btn-success'>Купить</button>
					</div>
					<div class='col-4 p-3 border-left '>
						<?php  
							echo "<img src='". $result3["img"] ."' class='w-100'>
							<p class='font-weight-bold'>". $result3["name"] ."</p>
							<p>". $result3["text"] ."</p>
							<p>". $result3["price"] ."</p>";
						?>
						<button class='btn btn-success'>Купить</button>
					</div>
				</div>
			</div>
			<div class="col-12 ">
				<div class="row border-top border-down">
					
						<?php  
						for ($i=3; $i < $table_count; $i++) {
							$result = $con_table -> fetch_assoc();
							if ($result["name"] != null) {
								echo "<div class='col-4 p-3'>
									<img src='". $result["img"] ."' class='w-100'>
									<p class='font-weight-bold'>". $result["name"] ."</p>
									<p>". $result["text"] ."</p>
									<p>". $result["price"] ."</p>
									<button class='btn btn-success'>Купить</button>
								</div>	";
							}
							
							
						}
						?>
				</div>
			</div>
	</div>
</body>
</html>