<?php
/**
 * HiPanel module for MRDP compatibility
 *
 * @link      https://github.com/hiqdev/hipanel-mrdp
 * @package   hipanel-mrdp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

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
