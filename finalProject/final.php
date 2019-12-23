<!DOCTYPE html>
<html>
<head>
	<title>Alki shop</title>
	<link rel="stylesheet" type="text/css" href="final.css">
	<script type="text/javascript" src = "project.js"></script>
</head>
<body>
	<header>
		<div class = heads>
			<a href = "#" class="headers">Доставка</a>
			<a href = "#" class="headers">Оплата</a>
			<a href = "#" class="headers">Оплата</a>
			<a href = "#" class="headers">Статус заказа</a>
			<a href = "#" class="headers">Оплатить заказ</a>
			<a href = "about us/AboutUs.html" class="headers">О нас</a>
		</div>
		<a href="#" class=numberOfWhatsapp>+7 708-181-97-87 </a>
		<img class="WhatsappImage" src="whatsapp.png">
	</header>
	<a class="signup" href="http://localhost:/registration/registration.php">Регистрация</a>
	<div class="categories">
		<div class=nameOfSite>
			<h2><a href="project.html">Alki shop</a></h2>
		</div>
		<div class="categoriesLink">
			<a class = "categoring" href="#">Создай свой дизайн</a>
			<label class="slash">/</label>
			<a class = "categoring" href="#">Мужчинам</a>
			<label class="slash">/</label>
			<a class = "categoring" href="#">Женщинам</a>
			<label class="slash">/</label>
			<a class = "categoring" href="#">Детям</a>
			<label class="slash">/</label>
			<a class = "categoring" href="#">Разное</a>
		</div>
		<div class="icons">
			<div class="container-form" >
				<form type="get" action="form.php">
					<input type="text" name="search" id="search-form" placeholder="Поиск">
					<button class="searchButton">
						<i class = "fa fa-search"></i>
					</button>
				</form>
			</div>
			<a href="#"><img class = "icon notify"src="notify.png"></a>
			<a href="#"><img class = "icon home"src="home.png"></a>
		</div>
	</div>

		<h2 class=mainWord >Футболки на заказ, печать логотипов и многое другое</h2>
	<div class="list">
		<ul>
		  <li><a href="withoutImages.html">Товары без рисунков</a></li>
		  <li><a href="withName.html">Имена</a></li>
		  <li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>
			<li><a href="sport.html">Спорт</a></li>

		</ul>
	</div>
	<div class="delete_function">
		<form method="get" action="upload.php">
			<div class="input-group-delete">
				<input type="text" name="delete">
			</div>
			<input type="submit" value="delete" name="delete_button">
		</form>
	</div>
	<div class="main">
		<?php
			$conn = new mysqli('localhost', 'root', '', 'for project');
			$sql = "SELECT * FROM products";
			$result = $conn->query($sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = $result->fetch_assoc()) {
					?>
					<div class="item">
					<?php
						echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['img_src']).'" class="product-image" />';
					?>
					<p class="description"><?php
						echo $row['product_desc'];
					?></p>
				</div>
				<?php
				}
			}
		?>

	</div>
	<div class="main-description">
		<p class="description1">
			Необычные и оригинальные футболки, толстовки и майки на все случаи жизни, с доставкой по Алматы!
			Желаете выглядеть стильно и, в то же время, показать окружающим свою индивидуальность и умение разбираться в моде? Ищете необычный подарок? Желаете, чтобы ваши вещи украшал эксклюзивный принт? Тогда вы попали по адресу.


			На сайте mayki.kz можно купить футболки, толстовки, шапки с индивидуальным дизайном или выбрать понравившийся вариант среди множества готовых.
			Выбирайте затейливые и прикольные надписи, а также различные шуточные рисунки. Услуга печать на футболках, майках, толстовках очень популярна, так как подарить вещь с индивидуальной надписью или рисунком - это значит показать окружающим свою изобретательность.

			Также в нашем магазине можно заказать кружки с надписью и смешными рисунками, оригинальные чехлы для мобильных телефонов, необычные шапки и бейсболки.
		</p>
		<p class="description2">
			Порадуйте друзей и близких веселыми и полезными подарками!
		</p>
		<p class="description1">
			На сайте представлены товары с оригинальным дизайном, поэтому весь ассортимент можно считать еще и сувенирной продукцией. Вы можете выбрать здесь для себя и своих друзей стильные кепки с одинаковым логотипом, который будет символизировать вашу дружбу. Также можно подобрать чехол для телефона с оригинальной надписью для друга или девушки. Как видим, поводов купить неординарный подарок море. Нужно только немного пофантазировать и дать волю азарту!

			Преимущества сотрудничества с нами

			Цена на футболки с принтом, шапки, толстовки, кепки, а также все остальные товары более чем доступна для среднего покупателя. При этом высокое качество – наша главная задача. И это еще не все. Можно назвать еще целый ряд доводов для наших покупателей:

			1. Постоянно обновляющийся ассортимент. Учитывая пожелания клиентов, мы всегда пополняем ассортимент товаров модными трендами.

			2. Экологичность. Все товары на нашем сайте произведены исключительно из натуральных, экологичных тканей. Все товары прекрасно подходят для детей.

			3. Надежность. Все изделия, представленные на сайте, отличаются высокой износостойкостью, не линяют и не вытягиваются. К тому же, на сайте представлена точная размерная сетка, которая позволит выбрать подходящий товар.

			4. Удобство. На сайте выбор товара очень прост, также очень легко сформировать заказ выбранного товара. Скоростная поисковая система сайта дает возможность выбрать понравившиеся товары за пару минут.

			5. Креативность. Мы всегда подходим к оформлению товаров творчески, что делает футболки с печатью и другие подарки неповторимыми. Обращайтесь к нам и дарите друзьям и близким настоящий праздник с нашими подарками!

			6. Доставка в Алматы, Астана, Караганда, Шымкент, Павлодар, Усть-Каменогорск, Актау, Атырау, Актобе, Костанай, Кокшетау, Уральск, Петропавловск.
		</p>
	</div>
</body>

</html>
