<?php
class AchievementType
{

    public function name()
    {
    }
    public function difficulty()
    {
        return 'Intermediate';
    }

    public function icon()
    {
    }
}
class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
    }
    public function name()
    {
        return 'Welcome Aboard!';
    }
}
