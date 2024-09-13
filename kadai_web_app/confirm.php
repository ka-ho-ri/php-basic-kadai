<?php

    //POSTリクエストから入力データを取得
    $name = $_POST['employee_name'];
    $age = $_POST['employee_age'];
    $department = $_POST['department'];

    $errors = [];

    //名前が空欄ではなければ
    if(empty($name)){
        $errors[] = '社員名を入力してください。';
    }

    //メールアドレスが空欄でなかったら
    if(empty($age)){
        $errors[] = '年齢を入力してください。';
    }

    //問い合わせ内容が空欄だったら、または文字数が多かったら
    if(empty($department)){
        $errors[] = '所属部署が空欄です';
    }

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charaset="UTF-8">
    <title>入力内容をご確認ください。</title>
</head>

<body>
<h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>

    <?php

        //エラーメッセージがあったら、エラーメッセージの配列を書き出す
        if(!empty($errors)) {

            foreach($errors as $error){
           echo '<font color="red">'. $error .'</font><br>';
        }

        //エラーメッセージがあったら、送信ボタンを隠す
        echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';

    }
    ?>
</body>
</html>
