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