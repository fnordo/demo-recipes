<?php

use Frenzn\FooBundle\Entity\Figure as BaseFigure;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Figure extends BaseFigure
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $shortDescription;
    
    /**
     * @return mixed
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
    
    /**
     * @param mixed $shortDescription
     *
     * @return Figure
     */
    public function setShortDescription($shortDescription): sring
    {
        $this->shortDescription = $shortDescription;
        
        return $this;
    }
    
}