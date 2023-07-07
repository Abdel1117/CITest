<?php


namespace App\Test\OrderTest;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Order;
use App\Entity\User;

final class OrderTest extends KernelTestCase
{

    public function testOrder()
    {

        $user = new User();
        $user->setEmail("Abderahmane.adjali@live.fr");

        $order = new Order();
        $order->setNumber(4);
        $order->setTotalPrice(14);
        $order->setUserId($user);

        $this->assertEquals(4, $order->getNumber());
        $this->assertEquals(14, $order->getTotalPrice());
        $this->assertEquals("Abderahmane.adjali@live.fr", $order->getUserId()->getEmail());

    }
}