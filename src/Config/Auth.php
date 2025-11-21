<?php
namespace Alonso\CIAuth\Config;

use CodeIgniter\Config\BaseConfig;

class Auth extends BaseConfig
{
    public $views = [
        'login' => 'Alonso\CIAuth\Views\login',
    ];

    public $redirects = [
        'login' => '/login',
        'logout' => '/',
        'dashboard' => '/dashboard',
    ];
}
