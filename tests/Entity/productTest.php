<?php




namespace App\Test\ProductTest;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Product;



final class ProductTest extends KernelTestCase
{

    public function testProduct()
    {
        $product = new Product();
        $product->setName("Camion");
        $product->setPrice(14);

        $this->assertEquals("Camion", $product->getName());
        $this->assertEquals(14, $product->getPrice());

    }
}