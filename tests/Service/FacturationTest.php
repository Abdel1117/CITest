<?php


use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Services\EmailService;
use App\Services\InvoiceService;


class FacturationTest extends KernelTestCase
{



    public function testSendInvoice()
    {
        $my_Email_Service = $this->createMock(EmailService::class);

        $my_Email_Service
            ->expects($this->once())
            ->method("send")
            ->willReturn(true);

        $invoice = new InvoiceService($my_Email_Service);
        $result = $invoice->sendInvoice("abderahmane.adjali@live.fr", 10);

        $this->assertTrue($result);

    }

}