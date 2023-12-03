<?php
// 使いたいクラスのファイルパス
require_once "app/namespace.php";
use app\Item;


// useを使わなかった場合
// こっちだとメソッドの名の重複衝突を回避
// $item = new app\Item();

$item = new Item();

echo $item->getPrice();
