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


?>

<!--
  ①DBとの連携部分の復習
  ②formと$_POST部分の復習
  ③oneline_bbsの予習
  ④自己紹介サイトシェア (Takahiro、keisuke、Yuka)
 -->






