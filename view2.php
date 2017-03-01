<?php 
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM `survey`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$record = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record['code'] . '<br>';
echo 'Nickname: ' . $record['nickname'] . '<br>';
echo 'Email: ' . $record['email'] . '<br>';
echo 'Content: ' . $record['content'] . '<br>';
echo '<hr>';

$record2 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record2['code'] . '<br>';
echo 'Nickname: ' . $record2['nickname'] . '<br>';
echo 'Email: ' . $record2['email'] . '<br>';
echo 'Content: ' . $record2['content'] . '<br>';
echo '<hr>';

$record3 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record3['code'] . '<br>';
echo 'Nickname: ' . $record3['nickname'] . '<br>';
echo 'Email: ' . $record3['email'] . '<br>';
echo 'Content: ' . $record3['content'] . '<br>';
echo '<hr>';

$record4 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record4['code'] . '<br>';
echo 'Nickname: ' . $record4['nickname'] . '<br>';
echo 'Email: ' . $record4['email'] . '<br>';
echo 'Content: ' . $record4['content'] . '<br>';
echo '<hr>';

$record5 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record5['code'] . '<br>';
echo 'Nickname: ' . $record5['nickname'] . '<br>';
echo 'Email: ' . $record5['email'] . '<br>';
echo 'Content: ' . $record5['content'] . '<br>';
echo '<hr>';

$record6 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record6['code'] . '<br>';
echo 'Nickname: ' . $record6['nickname'] . '<br>';
echo 'Email: ' . $record6['email'] . '<br>';
echo 'Content: ' . $record6['content'] . '<br>';
echo '<hr>';

$record7 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record7['code'] . '<br>';
echo 'Nickname: ' . $record7['nickname'] . '<br>';
echo 'Email: ' . $record7['email'] . '<br>';
echo 'Content: ' . $record7['content'] . '<br>';
echo '<hr>';

$record8 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record8['code'] . '<br>';
echo 'Nickname: ' . $record8['nickname'] . '<br>';
echo 'Email: ' . $record8['email'] . '<br>';
echo 'Content: ' . $record8['content'] . '<br>';
echo '<hr>';

$record9 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record9['code'] . '<br>';
echo 'Nickname: ' . $record9['nickname'] . '<br>';
echo 'Email: ' . $record9['email'] . '<br>';
echo 'Content: ' . $record9['content'] . '<br>';
echo '<hr>';

$record10 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record10['code'] . '<br>';
echo 'Nickname: ' . $record10['nickname'] . '<br>';
echo 'Email: ' . $record10['email'] . '<br>';
echo 'Content: ' . $record10['content'] . '<br>';
echo '<hr>';

$record11 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record11['code'] . '<br>';
echo 'Nickname: ' . $record11['nickname'] . '<br>';
echo 'Email: ' . $record11['email'] . '<br>';
echo 'Content: ' . $record11['content'] . '<br>';
echo '<hr>';

$record12 = $stmt->fetch(PDO::FETCH_ASSOC);

echo 'Code: ' . $record12['code'] . '<br>';
echo 'Nickname: ' . $record12['nickname'] . '<br>';
echo 'Email: ' . $record12['email'] . '<br>';
echo 'Content: ' . $record12['content'] . '<br>';
echo '<hr>';

 ?>










