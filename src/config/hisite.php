<?php

return [
    'components' => [
        'i18n' => [
            'translations' => [
                'hipanel:mrdp' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@ahnames/hipanel/messages',
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\menus\AbstractSidebarMenu::class => [
                'add' => [
                    'old-panel' => [
                        'menu' => [
                            'class' => \hipanel\mrdp\OldPanelMenu::class,
                            'url' => $params['mrdp.returnUrl'],
                        ],
                        'where' => 'last',
                    ],
                ],
            ],
        ],
    ],
];
