<?php
class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

class SpecialtyCoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing the coffee');
    }
}

(new CoffeeMaker())->brew();
