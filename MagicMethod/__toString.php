<?php
class Item
{
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString()
    {
        return $this->name . ' : ' . number_format($this->price) . "円";
    }
}

$item = new Item("マジックメソッド", 100);
echo $item;
