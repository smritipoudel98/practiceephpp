<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        // $a="hello";
        // var_dump($a); //string(5)"hello"
        // echo $a;

        //   $a="Hello";
        //   echo strtolower($a);
        
        // $d=array("hello", "world");
        // echo implode(" lol ",$d); // hello lol world

        // $d=array("hello", "world");
        // $d[1]="smriti";
        // echo implode(" lol ",$d);// change value

       /* $e=array("go","to","hell");
        foreach($e as $w){
            echo "<br> $w <br>"; //indexed array using loop to display all array..
        } */

        // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        // echo $car['model'];// Mustang

        // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        // foreach($car as $c){
        //         echo "<br> $c <br>";
        //          }

        // function add_value(&$value){// & rakhepxi 7 , otherwise 2 
        //     $value+=5;
        // }
        // $n=2;
        // add_value($n);
        // echo $n;

        // $fruits=['apple','banana','mango','watermelon'];
        // array_splice($fruits,0,2);// mango, watermelon(output)
        // print_r($fruits);

     $fruits=['apple'=>'pp','banana'=>'po','mango'=>'lo','watermelon'=>'ko'];
        $ll=array_diff($fruits,["pp","po"]);// mango, watermelon(output)
        var_dump($ll);
        print_r($ll);

        ?>
    </pre>

</body>

</html>