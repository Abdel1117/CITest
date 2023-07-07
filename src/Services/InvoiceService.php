<?php

namespace App\Services;


use App\Services\EmailService;

class InvoiceService
{

    public function __construct(private EmailService $emailService)
    {
    }



    public function sendInvoice($adress, $amount)
    {

        return $this->emailService->send($adress, "Votre commande d’un montant de " . $amount . "€  est confirmée");
    }


}