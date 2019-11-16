<!-- 一覧画面 -->
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    const DB_HOST = 'public.w5wg9.tyo1.database-hosting.conoha.io';
    const DB_NAME = 'w5wg9_dosaco';
    const DB_USER = 'w5wg9_dosaco';
    const DB_PASS = 'doi315mysql#SAICO';

    function getRecord(){
        
        /* try-catchはTRYでERROR出たらCATCHにとぶ
        const定数、DB接続に必要な情報 */
        
        try{

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
    
            $sql = "SELECT id, book_name, wrote_by, bought_at, price from books";
    
            /* s
            tatment=処理内容
            ($ sql)をqueryに渡す
            実体化はアロー(->)で作られる 動的関数
            設計図としてのPDO(::)←スコープ 静的関数
            下のここで使われてる
    
            while ($ row = $ stmt->fetch(PDO::FETCH_ASSOC)){
            $ books[]=$ ow; 
            */

            $stmt = $pdo->query($sql);
            
                /* 空っぽの配列に入った */

            $books = [];
            

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $books[]=$row;
            }

                /* 解放する */
        
            // $stmt = null;

                /* $ eってなんだっけ。うんこわからない */

        } catch (PDOException $e) {
            var_dump($e);
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
        <a href="./create.php">新規作成</a>
        <table border="1" class="" id="aaa">
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
                <?php if(count($books)>0) : ?>
                <?php foreach($books as $book) : ?>
                <tr>
                    <td><?php echo $book[0]; ?></td>
                    <td><?php echo $book[1]; ?></td>
                    <td><?php echo $book[2]; ?></td>
                    <td><?php echo $book[3]; ?></td>
                    <td><?php echo $book[4]; ?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </body>    
</html>    