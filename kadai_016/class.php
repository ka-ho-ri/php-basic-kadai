<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        class Food {
            private $name;
            private $price;

            public function __construct(string $name,int $price){
                $this->name = $name;
                $this->prise = $price;
            }

            public function show_price(int $price){
                echo $price .'<br>';
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name,int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(int $height){
                echo $height.'<br>';
            }
        }

        $food = new Food('ニンジン',100);
        print_r($food);
        echo '<br>';

        $animal = new Animal('ウサギ',50,70);
        print_r($animal);
        echo '<br>';


        $food->show_price(100);
        $animal->show_height(70);

        ?>
    </p>
</body>

</html>
