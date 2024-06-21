# KizeoFormsApi\Client\ExportsApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**formsFormIdDataDataIdExportsExportIdGet()**](ExportsApi.md#formsFormIdDataDataIdExportsExportIdGet) | **GET** /forms/{formId}/data/{dataId}/exports/{exportId} | Export data |
| [**formsFormIdDataDataIdExportsExportIdPdfGet()**](ExportsApi.md#formsFormIdDataDataIdExportsExportIdPdfGet) | **GET** /forms/{formId}/data/{dataId}/exports/{exportId}/pdf | Export data (PDF) |
| [**formsFormIdDataDataIdFormPicturesMediaNameGet()**](ExportsApi.md#formsFormIdDataDataIdFormPicturesMediaNameGet) | **GET** /forms/{formId}/data/{dataId}/form_pictures/{mediaName} | Get one fixed image of a form |
| [**formsFormIdDataDataIdMediasMediaNameGet()**](ExportsApi.md#formsFormIdDataDataIdMediasMediaNameGet) | **GET** /forms/{formId}/data/{dataId}/medias/{mediaName} | Get one image of a form |
| [**formsFormIdDataDataIdPdfGet()**](ExportsApi.md#formsFormIdDataDataIdPdfGet) | **GET** /forms/{formId}/data/{dataId}/pdf | Get PDF data of a form |
| [**formsFormIdDataMultipleCsvCustomPost()**](ExportsApi.md#formsFormIdDataMultipleCsvCustomPost) | **POST** /forms/{formId}/data/multiple/csv_custom | Get custom CSV data (multiple) of a form |
| [**formsFormIdDataMultipleCsvPost()**](ExportsApi.md#formsFormIdDataMultipleCsvPost) | **POST** /forms/{formId}/data/multiple/csv | Get CSV data (multiple) of a form |
| [**formsFormIdDataMultipleExcelCustomPost()**](ExportsApi.md#formsFormIdDataMultipleExcelCustomPost) | **POST** /forms/{formId}/data/multiple/excel_custom | Get custom Excel list data (multiple) of a form |
| [**formsFormIdDataMultipleExcelPost()**](ExportsApi.md#formsFormIdDataMultipleExcelPost) | **POST** /forms/{formId}/data/multiple/excel | Get Excel list data (multiple) of a form |
| [**formsFormIdExportsGet()**](ExportsApi.md#formsFormIdExportsGet) | **GET** /forms/{formId}/exports | Get list of Word and Excel exports |
| [**formsFormIdMultipleDataExportsExportIdPdfPost()**](ExportsApi.md#formsFormIdMultipleDataExportsExportIdPdfPost) | **POST** /forms/{formId}/multiple_data/exports/{exportId}/pdf | Export data (multiple / PDF) |


## `formsFormIdDataDataIdExportsExportIdGet()`

```php
formsFormIdDataDataIdExportsExportIdGet($form_id, $data_id, $export_id): string
```

Export data

Export one entry to the selected export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data
$export_id = 56; // int | ID of requested export model

try {
    $result = $apiInstance->formsFormIdDataDataIdExportsExportIdGet($form_id, $data_id, $export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdExportsExportIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data | |
| **export_id** | **int**| ID of requested export model | |

### Return type

**string**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.wordprocessingml.document`, `application/vnd.ms-excel`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataDataIdExportsExportIdPdfGet()`

```php
formsFormIdDataDataIdExportsExportIdPdfGet($form_id, $data_id, $export_id): string
```

Export data (PDF)

Export one entry to the selected export to PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data
$export_id = 56; // int | ID of requested export model

try {
    $result = $apiInstance->formsFormIdDataDataIdExportsExportIdPdfGet($form_id, $data_id, $export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdExportsExportIdPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data | |
| **export_id** | **int**| ID of requested export model | |

### Return type

**string**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdDataDataIdFormPicturesMediaNameGet()`

```php
formsFormIdDataDataIdFormPicturesMediaNameGet($form_id, $data_id, $media_name)
```

Get one fixed image of a form

Get one fixed image of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data
$media_name = 'media_name_example'; // string | Name of the image

try {
    $apiInstance->formsFormIdDataDataIdFormPicturesMediaNameGet($form_id, $data_id, $media_name);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdFormPicturesMediaNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data | |
| **media_name** | **string**| Name of the image | |

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

## `formsFormIdDataDataIdMediasMediaNameGet()`

```php
formsFormIdDataDataIdMediasMediaNameGet($form_id, $data_id, $media_name)
```

Get one image of a form

Get one image of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data
$media_name = 'media_name_example'; // string | Name of the image

try {
    $apiInstance->formsFormIdDataDataIdMediasMediaNameGet($form_id, $data_id, $media_name);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdMediasMediaNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **data_id** | **int**| ID of the data | |
| **media_name** | **string**| Name of the image | |

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

## `formsFormIdDataDataIdPdfGet()`

```php
formsFormIdDataDataIdPdfGet($form_id, $data_id)
```

Get PDF data of a form

Get PDF data of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$data_id = 56; // int | ID of the data

try {
    $apiInstance->formsFormIdDataDataIdPdfGet($form_id, $data_id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataDataIdPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `formsFormIdDataMultipleCsvCustomPost()`

```php
formsFormIdDataMultipleCsvCustomPost($form_id, $body)
```

Get custom CSV data (multiple) of a form

Get custom CSV data (multiple) of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids Parameters

try {
    $apiInstance->formsFormIdDataMultipleCsvCustomPost($form_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleCsvCustomPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | |

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

## `formsFormIdDataMultipleCsvPost()`

```php
formsFormIdDataMultipleCsvPost($form_id, $body)
```

Get CSV data (multiple) of a form

Get CSV data (multiple) of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids Parameters

try {
    $apiInstance->formsFormIdDataMultipleCsvPost($form_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | [optional] |

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

## `formsFormIdDataMultipleExcelCustomPost()`

```php
formsFormIdDataMultipleExcelCustomPost($form_id, $body)
```

Get custom Excel list data (multiple) of a form

Get custom Excel list data (multiple) of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids Parameters

try {
    $apiInstance->formsFormIdDataMultipleExcelCustomPost($form_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleExcelCustomPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | |

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

## `formsFormIdDataMultipleExcelPost()`

```php
formsFormIdDataMultipleExcelPost($form_id, $body)
```

Get Excel list data (multiple) of a form

Get Excel list data (multiple) of a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids Parameters

try {
    $apiInstance->formsFormIdDataMultipleExcelPost($form_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdDataMultipleExcelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | |

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

## `formsFormIdExportsGet()`

```php
formsFormIdExportsGet($form_id): \KizeoFormsApi\Client\Model\FormsFormIdExportsGet200Response
```

Get list of Word and Excel exports

Get the complete list of Word et Excel exports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form

try {
    $result = $apiInstance->formsFormIdExportsGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdExportsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |

### Return type

[**\KizeoFormsApi\Client\Model\FormsFormIdExportsGet200Response**](../Model/FormsFormIdExportsGet200Response.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `formsFormIdMultipleDataExportsExportIdPdfPost()`

```php
formsFormIdMultipleDataExportsExportIdPdfPost($form_id, $export_id, $body): string
```

Export data (multiple / PDF)

Export multiple entries to the selected export to PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 56; // int | ID of the form
$export_id = 56; // int | ID of requested export model
$body = new \KizeoFormsApi\Client\Model\DataIds(); // \KizeoFormsApi\Client\Model\DataIds | Data ids Parameters

try {
    $result = $apiInstance->formsFormIdMultipleDataExportsExportIdPdfPost($form_id, $export_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->formsFormIdMultipleDataExportsExportIdPdfPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| ID of the form | |
| **export_id** | **int**| ID of requested export model | |
| **body** | [**\KizeoFormsApi\Client\Model\DataIds**](../Model/DataIds.md)| Data ids Parameters | [optional] |

### Return type

**string**

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
