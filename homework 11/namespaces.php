<?php
namespace UserLearnToDo;
namespace UserLearnToDo\Task1;
namespace UserLearnToDo\Task1\ClassTest2;
abstract class Animal{

    protected $age;

    public function __construct( $age ){
        $this->set_age( $age );
    }

    public function set_age( $age ){
        $this->age = $age;
    }

    public function get_age(){
        return $this->age;
    }

    abstract public function get_owned();

}

interface Domesticable{

    public function get_value();

}
class Pet extends Animal implements Domesticable{

    protected $name;
    protected $owner;

    public function __construct( $name, $age ){
        parent::__construct( $age );
        $this->set_name( $name );
    }

    public function get_owned( $owner = 'Vasya' ){
        if ( strcmp( $this->get_value(), 'Priceless' ) == 0 ){
            $this->owner = $owner;
        }
    }

    public function get_instance(){
        echo 'Is this creature is animal? ' . ( ( $this instanceof Animal ) ? 'yes' : 'no' ) . '<br>';
        echo 'Is this creature is horse? ' . ( ( $this instanceof Horse ) ? 'yes' : 'no' . '<br>');
    }

    public function get_value(){
        return 'Priceless';
    }

    public function set_name( $name ){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_owner(){
        return $this->owner;
    }

}
namespace UserLearnToDo\Task1\ClassTest;
//use UserLearnToDo\Task1\ClassTest2\Pet;
class Horse extends \UserLearnToDo\Task1\ClassTest2\Pet{

    public function get_value(){
        return 'Rising fast';
    }

}

namespace UserLearnToDo\Task2;
//use UserLearnToDo\Task1\ClassTest\Horse;
use UserLearnToDo\Task1\ClassTest2\Pet;

class Cat extends Pet{

    public function say_meow(){
        return 'Meeeeoooow!';
    }

}

$new_horse = new \UserLearnToDo\Task1\ClassTest\Horse( 'Mu-Mu', 5 );
$new_cat = new Cat( 'Base', 3 );
echo $new_horse->get_value() . '<br>';
echo $new_cat->say_meow() . '<br>';

