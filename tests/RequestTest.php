<?php

namespace agielks\yii2\wablas\tests;

use agielks\yii2\wablas\Wablas;
use Yii;

class RequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Wablas Endpoint
     */
    public const WABLAS_ENDPOINT = 'http://localhost/api';

    /**
     * Wablas Key
     */
    public const WABLAS_TOKEN = 'my-token';

    /**
     * @var Wablas
     */
    public $wablas;

    /**
     * @ineritdoc
     */
    public function setUp(): void
    {
        $this->wablas = Yii::createObject(Wablas::class, [[
            'endpoint' => self::WABLAS_ENDPOINT,
            'token' => self::WABLAS_TOKEN,
            'versions' => [
                'custom' => CustomVersion::class,
            ]
        ]]);
    }

    public function testVersion1()
    {
        $data = [
            'phone' => '6281218xxxxxx',
            'message' => 'hello there',
        ];

        $expected = <<<EOL
            POST http://localhost/api/send-message
            Authorization: my-token
            Content-Type: application/json; charset=UTF-8

            {"phone":"6281218xxxxxx","message":"hello there"}
            EOL;

        /* @var $wablas \agielks\yii2\wablas\versions\V1 */

        $wablas = $this->wablas->create('v1');
        $actual = $wablas->sendMessage($data)->request->toString();

        $this->assertEquals($expected, $actual);
    }

    public function testVersion2()
    {
        $data = [
            [
                'phone' => '6281218xxxxxx',
                'message' => 'hello there',
            ]
        ];

        $expected = <<<EOL
            POST http://localhost/api/v2/send-message
            Authorization: my-token
            Content-Type: application/json; charset=UTF-8

            {"data":[{"phone":"6281218xxxxxx","message":"hello there"}]}
            EOL;

        /* @var $wablas \agielks\yii2\wablas\versions\V2 */

        $wablas = $this->wablas->create('v2');
        $actual = $wablas->sendMessage($data)->request->toString();

        $this->assertEquals($expected, $actual);
    }

    public function testCustom()
    {
        $data = [
            'phone' => '6281218xxxxxx',
            'message' => 'hello there',
        ];

        $expected = <<<EOL
            POST http://localhost/api/custom/send-message
            Authorization: my-token
            Content-Type: application/json; charset=UTF-8

            {"phone":"6281218xxxxxx","message":"hello there"}
            EOL;

        /* @var $wablas CustomVersion */

        $wablas = $this->wablas->create('custom');
        $actual = $wablas->sendMessage($data)->request->toString();

        $this->assertEquals($expected, $actual);
    }
}
