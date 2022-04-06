<?php

namespace Src\ryir;

abstract class Bacterium
{
    private $tact;
    private $number;
    public function __construct(int $tact, int $number)
    {
        $this->tact = $tact;
        $this->numbet = $number;
    }
    abstract function division($tact);
}
