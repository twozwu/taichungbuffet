<?php
include_once "Connections/cnStu.php";

// $key = (isset($_GET['key'])) ? $_GET['key'] : "Keyword";
$query = "SELECT * FROM food";
$searchList = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($searchList);

//分頁設定
$totalRows = mysqli_num_rows($searchList); //統計總筆數
$per = 10; //每頁顯示項目數量
$pages = ceil($totalRows / $per); //取得不小於值的下一個整數(取天花板整數)
if (!isset($_GET["page"])) { //假如$_GET["page"]未設置
    $page = 1; //則在此設定起始頁數
} else {
    $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
}
$start = ($page - 1) * $per; //每一頁開始的資料序號
$result = mysqli_query($link, $query . ' LIMIT ' . $start . ', ' . $per) or die("Error"); //每頁查詢
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<style type="text/css">
    @media (max-width: 768px) {
        .hotpost {
            display: none;
        }
    }

    @media (min-width: 768px) {
        .hotpostmin {
            display: none;
        }
    }

    /* ///////////////RWD///////////////////// */

    .media {
        background: none;
        color: white;
    }

    .animated {

        height: 10vw;
        width: 20vw;
        background-color: rgba(204, 221, 255, 0.5);
        margin-left: 75vw;
    }

    #bannerO {
        background-attachment: scroll, fixed;
        background-image: url('images/bg.jpg');
        /*rgba(6, 13, 27, 0.61) */
        background-position: top left, center center;
        background-repeat: repeat, no-repeat;
        background-size: auto, cover;
        color: #fff;
        padding: 8em 0 8em 0;
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

    .card {
        background-color: #f9e5df !important;
        border-bottom-right-radius: 1.3vw !important;
        ;
        border-bottom-left-radius: 1.3vw !important;
        ;
    }
</style>
<script>
    var buy = function() {
        //動畫播放
        $(".demo-dot").css("animation", "xAxis 1s 1 ease-out running");
        $(".rotate").css("animation", "yAxis 1s 1 ease-in running");
        $(".demo-dot>img").css("animation", "rotate 1s 1 running");
        $.ajax({
            type: "POST",
            url: "addCart.php",
            data: "no=<?php echo $_GET['no']; ?>",
            success: function() {
                // alert("已加入購物車");
            }

        });
        //延遲兩秒重新整理
        setTimeout(function() {
            history.go(0)
        }, 400);
    }

    var reduce = function() {
        $.ajax({
            type: "POST",
            url: "reduceCart.php",
            data: "no=<?php echo $_GET['no']; ?>",
            success: function() {
                history.go(0) //重新整理
            }
        });
    }
</script>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>
<div id="particles-js" style="position: fixed; width:100%; height:100%; z-index:1;"></div>

<body class="landing" style="background-color: #202020;">
    <div id="page-wrapper" style="position: relative; z-index:2;">
        <!-- naverbar ----------------------------------------------------------------------------------->
        <?php include_once('naverbar.php') ?>
        <!-- Banner -->
        <section id="bannerO">
            <div align="center">
                <a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a>
                <a href="aboutus.php" class="btn btn-outline-light">關於我們</a>
                <a href="News.php" class="btn btn-outline-light">公告欄</a>
                <a href="Normal_merchandise.php" class="btn btn-outline-light">商品列表</a>
                <a href="shopcart.php" class="btn btn-outline-light">購物車</a>
                <a href="checkCart.php" class="btn btn-outline-light">訂單中心</a>
            </div>
        </section> <!-- Main -->
    </div>
    <!-- /////////////////////////////// -->
    <div class="hotpost" style="position: relative; z-index:2;"><img src="images\Menu.png" style="width:40vw; height:auto; margin-left:29.6vw; ">
        <div class="container-fluid mt-5" style="margin-top: 0px!important;">
            <div class="row">
                <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                    <div class="card margin col-lg-2.5" style="width: 20rem;">
                        <img src="images/<?php echo $data['food_img']; ?>.jpg" class="card-img-top ml-auto mr-auto mt-3" alt="..." style="width: 12vw;height:10vw">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['food_name']; ?></h5>
                            <p class="card-text"><?php echo $data['food_introduce']; ?></p>
                        </div>
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <a href="product.php?no=<?php echo $data['food_id']; ?>" class="btn btn-sm btn-danger mb-3" style="text-align:center;">詳細資料</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////////// RWD///////////////////////////////////-->
    <div class="hotpostmin" style="position: relative; z-index:2;"><img src="images\Menu.png" style="width:78vw; height:auto; margin-left:11.5vw;">
        <div class="container-fluid mt-5" style="margin-top: 0px!important;">
            <div class="row">
                <?php $result = mysqli_query($link, $query . ' LIMIT ' . $start . ', ' . $per) or die("Error");
                while ($data = mysqli_fetch_assoc($result)) { ?>
                    <div class="card margin col-lg-2.5" style="width: 20rem;">
                        <img src="images/<?php echo $data['food_img']; ?>.jpg" class="card-img-top ml-auto mr-auto mt-3" alt="..." style="width: 70vw;height:70vw">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['food_name']; ?></h5>
                            <p class="card-text"><?php echo $data['food_introduce']; ?></p>
                        </div>
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <a href="product.php?no=<?php echo $data['food_id']; ?>" class="btn btn-sm btn-danger mb-3" style="text-align:center;">詳細資料</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////// -->
    <div class="container-fluid" style="position: relative; z-index:2;">
        <div class="row justify-content-center col-12 page-a">
            <?php
            echo "<a href=?page=1>首頁&nbsp;&nbsp;&nbsp;&nbsp;</a> ";
            for ($i = 1; $i <= $pages; $i++) {
                if ($page - 5 < $i && $i < $page + 5) {
                    echo "<a href=?page=" . $i . ">" . $i . "</a> ";
                }
            }
            echo " 頁 <a href=?page=" . $pages . ">末頁</a><br /><br />";
            ?>
        </div>
    </div>

    <div style="position:fixed;bottom:500px;right:1VW;z-index:2">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            <a href="Normal_merchandise.php" type="button" class="btn btn-secondary">所有商品</a>
            <a href="Hot_merchandise.php" type="button" class="btn btn-secondary">主廚推薦</a>
            <a href="Freeze_merchandise.php" type="button" class="btn btn-secondary">調理食品</a>
        </div>
    </div>
    <!-- CTA -->
    <!-- <section id="cta">

            <h2>Sign up for beta access</h2>
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
        </section> -->
    <?php include_once('cta.php') ?>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>

</html>