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
    .margin-tbl {
        margin-top: 3rem;
        margin-bottom: 3rem;
        margin-left: 3rem;
    }

    .margin-tb {
        margin-top: 10vw;
        margin-bottom: 15vw;
    }

    .font-c {
        color: burlywood;
    }
    #fontcontact{
        height: 100%;
    }
    .bgc{
        background-image: url("images/bd_bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>

<body class="landing bgc" style="background-color:#202020;">
    <div id="page-wrapper">
        <!-- naverbar ----------------------------------------------------------------------------------->
        <?php include_once('naverbar.php') ?>
        <!-- Banner -->
        <section id="bannerO" style="height:10vh; width:100%">
            <div align="center"> <a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a> <a href="First_Page.html" class="btn btn-outline-light">關於我們</a> <a href="Normal_merchandise.php" class="btn btn-outline-light">公告欄</a> <a href="product.php" class="btn btn-outline-light">線上商城</a> <a href="First_Page.html" class="btn btn-outline-light">會員中心</a> </div>
        </section>
        <!-- Main -->
    </div>
    <!-- /////////////////////////////// -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form class="col-6 margin-tb" action="" method="post" name="form1" id="form1" onsubmit="">
                <table width="80%" border="1" cellspacing="1">
                    <tr>
                        <td align=" center" bgcolor="#FFFFFF">商品編號</td>
                        <td align="center" bgcolor="#FFFFFF">圖片</td>
                        <td align="center" bgcolor="#FFFFFF">品名</td>
                        <td align="center" bgcolor="#FFFFFF">尺寸</td>
                        <td align="center" bgcolor="#FFFFFF">價格</td>
                        <td align="center" bgcolor="#FFFFFF">數量</td>
                        <td align="center" bgcolor="#FFFFFF">小計</td>
                        <td align="center" bgcolor="#FFCCCC">取消</td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">T-0
                            <input type="hidden" id="cartid[]" name="cartid[]" value="">
                        </td>
                        <td align="center" bgcolor="#FFFFFF">0</td>
                        <td align="center" bgcolor="#FFFFFF">0</td>
                        <td align="center" bgcolor="#FFFFFF">0</td>
                        <td align="center" bgcolor="#FFFFFF">0元</td>
                        <td align="center" bgcolor="#FFFFFF"><input name="odlist_qty[]" type="text" id="odlist_qty[]" value="" size="4" maxlength="2" /></td>
                        <td align="center" bgcolor="#FFFFFF">0元</td>
                        <td align="center" bgcolor="#FFFFFF"><input type="button" id="button[]" name="button[]" value="取消" onclick="btn_confirmLink('確定刪除本資料?','shopcart_del1.php?cartid=<?php echo $data['cartid']; ?>');return document.MM_returnValue;" /></td>
                    </tr>
                    <tr>
                        <td colspan="8" align="right" bgcolor="#FFFFFF">累計：</td>
                    </tr>
                    <tr>
                        <td colspan="8" align="right" bgcolor="#FFFFFF">運費：100</td>
                    </tr>
                    <tr>
                        <td colspan="8" align="right" bgcolor="#FFFFFF" class="font_red">總計：100</td>
                    </tr>
                    <tr>
                        <td colspan="8" align="center" bgcolor="#FFFFFF">
                            <input type="button" id="button[]" name="button[]" value="送出訂單" />
                            <input type="button" id="button[]" name="button[]" value="回上一頁" onclick="window.history.go(-1);" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div> 
    <!-- CTA -->
    <section id="cta" style="background-color: brown;">
        <h2>Search For Your Favorite</h2>
        <form>
            <div class="row uniform 50%">
                <div class="8u 12u(mobilep)">
                    <input type="text" name="search" id="search" placeholder="KeyWord" />
                </div>
                <div class="4u 12u(mobilep)">
                    <input type="submit" value="Go Search" class="fit" />
                </div>
            </div>
        </form>
    </section>
    <!-- Footer -->
    <?php include_once('footer.php') ?>
    <!-- Footer -->
    </p>
</body>

</html>