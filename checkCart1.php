<?php
include_once "Connections/cnStu.php";
include_once "time.php";
(!isset($_SESSION)) ? session_start() : "";
if (!isset($_SESSION['shopid'])) {
    $directGoTo = "login.php";
    header(sprintf("Location:%s", $directGoTo));
} else {
    $query = "SELECT * FROM `uorder`,`food` where food.food_id=uorder.fid and uorder.shopid='" . $_SESSION['shopid'] . "'";
    $result = mysqli_query($link, $query);
    $results = array();
    while ($row = mysqli_fetch_array($result)) {
        $results[] = $row;
    }
}
$total = 0
?>
<?php include_once "food_lib.php" ?>
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

    .margin-tb {
        margin-top: 15vw;
        margin-bottom: 15vw;
    }

    .font-c {
        color: burlywood;
    }

    #fontcontact {
        height: 100%;
    }

    .bgc {
        background-image: url("images/bd_bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<script type="text/javascript">
    let buy = function(no) {
        $.ajax({
            type: "POST",
            url: "addOrder.php",
            data: "no=" + no,
            success: function() {
                history.go(0);
            }
        });
    }

    var reduce = function(no) {
        $.ajax({
            type: "POST",
            url: "reduceOrder.php",
            data: "no=" + no,
            success: function() {
                history.go(0); //重新整理
            }
        });
    }

    function btn_confirmLink(message, url) {
        if (confirm(message)) {
            window.location = url;
        } else {
            cancel = false;
        }
    }

    function btn_confirmLink(message, url) {
        if (message == "" || url == "") {
            document.MM_returnValue = false;
            return;
        }
        if (confirm(message)) {
            window.location = url;
        } else {
            document.MM_returnValue = false;
        }
    }
</script>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>

<body class="landing bgc" style="background-color:#202020;">
    <div class="wrap">
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
            </div>
        </section>
        <!-- Main -->
        <div class="container-fluid col-8 mt-5">
            <div class="row justify-content-center mgt">
                <table width="80%" border="1" align="center" cellspacing="0">
                    <tr>
                        <td align="center" bgcolor="FFCCCC" width="10%">會員編號</td>
                        <td align="center" bgcolor="FFCCCC" width="10%">會員姓名</td>
                        <td align="center" bgcolor="FFCCCC" width="20%">會員電話</td>
                        <td align="center" bgcolor="FFCCCC" width="30%">會員信箱</td>
                        <td align="center" bgcolor="FFCCCC" width="30%">會員地址</td>
                    </tr>
                    <tr>
                        <input type="hidden" id="cartid[]" name="cartid[]" value="">
                        <td align="center" bgcolor="#FFFFFF"><?php echo $_SESSION['shopid']; ?></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $_SESSION['username']; ?></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $_SESSION['tel']; ?></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $_SESSION['email']; ?></td>
                        <td align="center" bgcolor="#FFFFFF"><?php echo $_SESSION['addr']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>
    <div class="container-fluid col-8">
        <div class="row justify-content-center mgt">
            <form class="col-12" action="" method="post" name="form1" id="form1" onsubmit="">
                <?php foreach ($results as $key => $row) {
                    $price = $row['food_price'];
                    $qty = $row['qty']; ?>
                    <table width="80%" border="1" align="center" cellspacing="0">
                        <tr>
                            <td align="center" bgcolor="#FFCCCC" width="10%">圖片</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">品名</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">數量</td>
                            <td align="center" bgcolor="#FFCCCC" width="10%">單價</td>
                            <td align="center" bgcolor="#FFCCCC" width="10%">小計</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">下訂時間</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">訂單狀態</td>
                        </tr>
                        <tr>
                            <input type="hidden" id="cartid[]" name="cartid[]" value="">
                            <td align="center" bgcolor="#FFFFFF"><img src="images/<?php echo $row['food_img']; ?>.jpg" alt="" style="width:250px;height:150px;"></td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $row['food_name']; ?></td>
                            <td align="center" bgcolor="#FFFFFF">
                                <input type="button" name="edit" value="-" onclick="reduce(<?php echo $row['id']; ?>)" class="btn-sm">
                                x<?php echo $row['qty']; ?>
                                <input type="button" name="edit" value="+" onclick="buy(<?php echo $row['id']; ?>)" class="btn-sm"></td>
                            </td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $row['food_price']; ?></td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $price * $qty; ?>元</td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $row['create_date'] ?></td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo processMsg($row['status']);?></td>
                            <input type="hidden" id="id[]" name="id[]" value="<?php echo $row['id']; ?>">
                            <input type="hidden" id="qty[]" name="qty[]" value="<?php echo $row['qty']; ?>">
                        </tr>
                    </table>
                <?php $total += $price * $qty;
                } ?>
                <table width="80%" border="1" align="center" cellspacing="0">
                    <tr>
                        <td align="center" bgcolor="#FFFFFF"><?php
                                                                if (mysqli_num_rows($result) == 0) {
                                                                    echo "目前訂單為空的!~還不快去手刀購買!!~";
                                                                } else {
                                                                    if ($total >= 3000) {
                                                                        echo "總計：" . $total . "元整，滿3000免運";
                                                                    } else {
                                                                        echo "總計：" . $total . "元+運費100，共" . ($total + 100) . "元整";
                                                                    }
                                                                }
                                                                ?></td>
                    </tr>
                </table>
                <div class="container-fluid col-2 offset-5 justify-content-center">
                    <input type="button" name="button[]" id="button[]" value="清空訂單" onclick="btn_confirmLink('確定清空訂單?','order_delall.php');return document.MM_returnValue;">
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once('cta.php') ?>
    <?php include_once('footer.php') ?>
    <!-- Footer -->
</body>

</html>