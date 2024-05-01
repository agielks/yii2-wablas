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
     * Instance of Wablas class
     * 
     * @var Wablas
     */
    public $wablas;

    /**
     * Multiple Send Text,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-message'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message' => 'hello there',
     *     ],
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message' => 'hello there',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendMessage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-message'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Image,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-image'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'image' => 'https://cdn-asset.jawapos.com/wp-content/uploads/2019/01/keluarga-pawang-di-jepang-maafkan-macan-putih-yang-membunuhnya_m_.jpg',
     *         'caption' => 'caption here',
     *     ],
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'image' => 'https://cdn-asset.jawapos.com/wp-content/uploads/2019/01/keluarga-pawang-di-jepang-maafkan-macan-putih-yang-membunuhnya_m_.jpg',
     *         'caption' => 'caption here',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendImage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-image'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Audio,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-audio'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'audio' => 'https://download.samplelib.com/mp3/sample-6s.mp3',
     *     ],
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'audio' => 'https://download.samplelib.com/mp3/sample-6s.mp3',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendAudio(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-audio'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Document,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-document'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'document' => 'https://pdfobject.com/pdf/sample.pdf',
     *     ],
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'document' => 'https://pdfobject.com/pdf/sample.pdf',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendDocument(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-document'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Video,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-video'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'video' => 'https://filesamples.com/samples/video/mp4/sample_960x540.mp4',
     *         'caption' => 'caption here',
     *     ],
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'video' => 'https://filesamples.com/samples/video/mp4/sample_960x540.mp4',
     *         'caption' => 'caption here',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendVideo(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-video'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Template,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-template'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message'=> [
     *             'title' => [
     *                 'type' => 'text',
     *                 'content' => 'template text',
     *             ],
     *             'buttons' => [
     *                 'url' => [
     *                     'display' => 'wablas.com',
     *                     'link' => 'https://wablas.com',
     *                 ],
     *                 'call' => [
     *                     'display' => 'contact us',
     *                     'phone' => '081223644xxx',
     *                 ],
     *                 'quickReply' => ["reply 1","reply 2"],
     *             ],
     *             'content' => 'sending template message...',
     *             'footer' => 'footer template here',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * Send OTP Message,
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message'=> [
     *             'title' => [
     *                 'type' => 'text',
     *                 'content' => 'Verification Code',
     *             ],
     *             'buttons' => [
     *                 'url' => [
     *                     'display' => 'Copy',
     *                     'link' => "https://www.whatsapp.com/otp/copy/$code_otp",
     *                 ],
     *             ],
     *             'content' => "Your verification code : $code_otp",
     *             'footer' => 'Supported by Wablas',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * 
     * @return Wablas
     */
    public function sendTemplate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-template'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Link with Preview,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-link'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message'=> [
     *             'thumbnail' => 'https://wablas.com/assets/images/wablas-web.png',
     *             'title' => 'Whatsapp API Gateway Service for Business',
     *             'text' => 'WABLAS is an Whatsapp API Gateway for WhatsApp Business API. It allows developers to interact with WhatsApp's service without having to deal with the complexities of the WhatsApp protocol.',
     *             'link' => 'https://wablas.com',
     *             'description' => 'Wablas is Whatsapp API gateway service for sending and receiving messages, notification',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendLink(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-link'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send List,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-list'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message'=> [
     *             'title' => 'title',
     *             'description' => 'Test',
     *             'buttonText' => 'menu',
     *             'lists' => [
     *                 [
     *                     'title' => '1',
     *                     'description' => 'promo 1',
     *                 ],
     *                 [
     *                     'title' => '2',
     *                     'description' => 'promo 2',
     *                 ],
     *             ],
     *             'footer' => 'footer template here',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendList(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-list'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Schedule,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/schedule'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'category' => 'text',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => 'Hallo kakak',
     *     ],
     *     [
     *         'category' => 'image',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => 'Cover Novel',
     *         'url' => ' https://solo.wablas.com/image/20220315081917.jpeg',
     *     ],
     *     [
     *         'category' => 'template',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => [
     *             'title' => [
     *                 'type' => 'image',
     *                 'content' => 'https://cdn-asset.jawapos.com/wp-content/uploads/2019/01/keluarga-pawang-di-jepang-maafkan-macan-putih-yang-membunuhnya_m_.jpg',
     *             ],
     *             'buttons' => [
     *                 'url' => [
     *                     'display' => 'wablas.com',
     *                     'link' => 'https://wablas.com',
     *                 ],
     *                 'call' => [
     *                     'display' => 'contact us',
     *                     'link' => '081223644660',
     *                 ],
     *                 'quickReply' => ["reply 1","reply 2"],
     *             ],
     *             'content' => 'sending template message...',
     *             'footer' => 'footer template here',
     *         ],
     *     ],
     *     [
     *         'category' => 'button',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => [
     *             'buttons' => ["button 1","button 2","button 3"],
     *             'content' => 'sending template message...',
     *             'footer' => 'footer template here',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @param array $data
     * @return Wablas
     */
    public function scheduleCreate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/schedule'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Delete Schedule,
     * It sets a request on the `$wablas` object, 
     * passing a delete request with the endpoint 'v2/delete-schedule?id=xxx,xxx,xxx'.
     * 
     * @param array $data Unix ID from schedule message. Look response documentation api send schedule.
     * Example: `8abe5c56-7f43-451b-8b2d-91a9f9a74561`
     * ```php
     * $data = [
     *     '8abe5c56-7f43-451b-8b2d-91a9f9a74561',
     *     '87cd2b3d-4a27-4978-bd28-bd7a4d82f931',
     *     '87cd2b3d-4a27-4978-bd28-bd7a4d82f931',
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function scheduleDelete(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->delete(['v2/delete-schedule'])->setData(['id' => implode(',', $data)]));
        return $this->wablas;
    }

    /**
     * Update Multiple Schedule,
     * It sets a request on the `$wablas` object, 
     * passing a put request with the endpoint 'v2/schedule/{schedule_id}'.
     * 
     * @param string $id Unix ID from schedule message. Look response documentation api send schedule.
     * Example: `8abe5c56-7f43-451b-8b2d-91a9f9a74561`
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'category' => 'text',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => 'Hallo kakak',
     *     ],
     *     [
     *         'category' => 'image',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => 'Cover Novel',
     *         'url' => ' https://solo.wablas.com/image/20220315081917.jpeg',
     *     ],
     *     [
     *         'category' => 'template',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => [
     *             'title' => [
     *                 'type' => 'image',
     *                 'content' => 'https://cdn-asset.jawapos.com/wp-content/uploads/2019/01/keluarga-pawang-di-jepang-maafkan-macan-putih-yang-membunuhnya_m_.jpg',
     *             ],
     *             'buttons' => [
     *                 'url' => [
     *                     'display' => 'wablas.com',
     *                     'link' => 'https://wablas.com',
     *                 ],
     *                 'call' => [
     *                     'display' => 'contact us',
     *                     'link' => '081223644660',
     *                 ],
     *                 'quickReply' => ["reply 1","reply 2"],
     *             ],
     *             'content' => 'sending template message...',
     *             'footer' => 'footer template here',
     *         ],
     *     ],
     *     [
     *         'category' => 'button',
     *         'phone' => '6281218xxxxxx',
     *         'scheduled_at' => '2022-05-20 13:20:00',
     *         'text' => [
     *             'buttons' => ["button 1","button 2","button 3"],
     *             'content' => 'sending template message...',
     *             'footer' => 'footer template here',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function scheduleUpdate(string $id, array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->put(["v2/schedule/{$id}"])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Button,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-button'.
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message' => [
     *              'buttons' => ["button 1","button 2","button 3"],
     *              'content' => 'sending template message...',
     *              'footer' => 'footer template here',
     *          ],
     *     ],
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message' => [
     *             'header' => [
     *                 'type' => 'text',
     *                 'content' => 'The Header Text',
     *             ],
     *             'buttons' => ["Reply 1","Reply 2","Reply 3"],
     *             'content' => 'sending button message.',
     *             'footer' => 'powered by my own',
     *         ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * 
     * @param array $data
     * @return Wablas
     */
    public function sendButton(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-button'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Multiple Send Location,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/send-location'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'phone' => '6281218xxxxxx',
     *         'message' => [
     *              'name' => 'place name',
     *              'address' => 'street',
     *              'latitude' => 24.121231,
     *              'longitude' => 55.1121221,
     *          ],
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function sendLocation(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/send-location'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Create Auto Reply,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/autoreply'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'keyword' => 'hello',
     *         'response' => 'hello too.',
     *     ],
     *     [
     *         'keyword' => 'hay',
     *         'response' => 'hay too.',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function autoReplyCreate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/autoreply'])->setData($data));
        return $this->wablas;
    }

    /**
     * Update Auto Reply,
     * It sets a request on the `$wablas` object, 
     * passing a put request with the endpoint 'v2/autoreply/{id}'.
     * 
     * @param string $id Unix ID from schedule message. Look response documentation api send schedule.
     * Example: `8abe5c56-7f43-451b-8b2d-91a9f9a74561`
     * @param array $data
     * ```php
     * $data = [
     *     'keyword' => 'hello',
     *     'response' => 'hello too.',
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function autoReplyUpdate(string $id, array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->put(["v2/autoreply/{$id}"])->setData($data));
        return $this->wablas;
    }

    /**
     * Delete Auto Reply,
     * It sets a request on the `$wablas` object, 
     * passing a delete request with the endpoint 'v2/autoreply/{id}'.
     * 
     * @param string $id Unix ID from schedule message. Look response documentation api send schedule.
     * Example: `8abe5c56-7f43-451b-8b2d-91a9f9a74561`
     * 
     * @return Wablas
     */
    public function autoReplyDelete(string $id): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->delete(["v2/autoreply/{$id}"]));
        return $this->wablas;
    }

    /**
     * Create Multiple Contact,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/contact'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'name' => 'Danu',
     *         'phone' => '6285867765222'
     *     ],
     *     [
     *         'name' => 'Karina Setya',
     *         'phone' => '6285867765777',
     *         'email' => 'karina.setya@gmail.com',
     *         'birth_day' => '1992-03-12',
     *         'address' => 'Kedokan RT 02/ RW 04 Klego Boyolali',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function contactCreate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/contact'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Update Multiple Contact,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/contact/update'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'name' => 'Danu',
     *         'phone' => '6285867765222'
     *     ],
     *     [
     *         'name' => 'Karina Setya',
     *         'phone' => '6285867765777',
     *         'email' => 'karina.setya@gmail.com',
     *         'birth_day' => '1992-03-12',
     *         'address' => 'Kedokan RT 02/ RW 04 Klego Boyolali',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function contactUpdate(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/contact/update'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Delete Multiple Contact,
     * It sets a request on the `$wablas` object, 
     * passing a delete request with the endpoint 'v2/contact'.
     * 
     * @param string $phone
     * @return Wablas
     */
    public function contactDelete(string $phone): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->delete(['v2/contact'])->setData(['phone' => $phone]));
        return $this->wablas;
    }

    /**
     * List Contact,
     * It sets a request on the `$wablas` object, 
     * passing a get request with the endpoint 'v2/contact'.
     * 
     * @return Wablas
     */
    public function contactList(): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->get(['v2/contact']));
        return $this->wablas;
    }

    /**
     * Create Multiple Agent,
     * It sets a request on the `$wablas` object, 
     * passing a post request with the endpoint 'v2/create-agent'.
     * 
     * @param array $data
     * ```php
     * $data = [
     *     [
     *         'name' => 'danu',
     *         'phone' => '6281218xxxxxx',
     *         'email' => 'danu@gmail.com',
     *         'password' => 'xxxxxxxx',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function createAgent(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['v2/create-agent'])->setData($this->data($data)));
        return $this->wablas;
    }

    /**
     * Delete Media,
     * It sets a request on the `$wablas` object, 
     * passing a delete request with the endpoint 'v2/media/delete/{id}'.
     * 
     * @param string $id Unix ID from message. look response documentation api send message.
     * ```php
     * $data = [
     *     [
     *         'name' => 'danu',
     *         'phone' => '6281218xxxxxx',
     *         'email' => 'danu@gmail.com',
     *         'password' => 'xxxxxxxx',
     *     ],
     *     ...
     * ];
     * ```
     * 
     * @return Wablas
     */
    public function deleteMedia(string $id): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->delete(["v2/media/delete/{$id}"]));
        return $this->wablas;
    }

    /**
     * @param array $data
     * @return array
     */
    private function data(array $data)
    {
        return ['data' => $data];
    }
}
