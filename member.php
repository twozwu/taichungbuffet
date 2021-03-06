<?php
require_once "Connections/cnStu.php";
(!isset($_SESSION)) ? session_start() : "";

if (isset($_POST['submit'])) {
    //新增會員資料
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pw1 = $_POST['pw1'];
    $uid = $_POST['uid'];
    $addr = $_POST['addr'];
    $tel = $_POST['tel'];
    if (isset($_SESSION['email'])) {
        $insertSQL = "UPDATE member set uname=$uname, pw1=$pw1, uid=$uid, addr=$addr, tel=$tel where email=$email";
    } else {
        $insertSQL = sprintf("INSERT INTO member (username, email, pw1, uid, addr, tel) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')", $uname, $email, $pw1, $uid, $addr, $tel);
    }
    $result = mysqli_query($link, $insertSQL);
    echo "<script>alert('感謝註冊，祝您購物愉快');</script>";
    $url = "login.php";
    header("Refresh:0;url=$url");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.validate.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<style type="text/css">
    #bannerO {
        background-attachment: scroll, fixed;
        background-color: brown;
        /*rgba(6, 13, 27, 0.61) */
        background-position: top left, center center;
        background-repeat: repeat, no-repeat;
        background-size: auto, cover;
        color: #fff;
        padding: 5em 0 5em 0;
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

    .error-tips {
        color: red;
    }

    .valid-tips:before {
        content: '驗證通過！！';
        color:yellow;
        margin-left: 10px;
    }
</style>
<script>
    $(function() {
        //自訂格式驗證
        jQuery.validator.addMethod("tssn", function(value, element, param) {
            var tssn = /^[a-zA-Z]{1}[1-2]{1}[0-9]{8}$/;
            return this.optional(element) || (tssn.test(value));
        }, "身份證格式有誤！");

        jQuery.validator.addMethod("checkphone", function(value, element, param) {
            var checkphone = /^[0]{1}[9]{1}[0-9]{8}$/;
            return this.optional(element) || (checkphone.test(value));
        }, "電話格式有誤！");
        $('#form1').validate({
            rules: {
                uname: {
                    required: true,
                    remote:'checkuname.php'
                },
                email: {
                    required: true,
                    email: true,
                    remote: 'checkemail.php'
                },
                pw1: {
                    required: true,
                    maxlength: 20,
                    minlength: 4,
                },
                pw2: {
                    required: true,
                    equalTo: '#pw1'
                },
                uid: {
                    required: false,
                    tssn: true,
                    remote: 'checkuid.php'
                },
                addr: {
                    required: true
                },
                tel: {
                    required: true,
                    checkphone: true,
                },
            },
            messages: {
                uname: {
                    required: '使用者名稱不得為空白',
                    remote: '使用者名稱已重複'
                },
                email: {
                    required: 'email信箱不得為空白',
                    email: 'email信箱格式有誤',
                    remote: 'email信箱已經註冊'
                },
                pw1: {
                    required: '密碼不得為空白',
                    maxlength: '密碼最大長度為20位(4-20位英文字母與數字的組合)',
                    minlength: '密碼最小長度為4位(4-20位英文字母與數字的組合)'
                },
                pw2: {
                    required: '確認密碼不得為空白',
                    equalTo: '兩次輸入的密碼必須一致！'
                },
                uid: {
                    required: '身份證ID不得為空白',
                    tssn: '身份證ID格式有誤',
                    remote: '身分證已重複'
                },
                addr: {
                    required: '地址不得為空白',
                },
                tel: {
                    required: '手機號碼不得為空白',
                    checkphone: '手機號碼格式有誤',
                },
            },
        });

    });
</script>

<body class="landing" style="background-color: #202020;">
    <?php include_once('headerfile.php') ?>
    <?php include_once('naverbar.php') ?>
    <div id="page-wrapper">
        <!-- naverbar ----------------------------------------------------------------------------------->
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
    <div class="container-fluid">
        <div class="row pt-5" style="background-image:url('images/bd_bg.jpg');background-size:cover">
            <form class="margin padding bd col-md-3" action="member.php" method="post" name="form1" id="form1">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Username:</label>
                        <input name="uname" type="text" class="form-control" id="uname" style="color: #000;" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email:</label>
                        <input name="email" type="text" class="form-control" style="color: #000;" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Password:</label>
                        <input type="password" class="form-control" id="pw1" name="pw1" style="color: #000;" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Password Check:</label>
                        <input type="password" class="form-control" id="pw2" name="pw2" style="color: #000;" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">UID:</label>
                        <input type="text" class="form-control" id="uid" name="uid" style="color: #000;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address:</label>
                    <input type="text" class="form-control" id="addr" name="addr" placeholder="Your address" style="color: #000;" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Tel:</label>
                        <input type="number" class="form-control" id="tel" name="tel" placeholder="Please enter your phone for 10 numbers" style="color: #000;" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <input type="submit" name="submit" id="submit" value="註冊">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="reset" name="reset" id="reset" value="重新填寫">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once('cta.php') ?>
    <!-- Footer -->
    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>Taichung Buffet 地址：40767台中市西屯區工業區一路100號 電話：04-22662266 免付費電話：0800-092-000 <br> COPYRIGHT © TAICHUNG BUFFET CO, ALL RIGHT RESERED.</li>
        </ul>
    </footer>
</body>

</html>