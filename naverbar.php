<style type="text/css">
</style>
<header id="header" class="alt">
    <h1><a href="index.html">Taichung Buffet</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="Second_Page.php">回首頁</a></li>
            <li>
                <a href="#" class="icon fa-angle-down">功能表列</a>
                <ul>
                    <li><a href="aboutus.php">關於我們</a></li>
                    <li><a href="News.php">公告欄</a></li>
                    <li><a href="Q&A.php">Q&A</a></li>
                    <li>
                        <a href="#">商品列表</a>
                        <ul>
                            <li><a href="Normal_merchandise.php">所有商品</a></li>
                            <li><a href="Hot_merchandise.php">主廚推薦</a></li>
                            <li><a href="Freeze_merchandise.php">調理食品</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <?php 
            if (isset($_SESSION['username'])) {
                echo "<li style='color:#FFF;text-decoration:underline;font-weight:bolder;margin-right:1vw' title='目前登入的使用者'>"."$_SESSION[username]"."</li>";
                echo "<li><a href='logout.php' class='button'>登出</a></li>";
                echo "<li><a href='member_modify.php' class='button'>修改密碼</a></li>";
            } else {
                echo "<li><a href='login.php' class='button'>登入</a></li>";
                echo "<li><a href='member.php' class='button'>註冊</a></li>";
            } ?>
            <li><a href="shopcart.php" class="button">購物車</a></li>
        </ul>
    </nav>
</header>