<?php

/**
 * Created by PhpStorm.
 * User: steph
 * Date: 11/06/2017
 * Time: 12:18
 */
final class Point
{
    private $x;
    private $y;
    const MAXIMUM_XY = 100;
    private static $countInitialisations = 0;

    public function __construct($x, $y)
    {
        //$this->setX($x);
        //$this->setY($y);
        $this->x = $x;
        $this->y = $y;
        self::$countInitialisations++;
    }

    public function __destruct()
    {
        self::$countInitialisations--;
    }

    function __toString()
    {
        return "($this->x , $this->y)";
    }

    public function calculateDistance(Point $point)
    {
        return sqrt(($this->x - $point->x) * ($this->x - $point->x) +
            ($this->y - $point->y) * ($this->y - $point->y));
    }

    public function changeX($x)
    {
        return new self($x, $this->y);
    }

    public function changeY($y)
    {
        return new self($this->x, $y);
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * public function setX($x)
     * {
     * if ($x < 0) {
     * $x = 0;
     * } elseif ($x > self::MAXIMUM_XY) {
     * $x = self::MAXIMUM_XY;
     * }
     * $this->x = $x;
     * }
     */

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * public function setY($y)
     * {
     * if ($y < 0) {
     * $y = 0;
     * } elseif ($y > self::MAXIMUM_XY) {
     * $y = self::MAXIMUM_XY;
     * }
     * $this->y = $y;
     * }
     */

    /**
     * @return int
     */
    public static function getCountInitialisations()
    {
        return self::$countInitialisations;
    }


}