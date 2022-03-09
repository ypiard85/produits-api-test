<?php

namespace App\Controller\Api;

use App\Entity\Produits;

class ProduitCreateController
{

    public function __invoke(Produits $data)
    {
        $dataKj = $data->getKj();
        $data->setKcal($dataKj / 4.18);

        return $data;

    }
}