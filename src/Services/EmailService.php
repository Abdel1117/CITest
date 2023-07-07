<?php


namespace App\Services;

use Symfony\Component\Mailer\Messenger\SendEmailMessage;


class EmailService
{

    public function send(?string $adressEmail, ?string $message)
    {
        return (bool) mt_rand(0, 1);

    }


}