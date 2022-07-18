<?php
/**
 * @author Agiel K. Saputra <agielkurniawans@gmail.com>
 * @copyright Copyright (c) 2022 Agiel K. Saputra
 */

namespace agielks\yii2\wablas\tests;

use agielks\yii2\wablas\Wablas;
use yii\base\BaseObject;

/**
 * Wrapper for Wablas Version 1
 */
class CustomVersion extends BaseObject
{
    /**
     * @var Wablas
     */
    public $wablas;

    /**
     * @return Wablas
     */
    public function sendMessage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['custom/send-message'])->setData($data));
        return $this->wablas;
    }
}
