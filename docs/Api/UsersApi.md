# KizeoFormsApi\Client\UsersApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersGet()**](UsersApi.md#usersGet) | **GET** /users | Get all users |
| [**usersPost()**](UsersApi.md#usersPost) | **POST** /users | Create a new user |
| [**usersUserIdDelete()**](UsersApi.md#usersUserIdDelete) | **DELETE** /users/{userId} | Delete a user |
| [**usersUserIdPut()**](UsersApi.md#usersUserIdPut) | **PUT** /users/{userId} | Update a user |


## `usersGet()`

```php
usersGet(): \KizeoFormsApi\Client\Model\User
```

Get all users

This function provides you a list of all users in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KizeoFormsApi\Client\Model\User**](../Model/User.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPost()`

```php
usersPost($body): \KizeoFormsApi\Client\Model\DefaultResponse
```

Create a new user

Login, password, first_name, last_name, admin and form_user are required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \KizeoFormsApi\Client\Model\User(); // \KizeoFormsApi\Client\Model\User | User params

try {
    $result = $apiInstance->usersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\KizeoFormsApi\Client\Model\User**](../Model/User.md)| User params | |

### Return type

[**\KizeoFormsApi\Client\Model\DefaultResponse**](../Model/DefaultResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserIdDelete()`

```php
usersUserIdDelete($user_id): \KizeoFormsApi\Client\Model\DefaultResponse
```

Delete a user

Delete an existing user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of user to edit

try {
    $result = $apiInstance->usersUserIdDelete($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| ID of user to edit | |

### Return type

[**\KizeoFormsApi\Client\Model\DefaultResponse**](../Model/DefaultResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUserIdPut()`

```php
usersUserIdPut($user_id, $body): \KizeoFormsApi\Client\Model\DefaultResponse
```

Update a user

Update an existing user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | ID of user to edit
$body = new \KizeoFormsApi\Client\Model\User(); // \KizeoFormsApi\Client\Model\User | User params

try {
    $result = $apiInstance->usersUserIdPut($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| ID of user to edit | |
| **body** | [**\KizeoFormsApi\Client\Model\User**](../Model/User.md)| User params | |

### Return type

[**\KizeoFormsApi\Client\Model\DefaultResponse**](../Model/DefaultResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
