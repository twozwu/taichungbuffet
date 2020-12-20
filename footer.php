<footer id="footer" style="position: relative; z-index:2;">
	<!-- <ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
		<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
		<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
	</ul> -->
	<ul class="copyright">
		<li>Taichung Buffet 地址：40767台中市西屯區工業區一路100號 電話：04-22662266 免付費電話：0800-092-000 <br> COPYRIGHT © TAICHUNG BUFFET CO, ALL RIGHT RESERED.</li>
	</ul>
	<?php { ?>
		<div class="today gotop" style="position:fixed;bottom:-55px;right:-50px;z-index:2">
			<div class="design js-back-to-top back-to-top" style="float:left;width:auto;border:1px solid #000;border-radius:20px 20px 20px 20px;height:auto;font-size:100%;padding: 15px 5px 0px 5px;background-color:#000;height:auto;box-shadow:-10px 10px #999999;transform:scale(0.5,0.5); cursor: pointer;">
				<div title="GOTOTOP" style="font:bold 2vw A-OTF A1 Mincho Std,Yu Mincho;">GO TOP</div>
				<div class="&quot;full" style="position:relative;margin:5px 25px 10px 20px;width:100%">
					<div class="date" style="position:relative;margin-left:2.5vw;padding-top:2vw;">
						<div style="position:relative;width:auto;float:left;border:1px solid #000;height:auto;font-size:100%;padding: 8px 8px 8px px;transform:scale(1.5,2);margin:5px 5px 5px 5px;text-align:center;background-color:#000;">
							<div style="transform:scale(2.7,2);color:#fff;font:bold 9px A-OTF A1 Mincho Std,Yu Mincho;text-align:bottom">
								<b><big><big>
											<p id="Month"></p>
										</big></big></b></div>
						</div>
						<div style="clear:both;"></div>
						<div style="position:relative;top:-5px;left:15px;width:auto;float:left;/* border:1px solid #000; */height:auto;font-size:100%;padding: 1px 20px 15px 8px;transform:rotate(40deg) scale(1.5,3);margin:5px 5px 5px 5px;text-align:center;/* background-color:#000; */">
							<div style="transform:scale(2,3);color:#fff;font:bold 8px A-OTF A1 Mincho Std,Yu Mincho;text-align:bottom">
								<b><big><big>/</big></big></b></div>
						</div>
						<div style="position:relative;top:18px;left:25px;width:auto;float:left;border:1px solid #000;height:auto;font-size:100%;padding: 1px 1px 8px 8px;transform:scale(2.5,2.5);margin:5px 5px 5px 5px;text-align:center;background-color:#000;">
							<div style="transform:scale(1.5,2);color:#fff;font:bold 9px A-OTF A1 Mincho Std,Yu Mincho;text-align:bottom">
								<b><big><big>
											<p id="Date"></p>
										</big></big></b></div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="Tuesday" style="position:relative;top:30px;margin:0 0 -25px 15px ;padding:2px 50px 2px 50px">
						<div style="position:relative;width:auto;float:left;border:1px solid #000;height:auto;font-size:100%;padding: 8px 8px 2px 8px;transform: scale(1.5,2);margin:5px 5px 0px 5px;text-align:center;background-color:#000;">
							<div style="transform:scale(2,2);color:#fff;font:bold 2px A-OTF A1 Mincho Std,Yu Mincho;text-align:bottom">
								<b><big><big>
											<p id="Day"></p>
										</big></big></b></div>
						</div>
					</div><br><br><br>
				</div>
			</div>
		<?php } ?>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<!-- <script src="https://cdn.staticfile.org/jquery/2.2.4/jquery.min.js"></script> -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- Scripts -->
		<script>
			var d = new Date();
			document.getElementById("Month").innerHTML = d.getMonth() + 1;
			document.getElementById("Date").innerHTML = d.getDate();
			var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
			document.getElementById("Day").innerHTML = days[d.getDay()];
			////////////////////////////////////////////////////////////////////////////////////////////////
			////////////////////////////////////////////////////////////////////////////////////////////////
			$(function() {

				var $win = $(window);

				var $backToTop = $('.js-back-to-top');
				// 當用戶點擊按鈕時，通過動畫效果返回頭部
				$backToTop.click(function() {

					$('html, body').animate({
						scrollTop: 0
					}, 600);
					// 點擊後在600毫秒內返回頂部
				});

			});
			$(function() {
				AOS.init({
					duration: 1000,
					easing: 'ease-out-back'
				});
			})
		</script>
</footer>