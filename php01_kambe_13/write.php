<?php
// ファイルに書き込み
$name = $_POST['name'];
$mail = $_POST['mail'];
$date = $_POST['date'];

//文字作成
$str = $name . '/' . $mail . '/' . $date . "\n";

$file = fopen('data/data.txt', 'a');
fwrite($file, $str);
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h2>融資依頼希望者情報情報一覧</h2>

    <table width="80%" border="1">
        <tr>
        <td>お名前</td>
        <td>Email</td>
        <td>連絡希望日時</td>
        </tr>

        <tr>
        <td> <?php echo $name ?> </td>
        <td> <?php echo $mail ?> </td>
        <td>：<?php echo $date ?></td>
        </tr>
    </table>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>