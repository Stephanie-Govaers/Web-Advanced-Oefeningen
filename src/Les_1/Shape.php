<?php
abstract class Shape
{
    private $point;
    public function __construct(Point $point)
    {
        $this->point=$point;
    }
    function __toString()
    {
        return $this->point->__toString();
    }
    public abstract function calculatePerimeter();
}