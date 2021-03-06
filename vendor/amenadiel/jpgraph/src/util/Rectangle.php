<?php
namespace Amenadiel\JpGraph\Util;

// Utility class to hold coordinates for a rectangle
class Rectangle
{
    public $x, $y, $w, $h;
    public $xe, $ye;
    public function __construct($aX, $aY, $aWidth, $aHeight)
    {
        $this->x = $aX;
        $this->y = $aY;
        $this->w = $aWidth;
        $this->h = $aHeight;
        $this->xe = $aX + $aWidth - 1;
        $this->ye = $aY + $aHeight - 1;
    }
}
