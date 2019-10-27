<!-- 一覧画面 -->
<?php

    function getRecord(){

            /* try-catchはTRYでERROR出たらCATCHにとぶ
            const定数、DB接続に必要な情報 */

        try{
            const DB_HOST = 'localhost';
            const DB_NAME = 'book_management';
            const DB_USER = 'root';
            const DB_PASS = 'root';
    
                /*DSN指定、接続文字列*/

                /* %フォーマット演算子
                host=%sの(%s)には、DB_HOST
                dbname=%sの(%s)には、DB_NAME */

            $dsn = sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME);

                /* PDOインスタンス化
                PHPでDBを使うためのオブジェクト(クラス)
                ($pdo = new PDO)→実体化 = インスタンス化 
                クラス = 設計図(こんな関数がありますよ)*/

            $pdo = new PDO($dsn, DB_USER, DB_PASS);

            $sql = "SELECT book_name, wrote_by, bought_at, price from 'book";

                /* statment=処理内容
                ($sql)をqueryに渡す
                実体化はアロー(->)で作られる　動的関数
                設計図としてのPDO(::)←スコープ　静的関数
                下のここで使われてる

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $books[]=$row;　*/

            $stmt = $pdo->query($sql);

                /* 空っぽの配列に入った */

            $books = [];

                /* (PDO::FETCH_ASSOC)→設計図としてのPDO*/

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $books[]=$row;
            }

                /* 解放する */
        　
            $stmt = null;

                /* $eってなんだっけ。うんこわからない */

    } catch (PDOException $e) {
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