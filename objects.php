<?php
class Team
{

    protected $name;
    protected $members = [];

    public function __construct($name,  $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
    }

    public function manager()
    {
    }
}

////////////////////////////////////////////////////////////////////////////////
class Member
{

    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastPlayed()
    {
    }
}

////////////////////////////////////////////////////////////////////////////////
$name = Team::start('Chelsea', [
    new Member('GK - Kepa'),
    new Member('ST - Groud')
]);
// $name->add('LM - Mount');
// $name->add('RW - Willian');

// var_dump($team->name());
var_dump($name->members());
