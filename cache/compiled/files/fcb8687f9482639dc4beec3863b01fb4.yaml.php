<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/ventdest.group/user/themes/receptar/blueprints.yaml',
    'modified' => 1553842123,
    'data' => [
        'name' => 'Receptar',
        'version' => '1.3.0',
        'description' => 'Receptar is simple, modern, responsive, high-DPI, fully customizable, stylish blog Grav theme. It features split-screen book-like design inspired by a modern cook book with emphasize on beautiful imagery and typography.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-receptar',
        'demo' => 'http://demo.getgrav.org/receptar-skeleton',
        'keywords' => 'receptar, theme, cookbook, split-screen, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-receptar/issues',
        'license' => 'GPL2',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'showchildpages.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Show child pages in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
