<?php
/** 
 * __callStatic() は、アクセス不可能な静的メソッドが
 * 呼び出されたときに自動的に実行されるマジックメソッドです。
 * __call()がインスタンスメソッドに対して動作するのに対し
 * __callStatic()はstaticな静的メソッドの呼び出しに対して動作します。
 */

class Bob
{
    private static function hello()
    {
        echo "bobです";
    }

    public static function __callStatic($method, $args)
    {
        echo "__callStaticメソッドが呼ばれました";
    }
}

Bob::jonh();