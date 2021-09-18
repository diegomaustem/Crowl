<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
    
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Auth',
            [
                'loginRedirect'=>['controller'=>'Produtos',
                'action'=>'index'
            ],
                'logoutRedirect'=>'Users',
                'action'=>'login',

            ]);
        $this->loadComponent('RequestHandler', 
            ['enableBeforeRedirect' => false]);
        $this->loadComponent('Flash');

    }
}
