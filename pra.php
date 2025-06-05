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

    //superglobal variables:$_server
    // echo "<br>";
    // echo $_SERVER['SERVER_NAME']; //localhost
    // echo "<br>";
    // echo $_SERVER['SERVER_PORT']; //80
    // echo "<br>";
    // echo $_SERVER['REQUEST_METHOD']; //GET,POST,PUT,DELETE
    // echo "<br>";
    // echo $_SERVER['REQUEST_URI'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT']; //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like
    // Gecko)
    // //Chrome/58.0.3029.110 Safari/537.3
    // echo "<br>";
    // echo $_SERVER['HTTP_REFERER']; //http://localhost/pra.php
    // echo "<br>";
    // echo $_SERVER['SCRIPT_NAME']; //pra.php
    // echo "<br>";
    // echo $_SERVER['PHP_SELF']; //pra.php
    // echo "<br>";

    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
    }
    }

    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
    }

    if (empty($_POST["website"])) {
    $website = "";
    } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    $websiteErr = "Invalid URL";
    }
    }

    if (empty($_POST["comment"])) {
    $comment = "";
    } else {
    $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    } else {
    $gender = test_input($_POST["gender"]);
    }
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>



    </pre>

</body>

</html>