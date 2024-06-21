# KizeoFormsApi\Client\ListsApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listsGet()**](ListsApi.md#listsGet) | **GET** /lists | Get External Lists |
| [**listsListIdCompleteGet()**](ListsApi.md#listsListIdCompleteGet) | **GET** /lists/{listId}/complete | Get External List Definition (Without taking in account filters) |
| [**listsListIdGet()**](ListsApi.md#listsListIdGet) | **GET** /lists/{listId} | Get External List Definition |
| [**listsListIdPut()**](ListsApi.md#listsListIdPut) | **PUT** /lists/{listId} | Update External List Definition |


## `listsGet()`

```php
listsGet(): \KizeoFormsApi\Client\Model\ExtList
```

Get External Lists

Get External Lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KizeoFormsApi\Client\Model\ExtList**](../Model/ExtList.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsListIdCompleteGet()`

```php
listsListIdCompleteGet($list_id): \KizeoFormsApi\Client\Model\ExtListDetail
```

Get External List Definition (Without taking in account filters)

Get External List Definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | Id of the list

try {
    $result = $apiInstance->listsListIdCompleteGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdCompleteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| Id of the list | |

### Return type

[**\KizeoFormsApi\Client\Model\ExtListDetail**](../Model/ExtListDetail.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsListIdGet()`

```php
listsListIdGet($list_id): \KizeoFormsApi\Client\Model\ExtListDetail
```

Get External List Definition

Get External List Definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | Id of the list

try {
    $result = $apiInstance->listsListIdGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| Id of the list | |

### Return type

[**\KizeoFormsApi\Client\Model\ExtListDetail**](../Model/ExtListDetail.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsListIdPut()`

```php
listsListIdPut($list_id, $list_id2)
```

Update External List Definition

Update External List Definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | Id of the list
$list_id2 = new \KizeoFormsApi\Client\Model\ListPut(); // \KizeoFormsApi\Client\Model\ListPut | User Parameters

try {
    $apiInstance->listsListIdPut($list_id, $list_id2);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| Id of the list | |
| **list_id2** | [**\KizeoFormsApi\Client\Model\ListPut**](../Model/ListPut.md)| User Parameters | |

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
