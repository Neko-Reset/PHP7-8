<?php

/**
 * このメソッドは、クラスのプロパティに値を設定しようとすると自動的に呼び出されます。
 * この例では、$user->email = "bob@test.com";の行で__setが呼び出され
 * $this->data配列に"email"キーとして値"bob@test.com"が追加されます。
 * その後、$user->emailで__getメソッドが呼び出され、新しく設定された"email"の値が取得されて表示されます。
 * __setメソッドを使用することで、プロパティへの代入をインターセプトし、
 * カスタムロジックを実行することができます。
 * これは、プロパティの値を検証したり、変更をログに記録したりする場合に便利です。
 */

class User
{
    private $data = [
        "name" => "bob",
        "age"  => 23
    ];

    public function __get($name)
    {
        echo "__getが呼ばれました: $name\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return "このプロパティは存在しません: $name";
        }
    }

    public function __set($name, $value)
    {
        echo "__setが呼ばれました: $name, $value\n";
        $this->data[$name] = $value;
    }
}

$user = new User();
echo $user->name . "\n";  // "bob"が表示されます
echo $user->age . "\n";   // 23が表示されます
echo $user->email . "\n"; // "このプロパティは存在しません: email"が表示されます

// __setメソッドをテスト
$user->email = "bob@example.com"; // __setが呼ばれ、"email"プロパティに値が設定されます
echo $user->email . "\n"; // "bob@example.com"が表示されます
