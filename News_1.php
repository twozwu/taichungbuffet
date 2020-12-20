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
    <div class="container-fluid">
        <div class="row">
            <div class="post">
                <ul class="ulw">
                    <li>2021年最新的國內春節旅遊推薦，盤點台灣熱門的10大旅遊景點，走春活動可以從這些風景、建築和歷史古蹟等觀光景點入手，都是適合全家人放鬆旅遊的好地方。

                        本篇精選台灣3大必拍風景、3大必逛綠建築以及3大必看歷史古蹟，還有高雄在2020年新展出的塑膠海廢大鯨魚，讓喜歡動態、靜態旅遊的朋友都能當作參考！旅遊享受的同時，別忘了垃圾不落地，讓原本風景維持最美好的模樣，讓環境能夠永續。



                        2021春節旅遊景點｜台灣3大必拍風景推薦

                        1.台中外埔忘憂谷

                        2.南投忘憂森林

                        3.花蓮太魯閣國家公園




                        台中外埔忘憂谷（圖片來源：FunTime旅遊比價）
                        。外埔忘憂谷地點：台中市外埔區溪底路

                        想要親近大自然與農田，一定不能錯過台中外埔忘憂谷的無邊際金黃色稻田！外埔忘憂谷四季都有不同風貌，稻田成熟時節會呈現綠油油樣貌，待收成時會轉變成一整片金黃色地毯模樣，且在1月下旬到2月上旬還有冬季限定的波斯菊花季可以觀賞拍照。當天氣晴朗，走在田間小徑感受自然與稻田的風，邊散步邊拍下美景，真的什麼憂慮都忘了。




                        南投忘憂森林（圖片來源：大紀元時報香港）
                        。忘憂森林地點：南投縣竹山鎮溪山路3-3號

                        原本忘憂森林是林務局造林地，經歷九二一地震後，被震落的土石堵住小山谷出口，成為小型的堰塞水潭，大片柳杉泡水後變成枯木，水潭倒映著枯樹，還有時常瀰漫雲霧，因此形成一個如夢似幻的神秘森林區。




                        花蓮太魯閣國家公園（圖片來源：太魯閣遊客中心）
                        。太魯閣國家公園地點：花蓮縣秀林鄉富世291號

                        以河流切鑿形成的大理岩峽谷聞名的太魯閣國家公園，可以在峽谷風景線沿途觀賞，雄偉的峭壁、斷崖、峽谷，還有連綿曲折的山洞隧道，也有著名的白楊瀑布、銀帶瀑布、長春瀑布、綠水瀑布等。



                        2021春節旅遊景點｜台灣3大必逛綠建築推薦

                        1.台北101

                        2.台南台江國家公園

                        3.台東國立台東大學圖書館




                        。台北101地點：台北市信義區信義路五段7號

                        台北101是高508公尺的摩天大樓，包含地面101層、地下5層，安裝了世界最大的防震阻尼器，結合購物中心、辦公和觀景台，是台灣第一指標建築，還是世界第一高的綠建築。最知名的89樓觀景台非常受到國外遊客歡迎，許多人喜愛到高樓眺望底下的城市面貌。</li>
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