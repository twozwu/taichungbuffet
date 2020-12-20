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

    img {
        width: 32rem;
        height: 24rem;
    }

    .margin-tbl {
        margin-top: 3rem;
        margin-bottom: 3rem;
        margin-left: 3rem;
    }
</style>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>

<body class="landing" style="background-color:#202020;">
    <div id="page-wrapper">
        <!-- naverbar ----------------------------------------------------------------------------------->
        <?php include_once('naverbar.php') ?>
        <!-- Banner -->
        <section id="bannerO" style="height:10vh; width:100%">
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
    <div class="container-fluid">
        <div class="row">
            <div class="media">
                <img src="images/eurest1.jpg" class="align-self-center margin-tbl" alt="...">
                <div class="media-body margin-tbl">
                    <h5 style="margin-top: 0rem;font-size:3rem;color:khaki">店面資訊</h5>
                    <p style="height: 3vw;"></p>
                    <h5 style="margin-top: 0rem;font-size:2rem;color:#fff">中工店</h5>
                    <p>地址:台中市工業區一路100號</p>
                    <p>電話:0800-092-000</p>
                    <p>~誠摯歡迎您的蒞臨~</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <div class="media">
                <img src="images/eurest2.jpg" class="align-self-center margin-tbl" alt="...">
                <div class="media-body margin-tbl">
                    <h5 style="margin-top: 0rem;font-size:3rem;color:khaki">用餐環境</h5>
                    <p>歐式餐廳的風格造型</p>
                    <p>來源於歐洲文化和生活方式</p>
                    <p>但最直接的是來源於歐式古典建築</p>
                    <p>雖然歐式古典建築</p>
                    <p>不同的時期和不同的地區風格造型各不相同</p>
                    <p>但歐式餐廳並不需要完全複製一個古典建築的室內</p>
                    <p>因此我們在設計上</p>
                    <p>可以將所有的歐式古典建築的風格造型以及裝飾細部進行篩選</p>
                </div>
            </div>
        </div>
        <!-- CTA -->
        <?php include_once('cta.php') ?>
        <!-- Footer -->
        <?php include_once('footer.php') ?>
        <!-- Footer -->
</body>

</html>