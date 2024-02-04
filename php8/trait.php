<?php
// トレイト Tax を定義
trait Tax
{
    // 消費税を返す
    public function getTax(): int
    {
        return 10;
    }
}

// トレイト Yen を定義
trait Yen
{
    // 円を返す（ここでは簡単な例として10を返す）
    public function getYen(): int
    {
        return 10;
    }
}

// サービスクラス
class Service
{
    // 2つのトレイトを使用
    use Tax, Yen;

    // トレイトに同じメソッド名が重複している場合の解決方法
    // TaxのgetTaxメソッドを使用し、YenのgetTaxメソッドは無視（もし存在する場合）
    use Yen, Tax {
        Tax::getTax insteadof Yen;
        Yen::getTax as getYenTax; // YenのgetTaxメソッドをgetYenTaxとして使用可能に
    }

    private int $price;

    // コンストラクタ
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    // 税込価格を計算
    public function getPriceWithTax() : int
    {
        return $this->price + ($this->price * $this->getTax() / 100);
    }
}

// Serviceインスタンスを作成
$service = new Service(100);

// getTaxメソッドとgetYenメソッドの呼び出し
echo $service->getTax() . "\n";
echo $service->getYen() . "\n";
echo "税込価格: " . $service->getPriceWithTax();
