<?php

namespace App\Controller\Api;

use App\Entity\Produits;

class ProduitCreateController
{

    public function __invoke(Produits $data)
    {
        $dataKj = $data->getKj();
        $data->setEan(rand(1000000000000,5000000000000));
        $data->setKcal($dataKj / 4.18);

        return $data;

    }
}