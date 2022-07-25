# Yii2 Wablas

This extension is wrapper of Wablas API for [Yii framework 2.0](http://www.yiiframework.com) (requires PHP 7.4+).

[![Latest Stable Version](http://poser.pugx.org/agielks/yii2-wablas/v)](https://packagist.org/packages/agielks/yii2-wablas) 
[![Total Downloads](http://poser.pugx.org/agielks/yii2-wablas/downloads)](https://packagist.org/packages/agielks/yii2-wablas) 
[![Latest Unstable Version](http://poser.pugx.org/agielks/yii2-wablas/v/unstable)](https://packagist.org/packages/agielks/yii2-wablas) 
[![License](http://poser.pugx.org/agielks/yii2-wablas/license)](https://packagist.org/packages/agielks/yii2-wablas) 
[![PHP Version Require](http://poser.pugx.org/agielks/yii2-wablas/require/php)](https://packagist.org/packages/agielks/yii2-wablas)

## Table of contents

1. [Installation](#installation)
1. [Dependencies](#dependencies)
1. [Basic usage](#basic-usage)
   1. [Create request](#basicusage-request)
   1. [Create response](#basicusage-response)
   1. [Create version](#basicusage-version)
1. [Step by step](#step-by-step)

<a name="installation"></a>
## Instalation

Package is available on [Packagist](https://packagist.org/packages/agielks/yii2-wablas), 
you can install it using [Composer](http://getcomposer.org).

```shell
composer require agielks/yii2-wablas ~1.0
```

or add to the require section of your `composer.json` file.

```
"agielks/yii2-wablas": "~1.0"
```

<a name="dependencies"></a>
## Dependencies

- PHP 7.4+
- [yiisoft/yii2](https://github.com/yiisoft/yii2)
- [yiisoft/yii2-httpclient](https://github.com/yiisoft/yii2-httpclient)

<a name="basic-usage"></i>
## Basic Usage

Add `wablas` component to your configuration file

```php
'components' => [
    'wablas' => [
        'class' => \agielks\yii2\wablas\Wablas::class,
        'endpoint' => 'my-wablas.com/api', // Change with your wablas API endpoint
        'token' => 'my-token', // Change with your wablas API token
    ],
],
```

<a name="basicusage-request"></a>
## Create Request

```php
$data = [
    [
        'phone' => '6281218xxxxxx',
        'message' => 'hello there',
    ]
];

/* @var $wablas \agielks\yii2\wablas\versions\V2 */

$wablas = $this->wablas->build('v2');
$request = $wablas->sendMessage($data)->request;

// Print request to string
print_r($request->toString());

// Short command
$request = $this->wablas->build('v2')->sendMessage($data)->request;
```

<a name="basicusage-response"></a>
## Create Response

```php
$data = [
    [
        'phone' => '6281218xxxxxx',
        'message' => 'hello there',
    ]
];

/* @var $wablas \agielks\yii2\wablas\versions\V2 */

$wablas = $this->wablas->build('v2');
$response = $wablas
    ->sendMessage($data)
    ->send()
    ->response;

// Print whether response is OK
print_r($response->isOk);

// Print status code
print_r($response->statusCode);

// Print response data
print_r($response->data);

// Short command
$response = $this->wablas->build('v2')->sendMessage($data)->send()->response;
```

<a name="basicusage-version"></a>
## Custom version
You can create your own version as follows

1. Create custom version
```php
class CustomVersion extends BaseObject
{
    public $wablas;

    public function sendMessage(array $data): Wablas
    {
        $this->wablas->setRequest($this->wablas->client->post(['custom/send-message'])->setData($data));
        return $this->wablas;
    }
}
```

2. Register custom version
```php
'components' => [
    'wablas' => [
        'class' => \agielks\yii2\wablas\Wablas::class,
        'endpoint' => 'my-wablas.com', // Change with your endpoint
        'token' => 'my-token', // Change with your wablas token,
        'versions' => [
            'custom' => CustomVersion::class,
        ]
    ],
],
```

3. Call the custom version
```php
$wablas = $this->wablas->build('custom')->sendMessage($data)->send();
```

<a name="step-by-step"></a>
## Send Message Example

### Step by step usage
1. Install component

```shell
composer require agielks/yii2-wablas ~1.0
```

2. Update your components configuration

```php
'components' => [
    // other components here...
    'wablas' => [
        'class' => \agielks\yii2\wablas\Wablas::class,
        'endpoint' => 'my-wablas.com/api',
        'token' => 'my-token',
    ],
    // ...
],
```

3. Update controller

```php

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionTest()
    {
        $data = [
            [
                'phone' => '6281218xxxxxx',
                'message' => 'hello there',
            ]
        ];

        $response = Yii::$app->wablas->build('v2')->sendMessage($data)->send()->response;
        
        if ($response->isOk) {
            print_r($response); // Do action
        } else {
            print_r($response); // Do action
        }
    }
}
```
