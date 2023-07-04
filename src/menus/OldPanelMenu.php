<?php
/**
 * HiPanel module for MRDP compatibility
 *
 * @link      https://github.com/hiqdev/hipanel-mrdp
 * @package   hipanel-mrdp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\mrdp\menus;

use hipanel\modules\client\models\Client;
use Yii;

class OldPanelMenu extends \hiqdev\yii2\menus\Menu
{
    public $url;
    const ONE_DAY = 86400;

    public function items()
    {
        $userId = Yii::$app->user->identity?->id;
        if ($userId === null) {
            $showButton = false;
        } else {
            $showButton = !Yii::$app->getCache()->getOrSet([$userId, __CLASS__], function () use ($userId) {
                try {
                    return (bool)Client::findOne($userId)?->hipanel_forced;
                } catch (\Exception $e) {
                    return true;
                }
            }, self::ONE_DAY);
        }

        return [
            'additional' => [
                'label' => '<br/>',
                'encode' => false,
            ],
            [
                'label' => Yii::t('hipanel:mrdp', 'Return to old panel'),
                'icon' => 'fa-sign-out fa-fw fa-flip-horizontal',
                'url' => $this->url,
                'visible' => $showButton,
            ],
        ];
    }

}
