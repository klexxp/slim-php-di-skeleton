<?php

namespace App;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
    	$config = [];
        $definitions = [
            \App\Services\DatabaseInterface::class => function (ContainerInterface $container){
                $settings = $container->get('database');

                return new \App\Services\Database($settings['dsn']);
            },

        	'erroHandler' => function (ContainerInterface $container) {
                return new Handlers\Error();
            },

            'notFoundHandler' => function (ContainerInterface $container) {
                return new Handlers\NotFound();
            },
        ];

        $builder->addDefinitions(APP_ROOT . '/config/development.php');
        $builder->addDefinitions($definitions);
    }
}