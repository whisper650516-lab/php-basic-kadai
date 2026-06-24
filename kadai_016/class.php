<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

// --- Food クラスの定義 ---
class Food {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // show_priceメソッドを定義
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// --- Animal クラスの定義 ---
class Animal {
    private string $name;
    private int $height;
    private int $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // show_heightメソッドを定義
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// --- インスタンスの作成 ---
$potato = new Food("potato", 250);
$dog = new Animal("dog", 60, 5000);

// 各インスタンスを出力
print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';

// --- メソッドの実行 ---
$potato->show_price();
$dog->show_height();

?>
</body>
</html>