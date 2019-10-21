<!-- 一覧画面 -->
<?php

    function getRecord(){

        /*try-catchはTRYでERROR出たらCATCHにとぶ*/
        try{
        const DB_HOST = 'localhost';
        const DB_NAME = 'book_management';
        const DB_USER = 'root';
        const DB_PASS = 'root';
    
            /*DSN指定、接続文字列*/


            /*眠いから解説ここまで、明日ちゃんと書く*/

            
        $dsn = sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME);

        $pdo = new PDO($dsn, DB_USER, DB_PASS);

        $sql = "SELECT book_name, wrote_by, bought_at, price from 'book";

        $stmt = $pdo->query($sql);

        $books = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $books[]=$row;
        }

        $stmt = null;

        /*$eってなんだっけ*/

    } catch (PDOEqception $e) {
        exit($e->getMessage());
    }

}

$books = getRecord();

?>

<!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>どさこの本たち</title>
        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <h1>aaaa</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>本の名前</th>
                    <th>著者名</th>
                    <th>出版年月日</th>
                    <th>ページ数</th>
                    <th>NDC分類(10版)</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td><?php echo $book[0]; ?></td>
                    <td><?php echo $book[1]; ?></td>
                    <td><?php echo $book[2]; ?></td>
                    <td><?php echo $book[3]; ?></td>
                </tr>
            </tbody>
        </table>
    </body>    
</html>    
