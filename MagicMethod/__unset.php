<?php

// __unset() マジックメソッドについて
// __unset() マジックメソッドは、unset() 関数がクラスのオブジェクトのプライベートや
// プロテクテッドなプロパティに対して使用されたときに自動的に呼び出されます。
// このメソッドを実装することで、プロパティを削除しようとした際にカスタム動作を実行させることが可能になります。

// 使用例
// 以下の例では、UserProfile クラスに __unset() メソッドを実装しています。
// このメソッドは、削除しようとしたプロパティが $data 配列内に存在するかどうかをチェックし
// 存在する場合はそのプロパティを削除します。
// また、プロパティが存在しない場合は、その旨をメッセージで通知します。

class UserProfile
{
    private $data = [
        'name' => 'John Doe',
        'age' => 30
    ];

    // プロパティの値を取得する
    public function __get($property)
    {
        return $this->data[$property] ?? null;
    }

    // プロパティを削除する
    public function __unset($property)
    {
        if (array_key_exists($property, $this->data)) {
            unset($this->data[$property]);
            echo "Property '{$property}' has been unset.<br>";
        } else {
            echo "Property '{$property}' does not exist.<br>";
        }
    }
}

$user = new UserProfile();
echo $user->name;  // 出力: John Doe
unset($user->name); // 出力: Property 'name' has been unset.
echo $user->name;  // 出力: (何も表示されない、NULLが返る)
unset($user->email); // 出力: Property 'email' does not exist.


// このコードでは、UserProfile クラスのインスタンス $user に対して unset() 関数を使用しています。
// $user->name を削除しようとすると、__unset() メソッドが自動的に呼び出され、'name' プロパティが $data 配列から削除されます。
// その後、$user->name にアクセスしようとすると、何も表示されません（NULLが返されます）。
// また、存在しないプロパティ（例: $user->email）を削除しようとすると、「Property 'email' does not exist.」というメッセージが表示されます。

// このように、__unset() メソッドを使用することで、
// クラスの外部からでもプライベートやプロテクテッドなプロパティの削除を安全に管理することができます。