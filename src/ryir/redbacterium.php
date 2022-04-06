<?php

namespace Src\ryir;

class RedBacterium extends Bacterium
{
    private $tact;
    private $number;
    public function __construct(int $tact, int $number)
    {
        parent::__construct($tact, $number);
    }
    public function division($tact)
    {
    }
}
