<?php 
require_once('rectangle.php');
require_once('square.php');
// $anna = new Person(anna,morton);
// $catwoman = new Superhero(salina, kyle, catwoman);

$rectangle1 = new Rectangle(6, 12);
$rectangle2 = new Rectangle(2, 14);

$rectangle3 = new Rectangle(9, 20);
$square1 = new Square(6);
$square2 = new Square(4, 4);
$square3 = new Square(9, 9);

echo "Rectangle Info" . PHP_EOL;
// var_dump($rectangle1->width);
// var_dump($rectangle1->height);

echo "Area\n";
echo $rectangle1->getArea() . PHP_EOL;
echo $rectangle2->getArea() . PHP_EOL;
echo $rectangle3->getArea() . PHP_EOL;
echo $square1->getArea() . PHP_EOL;

// var_dump($square1);
// var_dump($square1->width);
// var_dump($square1->height);

// var_dump($square1->perimeter());




?>