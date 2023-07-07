<?php

namespace App\Services;

use \Exception;


class CalculatorService
{

    public function getTotalHt(?array $products)
    {
        $result = 0;

        foreach ($products as $value) {

            if (is_int($value["product"]->getPrice())) {
                $result = $result + $value["product"]->getPrice() * $value["quantity"];
            } else {
                throw new Exception("Veuillez insérer un prix correct", 1);
            }
        }
        return $result;
    }


    public function getTotalTTC($products, $tva)
    {
        $result = $this->getTotalHt($products);

        if (is_int($result)) {
            $totalTTC = $result + ($result * $tva / 100);
            return $totalTTC;
        } else {
            throw new Exception("Veuillez insérer un prix correct", 1);
        }

    }
}