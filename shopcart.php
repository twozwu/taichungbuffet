<?php
include_once "Connections/cnStu.php";
(!isset($_SESSION)) ? session_start() : "";
$ip = $_SERVER['REMOTE_ADDR'];
$query = "SELECT * FROM `cart`,food where food.food_id=cart.fid";
// $query = "SELECT * FROM `cart`,food where food.food_id=cart.fid and cart.ip='$ip'";
$result = mysqli_query($link, $query);
$results = array();
while ($row = mysqli_fetch_array($result)) {
    $results[] = $row;
}

if (isset($_POST['fid'])) {
    //判斷是否登入
    if (!isset($_SESSION['username'])) {
        $directGoTo = "login.php";
        header(sprintf("Location:%s", $directGoTo));
    } else {
        $email = $_SESSION['email'];
        $query = "SELECT * FROM member where email='$email'";
        $result = mysqli_query($link, $query);
        //寫入訂單資料表
        $countNum = count($_POST['fid']);
        for ($i = 0; $i < $countNum; $i++) {
            $shopid = $_SESSION['shopid'];
            $fid = $_POST['fid'][$i];
            $qty = $_POST['qty'][$i];
            $insertSQL = "INSERT INTO `uorder` (`fid`, `shopid`, `qty`) VALUES ('" . $fid . "', '" . $shopid . "', '" . $qty . "')";
            $Result1 = mysqli_query($link, $insertSQL);
        }
        //清空購物車
        $insertSQL = "DELETE FROM `cart` WHERE `cart`.`ip` = '" . $_SERVER['REMOTE_ADDR'] . "'";
        mysqli_query($link, $insertSQL);
        echo "<script>alert('訂單已送出，謝謝您的購買');</script>";
        $url = "checkCart.php";
        header("Refresh:0;url=$url");
    }
}
$total = 0;
?>
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

    .margin-tbl {
        margin-top: 3rem;
        margin-bottom: 3rem;
        margin-left: 3rem;
    }

    .margin-tb {
        margin-top: 5vw;
        margin-bottom: 5vw;
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

    .item {
        display: flex;
    }

    img {
        width: 20%;
    }

    /* .item input {
        height: 5px;
    } */

    .wrap {
        color: #fff;
        font-size: 2vh;
    }

    .tb tr td {
        padding: 0;
    }
</style>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>
<script>
    let buy = function(no) {
        $.ajax({
            type: "POST",
            url: "addCart.php",
            data: "no=" + no,
            success: function() {
                history.go(0);
            }
        });
    }

    var reduce = function(no) {
        $.ajax({
            type: "POST",
            url: "reduceCart.php",
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
</script>

<body class="landing bgc" style="background-color:#202020;">
    <div id="page-wrapper">
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
    </div>
    <!-- /////////////////////////////// -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form class="col-12 mt-5" action="" method="post" name="form1" id="form1" onsubmit="">
                <?php foreach ($results as $key => $row) {
                    $price = $row['food_price'];
                    $qty = $row['qty']; ?>
                    <table width="80%" border="1" cellspacing="1">
                        <tr>
                            <td align="center" bgcolor="#FFCCCC" width="20%">圖片</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">品名</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">價格</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">數量</td>
                            <td align="center" bgcolor="#FFCCCC" width="20%">小計</td>
                        </tr>
                        <tr>
                            <input type="hidden" id="cartid[]" name="cartid[]" value="<?php echo $row['cartid']; ?>">
                            <td align="center" bgcolor="#FFFFFF"><img src="images/<?php echo $row['food_img']; ?>.jpg" alt="" style="width: 250px;height:150px"></td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $row['food_name']; ?></td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $row['food_price']; ?>元</td>
                            <td align="center" bgcolor="#FFFFFF"> <input type="button" name="edit" value="-" onclick="reduce(<?php echo $row['fid']; ?>)" class="btn-sm">
                                x<?php echo $row['qty']; ?>
                                <input type="button" name="edit" value="+" onclick="buy(<?php echo $row['fid']; ?>)" class="btn-sm"></td>
                            <td align="center" bgcolor="#FFFFFF"><?php echo $price * $qty; ?>元</td>
                            <input type="hidden" id="fid[]" name="fid[]" value="<?php echo $row['fid']; ?>">
                            <input type="hidden" id="qty[]" name="qty[]" value="<?php echo $row['qty']; ?>">
                        </tr>
                        <tr>
                            <td colspan="8" align="center" bgcolor="#FFFFFF">小計：<?php echo $price * $qty; ?>元</td>
                        </tr>
                    <?php $total += $price * $qty;
                } ?>
                    <tr>
                        <td colspan="8" align="center" bgcolor="#FFFFFF" class="ml-auto mr-auto">
                            <?php
                            if (mysqli_num_rows($result) == 0) {
                                echo "<div style='color:#fff;font-size:0.8vw;height:25vw;padding-top:12.5vw' class='col-2 offset-5'>目前購物車為空的還不快手刀購買!!</div>";
                            } else {
                                if ($total >= 3000) {
                                    echo "總計：" . $total . "元整，滿3000免運";
                                } else {
                                    echo "總計：" . $total . "元+運費100，共" . ($total + 100) . "元整(滿3000元免運費唷~)";
                                }
                                echo "";                 // <input type="submit" name="sbumit" id="submit" value="結帳">
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <?php if (mysqli_num_rows($result) != 0) {  ?>
                            <td colspan="8" align="center" bgcolor="#FFFFFF">
                                <a href='javascript:document:form1.submit();'> <input type='button' id='button[]' name='button[]' value='送出訂單' /></a>
                                <input type="button" id="button[]" name="button[]" value="回上一頁" onclick="history.go(-1);" />
                                <input type="button" name="button[]" id="button[]" value="清空購物車" onclick="btn_confirmLink('確定清空購物車資料?','shopcart_delall.php');return document.MM_returnValue;">
                            </td>
                        <?php } ?>
                    </tr>
                    </table>
            </form>
        </div>
    </div>
    <?php include_once('cta.php') ?>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->

</body>

</html>