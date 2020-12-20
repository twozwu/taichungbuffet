<?php
include_once "Connections/cnStu.php";

$query = "SELECT * FROM `food` where food_id='" . $_GET['no'] . "'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);
$no = $_GET['no'];
//購物資料
$query = "SELECT * FROM `cart` where fid='" . $_GET['no'] . "'";
$result = mysqli_query($link, $query);
$cart = mysqli_fetch_assoc($result);

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
$result = mysqli_query($link, $query . ' LIMIT ' . $start . ', ' . $per) or die("Error"); //每頁查詢
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.1vw license (html5up.net/license)
-->
<html>
<style type="text/css">
    .media {
        background: none;
        color: white;
    }
    #bannerO {
        background-attachment: scroll, fixed;
        background-color: brown;
        /*rgba(6, 13, 27, 0.61) */
        background-position: top left, center center;
        background-repeat: repeat, no-repeat;
        background-size: auto, cover;
        color: #fff;
        padding: 4em 0 4em 0;
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
<!-- ///////////////////////////////////////product /////////////////////////////-->
<script src="SpryAssets/xpath.js" type="text/javascript"></script>
<script src="SpryAssets/SpryData.js" type="text/javascript"></script>
</script>
<script src="commlib.js" type="text/javascript"></script>
<script>
    var buy = function() {

        $.ajax({
            type: "POST",
            url: "addCart.php",
            data: "no=<?php echo $_GET['no']; ?>",
            success: function() {
                alert("已加入購物車");
            }

        });

    }

    var reduce = function() {
        $.ajax({
            type: "POST",
            url: "reduceCart.php",
            data: "no=<?php echo $_GET['no']; ?>",
            success: function() {
                // history.go(0) //重新整理
            }
        });
    }
</script>

<body class="landing" style="background-color: #202020;" >
    <div id="page-wrapper">
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
            <!-- <ul class="actions">
                <li><a href="#" class="button special">Sign Up</a></li>
                <li><a href="#" class="button">Show More</a></li>
            </ul> -->
        </section> <!-- Main -->
    </div>
    <style type="text/css">
        .style1 {
            font-size: 9pt;
        }

        .style2 {
            font-size: 14
        }

        .box {
            height: 85px;
            width: 98px;
            vertical-align: middle;
            margin: 0px;
            padding: 0px;
        }

        .picklist {
            width: 105px;
            text-align: center;
            float: left;
            height: 105px;
            padding-top: 5px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }

        .box img {
            cursor: pointer;
            transition: all 0.5s ease 0s;
        }

        .box img:hover {
            transform: scale(1.1);
        }

        /* 動畫分岐 */
        .rotate {
            animation: yAxis 1s ease-in paused;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .demo-dot {
            animation: xAxis 1s ease-out paused;
            object-fit: cover;
        }

        img {
            width: 500px;
            position: relative;
            z-index: 1;
        }

        .demo-dot>img {

            width: 150px;
            /* height: 20px; */
            border-radius: 20px;
            background-color: #000;
            animation: rotate 1s paused;
            display: inline-block;
            z-index: -1;
            position: absolute;
            right: 0;
            bottom: 10px;
            opacity: 1;
        }

        @keyframes yAxis {
            0% {
                opacity: 1;
            }

            100% {
                transform: translateY(-700px);
                opacity: 0;

            }
        }

        @keyframes xAxis {
            0% {
                opacity: 1;
            }

            100% {
                transform: translateX(500px);
                opacity: 0;
            }
        }

        .wrap {
            position: relative;
            width: 500px;
        }

        @keyframes rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .cart {
            color: #fff;
        }

        td {
            display: block;
        }

        .mgt {
            margin-top: 4vw;
        }
    </style>

    <div class="container-fluid" style="background-image: url('images/bd_bg.jpg');background-size:cover">
        <div class="row justify-content-center pt-5">
            <form class="col-6" action="" method="post" name="form1" id="form1" onsubmit="">
                <table width="vw" border="1" align="center" cellspacing="0">
                    <tr>
                        <input type="hidden" id="cartid[]" name="cartid[]" value="">
                        <td align="center" bgcolor="#FFFFFF"><img src="images/<?php echo $data['food_img']; ?>.jpg" alt="" style="width:350px;height:200px;"></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $data['food_name']; ?></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $data['food_introduce'];?></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $data['food_price'];?>元</td>
                    </tr>
                    <tr>
                        <td colspan="8" align="center" bgcolor="#FFFFFF">
                            <a href="#" onclick="buy()" class="btn btn-danger">確認加入購物車</a>
                            <a href="javascript:history.go(-2);" class="btn btn-danger">上一頁</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <!-- CTA -->

    <?php include_once('cta.php') ?>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->



</body>

</html>