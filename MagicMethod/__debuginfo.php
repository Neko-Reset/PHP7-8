<?php

// __debugInfo() マジックメソッドは、クラスのオブジェクトが var_dump() 関数によって出力される際に、表示するプロパティ情報をカスタマイズするために使用されます。このメソッドは、デバッグ情報をより読みやすく、またはセキュリティ上の理由で特定のプロパティを隠すために役立ちます。

// __debugInfo() のシンプルな使用例
// 以下の例では、User クラスに __debugInfo() メソッドを実装しています。このメソッド内で、var_dump() による出力から password プロパティを除外し、代わりに *hidden* という値を表示させるようにしています。

class User {
    public $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __debugInfo() {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => '*hidden*'
        ];
    }
}

$user = new User("John Doe", "john@example.com", "secret");
var_dump($user);

// 結果
// object(User)#1 (3) {
//     ["name"]=>
//     string(8) "John Doe"
//     ["email"]=>
//     string(16) "john@example.com"
//     ["password"]=>
//     string(8) "*hidden*"
//   }

// このコードを実行すると、var_dump() の出力には name と email プロパティがそのまま表示されますが、password プロパティは *hidden* と表示され、実際のパスワード値は隠されます。

// このように、__debugInfo() メソッドを使用することで、オブジェクトのデバッグ情報をカスタマイズし、より安全または読みやすい形で情報を提供することができます。特にパスワードや機密情報を含むオブジェクトをデバッグする際に有用です。