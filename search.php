<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>検索したいcodeを入力してください。</h2>
	<form method="POST" action="">
		<input type="text" name="code">
		<input type="submit" value="検索">
	</form>
<!-- 	
		フォームでもっとも重要なポイントみっつ
		①formタグのmethod
		②formタグのaction
		③inputタグのname

		フォームから送信されたデータは、methodがPOSTの場合、PHPでは$_POSTというスーパーグローバル変数で取得できる
		ただこの$_POST、連想配列なので注意
		$_POST内のキーになるのが、各inputタグのname属性の値(今回はcode)
	 -->
	 <?php 
	 $dsn = 'mysql:dbname=phpkiso;host=localhost';
	 $user = 'root';
	 $password = '';
	 $dbh = new PDO($dsn, $user, $password);
	 $dbh->query('SET NAMES utf8');

	 // 入力コードを受取る
	 if (!empty($_POST)) { // 送信ボタンが押された時
	 		// empty()はechoやcount()と同じ関数の一種で()の中に指定した変数が空かどうかを判定するもの
	 		// 空であればtrueを空じゃなければfalseを返す
	 		// !は、逆を意味する記号で、trueとfalseを逆にします

	 		$code = $_POST['code'];
	 		echo '入力されたコード:' . $code;
	 		echo '<br>';
	 		echo '<br>';

	 		// 条件付きでデータを取得したい場合
	 		$sql = 'SELECT * FROM `survey` WHERE `code`=' . $code;
	 		// WHERE句
	 		// 条件を指定する際に必須の構文で、WHEREのあとに対象とするカラムと比較式、比較したい値を指定する
	 		// SELECT カラム名 FROM `テーブル名` WHERE `カラム名` 式 値

	 		$stmt = $dbh->prepare($sql);
	 		$stmt->execute();

	 		$record = $stmt->fetch(PDO::FETCH_ASSOC);

	 		echo 'Code: ' . $record['code'] . '<br>';
	 		echo 'Nickname: ' . $record['nickname'] . '<br>';
	 		echo 'Email: ' . $record['email'] . '<br>';
	 		echo 'Content: ' . $record['content'] . '<br>';
	 		echo '<hr>';
	 }


	 ?>
</body>
</html>









