<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編課題11</title>
 </head>
 
 <body>
    <p>
        <?php
        $vege_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
        foreach ($vege_data as $key => $value) {
            echo "{$key} : {$value}<br>";
        }

        ?>
    </p>
</body>
</html>