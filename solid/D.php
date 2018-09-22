<?php
interface ColorInterface
{
    public function setColor();
}

Class RGBColor implements ColorInterface
{
    public function __construct($r, $g, $b)
    {        
    }

    public function setColor()
    {
        
    }
}

Class CMYKColor implements ColorInterface
{
    public function __construct($r, $g, $b)
    {        
    }

    public function setColor()
    {
        
    }
}


Class Image
{
    public $colorProfile;

    public function __construct($text, ColorInterface $name)
    {
        $this->colorProfile = $name;
    }
}

$image = new Image("text", 255, 255, 255);

$white = new RGBColor(255,255,255);
$image1 = new Image("text", $white);