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
    .media{
        border-radius:9px;
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

    h4 {
        display: inline !important;
        font-family: '標楷體' !important;
        padding-right: 15px !important;
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
            <div align="center"> <a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a>
                <a href="aboutus.php" class="btn btn-outline-light">關於我們</a>
                <a href="News.php" class="btn btn-outline-light">公告欄</a>
                <a href="Normal_merchandise.php" class="btn btn-outline-light">商品列表</a>
                <a href="product.php" class="btn btn-outline-light">至購物車</a>
        </section>
        <!-- Main -->
    </div>
    <!-- /////////////////////////////// -->
    <div class="newstop"><img src="images\shoppinglist.png" class="newstopimages"></div>
    <div class="container">
        <div class="row" style="margin-left: 13.5vw;">
            <div>
                <div style="margin-bottom:25px;">
                    <div class="alert alert-danger" role="alert" style="display: inline; margin-right:15px;">
                        <h4 style="border-right-color: #FFF; border-right-style: solid;border-right-width: medium;">會員ID</h4>
                        <h4 style="margin-left: 15px;">AAAAAAA</h4>
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: inline;">
                        <h4 style="border-right-color: #FFF; border-right-style: solid;border-right-width: medium;">會員名稱</h4>
                        <h4 style="margin-left: 15px;">AAAAAAA</h4>
                    </div>
                </div>

                <div class="alert alert-secondary" role="alert">
                    <h4 style="border-right-color: #FFF; border-right-style: solid;border-right-width: medium;">信箱</h4>
                    <h4 style="margin-left: 15px;">AAAAAAA</h4>
                </div>
                <div class="alert alert-danger" role="alert">
                    <h4 style="border-right-color: #FFF; border-right-style: solid;border-right-width: medium;">電話</h4>
                    <h4 style="margin-left: 15px;">AAAAAAA</h4>
                </div>
                <div class="alert alert-secondary" role="alert">
                    <h4 style="border-right-color: #FFF; border-right-style: solid;border-right-width: medium;">地址</h4>
                    <h4 style="margin-left: 15px;">AAAAAAA</h4>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <br>
        <div class="media" style="background-color: rgba(204,204,255,0.8);">
            <img src="..." class="align-self-start mr-3" alt="..." style=" padding-left: 1vw; width: 15vw; height: 15vw;">
            <div class="media-body">
                <h3 style="font-family:標楷體; margin-top:20px;">商品名稱</h3>
                <p>
                    <h4>數量</h4>
                    <br>
                    <h4>單價</h4>
                    <br>
                    <h4>小計</h4>
                </p>
                <hr>
                <h3 style="font-family:標楷體;">總價</h3>
            </div>
        </div>
        <br>
    </div>
    <!-- //////////////////////// -->
    <div class="newstop2"><img src="images\newsbottom.png" class="newsbottomimages"></div>
    <!-- CTA -->
    <section id="cta" style="background-color: brown;">
        <h2>Sign up for beta aFFess</h2>
        <p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>
        <form>
            <div class="row uniform 50%">
                <div class="8u 12u(mobilep)">
                    <input type="email" name="email" id="email" placeholder="Email Address" />
                </div>
                <div class="4u 12u(mobilep)">
                    <input type="submit" value="Sign Up" class="fit" />
                </div>
            </div>
        </form>
    </section>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->
</body>

</html>