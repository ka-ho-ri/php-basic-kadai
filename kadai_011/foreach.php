<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charaset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>

<?php

    $item = [
        '名前' => '玉ねぎ',
        '値段' => 200,
        '産地' => '北海道'
        ];

    foreach($item as $key => $value){

        echo "{$key}：{$value}<br>";

    }

?>


</P>

</body>
</html>
