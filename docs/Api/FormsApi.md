# KizeoFormsApi\Client\FormsApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**formsFormIdGet()**](FormsApi.md#formsFormIdGet) | **GET** /forms/{formId} | Get form definition |
| [**formsGet()**](FormsApi.md#formsGet) | **GET** /forms | List all forms |


## `formsFormIdGet()`

```php
formsFormIdGet($form_id): \KizeoFormsApi\Client\Model\Form
```

Get form definition

This function provides you a complete form definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->formsFormIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |

### Return type

[**\KizeoFormsApi\Client\Model\Form**](../Model/Form.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsGet()`

```php
formsGet(): \KizeoFormsApi\Client\Model\FormMin
```

List all forms

This function provides you a list of all forms in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->formsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->formsGet: ', $e->getMessage(), PHP_EOL;
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
