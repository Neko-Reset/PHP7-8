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
    private int $page;

    public function __construct(int $unit, int $page) {
        // 親クラスのメソッドを呼び出す
        parent::__construct($unit);
        $this->page = $page;
    }

    // オーバーライズ
    public function getUnit()
    {
        return $this->unit;  // 冊
    }
}

$item = new Item(5);
echo $item->getUnit();
