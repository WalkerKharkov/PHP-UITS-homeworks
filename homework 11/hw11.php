<?php

// task 15
echo '<br><br>------------------------------------- task 15 ----------------------------------<br><br>';

class DB_framework {
    private $con;
    private static $instance;

    public static function get_instance( $db_settings = array( 'host' => 'localhost',
                                                                'user' => 'root',
                                                                'password' => '',
                                                                'database' => 'test' ) ){
        if( ! self::$instance ){
            self::$instance = new self( $db_settings );
        }
        return self::$instance;
    }

    private function __construct( $db_settings ){
        $this->con = new mysqli( $db_settings[ 'host' ], $db_settings[ 'user' ],
                                        $db_settings[ 'password' ], $db_settings[ 'database' ] );
        if( $this->con->connect_error ) {
            die( 'Failed to connect to MySQL: (' . $this->con->connect_errno . ') ' . $this->con->connect_error );
        }
    }

    public function __destruct(){
        $this->con->close();
    }

    private function __clone(){ }

    public function getConnection(){
        return $this->con;
    }

    public function get_data( $cols =  '*', $table, $join = '', $join_table = '', $using = '', $on = '', $where = '', $limit = '' ){
        if ( $join ){
            $join .= ' JOIN ' . $join_table;
        }
        if ( $using ){
            $using = ' USING (' . $using . ')';
        }
        if ( $on ){
            $on = ' ON ' . $on;
        }
        if ( $where ){
            $where = ' WHERE ' . $where;
        }
        if ( $limit ){
            $limit = ' LIMIT ' . $limit;
        }
        $query = 'SELECT ' . $cols . ' FROM ' . $table . ' ' . $join . $using . $on . $where . $limit;
        if ( $result = $this->con->query( $query ) ){
            $res = $result->fetch_all();
            $result->close();
            return $res;
        }else{
            return false;
        }
    }

    public function insert_data( $table, $fields, $values){
        $query = 'INSERT INTO ' . $table . ' (' . $fields . ') VALUES (' . $values . ')';
        return $this->con->query( $query );
    }

    public function fields_count( $table ){
        if ( $result = $this->con->query( 'SELECT COUNT(*) FROM ' . $table ) ){
            $res = $result->fetch_array()[ 0 ];
            $result->close();
            return $res;
        }else{
            return -1;
        }
    }

}

/* проверка. работает при наличии базы данных test и таблицы test
$test = DB_framework::get_instance();
$all_data = $test->get_data( 'id, field', 'test', '', '', '', '', 'id = 2', '3');
echo '<pre>';
var_dump ( $all_data );
echo 'fields in table test : ' . $test->fields_count( 'test' );
var_dump( $test->insert_data( 'test', 'field', '"foo"' ) );
*/

// task 17
echo '<br><br>------------------------------------- task 17 ----------------------------------<br><br>';

class Date_framework{

    private static $instance;
    private $weekdays = array('Monday' => 'понедельник',
                                'Tuesday' => 'вторник',
                                'Wednesday' => 'среда',
                                'Thursday' => 'четверг',
                                'Friday' => 'пятница',
                                'Saturday' => 'суббота',
                                'Sunday' => 'воскресенье');
    private $months = array("January" => "Январь",
                            "February" => "Февраль",
                            "March" => "Март",
                            "April" => "Апрель",
                            "May" => "Май",
                            "June" => "Июнь",
                            "July" => "Июль",
                            "August" => "Август",
                            "September" => "Сентябрь",
                            "October" => "Октябрь",
                            "November" => "Ноябрь",
                            "December" => "Декабрь");

    public $today;
    public $weekday;
    public $month;

    public static function get_instance(){
        if( ! self::$instance ){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct(){
        $time = time();
        $this->today = $this->calculate_date_from_seconds( $time );
        $this->weekday = $this->get_russian_weekday( $time );
        $this->month = $this->get_russian_month( $time );
    }

    private function calculate_date_from_seconds( $time ){
        return date( 'd.m.Y', $time );
    }

    private function get_russian_weekday( $time ){
        return $this->weekdays[ date( 'l', $time ) ];
    }

    private function get_russian_month( $time ){
        return $this->months[ date( 'F', $time ) ];
    }

    private function get_date_array( $time ){
        $date = array();
        $date[ 'y' ] = intdiv( $time, 31536000 );
        $time -= $date[ 'y' ] * 31536000;
        $date[ 'm' ] = intdiv( $time, 2592000 );
        $time -= $date[ 'm' ] * 2592000;
        $date[ 'd' ] = intdiv( $time, 86400 );
        $time -= $date[ 'd' ] * 86400;
        $date[ 'h' ] = intdiv( $time, 3600 );
        $time -= $date[ 'h' ] * 3600;
        $date[ 'i' ] = intdiv( $time, 60 );
        $time -= $date[ 'i' ] * 60;
        $date[ 's' ] = $time;
        return $date;
    }

    private function __clone(){}

    public function get_difference ( $firstDate, $secondDate ){
        if ( ! strtotime( $firstDate ) || ! strtotime( $secondDate ) ){
            return 'Dates is not valid!';
        }
        $differenceTime = abs( strtotime( $firstDate ) - strtotime( $secondDate ) );
        $difference = $this->get_date_array( $differenceTime );
        return 'The difference between dates is : ' . $difference[ 'y' ] . ' years, ' . $difference[ 'm' ] . ' months, ' .
                $difference[ 'd' ] . ' days, ' . $difference[ 'h' ] . ' hours, ' . $difference[ 'i' ] . ' minutes, ' .
                $difference[ 's' ] . ' seconds.';
    }

    public function change_date_format( $date, $format ){
        return date( $format, strtotime( $date ) );
    }

    public function get_today(){
        return 'Today is ' . $this->weekday . ', ' . $this->today . '<br>';
    }

}

$date = Date_framework::get_instance();

echo $date->change_date_format( '31-12-2016', 'd:m:Y') . '<br>';
echo $date->get_difference( '30.11.2016', '12/31/2016' ) . '<br>';
echo $date->get_today();

// task 18
echo '<br><br>------------------------------------- task 18 ----------------------------------<br><br>';

class Put{

    public static function put_content( $page, $tag, $content, $before = true ){
        $file = file_get_contents( $page );
        $include = ( $before ) ? $content . $tag : $tag . $content;
        $file = str_replace( $tag, $include, $file );
        file_put_contents( $page, $file );
        echo 'Done...<br>';
    }

}

class HTML_include{

    public static function get_css( $html_page, $css_path ){
        $css = '<link rel="stylesheet" type="text/css" href="' . $css_path . '"/>';
        Put::put_content( $html_page, '</head>', $css );
    }

    public static function get_js( $html_page, $js_path ){
        $js = '<script type="text/javascript" src="' . $js_path . '"></script>';
        Put::put_content( $html_page, '</body>', $js );
    }

}

HTML_include::get_css( 'test.html', 'style.css');
HTML_include::get_js( 'test.html', 'app.js' );

// task 19
echo '<br><br>------------------------------------- task 19 ----------------------------------<br><br>';

class META_include{

    public static function get_meta( $html_page, $meta=array() ){
        $content = '';
        foreach( $meta as $key => $value){
            $content .= '<meta ';
            switch( $key ){
                case 'charset':
                    $content .= 'charset="' . $value . '"';
                    break;
                case 'keywords':
                case 'description':
                    $content .= 'name="' . $key . '" content="' . $value . '"';
            }
            $content .= '/>';
        }
        Put::put_content( $html_page, '<head>', $content, false );
    }

}

$tags = array( 'charset' => 'UTF-8',
                'keywords' => 'php, javascript, css',
                'description' => 'homework',
                'foo' => 'bar');
META_include::get_meta( 'test.html', $tags );

// task 20
echo '<br><br>------------------------------------- task 20 ----------------------------------<br><br>';

class FORM_creator{

    private static function elem_create( $tag, $params ){
        $res = ( isset( $params[ 'label' ] ) ) ? '<label>' . $params[ 'label' ] . '</label>' : '';
        $res .= '<' . $tag;
        foreach( $params as $key => $value ){
            $res .= ( strcmp( $key, 'label') == 0 ) ? '' : ' ' . $key . '="' . $value . '"';
        }
        return trim( $res ) . '>' . "\n";
    }

    private static function multiple_elem_create( $tag, $params ){
        $result ='';
        foreach( $params as $key => $value ){
            $result .= self::elem_create( $tag, $value ) . '<br>';
        }
        return $result;
    }

    private static function input_create( $params ){
        return self::elem_create( 'input', $params );
    }

    private static function textarea_create( $params ){
        return self::elem_create( 'textarea', $params ) . '</textarea>' . "\n";
    }

    private static function select_create( $params ){
        $res = self::elem_create( 'select', $params[ 0 ] );
        foreach( $params[ 1 ] as $key => $value ){
            $res .= self::elem_create( 'option', $value ) . $value[ 'value' ] . "\n" . '</option>' . "\n";
        }
        return $res . '</select>';
    }

    private static function checkbox_create( $params ){
        return self::multiple_elem_create( 'input type="checkbox"', $params );
    }

    private static function radio_create( $params ){
        return self::multiple_elem_create( 'input type="radio"', $params );
    }

    public static function form_create( $params = array(), $elems = array() ){
        $form = '<form name="' . ( ( $params[ 'name' ] ) ? $params[ 'name' ] : '' ) . '" action="' .
                ( ( $params[ 'action' ] ) ? $params[ 'action' ] : '' ) . '" method="' .
                ( ( $params[ 'method' ] ) ? $params[ 'method' ] : 'post' ) . '">' . "\n";
        foreach( $elems as $key => $value ){
            $key .= '_create';
            $elem = self::$key( $value );
            $form .= $elem . '<br>';
        }
        $form .= '</form>';
        return $form;
    }

}

$params = array( 'name' => 'test',
                    'action' => '',
                    'method' => 'get');

$elems = array( 'input' => array( 'label' => 'testinput: ',
                                  'type' => 'text',
                                  'name' => 'testinput' ),
                'textarea' => array( 'label' => 'testtextarea: ',
                                     'rows' => '10',
                                     'cols' => '20',
                                     'name' => 'testtextarea' ),
                'select' => array( '0' => array( 'size' => '2',
                                                 'label' => 'testselect: ',
                                                 'multiple name' => 'testsel[]' ),
                                   '1' => array( '0' => array( 'disabled' => '1',
                                                               'value' => 'select item' ),
                                                 '1' => array( 'value' => 'item1' ),
                                                 '2' => array( 'selected' => '1',
                                                               'value' => 'item2' ),
                                                 '3' => array( 'value' => 'item3' ),
                                                 '4' => array( 'value' => 'item4' ) ) ),
                'checkbox' => array( '0' => array( 'label' => 'option1: ',
                                                   'name' => 'option1',
                                                   'value' => 'val1' ),
                                     '1' => array( 'label' => 'option2: ',
                                                   'name' => 'option2',
                                                   'value' => 'val2' ),
                                     '2' => array( 'label' => 'option3: ',
                                                   'name' => 'option3',
                                                   'value' => 'val3' ) ),
                'radio' => array( '0' => array( 'label' => 'option1: ',
                                                'name' => 'option',
                                                'value' => 'val1' ),
                                  '1' => array( 'label' => 'option2: ',
                                                'name' => 'option',
                                                'value' => 'val2' ),
                                  '2' => array( 'label' => 'option3: ',
                                                'name' => 'option',
                                                'value' => 'val3' ) ) );

echo FORM_creator::form_create( $params, $elems );

// task 21
echo '<br><br>------------------------------------- task 21 ----------------------------------<br><br>';

class TABLE_creator{

    public static function table_create( $arr, $cols, $style ){
        if ( ! is_numeric( $cols ) || ! is_array( $arr ) ){
            return 'Invalid argument(s)';
        }
        $arr = array_chunk( $arr, $cols );
        $table = "\n<table style=\"" . $style . "\">\n";
        foreach( $arr as $item ){
            $table .= "<tr>\n";
            foreach( $item as $cell ){
                $table .= "<td style=\"" . $style . "\">" . $cell . "</td>\n";
            }
            $table .= "</tr>\n";
        }
        return $table . "</table>\n";
    }

}

$arr = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16);
$style = 'border:1px solid';
echo TABLE_creator::table_create( $arr, 4, $style );

// task 1
echo '<br><br>------------------------------------- task 1 ----------------------------------<br><br>';

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

class Horse extends Pet{

    public function get_value(){
        return 'Rising fast';
    }

}

$charlie = new Pet( 'Charlie', 6 );
echo $charlie->get_name() . '<br>';
$charlie->get_instance();
echo $charlie->get_name() . '\'s owner is ' . $charlie->get_owner() . '<br>';
$charlie->get_owned( 'John' );
echo $charlie->get_name() . '\'s owner is ' . $charlie->get_owner() . '<br>';