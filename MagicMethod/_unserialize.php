<?php

// __unserialize() の使用例
// __unserialize() メソッドは、オブジェクトが unserialize() 関数によってデシリアライズされる際に自動的に呼び出されます。このメソッドは、デシリアライズされるデータを引数として受け取り、オブジェクトの状態を復元するために使用されます。

class UserProfile {
    private $name;
    private $password;

    public function __unserialize(array $data): void {
        $this->name = $data['name'] ?? 'Unknown';
        // パスワードはデシリアライズのプロセスでは復元されない
    }
}

$serializedUser = 'O:10:"UserProfile":1:{s:4:"name";s:8:"John Doe";}';
$user = unserialize($serializedUser);
echo $user->getName(); // "John Doe" を出力

// この例では、__unserialize() メソッドを使用して、シリアライズされたデータからオブジェクトの name プロパティを復元しています。password プロパティは、セキュリティ上の理由からデシリアライズのプロセスでは復元されません。

// __serialize() と __unserialize() メソッドを使用することで、オブジェクトのシリアライズとデシリアライズの挙動を細かく制御し、セキュリティを強化することが可能になります。