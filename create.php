<?php

//var_dump($_POST);
//exit();

// データの受け取り
$name = $_POST["name"];
$email = $_POST["email"];
$food = $_POST["food"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data="{$name} {$email} {$food}\n";

// ファイルを開く．引数が`a`である部分に注目！
$file=fopen("data/todo.csv","a");

// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file,$write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:index.old.php");