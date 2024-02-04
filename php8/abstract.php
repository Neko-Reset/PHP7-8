<?php
abstract class Item
{
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // 抽象メソッド
    // 子クラスは抽象メソッドを定義しないとエラーになる
    abstract public function getUnit();
}

class Book extends Item
{
    public function __construct($price)
    {
        parent::__construct($price);
    }

    public function getUnit()
    {
        return "冊";
    }
}

$book = new Book(500);
echo $book->getPrice() . $book->getUnit();
