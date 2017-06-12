<?php
require_once 'Point.php';
require_once 'Shape.php';
require_once 'Rectangle.php';
require_once 'Circle.php';


$point = new Point(1, 2);
//print($point1);
$point2 = new Point(5, 11);
//print($point2);
$distance = $point->calculateDistance($point2);
//print(Point::getCountInitialisations());
$point2 = null;
//print(Point::getCountInitialisations());

$rectangle = new Rectangle($point, 12, 2);
//print($rectangle);
$rectangle->draw();

$circle = new Circle($point, 3);
//print($circle);
$circle->draw();

$point = $point->changeX(12);
print($point);