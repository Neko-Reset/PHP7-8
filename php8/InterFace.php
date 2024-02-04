<?php
// インターフェイスを定義
interface ItemInterface
{
    public function getPrice() : int;
}

class Book implements ItemInterface
{
    private int $price;
    public function getPrice() : int
    {
        return $this->price;
    }
}

class Pen implements ItemInterface
{
    private int $price;
    public function getPrice() : int
    {
        return $this->price;
    }
}
