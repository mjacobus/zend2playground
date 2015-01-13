<?php

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'greeter' => __DIR__ . '/../view'
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Greeter\Controller\Greeter' => 'Greeter\Controller\GreeterController',
        )
    ),

    'router' => array(
        'routes' => array(
            'greeting' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/greeter',
                    'defaults' => array(
                        'controller' => 'Greeter\Controller\Greeter',
                        'action'     => 'index',
                    )
                )
            ),
            'personal_greeting' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/greeter/:name',
                    'defaults' => array(
                        'controller' => 'Greeter\Controller\Greeter',
                        'action'     => 'personalGreeting',
                    )
                )
            ),
            'say_my_name' => array(
                'type' => 'Method',
                'options' => array(
                    'verb'  => 'post',
                    'defaults' => array(
                        'controller' => 'Greeter\Controller\Greeter',
                        'action'     => 'sayMyName',
                    )
                )
            ),
        )
    )
);
