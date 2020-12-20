<!-- 
include_once "Connections/cnStu.php";

$key = (isset($_GET['key'])) ? $_GET['key'] : "Keyword";
$query = sprintf("SELECT * FROM food WHERE food_type!=%d",7);
$query = sprintf("SELECT * FROM food WHERE food_type!=%d",7);
$searchList = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($searchList);
//分頁設定
$totalRows = mysqli_num_rows($result); //統計總筆數
$per = 10; //每頁顯示項目數量
$pages = ceil($totalRows / $per); //取得不小於值的下一個整數(取天花板整數)
if (!isset($_GET["page"])) { //假如$_GET["page"]未設置
    $page = 1; //則在此設定起始頁數
} else {
    $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
}
$start = ($page - 1) * $per; //每一頁開始的資料序號
$result = mysqli_query($link, $query . ' LIMIT ' . $start . ', ' . $per) or die("Error"); //每頁查詢 -->

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the FFA 3.0 license (html5up.net/license)
-->
<html>
<style type="text/css">
    #bannerO {
        background-attachment: scroll, fixed;
        background-color: brown;
        /*rgba(6, 13, 27, 0.61) */
        background-position: top left, center center;
        background-repeat: repeat, no-repeat;
        background-size: auto, cover;
        color: #fff;
        padding: 5em 0 8em 0;
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

    .post {
        background-color: rgba(204, 221, 255, 0.5);
        width: 37vw;
        height: auto;
        margin-left: 31vw;
        font-size: 1vw;
        color: wheat;
    }

    .newstop {
        height: 12vw;

    }

    .newstop2 {
        height: 5vw;
        margin-top: 1vw;
        margin-bottom: 0vw;
    }

    .newstopimages {
        width: 24.5vw;
        height: 13vw;
        margin-left: 36.9vw;
    }

    .newsbottomimages {
        width: 8vw;
        height: 3.5vw;
        margin-left: 45.2vw;
    }

    .ulw {
        padding-right: 1.7vw;
    }

    .ulw a {
        text-decoration: none;
        border-style: none;
    }

    .ulw a:hover {
        text-decoration: none;
    }
</style>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>
<div id="particles-js" style="position: fixed; width:100%; height:100%; z-index:1;"></div>

<body class="landing" style="background-color:#202020;">
    <div id="page-wrapper" style="position: relative; z-index:2;">
        <!-- naverbar ----------------------------------------------------------------------------------->
        <?php include_once('naverbar.php') ?>
        <!-- Banner -->
        <section id="bannerO" style="height:10vh; width:100%">
            <div align="center">
                <a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a>
                <a href="aboutus.php" class="btn btn-outline-light">關於我們</a>
                <a href="News.php" class="btn btn-outline-light">公告欄</a>
                <a href="Normal_merchandise.php" class="btn btn-outline-light">商品列表</a>
                <a href="shopcart.php" class="btn btn-outline-light">購物車</a>
                <a href="checkCart.php" class="btn btn-outline-light">訂單中心</a>
        </section>
        <!-- Main -->
    </div>
    <!-- /////////////////////////////// -->
    <div class="newstop"><img src="images\newstop.png" class="newstopimages"></div>
    <div class="container-fluid" style="position: relative; z-index:2; padding:0px;">
        <div class="row">
            <div class="post">
                <ul class="ulw">

                    <li> <a href="News_1.php" style="color: wheat;">2020年是個特別辛苦的一年，讓我們抱持著感恩的心情，相約員工伙伴們一起團聚用餐，享用奢華精緻的美食，犒賞這一年來的辛勞。</a></li>
                    <hr>
                    <li><a href="News_2.php" style="color: wheat;">秋蟹正肥美、是時品珍饈Taichung Buffet為您特選秋季時令好蟹</a></li>
                    <hr>
                    <li>109年餐廳水塔清洗公告 </li>
                    <hr>
                    <li>信義店將於11/16(一)~11/26(四)進行內部改裝暫停營業，感謝喜愛Taichung Buffet信義店的朋友們一路以來的支持。</li>
                    <hr>
                    <li>中秋好時節，人聚人團圓。Taichung Buffet祝大家都能充分享受中秋的雅緻之情，與珍貴的家人好友共度月圓佳節。</li>
                    <hr>
                    <li>我們將於3/6(二)及3/7(三)暫停營業，進行裝修工程！請大家跟我們一起期待嶄新的Taichung Buffet餐廳</li>
                    <hr>
                    <li>109年10月餐飲衛生食品異常案件處理過程說明</li>
                    <hr>
                    <li>Taichung Buffet餐飲所有品牌，因梅姬颱風來襲，故9/27晚上暫停營業，如造成不便，敬請見諒。</li>
                    <hr>
                    <li>萬聖節快到啦！服務生的變裝活動！，店內同時舉辦了兩週年活動，只要來店用餐的顧客都可以參加！入座後我們人員會告訴您如何參與抽獎哦！</li>
                    <hr>
                    <li>謝謝一路以來支持我們的顧客！從默默無名到現在成為了許多家庭的聚餐首選，期間也挺過了疫情，為大家創造了無數美好的用餐回憶</li>
                    <hr>
                    <li>Taichung Buffet舉辦了兩週年活動，桌桌有獎！只要來店用餐的顧客都可以參加，這麼好康的事只在Taichung Buffet！</li>
                    <hr>
                    <li>Taichung Buffet餐廳3月17日至4月30日進行內部整修，施工期間將維持原營業時間及餐飲服務。</li>
                    <hr>
                    <li>春節來Taichung Buffet2020/1/25(六)初一～1/29(三)初五 各店營業時間將調整如圖示，1/30(四)初六各店恢復正常營業時間！</li>
                    <hr>
                </ul>

            </div>
        </div>
    </div>
    <div class="newstop2"><img src="images\newsbottom.png" class="newsbottomimages"></div>
    <!-- CTA -->
    <?php include_once('cta.php') ?>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>

</html>