<?php
/**
 * __destruct() メソッドは、クラスのインスタンスが破棄される際に自動的に呼び出されるマジックメソッドです。__construct()の真逆ですね。
 * PHPのガベージコレクションによってオブジェクトがメモリから解放される直前
 *またはスクリプトの実行が完了する時点でこのメソッドが呼び出されます。
 *リソースの解放や、終了時に行う必要がある特定の操作を、このメソッド内で行うことができます。
 * ガベージコレクションとは！？
 * 不要になったメモリを自動的に解放する仕組みです。スクリプトが実行される際、変数やオブジェクトがメモリ上に確保されます。それらがもう使用* されない状態になった時、カベージコレクションによりメモリ領域を再利用可能にします。
 */
class File {
    private $file;
    public function __construct($file) {
        $this->file = fopen($file, "w");
        echo "ファイルが開かれました。\n" ;
    }

    public function write($content) {
        fwrite($this->file, $content);
    }

    public function __destruct() {
        fclose($this->file);
        echo "ファイルが閉じられました。\n";
    }
}

$file = new File("sample.txt");
$file->write("hello world");