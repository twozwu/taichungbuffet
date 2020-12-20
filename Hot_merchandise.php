<?php
include_once "Connections/cnStu.php";


$key = (isset($_GET['key'])) ? $_GET['key'] : "Keyword";
$query = sprintf("SELECT * FROM food WHERE food_type=%d", 6);
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

    .btn-group-vertical {
        background-color: none !important;
    }

    .btn.btn-secondary {
        font-size: 1.5VW;
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
</style>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>
<div id="particles-js" style="position: fixed; width:100%; height:100%; z-index:1;"></div>
<body class="landing" style="background-color: #202020;">
    <div id="page-wrapper" style="position: relative; z-index:2;">
        <!-- 商品列表判斷script--------------------------------------------------------------------------->
        <script>
            var check = function() {
                var select_op = $('#option').val();
                location.href = 'class.php?key=' + select_op;
            }
        </script>
        <!-- naverbar ----------------------------------------------------------------------------------->
        <?php include_once('naverbar.php') ?>
        <!-- Banner ------------------------------------------------------------------------------------->
        <section id="bannerO">
            <div align="center">
                <a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a>
                <a href="aboutus.php" class="btn btn-outline-light">關於我們</a>
                <a href="News.php" class="btn btn-outline-light">公告欄</a>
                <a href="Normal_merchandise.php" class="btn btn-outline-light">商品列表</a>
                <a href="shopcart.php" class="btn btn-outline-light">購物車</a>
                <a href="checkCart.php" class="btn btn-outline-light">訂單中心</a>
            </div>
            <!-- <ul class="actions">
                <li><a href="#" class="button special">Sign Up</a></li>
                <li><a href="#" class="button">Show More</a></li>
            </ul> -->
        </section> <!-- Main -->
    </div>
    <!-- ------------------------------------------------------------------------------------------ -->
    <img src="images\Chef's Menu.png" style="width:40vw; height:auto; margin-left:29.6vw;">
    <div class="mt-5" style="margin-left: auto; margin-right: auto; width:1240px; position: relative; z-index:2;">
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <div class="media code code--small code--right aos-init aos-animate mb-3" data-aos="fade-right">
                <img src="images/<?php echo $data['food_img']; ?>.jpg" alt="..." style="height:250px; width:250px;">
                <div class="media-body ml-5 pt-5">
                    <h5 style="font-size: 3.5vw;color:wheat"><?php echo $data['food_name']; ?></h5>
                    <?php echo $data['food_introduce']; ?>
                    <!-- <button type="button" class="btn btn-primary" style="margin-top: 2vw;  margin-bottom:6vw; margin-left: 45vw; padding-left:10px; padding-right:20px;font-size:0.5vw"><img src="images\img_155927.png" style="height:17px; width:17px; margin-right:5px; margin-bottom:2px;">加入購物車</button> -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <a href="product.php?no=<?php echo $data['food_id']; ?>" class="btn btn-lg btn-warning mb-3" style="text-align:center;margin-top: 2vw;  margin-bottom:6vw; margin-left: 45vw; padding-left:0.5vw; padding-right:1vw;font-size:0.5vw"><img src="images\img_155927.png" style="height:17px; width:17px; margin-right:5px; margin-bottom:2px;">詳細資料</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
    <!-- ///////////////////////////RWD///////////////////////////////////// -->

    <!-- /////////////////////////////////////////////////////////////////// -->
    <div style="position:fixed;bottom:500px;right:1VW;z-index:2">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            <a href="Normal_merchandise.php" type="button" class="btn btn-secondary">所有商品</a>
            <a href="Hot_merchandise.php" type="button" class="btn btn-secondary">主廚推薦</a>
            <a href="Freeze_merchandise.php" type="button" class="btn btn-secondary">調理食品</a>
        </div>
    </div>
    <div class="container-fluid" style="position: relative; z-index:2;">
        <div class="row justify-content-center col-12 page-a">
            <?php
            echo "<a href=?page=1>首頁&nbsp;&nbsp;</a> ";
            for ($i = 1; $i <= $pages; $i++) {
                if ($page - 5 < $i && $i < $page + 5) {
                    echo "<a href=?page=" . $i . ">" . $i . "</a> ";
                }
            }
            echo " 頁<a href=?page=".$pages.">末頁</a><br /><br />";
            ?>
        </div>
    </div>
    <!-- CTA -->
    <?php include_once('cta.php') ?>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>

</html>