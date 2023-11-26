<?php
class Item {
    public string $name;  // 商品名
    private int $price;   // 価格

    public function setPrice(int $price) : bool
    {
        if ($price < 0) {
            return false;
        }

        $this->price = $price;
        return true;
    }

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

$item->setPrice(100);

echo $item->name, "/", $item->getPrice();
