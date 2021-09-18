<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Produto extends Entity
{

    protected $_accessible = [
        'nome' => true,
        'tipos_id' => true,
        'tipo' => true,
    ];
}
