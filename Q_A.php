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
    .card {
        background-color: #f9e5df !important;
    }

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

    .btn.btn-link.btn-block.text-left {
        color: brown;
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
    <div class="newstop"><img src="images\Q&A.png" class="newstopimages"></div>
    <div class="container">
        <div class="accordion" id="accordionExample" style="position: relative; z-index:2; ">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Q1.如何加入會員？
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        A1：請於艾訊電子商務頁面最上方點選「登入」後，再選取“我要註冊”即可進入會員申請頁面。請詳閱會員條款及輸入您的基本資料後即可成為艾訊電子商務網站會員，並享有會員福利。
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Q2.如何查詢我的訂單是否成立？
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        A2：您可登入會員後至「會員專區」頁面，點選「訂單查詢」中查詢。您可在訂單明細中看到「訂單編號」及「購買商品」，方便您掌握商品出貨狀況！
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Q3.訂單完成交易後幾日內可以收到商品？
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        A3：您可登入會員後至「會員專區」頁面，點選「訂單查詢」中查詢。您可在訂單明細中看到「訂單編號」及「購買商品」，方便您掌握商品出貨狀況！
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading4">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                            Q4.目前提供哪些配送方式？
                        </button>
                    </h2>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                    <div class="card-body">
                        A4：艾訊電子商務網站在確認您訂購的商品均有存貨，且交易條件無誤後，商品將於5-7個工作天內送達至您指定的地址。若部分沒有庫存的商品也會在3-5個工作天內回覆您預計交貨日期。此外，您也可以在「會員專區」的「訂單查詢」中查詢「出貨日期」及「出貨狀態」，獲得相關訊息。貼心小提醒：本網站所銷售的商品非一般消費性商品，均需要一定的製造時間，請特別注意。
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading5">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                            Q5.目前提供哪些配送方式？
                        </button>
                    </h2>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                    <div class="card-body">
                        A5：艾訊電子商務網站提供之商品配送服務以貨運宅配為主，因需專人簽收，寄送地址請勿填寫郵政信箱。貼心小提醒：請確實填寫收件人的聯絡電話，以利收件作業。
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading6">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                            Q6.現是否可以自備酒品？
                        </button>
                    </h2>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                    <div class="card-body">
                        A6：本餐廳舍有酒窖，提供400多款紅酒、白酒、香檳讓您挑選，若您自備酒款，我們將酌收500元開瓶清潔服務費
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading7">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                            Q7.當月壽星有沒有甚麼優惠?
                        </button>
                    </h2>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                    <div class="card-body">
                        A7：只要當月壽星顧客提前3天預訂，用餐當天會贈送一個4吋精美生日蛋糕。
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading8">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
                            Q8.當月壽星有沒有甚麼優惠?
                        </button>
                    </h2>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                    <div class="card-body">
                        A8：只要當月壽星顧客提前3天預訂，用餐當天會贈送一個4吋精美生日蛋糕。
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading9">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseTwo">
                            Q9.餐廳包廂是否有會議設備?
                        </button>
                    </h2>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                    <div class="card-body">
                        A9：本餐廳有提供投影布幕、移動式音響及麥克風
                        若需要投影機，我們可以代為租借，會根據使用時間做報價，若有需要請洽店內訂席專員。
                        越亮目前沒有提供包廂，故也沒有提供會議設備。
                    </div>
                </div>
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