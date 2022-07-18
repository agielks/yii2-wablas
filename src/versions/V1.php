<?php
/**
 * @author Agiel K. Saputra <agielkurniawans@gmail.com>
 * @copyright Copyright (c) 2022 Agiel K. Saputra
 */

namespace agielks\yii2\wablas\versions;

use agielks\yii2\wablas\Wablas;
use yii\base\BaseObject;

/**
 * Wrapper for Wablas Version 1
 */
class V1 extends BaseObject
{
    /**
     * @var Wablas
     */
    public $wablas;

    /**
     * @return Wablas
     */
    public function deviceCreate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['device/create'])->setData($data));
        return $this->wablas;
    }

    /**
     * @return Wablas
     */
    public function deviceInfo(): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['device/info', 'token' => $this->wablas->token]));
        return $this->wablas;
    }

    /**
     * @return Wablas
     */
    public function deviceScan(): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['device/scan', 'token' => $this->wablas->token]));
        return $this->wablas;
    }

    /**
     * @param string $phone
     * @return Wablas
     */
    public function deviceChangeNumber(string $phone): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['device/change-number'])->setData(['phone' => $phone]));
        return $this;
    }

    /**
     * @param string $url
     * @return Wablas
     */
    public function deviceChangeWebhookUrl(string $url): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['device/change-webhook-url'])->setData(['webhook_url' => $url]));
        return $this;
    }

    /**
     * @param string $url
     * @return Wablas
     */
    public function deviceChangeTrackingUrl(string $url): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['device/change-tracking-url'])->setData(['tracking_url' => $url]));
        return $this;
    }

    /**
     * @param string $closing
     * @return Wablas
     */
    public function deviceChangeClosing($closing): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['device/change-closing'])->setData(['closing' => $closing]));
        return $this;
    }

    /**
     * @return Wablas
     */
    public function deviceGenerateToken(): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['device/generate-token']));
        return $this;
    }

    /**
     * @return Wablas
     */
    public function deviceDisconnect(): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['device/disconnect']));
        return $this;
    }

    /**
     * @param int $delay
     * @return Wablas
     */
    public function deviceSpeed(int $delay): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['device/speed'])->setData(['delay' => $delay]));
        return $this;
    }

    /**
     * @param string $phone
     * @param string $message
     * @return Wablas
     */
    public function sendSimpleMessage($phone, $message): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get([
            'send-message',
            'phone' => $phone,
            'message' => $message,
            'token' => $this->wablas->token
        ]));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendMessage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['send-message'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendImage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['send-image'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendDocument(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['send-document'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendVideo(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['send-video'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendAudio(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['send-audio'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function sendLocation(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['send-location'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function scheduleCreate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['schedule'])->setData($data));
        return $this->wablas;
    }

    /**
     * @param string $id
     * @param array $data
     * @return Wablas
     */
    public function scheduleUpdate(string $id, array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->put(["schedule/{$id}"])->setData($data));
        return $this->wablas;
    }

    /**
     * @param array $id
     * @return Wablas
     */
    public function scheduleCancel(string $id): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->put(["schedule-cancel/{$id}"]));
        return $this->wablas;
    }

    /**
     * @param array $id
     * @return Wablas
     */
    public function scheduleDelete(string $id): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->delete(["schedule/{$id}"]));
        return $this->wablas;
    }

    /**
     * @param array $id
     * @return Wablas
     */
    public function resendMessage(string $id): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(["resend-message/{$id}"]));
        return $this->wablas;
    }

    /**
     * @return Wablas
     */
    public function reportMessage(array $data): Wablas
    {
        $url = array_merge(['report/message'], $data);
        $this->wablas->setRequest($this->wablas->client->get($url));
        return $this->wablas;
    }

    /**
     * @return Wablas
     */
    public function reportRealtime(): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['report-realtime']));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return Wablas
     */
    public function createAgent(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['create-agent'])->setData($data));
        return $this->wablas;
    }
}
