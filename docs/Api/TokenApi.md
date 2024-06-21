# KizeoFormsApi\Client\TokenApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginPost()**](TokenApi.md#loginPost) | **POST** /login | Login to Kizeo Forms |
| [**tokenAllDelete()**](TokenApi.md#tokenAllDelete) | **DELETE** /token/all | Revoke all token |
| [**tokenTokenDelete()**](TokenApi.md#tokenTokenDelete) | **DELETE** /token/{token} | Revoke a token |


## `loginPost()`

```php
loginPost($body): \KizeoFormsApi\Client\Model\LoginCredentialResponse
```

Login to Kizeo Forms

Login, password and company are required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \KizeoFormsApi\Client\Model\LoginCredential(); // \KizeoFormsApi\Client\Model\LoginCredential | LoginCredential params

try {
    $result = $apiInstance->loginPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\KizeoFormsApi\Client\Model\LoginCredential**](../Model/LoginCredential.md)| LoginCredential params | |

### Return type

[**\KizeoFormsApi\Client\Model\LoginCredentialResponse**](../Model/LoginCredentialResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenAllDelete()`

```php
tokenAllDelete()
```

Revoke all token

Use with caution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->tokenAllDelete();
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenAllDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenTokenDelete()`

```php
tokenTokenDelete($token)
```

Revoke a token

Use with caution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Token to revoke

try {
    $apiInstance->tokenTokenDelete($token);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenTokenDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Token to revoke | |

### Return type

void (empty response body)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
