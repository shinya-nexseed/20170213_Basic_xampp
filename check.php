<?php
// index.htmlのフォームから送信されたデータを受け取る
// echo $_POST['hoge'];
// スーパーグローバル変数とは
// PHPにはあらかじめよく使う機能からデータを受け取るために用意された特殊な変数が定義されている
// $_大文字  で書かれるものはすべてスーパーグローバル変数
// $_POST、$_GET、$_SESSION、$_REQUEST、$_COOKIE等がある
// この変数の使用にはそれぞれ違った条件がある

// $_POSTの使用条件 : formタグのmethodがPOST指定されている状態で、submitボタンが押された時

// 変数って名前ですが、すべて連想配列です。
// $_POST = array('nickname' => 'ほげほげほげ');
// echo $_POST['nickname'];
// echo $_POST['email'];
// echo $_POST['content'];
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>入力内容確認</h1>
  <p>ようこそ、<?php echo $_POST['nickname']; ?>様</p>
  <p>メールアドレス:<?php echo $_POST['email']; ?></p>
  <p>お問い合わせ内容:<?php echo $_POST['content']; ?></p>

  <form method="POST" action="thanks.php">
    <!--
      <input type="hidden" name="nickname" value="ほげ">
      typeでhiddenを指定すると画面上には表示されずにデータを送信することができる。
      valueには元から入れておきたい値を指定することができる
      -->
    <input type="hidden" name="nickname" value="<?php echo $_POST['nickname']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="content" value="<?php echo $_POST['content']; ?>">
    <input type="submit" value="送信">
  </form>
</body>
</html>













