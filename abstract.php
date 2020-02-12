<?php
abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        // FirstThousandPoints => First Thousand Points;
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {
    }
}

class ReachedTop50 extends AchievementType
{
    public function qualifier($user)
    {
    }
}

$achievement = new ReachedTop50();

echo $achievement->qualifier('user');
