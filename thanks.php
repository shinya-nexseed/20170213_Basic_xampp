<?php
// check.phpから送信データを受け取る
// echo $_POST['nickname'];

// ステップ１ DBに接続
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
// オブジェクト指向
$dbh->query('SET NAMES utf8');

// ステップ２ SQL文を実行する
$sql = 'INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("'.$_POST['nickname'].'", "'.$_POST['email'].'", "'.$_POST['content'].'")'; // 文字列でSQL命令文を用意
// 書きやすい方法
$sql = 'INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES (?,?,?)';

$data = array($_POST['nickname'],$_POST['email'],$_POST['content']);

$stmt = $dbh->prepare($sql); // SQL文を実行するための準備
$stmt->execute($data); // 実行
// 実行の際、Read処理なら$stmtに取得した結果が入る

// INSERT文 Create データの作成
// INSERT INTO `テーブル名`(`カラム名１`, `カラム名２`, `カラム名３` ... ) VALUES ("データ１","データ２","データ３"... )
// アクサングラーブ
// 主キー　primary key カラムの代表
// AI Auto Increment 1から順に繰り上がる数字が自動的にふられる

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>お問い合わせ有難うございました！</h1>
  <p>ニックネーム:<?php echo $_POST['nickname']; ?>様</p>
  <p>メールアドレス:<?php echo $_POST['email']; ?></p>
  <p>お問い合わせ内容:<?php echo $_POST['content']; ?></p>
</body>
</html>


<!--
  ①DBとの連携部分の復習
  ②formと$_POST部分の復習
  ③oneline_bbsの予習
  ④自己紹介サイトシェア (Takahiro、keisuke、Yuka)
 -->







