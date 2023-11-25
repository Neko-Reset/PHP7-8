<?php
class Item {
    public string $name; // 商品名
    public int $price;   // 価格
}

$item = new Item();

$item->name = "php";
$item->price = 1000;

echo $item->name, "/", $item->price;
