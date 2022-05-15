<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class HotelRiuTikidaSearch
{

    /**
     * @var int|null
     * @Assert\Range(min=0, max=400)
     */
    private $minSurface;

    /**
     * @var int|null
     */
    private $maxPrice;

 


    /**
     * Get the value of maxPrice
     *
     * @return  int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * Set the value of maxPrice
     *
     * @param  int|null  $maxPrice
     *
     * @return  HotelRiuTikidaSearch
     */
    public function setMaxPrice(int $maxPrice): HotelRiuTikidaSearch
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get the value of minSurface
     *
     * @return  int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @param  int|null  $minSurface
     *
     * @return  HotelRiuTikidaSearch
     */
    public function setMinSurface(int $minSurface): HotelRiuTikidaSearch
    {
        $this->minSurface = $minSurface;

        return $this;
    }



}