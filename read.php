<?php

// データまとめ用の空文字変数
$str="";

// ファイルを開く（読み取り専用）
$file = fopen("data/todo.csv", "r");
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if($file){
    // 取得したデータを`$str`に追加する
   while($line=fgets($file)){
     $str .= "<tr><td>{$line}</td></tr>";
   }
}
// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// `$str`に全てのデータ（タグに入った状態）がまとまるので，HTML内の任意の場所に表示する．

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート</title>
</head>

<body>
  <fieldset>
    <legend>アンケート</legend>
    <a href="index.old.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>todo</th>
        </tr>
      </thead>
      <tbody>
        <!-- データの出力も忘れずに -->
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>