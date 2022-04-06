<?php

namespace App;

class Bacterium
{
    private $mass;
    private $tact;
    public function __construct(array $mass)
    {
        $this->tact = $mass['tact'];
        unset($mass['tact']);
        $this->mass = $mass;
    }
    public function division()
    {
        while ($this->tact > 0) {
            if ($this->mass['red'] > 0) {
                $this->mass['green'] += 3;
                $this->mass['red'] += 3;
            }
            if ($this->mass['green'] > 0) {
                $this->mass['green'] += 4;
                $this->mass['red'] += 2;
            }
            $this->tact--;
        }
        return $this->mass;
    }
}
