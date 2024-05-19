<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編課題16</title>
 </head>
 
 <body>
     <p>
        <?php
        // Foodクラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // メソッドを定義する
            public function show_price() {
                echo $this->name . '<br>';
                echo $this->price . '<br>';
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            
        }

        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;
        
            // メソッドを定義する
            public function show_height() {
                echo $this->name . '<br>';
                echo $this->height . '<br>';
                echo $this->weight . '<br>';
            }
            
            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            
        }
        

        // インスタンス化する   
        $food = new Food('potate', 250);

        // インスタンス$userの各プロパティの値を出力する
        print_r($food);
        echo '<br>';

        // インスタンス化する   
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
        echo '<br>';


        ?>
    </p>
    </body>
    </html>