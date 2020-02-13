<?php
class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function job()
    {
        return 'Softwre Developer';
    }
    public function favoriteTeam()
    {
    }
    private function thingsThatKeepUpAtNight()
    {
        return 'Personal life';
    }
}

$brayo = new Person('Brayo');
var_dump($brayo->job());
