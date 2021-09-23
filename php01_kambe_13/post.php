<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: yellow;
            font-size: 70px;
            color: black;
            font-weight: bold;
            text-align: center;
        }
        li {
            list-style: none;
            }
    </style>
    <title>POST</title>
</head>

<body>
    <div class="menu">
        <h3 class="menu">menu</h3>
    </div>
    <P>※正確に入力お願いします。</P>

    <form action="write.php" method="post">
        <li>お名前: <input type="text" name="name"></li>
        <li>EMAIL: <input type="text" name="mail"></li>
        <li>連絡可能希望日: <input type="date" name="date"></li>
        <li> <input type="submit" value="送信"></li>
    </form>
</body>

</html>