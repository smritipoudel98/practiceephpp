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
        // array_splice($fruits,1,2);// mango, watermelon(output)--0=index, 2=number of elements to remove
        // print_r($fruits);

    //  $fruits=['apple'=>'pp','banana'=>'po','mango'=>'lo','watermelon'=>'ko'];
    //     $ll=array_diff($fruits,["pp","po"]);// mango, watermelon(output)
    //     var_dump($ll);
    //     print_r($ll);

    // $lp=["kk","po","ii"];
    // $pp=array_shift($lp);//po,li
    // var_dump($lp) ;
//  $a=[1,2,3];
//  $b=array_shift($a);
//  echo $b; // 1
//  print_r($a); // 2,3 


    //super global 
    // $a=10;
    // print_r($GLOBALS); //GET,POST,COOKIES, FILES..(give all the global variables from this file)
    // print_r($_SERVER); // give all the server variables
    // print_r($_SESSION); // give all the session variables
    // print_r($_COOKIE); // give all the cookie variables
    // print_r($_FILES); // give all the file variables
    // print_r($_REQUEST); // give all the request variables
    // print_r($_ENV); // give all the environment variables

    // $a=10;
    // function test(){
    //     global $a;
    //     echo $a;
    // }
    // test();

//     //Regrex
//     $string="hello php , how are you";
//     $exp=preg_match_all("/o/i",$string,$array);
//    if ($exp){
//     echo " A match found";
//    }else{
//     echo " No match found";
//    }
// //    echo"<pre>";
//    print_r($array);
// //    echo "</pre>";

    ?>
    </pre>

</body>

</html>