<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing</title>

	<!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- flipclick -->
    <link href="/vendor/flipclock/css/flipclock.css" rel="stylesheet" type="text/css">

    <link href="/dist/css/landing.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		// Тестовые данные
		$order_name = 'Олег';
		$order_id = "0001";
		$order_percent = 72;
		$order_client_address = "Севастополь";

		$goods_array = [
			['good_id' => 1, 'good_name' => 'Часы Браво', 'good_description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 'good_images' => [
				['src' => '/image/test/test_1.png'],['src' => '/image/test/test_2.png'],['src' => '/image/test/test_3.png'],['src' => '/image/test/test_4.png']
			]],
			['good_id' => 2, 'good_name' => 'Часы Браво', 'good_description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 'good_images' => [
				['src' => '/image/test/test_1.png'],['src' => '/image/test/test_2.png'],['src' => '/image/test/test_3.png'],['src' => '/image/test/test_4.png'],
			],
		]];
	?>
	<div class="container-fluid back-dark" id="nav-container">
		<div class="row">
			<div class="col-xs-6">
				<a href="#" class="color-white">
					<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
					Вернуться и посмотреть
				</a>
			</div>
			<div class="col-xs-6">
				<a href="#" class="color-white pull-right">
					Узнать как съэкономить на доставке
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12" id="congratulation-container">
				<h1 class="text-center">Спасибо, <span class="red-color"><?php echo $order_name ?></span>.&nbsp;Ваш заказ принят</h1>
				<h3 class="text-center grey-color">КОД ЗАКАЗА: <?php echo $order_id ?></h3>
				<h3 class="text-center">Наш менеджер свяжется с вами в течение 15 мин.</h3>
			</div>
		</div>
	</div>

	<div class="container" id="timer-container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12">
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-3" id="timer-img">
						<img src="/image/timer.png" alt="">
					</div>
					<div class="clock col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-9" style="margin:2em;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<h3 class="text-center"><b>Внимание 15 минутная акция!</b></h3>
			<h3 class="text-center">Получите скидку <?php echo $order_percent; ?> % на вторую покупку и бесплатную доставку 
при предоплате заказа</h3>
		</div>
	</div>
	<div class="container" id="payment-container">
		<div class="row">
			<div class="col-md-5 col-xs-12 col-sm-12">
				<h3 class="text-upper text-center font-bold">ДОСТАВКА В  <?php echo $order_client_address ?></h3>
				<h2 class="text-upper red-color text-center font-bold">БЕСПЛЛАТНО</h2>
				<h3 class='text-center font-bold'>при предоплате заказа</h3>
				<img src="/image/arrow.png" class="hidden-xs hidden-sm pull-right">
			</div>
			<div class="col-md-7 col-xs-12 col-sm-12" id="payment-block">
				<form action="#" id="payment-form">
					<table>
						<tbody>
							<tr>
								<td class="text-right">Назначение перевода</td>
								<td>Предоплата заказа</td>
							</tr>
							<tr>
								<td class="text-right">Сумма</td>
								<td><input type="text" name="payment-amount" id="payment-amount">&nbsp; руб.</td>
							</tr>
							<tr>
								<td class="text-right">Способ оплаты</td>
								<td>
									<div class="btn-group" id="payment-btn-group">
									  <button type="button" class="btn btn-default" data-type="1">
									  	<img src="/image/yandex_logo.png" alt="" class="width-eighty">
									  </button>
									  <button type="button" class="btn btn-default" data-type="2">
									  	<img src="/image/visa.png" alt="" class="width-eighty">
									  </button>
									  <button type="button" class="btn btn-default" data-type="3">
									  	<img src="/image/mts-24x24.png" alt="" class="width-twenty">
									  	<img src="/image/beeline.png" alt="" class="width-twenty">
									  	<img src="/image/tele2.png" alt="" class="width-thirty">
									  </button>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" class="btn btn-warning" value="Оплатить">
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	
	<?php if(count($goods_array) > 0) { ?>
		<div class="container-fluid" id="goods-container">
			<div class="container">
				<h1 class="text-center text-upper font-bold">Обратите внимание также:</h1>
				<?php 
					foreach($goods_array as $good) { 
						$img_array = array_slice($good['good_images'],0,3);
				?>
					<div class="row goods-block">
						<div class="col-xs-12 col-sm-12 col-md-6 goods-images-block">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-9 goods-images-main" >
									<img src="<?php echo $img_array[0]['src'] ?>" alt="">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="row">
										<?php foreach($img_array as $img) { ?>
											<div class="col-xs-4 col-sm-4 col-md-12 goods-images-little">
												<img src="<?php echo $img['src'] ?>" alt="">
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 goods-description-block">
							<h2 class="font-bold"><?php echo $good['good_name'];?></h2>
							<p><?php echo $good['good_description'];?></p>
							<button class="btn btn-warning btn-lg" data-good-id="<?php echo $good['good_id'];?>">Добавить к заказу</button>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	<!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Flipclock -->
    <script src="/vendor/flipclock/js/flipclock.js"></script>

    <script src="/dist/js/landing.js"></script>
</body>
</html>