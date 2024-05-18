<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        // ソート関数を作成する
        function sort_2way($nums, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($nums);
                foreach ($nums as $num) {
                    echo $num . '<br>';
                }  

            } else {
                echo '降順にソートします。<br>';
                rsort($nums);
                foreach ($nums as $num) {
                    echo $num . '<br>';
                }
            }
        }

        // 配列
        $array = [15, 4, 18, 23, 10 ];

        // 昇順でソート
        sort_2way($array, TRUE);

        // 降順でソート
        sort_2way($array, FALSE);
        ?>
    </p>
</body>

</html>