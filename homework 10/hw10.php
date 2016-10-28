<?php

//классы напханы в один файл ибо домашка. про каждому классу отдельный файл - в курсе))

// task 1
echo '<br><br>------------------------------------- task 1 ----------------------------------<br><br>';
class Power{

    private function calculate_power( $num, $pow ){
        $result = $num;
        for ( $i = 2; $i <= $pow; $i++ ){
            $result *= $num;
        }
        return $result;
    }

    public function power_2( $num ){
        return $this -> calculate_power( $num, 2 );
    }

    public function power_3( $num ){
        return $this -> calculate_power( $num, 3 );
    }

    public function power_4( $num ){
        return $this -> calculate_power( $num, 4 );
    }

    public function power_5( $num ){
        return $this -> calculate_power( $num, 5 );
    }

}

$number = new Power();
echo "Number 2, power 2 is " . $number -> power_2( 2 ) . '<br>';
echo "Number 2, power 3 is " . $number -> power_3( 2 ) . '<br>';
echo "Number 2, power 4 is " . $number -> power_4( 2 ) . '<br>';
echo "Number 2, power 5 is " . $number -> power_5( 2 ) . '<br>';

// task 2
echo '<br><br>------------------------------------- task 2 ----------------------------------<br><br>';
class Calculator{

    static function addition( $a, $b ){
        return $a + $b;
    }

    static function subtraction( $a, $b ){
        return $a - $b;
    }

    static function multiplication( $a, $b){
        return $a * $b;
    }

    static function division( $a, $b ){
        return $a / $b;
    }

}

echo '2 + 2 = ' . Calculator :: addition( 2, 2 ) . '<br>';
echo '5 - 3 = ' . Calculator :: subtraction( 5, 3 ) . '<br>';
echo '3 * 4 = ' . Calculator :: multiplication( 3, 4 ) . '<br>';
echo '10 / 5 = ' . Calculator :: division( 10, 5 ) . '<br>';

// task 3
echo '<br><br>------------------------------------- task 3 ----------------------------------<br><br>';
class Sqrt{
    private function root( $num, $pow ){
        return pow( $num, 1 / $pow);
    }

    public function root_2( $num ){
        return Sqrt :: root( $num, 2 );
    }

    public function root_3( $num ){
        return Sqrt :: root( $num, 3 );
    }

    public function root_4( $num ){
        return Sqrt :: root( $num, 4 );
    }

    public function root_5( $num ){
        return Sqrt :: root( $num, 5 );
    }

}

$sqrt = new Sqrt();
echo 'Root of 2 degree of 4 is ' . $sqrt -> root_2( 4 ) . '<br>';
echo 'Root of 3 degree of 27 is ' . $sqrt -> root_3( 27 ) . '<br>';
echo 'Root of 4 degree of 16 is ' . $sqrt -> root_4( 16 ) . '<br>';
echo 'Root of 5 degree of 16807 is ' . $sqrt -> root_5( 16807 ) . '<br>';

// task 5
echo '<br><br>------------------------------------- task 5 ----------------------------------<br><br>';
class Summator{
    private function power( $num, $pow){
        $result = $num;
        for ( $i = 2; $i <= $pow; $i++ ){
            $result *= $num;
        }
        return $result;
    }

    public function sum_first_power( $a, $b){
        return $a + $b;
    }

    public function sum_second_power( $a, $b ){
        return $this -> power( $a, 2 ) + $this -> power( $b, 2 );
    }

    public function sum_third_power( $a, $b ){
        return $this -> power( $a, 3 ) + $this -> power( $b, 3 );
    }

    public function sum_fourth_power( $a, $b ){
        return $this -> power( $a, 4 ) + $this -> power( $b, 4 );
    }

    public function sum_fifth_power( $a, $b ){
        return $this -> power( $a, 5 ) + $this -> power( $b, 5 );
    }
}

$summator = new Summator();
echo 'Sum of 2 and 3 is ' . $summator -> sum_first_power( 2, 3 ) . '<br>';
echo 'Sum of 2^2 and 3^2 is ' . $summator -> sum_second_power( 2, 3 ) . '<br>';
echo 'Sum of 2^3 and 3^3 is ' . $summator -> sum_third_power( 2, 3 ) . '<br>';
echo 'Sum of 2^4 and 3^4 is ' . $summator -> sum_fourth_power( 2, 3 ) . '<br>';
echo 'Sum of 2^5 and 3^5 is ' . $summator -> sum_fifth_power( 2, 3 ) . '<br>';

// task 7
echo '<br><br>------------------------------------- task 7 ----------------------------------<br><br>';
class Geometric_Calculator{
    private $pi = 3.14;

    public function square_area( $a ){
        return $a * $a;
    }

    public function rectangle_area( $a, $b){
        return $a * $b;
    }

    public function cube_volume( $a ){
        return pow( $a, 3 );
    }

    public function parallelepiped_volume( $a, $b, $c ){
        return $a * $b * $c;
    }

    public function circumference( $radius ){
        return 2 * $this -> pi * $radius;
    }

    public function circle_square( $radius ){
        return $this -> pi * $radius * $radius;
    }

    public function sphere_volume( $radius ){
        return ( 4 / 3 ) * $this -> pi * pow( $radius, 3 );
    }
}

$geocalc = new Geometric_Calculator();
echo 'Area of square with side 3 is ' . $geocalc -> square_area( 3 ) . '<br>';
echo 'Area of rectangle with sides 3 and 2 is ' . $geocalc -> rectangle_area( 3, 2 ) . '<br>';
echo 'Volume of cube with side 4 is ' . $geocalc -> cube_volume( 4 ) . '<br>';
echo 'Volume of parallelepiped with sides 3, 2 and 4 is ' . $geocalc -> parallelepiped_volume( 3, 2, 4 ) . '<br>';
echo 'Circumference of circle with radius 3 is ' . $geocalc -> circumference( 3 ) . '<br>';
echo 'Circle square of circle with radius 2 is ' . $geocalc -> circle_square( 2 ) . '<br>';
echo 'Volume of sphere with radius 3 is ' . $geocalc -> sphere_volume( 3 ) . '<br>';

// task 9
echo '<br><br>------------------------------------- task 9 ----------------------------------<br><br>';
class Requester{
    public $request = array();
    public $post = array();
    public $get = array();

    public function __construct(){
        if ( ! empty( $_POST ) ){
            foreach( $_POST as $key => $value ){
                $this -> post[ $key ] = $value;
            }
        }
        if ( ! empty( $_REQUEST ) ){
            foreach( $_REQUEST as $key => $value ){
                $this -> request[ $key ] = $value;
            }
        }
        if ( ! empty( $_GET ) ){
            foreach( $_GET as $key => $value ){
                $this -> get[ $key ] = $value;
            }
        }
    }
}

echo 'Nothing to out, all arrays are empty :)';

// task 11
echo '<br><br>------------------------------------- task 11 ----------------------------------<br><br>';
class Adder extends Power{

    public function sum_first_power( $a, $b ){
        return $a + $b;
    }

    public function sum_second_power( $a, $b){
        return $this -> power_2( $a ) + $this -> power_2( $b );
    }

    public function sum_third_power( $a, $b){
        return $this -> power_3( $a ) + $this -> power_3( $b );
    }

    public function sum_fourth_power( $a, $b){
        return $this -> power_4( $a ) + $this -> power_4( $b );
    }

    public function sum_fifth_power( $a, $b){
        return $this -> power_5( $a ) + $this -> power_5( $b );
    }

}

$adder = new Adder();
echo 'Sum of 2 and 3 is ' . $adder -> sum_first_power( 2, 3 ) . '<br>';
echo 'Sum of 2^2 and 3^2 is ' . $adder -> sum_second_power( 2, 3 ) . '<br>';
echo 'Sum of 2^3 and 3^3 is ' . $adder -> sum_third_power( 2, 3 ) . '<br>';
echo 'Sum of 2^4 and 3^4 is ' . $adder -> sum_fourth_power( 2, 3 ) . '<br>';
echo 'Sum of 2^5 and 3^5 is ' . $adder -> sum_fifth_power( 2, 3 ) . '<br>';

// task 12
echo '<br><br>------------------------------------- task 12 ----------------------------------<br><br>';
//вот тут чего-то не понял по поводу $this -> power -> метод. фигня якась
class New_Adder extends Power{

    private $power;

    public function __construct(){
        $this -> power = new Power(); //наверное, так
    }

    public function sum_first_power( $a, $b ){
        return $a + $b;
    }

    public function sum_second_power( $a, $b){
        return $this -> power_2( $a ) + $this -> power_2( $b ); //вариант 1
    }

    public function sum_third_power( $a, $b){
        return parent :: power_3( $a ) + parent :: power_3( $b ); //вариант 2
    }

    public function sum_fourth_power( $a, $b){
        return $this -> power -> power_4( $a ) + $this -> power -> power_4( $b ); //вариант 3
    }

    public function sum_fifth_power( $a, $b){
        return $this -> power_5( $a ) + $this -> power_5( $b );
    }

}

$adder = new New_Adder();
echo 'Sum of 2 and 3 is ' . $adder -> sum_first_power( 2, 3 ) . '<br>';
echo 'Sum of 2^2 and 3^2 is ' . $adder -> sum_second_power( 2, 3 ) . '<br>';
echo 'Sum of 2^3 and 3^3 is ' . $adder -> sum_third_power( 2, 3 ) . '<br>';
echo 'Sum of 2^4 and 3^4 is ' . $adder -> sum_fourth_power( 2, 3 ) . '<br>';
echo 'Sum of 2^5 and 3^5 is ' . $adder -> sum_fifth_power( 2, 3 ) . '<br>';

// task 13
echo '<br><br>------------------------------------- task 13 ----------------------------------<br><br>';
class Ultra_New_Adder extends Sqrt{

    public function sum( $a, $b ){
        return $a + $b;
    }

    public function sum_root2( $a, $b){
        return $this -> root_2( $a ) + $this -> root_2( $b );
    }

    public function sum_root3( $a, $b){
        return $this -> root_3( $a ) + $this -> root_3( $b );
    }

    public function sum_root4( $a, $b){
        return $this -> root_4( $a ) + $this -> root_4( $b );
    }

    public function sum_root5( $a, $b){
        return $this -> root_5( $a ) + $this -> root_5( $b );
    }

}

$sum = new Ultra_New_Adder();
echo 'Sum of 2 and 3 is ' . $sum -> sum( 2, 3 ) . '<br>';
echo 'Sum of roots 2 degree of 2 and 3 is ' . $sum -> sum_root2( 2, 3 ) . '<br>';
echo 'Sum of roots 3 degree of 2 and 3 is ' . $sum -> sum_root3( 2, 3 ) . '<br>';
echo 'Sum of roots 4 degree of 2 and 3 is ' . $sum -> sum_root4( 2, 3 ) . '<br>';
echo 'Sum of roots 5 degree of 2 and 3 is ' . $sum -> sum_root5( 2, 3 ) . '<br>';
