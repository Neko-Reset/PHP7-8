<?php
class Item
{
    // 静的プロパティ
    // 値を入れないとエラーになる
    public static int $tax = 10; // 消費税

    // 静的メソッド
    public static function getTax() : int
    {
        // 静的プロパティの呼び出し方
        // ※$thisではなくなる
        return self::$tax;
    }
}

// 静的プロパティを出力
echo Item::$tax;

// 上書きして出力
echo Item::$tax = 20;

// 静的メソッドを呼び出し
echo Item::getTax();
