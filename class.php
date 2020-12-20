<?php
include_once "Connections/cnStu.php";


//搜尋
$key = (isset($_GET['key'])) ? $_GET['key'] : "Keyword";
$query = sprintf("SELECT * FROM food WHERE food_type=%d", $key);
$searchList = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($searchList);

$cquery = "SELECT * FROM `class`";
$result = mysqli_query($link, $cquery);
$class = mysqli_fetch_assoc($result);


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrap {
            display: flex;
            flex-flow: wrap;
        }

        .item {
            width: 20%;
        }

        img {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['key'])) { ?>
        <div class="wrap">
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <div class="item">
                    <img src="images/<?php echo $data['food_img']; ?>.jpg" alt="">
                    <h2><?php echo $data['food_name']; ?></h2>
                    <?php print_r($class['cname']); ?>
                </div>
            <?php }; ?>
        </div>
    <?php }; ?>


    <input type="button" name="edit" value="生魚片" onclick="location.href='class.php?key=1'">
    <input type="button" name="edit" value="生菜沙拉" onclick="location.href='class.php?key=2'">
    <input type="button" name="edit" value="拉麵" onclick="location.href='class.php?key=3'">
    <input type="button" name="edit" value="壽司" onclick="location.href='class.php?key=4'">


    <?php
    echo '共 ' . $totalRows . ' 筆-在 ' . $page . ' 頁-共 ' . $pages . ' 頁';
    echo "<br /><a href=?page=1>首頁</a> ";
    echo "第 ";
    for ($i = 1; $i <= $pages; $i++) {
        if ($page - 5 < $i && $i < $page + 5) {
            echo "<a href=?page=" . $i . ">" . $i . "</a> ";
        }
    }
    echo " 頁 <a href=?page=" . $pages . ">末頁</a><br /><br />";
    ?>
</body>

</html>