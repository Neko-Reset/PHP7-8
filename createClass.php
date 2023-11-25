<?php
class Item {
    public string $name; // 商品名
    public int $price;   // 価格

    // 価格を取得する
    public function getPrice(string $yen = "") :string
    {
        return number_format($this->price) . $yen;
    }

    public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }
}

$item = new Item("PHP", 1500);

// $item->name = "php";
// $item->price = 150000;

echo $item->name, "/", $item->getPrice("円");
