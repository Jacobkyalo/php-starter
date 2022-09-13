<?php
class User {
  //access modifiers can be public, private or protected
  public $name;
  public $password;
  public $age;

  // constructor

  public function __construct($name,$password,$age) {
    $this->name = $name;
    $this->password = $password;
    $this->age = $age;
  }

  function set_name($name){
    //this returns the current object
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
}

$user1 = new User('Jacob','1234',40);
$user2 = new User('Mary','12345',34);

echo $user1->password;
echo $user2->name;

// $user1->name = 'Jacob';
// $user1->password ='12345678';
// $user1->age =90;

// $user1->set_name('Jack');
// $user2->set_name('Mary');

// var_dump($user1);

// echo $user1->name;
// echo $user2->name;


class Employee extends User{
  public function __construct($name,$password,$age,$title) {
    parent::__construct($name,$password,$age);
    $this->title = $title;
  }

  function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee('Collins','1234',34,'HR Manager');

echo $employee1->get_title();
?>