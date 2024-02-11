<?php

// __toString() マジックメソッドは、オブジェクトを文字列として扱おうとした時（例えば、echo や print でオブジェクトを出力しようとした時）に自動的に呼び出されます。このメソッドは、オブジェクトを代表する文字列を返す必要があります。

// __toString() の使用例
// 以下の例では、User クラスに __toString() メソッドを実装しています。このメソッドは、User オブジェクトを文字列で表現する際に呼び出され、ユーザーの名前と年齢を含む文字列を返します。

class User {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "User Name: " . $this->name . ", Age: " . $this->age;
    }
}

$user = new User("John Doe", 30);

// User オブジェクトを文字列として出力すると、__toString() メソッドが呼び出されます。
echo $user; // 結果 : User Name: John Doe, Age: 30

// このコードを実行すると、User オブジェクトが文字列として扱われる際に __toString() メソッドが呼び出され、"User Name: John Doe, Age: 30" という文字列が出力されます。

// __toString() メソッドは、オブジェクトの状態を簡潔に表現したり、デバッグ情報を出力する際に便利です。このメソッドを実装することで、オブジェクトをより人間が読みやすい形式で表現することができます。