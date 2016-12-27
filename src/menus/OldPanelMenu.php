<?php

namespace hipanel\mrdp\menus;

use Yii;

class OldPanelMenu extends \hiqdev\yii2\menus\Menu
{
    public $url;

    public function items()
    {
        return [
            'additional' => [
                'label' => '<br/>',
                'encode' => false,
            ],
            [
                'label' => Yii::t('hipanel:mrdp', 'Return to old panel'),
                'icon' => 'fa-sign-out fa-fw fa-flip-horizontal',
                'url' => $this->url,
            ],
        ];
    }
}
