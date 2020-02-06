<?php
   /* class Person{
        private $name;
        private $email;

        // constructors
        public function __construct(){

        }
        // setters
        public function setName($name){
            $this->name = $name;
        }
        // getters
        public function getName(){
            return $this -> name;
        }
         // setters
         public function setEmail($email){
            $this->email = $email;
        }
        // getters
        public function getEmail(){
            return $this -> email;
        }
    }

    $person1 = new Person;
    $person1 -> setName('John Doe');
    $person1 -> setEmail('test@test.com');

    class Customer extends Person{
        private $balance;
     
         // getters
         public function setBalance($balance){
            return $this -> balance = $balance;
        }
         // setters
         public function getBalance(){
            $this->balance."<br>";
        }
    } 
    
    // OOP
    class User {
        // Properties (attributes)
        public $name;
        // Methods (functions)
        public function sayHello(){
            return 'hello';
        }
    }

    // Instantiate a user object from the user class
    $user1 = new User();
    echo $user1->sayHello();*/
    class User {
        public $name;
        public $age;

        public function __construct($name, $age){
            // echo 'constructor';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello(){
            return $this -> name . 'Says Hello';
        }
    }

    $user1 = new User('richard', 25);

    echo $user1->name. 'is'.$user->age.'years old';
    echo '<br>';
    echo $user1->sayHello();

    // $user2 = new User('olu at', 30);

    // echo $user2->name . 'is' . $user2->age;
    // echo '<br>';
    // echo $user2 ->sayHello();
?>