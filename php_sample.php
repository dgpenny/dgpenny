<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?><br>
        <?php 
for ($x = 0; $x <= 100; $x++) {
    echo "The number is: $x <br>";
} 
?>
<br>
<?php
function myAge($birthYear) {                                  // defines a function, this one is named "myAge"
    $yearsOld = date('Y') - $birthYear;                       // calculates the age
    return $yearsOld . ' year' . ($yearsOld != 1 ? 's' : ''); // returns the age in a descriptive form
}

echo 'I am currently ' . myAge(1981) . ' old.';               // outputs the text concatenated
                                                              // with the return value of myAge()
// As the result of this syntax, myAge() is called.
?>
<br>
<?php
class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName = '') { // optional second argument
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function greet() {
        return 'Hello, my name is ' . $this->firstName .
               (($this->lastName != '') ? (' ' . $this->lastName) : '') . '.';
    }

    public static function staticGreet($firstName, $lastName) {
        return 'Hello, my name is ' . $firstName . ' ' . $lastName . '.';
    }
}

$he    = new Person('John', 'Smith');
$she   = new Person('Sally', 'Davis');
$other = new Person('iAmine');

echo $he->greet(); // prints "Hello, my name is John Smith."
echo '<br />';

echo $she->greet(); // prints "Hello, my name is Sally Davis."
echo '<br />';

echo $other->greet(); // prints "Hello, my name is iAmine."
echo '<br />';

echo Person::staticGreet('Jane', 'Doe'); // prints "Hello, my name is Jane Doe."
?>
<br>
    </body>
</html>

