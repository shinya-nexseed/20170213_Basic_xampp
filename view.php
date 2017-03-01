<?php 
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// SELECT文 Read データの取得(表示や計算処理のため)

// 無条件に全件取得したい場合
// SELECT 取得したいカラム名 FROM `テーブル名`
// * ワイルドカード 
//   「すべて」を意味する
// *.cssや*.phpというファイル名指定
// SELECT * FROM `テーブル名`

$sql = 'SELECT * FROM `survey`';
$stmt = $dbh->prepare($sql);
$stmt->execute(); // $stmtにsurveyから取得したデータ全件が入る

// executeで取得したデータはobject型である
// このままではPHPで扱いづらい
echo '<pre>';
var_dump($stmt);
echo '</pre>';

// object型からarray型の連想配列に変換する
// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// // echo '<pre>';
// // var_dump($data);
// // echo '</pre>';
// // $data = array('code' => '1', 'nickname' => 'Yuji', 'email' => 'yuji@gmail.com', 'content' => '問い合わせ内容１');
// echo $data['code'];
// echo $data['nickname'];
// echo '<br>';

// // $hoge = array('name' => 'Yuki', 'gender' => '女');
// // echo $hoge['gender'];

// $data2 = $stmt->fetch(PDO::FETCH_ASSOC);
// echo $data2['code'];
// echo $data2['nickname'];
// echo '<br>';

// $data3 = $stmt->fetch(PDO::FETCH_ASSOC);
// echo $data3['code'];
// echo $data3['nickname'];
// echo '<br>';

// 繰り返し文で
while (true) { // 条件として無限ループをおこす
		// $stmtのデータを全件fetchしきったら繰り返し処理を終了させる
		$record = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($record == false) {
				break;
		}
		echo 'Code: ' . $record['code'] . '<br>';
		echo 'Nickname: ' . $record['nickname'] . '<br>';
		echo 'Email: ' . $record['email'] . '<br>';
		echo 'Content: ' . $record['content'] . '<br>';
		echo '<hr>';
}

?>

<!--
  ①DBとの連携部分の復習
  ②formと$_POST部分の復習
  ③oneline_bbsの予習
  ④自己紹介サイトシェア (Takahiro、keisuke、Yuka)
 -->






