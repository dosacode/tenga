<!-- 新規作成 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規作成</title>
</head>

<body>
    <header>
        <form method="POST" action="create.php">
            <p>本の名前<input type="text" name="booktitle"></p>
            <p>著者名<input type="text" name="authorname"></p>
            <p>出版年月日<input type="text" name="dateofpublication"></p>
            <p>ページ数<input type="text" name="page"></p>
            <p>NDC分類(10版)<input type="text" name="ndc"></p>
            <input type="submit" value="送信">
        </body>
</html>