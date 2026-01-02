<?php 
    // String
 $name = 'This is a string variable.<br>';
    echo $name;
    echo var_dump($name . " <br>");
    
    // Integer
    int $age = 25;
    echo var_dump($age . " <br>");

    // Float
    float $height = 5.9;
    echo var_dump($height . " <br>");

    // Boolean
    bool $is_student = true;

    echo var_dump($is_student . " <br>");

    // Array
    array $fruits = array("Apple", "Banana", "Orange");
    echo var_dump($fruits . " <br>");

    // Null
    $car = null;
    echo var_dump($car . " <br>");

    // Object
    class Person {
        public $first_name;
        public $last_name;

        function __construct($first_name, $last_name) {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }
    }

    $person1 = new Person("John", "Doe");
    echo var_dump($person1 . " <br>");  

      echo "<br>";

    // Resource
    $file = fopen("datatypes.php", "r");    
    echo var_dump($file . " <br>");
    fclose($file);

?>
