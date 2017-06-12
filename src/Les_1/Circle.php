<?php

final class Circle extends Shape
{
    private $radius;

    public function __construct(Point $point, $radius)
    {
        parent::__construct($point);
        $this->radius = $radius;
    }

    public function calculatePerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function __toString()
    {

        return "\r\n" . "Circle, [Point= " . parent::__toString() . '] ' . " [Radius: " . $this->radius . "]";
    }

    public function draw()
    {
        print($this->__toString());
    }
}