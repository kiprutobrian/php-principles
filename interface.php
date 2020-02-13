<?php
interface NewsLetter
{
    public function subscribe($email);
}
class CampaignMonitor implements NewsLetter
{
    public function subscribe($email)
    {
        die('Subscribing with Campaing Monitor');
    }
}
class Drip implements NewsLetter
{
    public function subscribe($email)
    {
        die('Subscribing with Drip');
    }
}
class NewsletterSubscriptionController
{
    public function store(NewsLetter $newsletter)
    {
        $email = 'briankipruto793@gmail.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();
$controller->store(new Drip());
