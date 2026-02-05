English | [中文](README.md)

<h1 align="center"><img src="https://iam.volccdn.com/obj/volcengine-public/pic/volcengine-icon.png"></h1>
<h1 align="center">Volcengine SDK for PHP</h1>

Welcome to Volcengine SDK for PHP. This document explains how to obtain and use the SDK.

## Prerequisites

### Enable the service

Make sure the service you want to access is enabled. Go to the [Volcengine Console](https://console.volcengine.com/), select the service from the left navigation (or search it from the top bar), and complete the activation process in the service console.

### Obtain security credentials

Access Key is the credential used to access Volcengine services. It consists of Access Key ID (AK) and Secret Access Key (SK).

Log in to the [Volcengine Console](https://console.volcengine.com/), then go to [IAM](https://console.volcengine.com/iam) -> [Access Keys](https://console.volcengine.com/iam/keymanage/) to create and manage your Access Keys. For more information, see the [Access Key documentation](https://www.volcengine.com/docs/6291/65568).

### Environment check

PHP version must be **7.1** or later.

## Install

We recommend installing Volcengine SDK for PHP via Composer:

```shell
composer require volcengine/volc-sdk-php
```

## Configuration

### Credential configuration

Volcengine SDK for PHP supports the following credential loading methods.

*Note: Replace `Your AK` and `Your SK` in the code with your actual AK and SK.*

**Method 1**: Specify AK/SK explicitly on the client **(recommended)**

```php
$client = Iam::getInstance();
$client->setAccessKey(Your AK);
$client->setSecretKey(Your SK);
```

**Method 2**: Load AK/SK from environment variables

```bash
VOLC_ACCESSKEY="Your AK"
VOLC_SECRETKEY="Your SK"
```

**Method 3**: Load AK/SK from a file under HOME

Add the following content to `~/.volc/config`:

```json
{
  "ak": "Your AK",
  "sk": "Your SK"
}
```

## Other resources

Examples are available under [examples](./examples)
