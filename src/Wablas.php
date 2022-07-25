<?php
/**
 * @author Agiel K. Saputra <agielkurniawans@gmail.com>
 * @copyright Copyright (c) 2022 Agiel K. Saputra
 */

namespace agielks\yii2\wablas;

use Yii;
use yii\base\Component;
use yii\httpclient\Client;
use yii\httpclient\Request;
use yii\httpclient\Response;

/**
 * Class WablasHelper
 * @author agiel
 *
 * @property Client $client Client object readonly
 * @property Request $request Request object readonly
 * @property Response $response Response object readonly
 */
class Wablas extends Component
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $token;

    /**
     * @var array
     */
    public $versions = [];

    /**
     * @var Client
     */
    private $_client;

    /**
     * @var Request
     */
    private $_request;

    /**
     * @var Response
     */
    private $_response;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->_client = Yii::createObject([
            'class' => Client::class,
            'baseUrl' => $this->endpoint,
            'requestConfig' => [
                'headers' => ['Authorization' => $this->token],
                'format' => Client::FORMAT_JSON
            ]
        ]);

        $this->versions = array_merge([
            'v1' => versions\V1::class,
            'v2' => versions\V2::class,
        ], $this->versions);
    }

    /**
     * @return versions\V1|versions\V2
     */
    public function build($version)
    {
        $className = $this->versions[$version] ?? null;

        if ($className) {
            return new $className(['wablas' => $this]);
        }

        throw new InvalidConfigException('Version not in version list');
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->_client;
    }

    /**
     * @return Request
     */
    public function setRequest($request): void
    {
        $this->_request = $request;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->_request;
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->_response;
    }

    /**
     * @return self
     */
    public function send(): Wablas
    {
        $this->_response = $this->request->send();
        return $this;
    }
}
