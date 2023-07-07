<?php

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Services\CalculatorService;
use App\Entity\Product;


class CalculatorServiceTest extends KernelTestCase
{


    public function getProducts()
    {
        return [
            [
                'product' => $this->createProduct("Ballon rouge", 10),
                'quantity' => 3
            ],
            [
                'product' => $this->createProduct("Ballon bleu", 8),
                'quantity' => 2
            ],
            [
                'product' => $this->createProduct("Ballon jaune", 11),
                'quantity' => 5
            ]
        ];
    }

    public function createProduct($name, $price)
    {
        return ((new Product())
            ->setName($name)
            ->setPrice($price));
    }
    public final function testGetTotalHT()
    {
        /* We got $product who is an array of product with the object and the quantity */
        $products = $this->getProducts();


        $calculator = new CalculatorService();
        $result = $calculator->getTotalHt($products);
        $this->assertEquals(101, $result);

    }


    public final function testGetTotalTTC()
    {


        $product = $this->getProducts();

        $calculator = new CalculatorService();
        $result = $calculator->getTotalTTC($product, 20);


        $this->assertEquals(121.2, $result);

    }

}