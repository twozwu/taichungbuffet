<?php
include_once "Connections/cnStu.php";

(!isset($_SESSION)) ? session_start() : "";

if (isset($_SESSION['username'])) {
    include('time.php');
    $directGoTo = "Normal_merchandise.php";
    header(sprintf("Location:%s", $directGoTo));
}

if (isset($_POST['chkform'])) {
    $username = $_POST['username'];
    $pw1 = $_POST['password'];
    $query = sprintf("SELECT * from member where username='%s' and pw1 = '%s'", $username, $pw1);
    $result = mysqli_query($link, $query);
    if ($result->num_rows == 0) {
        // $err_code = 1;
        echo "<script>alert('請輸入正確帳號密碼');</script>";
    } else {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['shopid'] = $data['shopid'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['pw1'] = $data['pw1'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['birthday'] = $data['birthday'];
        $_SESSION['tel'] = $data['tel'];
        $_SESSION['addr'] = $data['addr'];
        $_SESSION['create_date1']=$data['create_date1'];
        $directGoTo = "Normal_merchandise.php";
        $_SESSION['time'] = time();
        header(sprintf("Location:%s", $directGoTo));
    }
}

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
<!-- Header ----------------------------------------------------------------------------------->
<?php include_once('headerfile.php') ?>

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
    <div class="container-fluid margin-tb" style="background-image: url('images/bd_bg.jpg');background-repeat:no-repeat;background-size:cover">
        <div class="col-lg-4 offset-4">
            <form action="#" id="formcontact" method="post" name="form1">
                <table border="1" style="border-color: burlywood;">
                    <tr>
                        <div class="font-c ml-4 mb-1">會員名稱:</div>
                        <div class="row form-group"><input type="text" class="form-control" name="username" placeholder="Username" style="width: 25vw;margin-left:2.5vw"></div>
                        <br>
                        <div class="font-c ml-4 mb-1">會員密碼:</div>
                        <div class="row form-group"><input type="password" class="form-control" name="password" placeholder="Password" style="width: 25vw;margin-left:2.5vw"></div>
                        <br>
                        <input type="hidden" id="chkform" name="chkform">
                    </tr>
                </table>
                <button class="btn btn-lg btn-warning" type="button" style="margin-right: auto;margin-left:6vw;" onclick="location.href='member.php'">註冊</button>
                <a href="findpwd.php" class="btn btn-lg btn-danger">忘記密碼</a> 
                <button class="btn btn-lg btn-warning" type="submit" style="margin-right: auto;">登入</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php include_once('cta.php') ?>
    <?php include_once('footer.php') ?>
    <!-- Footer -->
</body>

</html>