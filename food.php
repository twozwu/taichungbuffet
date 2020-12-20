<?php
include_once "Connections/cnStu.php";

$query = "SELECT * FROM `food` order by food_id";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

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
    <div class="wrap">
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <div class="item">
                <img src="images/<?php echo $data['food_img']; ?>.jpg" alt="">
                <h2><?php echo $data['food_name']; ?></h2>
            </div>
        <?php }; ?>
    </div>
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