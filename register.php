<?php include "Connections/cnStu.php";?>
<?php
(!isset($_SESSION)) ? session_start() : "";

$uname = "";
$email = "";
$pw1 = "";
$addr = "";
$tel = "";
if (isset($_SESSION['email'])) {
    $uname = $_SESSION['uname'];
    $email = $_SESSION['email'];
    $pw1 = $_SESSION['pw1'];
    $addr = $_SESSION['addr'];
    $tel = $_SESSION['tel'];
}
if (isset($_POST['email'])) {
    //新增會員資料
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pw1 = $_POST['pw1'];
    $addr = $_POST['addr'];
    $tel = $_POST['tel'];
    if (isset($_SESSION['email'])) {
        $insertSQL = sprintf("UPDATE member SET uname='%s', pw1='%s', addr='%s', tel='%s' WHERE email='%s'", $uname, $pw1, $addr, $tel, $email);
    } else {
        $insertSQL = sprintf("INSERT INTO member (uname, email, pw1, addr, tel) VALUES ('%s', '%s', '%s', '%s', '%s')", $uname, $email, $pw1, $addr, $tel);
    }
    $result = mysqli_query($store, $insertSQL);

    //取得使用者購買編號
    $insertSQL = "SELECT shopid FROM member WHERE email='" . $email . "'";
    $Result1 = mysqli_query($store, $insertSQL);
    $data = mysqli_fetch_assoc($Result1);
    $shopid = $data['shopid'];
    $insertGoTo ="Normal_merchandise.php";
    header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>re:0 會員註冊</title>

    <script src="jquery.validate.js" type="text/javascript"></script>
    <script>
    $(function() {
        //自訂格式驗證
        jQuery.validator.addMethod("checkphone", function(value, element, param) {
            var checkphone = /^[0]{1}[9]{1}[0-9]{8}$/;
            return this.optional(element) || (checkphone.test(value));
        }, "電話格式有誤!");

        $('#form1').validate({
            rules: {
                uname: {
                    required: true,
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
                },
                email: {
                    required: 'email信箱不得為空白',
                    email: 'email信箱格式有誤',
                    remote: 'email信箱已註冊'
                },
                pw1: {
                    required: '密碼不得為空白',
                    maxlength: '密碼最大長度為20位(4-20位英文字母與數字的組合)',
                    minlength: '密碼最小長度為4位(4-20位英文字母與數字的組合)'
                },
                pw2: {
                    required: '確認密碼不得為空白',
                    equalTo: '兩次輸入的密碼必須一致!'
                },
                addr: {
                    required: '地址不得為空白',
                },
                tel: {
                    required: '手機號碼不得為空白',
                    checkphone: '手機號碼格式有誤'
                },
            },
        });
    });
    </script>

</head>

<body>
    <div class="AAAA">
        <div id="box">
            <div id="login">
                <h1>會員註冊</h1>
                <form action="" method="post" id="form1" name="form1">
                    <div class="input">
                        <label>姓名:</label>
                        <input id="uname" name="uname" placeholder="" type="text">
                    </div>
                    <div class="input">
                        <label>電子信箱:</label>
                        <input id="email" name="email" placeholder="" type="text">
                    </div>
                    <div class="input">
                        <label>密碼:</label>
                        <input id="pw1" name="pw1" placeholder="" type="password">
                    </div>
                    <div class="input">
                        <label>確認密碼:</label>
                        <input id="pw2" name="pw2" placeholder="" type="password">
                    </div>
                    <div class="input">
                        <label>地址:</label>
                        <input id="addr" name="addr" placeholder="" type="text">
                    </div>
                    <div class="input">
                        <label>電話:</label>
                        <input id="tel" name="tel" placeholder="" type="text">
                    </div>


                    <div class="pzt">
                        <input ref="javascript:void(0)" onclick="history.go(-1)" name="submit" type="submit"
                            value=" 返回前頁 ">
                        <input name="submit1" type="submit" value=" 確認註冊 ">
                        <input type="hidden" id="chkForm" name="chkForm" value="1">

                    </div>
                </form>
            </div>
        </div>
        <div id="main">
            <p class="main-mj sp-hide"><img src="img/DT/會員@2x.png" alt=""></p>
        </div>
    </div>
</body>

</html>