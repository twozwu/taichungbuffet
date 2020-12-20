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
                    <li>秋蟹季｜萬里蟹推薦、螃蟹料理 DIY、吃螃蟹禁忌懶人包！
                        秋季是螃蟹的季節！到萬里吃萬里蟹不夠？還得買幾隻花蟹、三點蟹回家吃才過癮！螃蟹怎麼煮？怎麼吃？吃螃蟹不能吃什麼？別擔心！DIY 螃蟹料理煮法、螃蟹吃法、吃螃蟹禁忌小編都幫你整理好了！

                        秋季是蟹的季節｜秋蟹季節時間、地點推薦！
                        每年的 10 月開始，通往金山萬里的路總是塞車，絡繹不絕的人潮把龜吼漁港擠得水洩不通，目標清楚一致──「萬里蟹」！秋季是蟹的季節，每年的 9-12 月是蟹肉最肥美豐嫩的時節。自 9 月入秋開始，三點蟹、花蟹漸豐，而 10 月石蟳加入戰局，成就了每年最讓人期待的秋蟹季。

                        而說到秋蟹，自然不能不提「萬里蟹」！台灣有八成以上的海蟹都來自萬里，產地主要來自富貴角外海的西北漁場，只要打出「萬里蟹」的名號彷彿多加了一層品質保證，肉質鮮甜美味不純砍頭。想吃蟹的大家，可以前往萬里的四大漁港：野柳漁港、東澳漁港、龜吼漁港、萬里漁港嚐鮮品海味！

                        萬里蟹推薦
                        pc / wanlicrab.tw




                        萬里蟹推薦｜萬里必吃石蟳、花蟹、三點蟹！
                        萬里蟹必吃的有三種蟹：花蟹、三點蟹、石蟳（完全依照小編個人喜好在排序，這三種蟹當中其實閉著眼吃蟹肉的話，小編只吃得出花蟹 XD）。

                        萬里蟹季節
                        pc / wanlicrab.tw
                        【花蟹】

                        花蟹因為殼上斑斕的花紋而得名，橘紅色相間。對，很特別吧！花蟹生的時候就是橘紅色調囉！不過生的時候呈現較暗紅色如鐵鏽般，因此又稱鏽斑蟳；煮熟後的蟹殼更橘更鮮豔。小編私心最喜歡吃花蟹，肉質 Q 彈，味道鮮美（先吃過花蟹再吃三點蟹真的會覺得有差 XD）

                        【三點蟹】

                        三點蟹的外觀也相當好認，背殼上明顯的 3 個深色斑點。萬里沿海的居民稱三點蟹為「蟹中極品」，肉質細嫩味道鮮美！私以為三點蟹沒有花蟹那般夠味帶勁，但比起帝王蟹、大閘蟹來說真的好吃很多，不會有粗粗的纖維感彷彿在吃蟳味棒？

                        【石蟳】

                        石蟳又稱「善泳蟳」，殼非常厚實，且表面呈顆粒狀突起。小編自己對石蟳沒有特別的印象，只記得石蟳的鰲很優秀，肉量超足表現優異，吃起來一點都不心疼也不空虛！石蟳、三點蟹、花蟹三者比起來是價格最平易近人的，拿來煮火鍋、燉粥都非常合適！



                        螃蟹怎麼煮｜DIY 秋蟹料理在家也能大啖海之鮮！
                        買了螃蟹回家煮，卻不知道如何料理？別擔心，清蒸川燙就超好吃！

                        川燙－10分鐘：先將螃蟹置入冰塊水或是自來水（因與海水鹽度不同）中，讓螃蟹凍暈「安息」。接著用大鍋煮沸水放入螃蟹後加入蔥、薑、米酒去腥，等到蟹殼轉紅熟透就可以吃啦！
                        清蒸－15分鐘：比起川燙我更喜歡沒有調味的清蒸，電鍋或大鍋都行，下面用盤子盛好，這樣清蒸熟透之後還可以享用最原汁原味的蟹湯，超讚。
                        萬里蟹風味十足，其實不用特別調味就很好吃！也有老饕推薦可以煮好放涼後冷藏，冰冰的蟹肉更 Q 彈鮮美～



                        食蟹禁忌｜吃螃蟹不能吃什麼？哪些部位不能吃？
                        曾經聽過吃螃蟹而食物中毒的案例，其實不只螃蟹，面對海鮮我們都應該趁新鮮！吃螃蟹有哪些禁忌呢？一起來仔細閱讀囉：

                        死蟹不吃：最重要的一點，就是死蟹不能吃囉！不知道已經安息多久的螃蟹，身體內外帶有大量細菌，吃下去可能腹瀉、腸胃炎、食物中毒甚至引發敗血症，不可不慎。
                        螃蟹性寒：由於螃蟹性寒，所以盡量不要與其他寒性的食物一起食用，以免拉肚子啦！像是柿子、梨子、花生、香瓜、蜂蜜、南瓜、茄子等都不建議一起食用。
                        不配茶水：吃螃蟹別配茶水，原因和上一則同，性寒搭配冷飲更容易讓腸胃不舒服。
                        不可生食：螃蟹生活在海水、泥地中，大量的細菌除了對人體產生危害之外，更可能入侵腦部使至癱瘓。
                        不可過量：高膽固醇的蟹黃不適合有高血壓、動脈硬化的人食用；而痛風患者更不用說了，海鮮中含有較高的「嘌呤」，代謝後的尿酸在人體中過量對痛風患者來說是最大的危害。其他如對海鮮過敏、脾胃虛寒者都不適合吃太多的螃蟹，以免造成身體不適。</li>
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