<?php
class Age
{
    private $age;
    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('This can never happen');
        }
        $this->age = $age;
    }

    public function increment()
    {
        //mutable
        // $this->age += 1;

        //immutable
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age = $age->increment();
var_dump($age->get());


// class User
// {
//     public function register(string $name, Age $age)
//     {
//     }
// }

// $age = new Age(500);
// $brayo = new User();
// $brayo->register('Brayo Kip', $age);
// var_dump($brayo);
