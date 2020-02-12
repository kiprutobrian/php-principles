<?php
class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

// 'is a' relationship - A SpecialtyCoffeeMaker is CoffeeMaker
class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

// (new SpecialtyCoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brewLatte();
