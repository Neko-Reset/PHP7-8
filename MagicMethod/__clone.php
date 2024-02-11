<?php

// __clone() のシンプルな使用例
// ここでは、Person クラスに __clone() メソッドを実装し、
// オブジェクトがクローンされた時に単純なメッセージを表示するだけの例を示します。

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // オブジェクトがクローンされた時に呼び出される
    public function __clone() {
        echo "クローンされました: " . $this->name . "\n";
    }
}

// オリジナルのPersonオブジェクトを作成
$original = new Person("John", 25);

// Personオブジェクトをクローンする
$clone = clone $original; // 結果 : クローンされました: John

// クローンされた時のメッセージが表示される

// この例では、Person オブジェクトをクローンすると、__clone() メソッドが自動的に呼び出され、"クローンされました: John" というメッセージが表示されます。__clone() メソッド内で特別な処理を行っていませんが、オブジェクトがクローンされたことを知らせるメッセージを表示することで、__clone() メソッドの動作を理解するのに役立ちます。

// このように、__clone() メソッドはオブジェクトがクローンされた時に特定の処理を実行するために使用されます。シンプルな例ではありますが、__clone() メソッドの基本的な使い方と目的を理解するのに適しています