# KizeoFormsApi\Client\DataApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**formsFormIdDataAdvancedPost()**](DataApi.md#formsFormIdDataAdvancedPost) | **POST** /forms/{formId}/data/advanced | Get List of filtered data of a form (with advanced filtering options) |
| [**formsFormIdDataAllGet()**](DataApi.md#formsFormIdDataAllGet) | **GET** /forms/{formId}/data/all | Get the list of all data of a form |
| [**formsFormIdDataDataIdDeleteDelete()**](DataApi.md#formsFormIdDataDataIdDeleteDelete) | **DELETE** /forms/{formId}/data/{dataId}/delete | Delete a data |
| [**formsFormIdDataDataIdGet()**](DataApi.md#formsFormIdDataDataIdGet) | **GET** /forms/{formId}/data/{dataId} | Get data of a form |
| [**formsFormIdDataGet()**](DataApi.md#formsFormIdDataGet) | **GET** /forms/{formId}/data | Get the list of all data of a form (not read) |
| [**formsFormIdDataReadnewGet()**](DataApi.md#formsFormIdDataReadnewGet) | **GET** /forms/{formId}/data/readnew | Get content of unread data |
| [**formsFormIdDataSearchPost()**](DataApi.md#formsFormIdDataSearchPost) | **POST** /forms/{formId}/data/search | Get List of filtered data of a form |
| [**formsFormIdMarkasreadPost()**](DataApi.md#formsFormIdMarkasreadPost) | **POST** /forms/{formId}/markasread | Set list of data of a form to read |
| [**formsFormIdMarkasunreadPost()**](DataApi.md#formsFormIdMarkasunreadPost) | **POST** /forms/{formId}/markasunread | Set list of data of form to unread |
| [**formsFormIdPushDataIdPost()**](DataApi.md#formsFormIdPushDataIdPost) | **POST** /forms/{formId}/push/{dataId} | Send push with data |
| [**formsFormIdPushPost()**](DataApi.md#formsFormIdPushPost) | **POST** /forms/{formId}/push | Send push with data |
| [**formsPushInboxGet()**](DataApi.md#formsPushInboxGet) | **GET** /forms/push/inbox | Receive new pushed data |


## `formsFormIdDataAdvancedPost()`

```php
formsFormIdDataAdvancedPost($form_id, $body): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Get List of filtered data of a form (with advanced filtering options)

Get the list of filtered data of a form (with advanced filtering options), or of all forms if formId is set to 'all'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\AdvancedFilter(); // \KizeoFormsApi\Client\Model\AdvancedFilter | Data params

try {
    $result = $apiInstance->formsFormIdDataAdvancedPost($form_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataAdvancedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\AdvancedFilter**](../Model/AdvancedFilter.md)| Data params | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataAllGet()`

```php
formsFormIdDataAllGet($form_id): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Get the list of all data of a form

This function provides you all data of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataAllGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataDataIdDeleteDelete()`

```php
formsFormIdDataDataIdDeleteDelete($form_id, $data_id)
```

Delete a data

Delete existing data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data

try {
    $apiInstance->formsFormIdDataDataIdDeleteDelete($form_id, $data_id);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataDataIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data | |

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

## `formsFormIdDataDataIdGet()`

```php
formsFormIdDataDataIdGet($form_id, $data_id): \KizeoFormsApi\Client\Model\Data
```

Get data of a form

Get data of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data

try {
    $result = $apiInstance->formsFormIdDataDataIdGet($form_id, $data_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataDataIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data | |

### Return type

[**\KizeoFormsApi\Client\Model\Data**](../Model/Data.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataGet()`

```php
formsFormIdDataGet($form_id): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Get the list of all data of a form (not read)

This function provides you all data of a form (not read)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataReadnewGet()`

```php
formsFormIdDataReadnewGet($form_id): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Get content of unread data

Get the content of all unread data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdDataReadnewGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataReadnewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataSearchPost()`

```php
formsFormIdDataSearchPost($form_id, $body): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Get List of filtered data of a form

Get the list of filtered data of a form, or of all forms if formId is set to 'all'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\SearchFilter(); // \KizeoFormsApi\Client\Model\SearchFilter | Data params

try {
    $result = $apiInstance->formsFormIdDataSearchPost($form_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdDataSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\SearchFilter**](../Model/SearchFilter.md)| Data params | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdMarkasreadPost()`

```php
formsFormIdMarkasreadPost($form_id, $body): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Set list of data of a form to read

Set list of data of a form to read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids parameters

try {
    $result = $apiInstance->formsFormIdMarkasreadPost($form_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdMarkasreadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids parameters | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdMarkasunreadPost()`

```php
formsFormIdMarkasunreadPost($form_id, $body): \KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response
```

Set list of data of form to unread

Set list of data of form to unread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids parameters

try {
    $result = $apiInstance->formsFormIdMarkasunreadPost($form_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdMarkasunreadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids parameters | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdDataGet200Response**](../Model/FormsFormIdDataGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdPushDataIdPost()`

```php
formsFormIdPushDataIdPost($form_id, $data_id, $body): \KizeoFormsApi\Client\Model\DataMin
```

Send push with data

Send push with data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data to edit
$body = new \KizeoFormsApi\Client\Model\DataPush(); // \KizeoFormsApi\Client\Model\DataPush | Data parameters

try {
    $result = $apiInstance->formsFormIdPushDataIdPost($form_id, $data_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdPushDataIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data to edit | |
| **body** | [**\KizeoFormsApi\Client\Model\DataPush**](../Model/DataPush.md)| Data parameters | |

### Return type

[**\KizeoFormsApi\Client\Model\DataMin**](../Model/DataMin.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdPushPost()`

```php
formsFormIdPushPost($form_id, $body): \KizeoFormsApi\Client\Model\DataPushResponse
```

Send push with data

Send push with data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataPush(); // \KizeoFormsApi\Client\Model\DataPush | Data parameters

try {
    $result = $apiInstance->formsFormIdPushPost($form_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsFormIdPushPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataPush**](../Model/DataPush.md)| Data parameters | |

### Return type

[**\KizeoFormsApi\Client\Model\DataPushResponse**](../Model/DataPushResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsPushInboxGet()`

```php
formsPushInboxGet(): \KizeoFormsApi\Client\Model\FormMin
```

Receive new pushed data

Receive all new pushed data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->formsPushInboxGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->formsPushInboxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KizeoFormsApi\Client\Model\FormMin**](../Model/FormMin.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
