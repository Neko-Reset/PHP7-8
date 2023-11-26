<?php
class Item {
    protected int $unit; // 個数

    public function __construct(int $unit) {
        $this->unit = $unit; // 個数
    }

    public function getUnit()
    {
        return $this->unit;
    }
}

class Book extends Item {
    // オーバーライズ
    public function getUnit()
    {
        return $this->unit;  // 冊
    }
}

$item = new Item(5);
echo $item->getUnit();
