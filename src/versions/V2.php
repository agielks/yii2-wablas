<?php
/**
 * @author Agiel K. Saputra <agielkurniawans@gmail.com>
 * @copyright Copyright (c) 2022 Agiel K. Saputra
 */

namespace agielks\yii2\wablas\versions;

use agielks\yii2\wablas\Wablas;
use yii\base\BaseObject;

/**
 * Wrapper for Wablas Version 2
 */
class V2 extends BaseObject
{
    /**
     * @var Wablas
     */
    public $wablas;

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendMessage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-message'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendImage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-image'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendDocument(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-document'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendVideo(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-video'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendAudio(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-audio'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendLocation(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-location'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendTemplate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-template'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendList(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-list'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendButton(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-button'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function scheduleCreate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/schedule'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param int $id
     * @param array $data
     * @return Wablas
     */
    public function scheduleUpdate(int $id, array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->put(["v2/schedule/{$id}"])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param int $id
     * @param array $data
     * @return Wablas
     */
    public function createAgent(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(["v2/create-agent"])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return array
     */
    private function data(array $data)
    {
        return [
            'data' => $data,
        ];
    }
}
