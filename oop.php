<?php
//access specifiers in php
class User{
    private $name;
    private $age;
     public function  __construct($name,$age){
              $this->name=$name;
              $this->age=$age;
    }
    public function display(){
         return $this->getName(). "<br>" .$this->getAge();
      
         
    }
    protected function  getName(){
        return "Your name is:".$this->name;
     
    }
    private function getAge(){
        return "Your age is:".$this->age;
    }
}
$user=new User("ram",20);
echo $user->display();
//output:Your name is:ram
//Your age is:20
echo "<br>";
//abstract class
abstract class Mamma{
    abstract public function eat($food);
}
class Baby extends Mamma{
    public function eat($fruits){
        return "Baby is eating ". $fruits. ".";
    }
}
$name=new Baby();
echo $name->eat("Mango");
echo "<br>";
//output:Baby is eating Mango.


class StaticMethod {
    public static $name = "Smriti Poudel";
    public $age = 20;

    public static function show() {
        echo self::$name;
    }

    public function display() {
        return $this->age;
    }
}

class ChildClass extends StaticMethod {
    public static function show() {
        echo parent::$name . " is my name";
    }

    public function display() {
        echo "your age is: " . $this->age;
    }
}

ChildClass::show();   // outputs: Smriti Poudel is my name
echo "<br>";

$obj = new ChildClass();
$obj->display();      // outputs: your age is: 20


echo "<br>";
//php iterables:iterable means anything you can loop through using foreach.
//eg:An array is iterable — you can do foreach on it.
//An object that implements Iterator or Traversable is also iterable.
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["a", "b", "c",1,2,3];
printIterable($arr);
//output:abc123