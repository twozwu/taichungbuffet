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
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<style type="text/css">
    .media {
        background: none;
        color: white;
    }
</style>
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>

<body class="landing" style="background-color: #202020;">
    <div id="page-wrapper">
        <!-- naverbar ----------------------------------------------------------------------------------->
        <?php include_once('naverbar.php') ?>
        <!-- Banner -->
        <section id="banner">
            <div align="center">
                <a href="Second_Page.php" class="btn btn-outline-light">回至首頁</a>
                <a href="First_Page.html" class="btn btn-outline-light">關於我們</a>
                <a href="Normal_ merchandise.php" class="btn btn-outline-light">商品列表</a>
                <a href="product.php" class="btn btn-outline-light">至購物車</a>
                <a href="First_Page.html" class="btn btn-outline-light">會員中心</a>
            </div>
        </section> <!-- Main -->
    </div>
    <p style="height:400px">
        <!-- /////////////////////////////// -->
        <div style="margin-left: auto; margin-right: auto; width:1240px;">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <section id="cta">

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
        </section>
        <!-- Footer -->
        <?php include_once('footer.php') ?>
        <!-- Footer -->
    </p>



</body>

</html>