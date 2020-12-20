<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>


<!-- Header ----------------------------------------------------------------------------------->
<style type="text/css">
	#bannerO {
		background-attachment: scroll, fixed;
		background-image: url('images/bg.jpg');
		/*rgba(6, 13, 27, 0.61) */
		background-position: top left, center center;
		background-repeat: repeat, no-repeat;
		background-size: cover;
		color: #fff;
		padding: 12em 0 12em 0;
		text-align: center;
	}

	#bannerO :last-child {
		margin-bottom: 0;
	}

	#bannerO h2,
	#bannerO h3,
	#bannerO h4,
	#bannerO h5,
	#bannerO h6 {
		color: #fff;
	}

	#bannerO h2 {
		font-size: 3.5em;
		line-height: 1em;
		margin: 0 0 0.5em 0;
		padding: 0;
	}

	#bannerO p {
		font-size: 1.25em;
		margin-bottom: 1.75em;
	}

	#bannerO input[type="submit"],
	#bannerO input[type="reset"],
	#bannerO input[type="button"],
	#bannerO .button {
		background-color: transparent;
		box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.5);
		color: #fff;
		min-width: 12em;
	}

	#bannerO input[type="submit"]:hover,
	#bannerO input[type="reset"]:hover,
	#bannerO input[type="button"]:hover,
	#bannerO .button:hover {
		background-color: rgba(255, 255, 255, 0.1);
	}

	#bannerO input[type="submit"]:active,
	#bannerO input[type="reset"]:active,
	#bannerO input[type="button"]:active,
	#bannerO .button:active {
		background-color: rgba(255, 255, 255, 0.2);
	}

	#bannerO input[type="submit"].special,
	#bannerO input[type="reset"].special,
	#bannerO input[type="button"].special,
	#bannerO .button.special {
		background: #fff;
		color: #666;
	}
</style>

<body class="landing" style="background-color: #202020;">
	<?php include_once('headerfile.php') ?>
	<div class="container-fluid">
		<div class="row" style="background-color: none;">
			<!-- naverbar ----------------------------------------------------------------------------------->
			<?php include_once('naverbar.php') ?>
			<!-- Banner -->
			<section id="banner">
				<!-- carousel slide 輪播區 ----------------------------------------------------------------------------------->
				<div align="center" style="padding: 1vw;">
					<a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a>
					<a href="aboutus.php" class="btn btn-outline-light">關於我們</a>
					<a href="News.php" class="btn btn-outline-light">公告欄</a>
					<a href="Normal_merchandise.php" class="btn btn-outline-light">商品列表</a>
					<a href="shopcart.php" class="btn btn-outline-light">購物車</a>
					<a href="checkCart.php" class="btn btn-outline-light">訂單中心</a>
				</div>
				<br>
				<?php include_once('carousel slide.php') ?>
			</section>
			<!-- Main -->
			<section id="main" class="container">
				<section class="box special">
					<header class="major">
						<h2>振興三倍券懶人包</h2>
						<p>1.不得找零。<br>
							2.不能用在股票投資、水電費、罰金罰鍰、健保費、稅捐、行政規費、禮券、儲值交易等。<br>
							3.如果綁定信用卡而以行動支付消費，仍計算在信用卡累計中，不會影響結果及回饋。<br>
							4.若在AsiaYo、Agoda、Hotels.com、Booking.com等訂房平台訂房，就需使用信用卡、行動支付綁定，採累積消費NT$3,000元退NT$2,000元的方式。<br>
							5.可搭配安心旅遊補助使用，但需使用官網或電話訂房，安心旅遊補助國外訂房網恕不適用(Agoda、booking、hotels.com...)。<br>
							6.飯店不支援悠遊卡、一卡通、台灣pay 服務。</p>
					</header>
					<img class="image featured" src="images/c01.jpg" alt="" />
				</section>
				<div class="container-fluid">
					<div class="row col-12">
						<div class="6u 12u(narrower)">
							<section class="box special">
								<img class="image featured" src="images/back.jpg" alt="" />
								<h3>營業公告</h3>
								<li style="text-align:left;">109年餐廳水塔清洗公告 </li>
								<li style="text-align:left;">我們將於3/6(二)及3/7(三)暫停營業，進行裝修工程！請大家跟我們一起期待嶄新的Taichung Buffet餐廳</li>
								<li style="text-align:left;">Taichung Buffet餐廳3月17日至4月30日進行內部整修，施工期間將維持原營業時間及餐飲服務。</li>
							</section>

						</div>
						<div class="6u 12u(narrower)">
							<section class="box special">
								<img class="image featured" src="images/back2.jpg" alt="" />
								<h3>活動公告</h3>
								<li style="text-align:left;">中秋好時節，人聚人團圓。Taichung Buffet祝大家都能充分享受中秋，與珍貴的家人好友共度月圓佳節。</li>
								<li style="text-align:left;">萬聖節快到啦！店內同時舉辦兩週年活動，來店用餐的顧客皆可參加！入座後工作人員會告訴您如何參與抽獎！</li>
								<li style="text-align:left;">秋蟹正肥美、Taichung Buffet為您特選秋季時令好蟹</a></li>
							</section>

						</div>
					</div>
				</div>



			</section>
			<div class="divdiv container-fluid mr-auto ml-auto">
				<p class="specal">主廚精選</p>

			</div>
			<!-- //////////////////////////////////主廚////////////////////////////////////////////////////////////////////////////////// -->
			<div class="conatiner" style="margin: 0;">
				<div class="media code code--small code--right aos-init aos-animate mr-auto ml-auto mb-5 mt-5" data-aos="fade-left" style="position: relative; z-index:2; margin-right:0;">
					<div class="media-body">
						<h5 class="mt-0">戈登-拉姆齊：</h5>
						<div class="detail">
							<p>戈登-拉姆齊出生於格拉斯哥，是一個粗魯的英國人，</p>
							<p>卻擁有著7家米其林三星餐廳，他就是戈登-拉姆齊。</p>
							<p>拉姆齊屬於半路出家，19歲前他是一個足球運動員，</p>
							<p>由於膝蓋傷勢結束了他的足球生涯。他是一個天才，</p>
							<p>沒有去巴黎學過藝，但卻從酒店的實習生一路做到會所的行政總廚，</p>
							<p>最後自立門戶，成為米其林三星主廚。他旗下有28家餐廳，</p>
							<p>共獲得14顆米其林星。主持有英國烹飪節目《地獄廚房》、《廚房噩夢》等。</p>
						</div>
					</div>
					<img src="mastersh_images\master_GD.png" class="mr-2">
				</div>
				<div class="media mr-auto ml-auto mb-5">
					<img src="mastersh_images\威靈頓牛排.jpg" class=" mr-3" alt="...">
					<div class="media-body">
						<h5 class="mt-0">Beef Wellington</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
						<br>Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
						<br>Donec lacinia congue felis in faucibus.
					</div>
				</div>
			</div>
			<!-- //////////////////////////////////主廚222////////////////////////////////////////////////////////////////////////////////// -->
			<div class="media code code--small code--right aos-init aos-animate mr-auto ml-auto mb-5" data-aos="fade-left" style="position: relative; z-index:2;">
				<div class="media-body">
					<h5 class="mt-0">托馬斯-凱勒</h5>
					<div class="detail">
						<p>美國公認的第一名廚，凱勒是美國本土唯一一位米其林三星廚師，</p>
						<p>同時也是「博古斯世界烹飪大賽」的資深評委，</p>
						<p>加州帕納谷紅酒莊園主題餐廳The french loundry的老闆兼主廚。</p>
						<p>他出版了多本烹飪書籍都榮獲大獎，風靡美食界，</p>
						<p>包括《法國洗衣房餐廳》、《Bouchon和家庭特別餐品》。</p>
						<p>他善於將普通的菜品上升到米其林的高度。</p>
					</div>
				</div>
				<img src="mastersh_images\master_TK.png" class="mr-2" alt="...">
			</div>
			<div class="media mr-auto ml-auto mb-5">
				<img src="mastersh_images\美式烤雞.jpg" class=" mr-3" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Roast Chicken</h5>
					Place the chicken in a roasting tray on top of the garlic cloves, breast side up and drizzle with half of the olive oil.
					<br>Season the outside of the chicken with salt and pepper. Then sprinkle with ariosto and pour over the chicken stock mixture.
					<br> Roast for 15 minutes then remove from the oven.
				</div>
			</div>
			<!-- CTA -->

		</div>

	</div>

</body>

<?php include_once('cta.php') ?>
<!-- Footer -->
<?php include_once('footer.php') ?>
<!-- Footer -->



</body>

</html>