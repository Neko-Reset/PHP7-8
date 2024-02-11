<?php

// PHP 7.4以降では、__serialize() と __unserialize() メソッドが導入され、オブジェクトのシリアライズとデシリアライズのプロセスをより細かく、柔軟に制御できるようになりました。これらのメソッドは、__sleep() と __wakeup() のよりモダンで強力な代替手段として機能します。

// __serialize() の使用例
// __serialize() メソッドは、オブジェクトが serialize() 関数によってシリアライズされる際に自動的に呼び出されます。このメソッドは、シリアライズに含めるデータを連想配列として返すことで、シリアライズされるデータを細かく制御できます。

class UserProfile {
    private $name = 'John Doe';
    private $password = 'secret123';

    public function __serialize(): array {
        // パスワードを除外し、名前のみをシリアライズに含める
        return ['name' => $this->name];
    }
}

$user = new UserProfile();
$serializedUser = serialize($user);
echo $serializedUser; // パスワードが含まれていないことが確認できます

// 出力
// "UserProfile":1:{s:4:"name";s:8:"John Doe";}%

// この例では、UserProfile クラスに name と password の2つのプライベートプロパティがありますが、__serialize() メソッドを使用して password プロパティをシリアライズのプロセスから除外しています。
