# KizeoFormsApi\Client\GroupsApi

All URIs are relative to https://www.kizeoforms.com/rest/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**groupGroupIdDelete()**](GroupsApi.md#groupGroupIdDelete) | **DELETE** /group/{groupId} | Delete a group |
| [**groupGroupIdGet()**](GroupsApi.md#groupGroupIdGet) | **GET** /group/{groupId} | Get a group |
| [**groupGroupIdLeaderLeaderIdDelete()**](GroupsApi.md#groupGroupIdLeaderLeaderIdDelete) | **DELETE** /group/{groupId}/leader/{leaderId} | Remove a leader from a specific group |
| [**groupGroupIdLeaderLeaderIdPost()**](GroupsApi.md#groupGroupIdLeaderLeaderIdPost) | **POST** /group/{groupId}/leader/{leaderId} | Add a leader into a specific group |
| [**groupGroupIdLeadersGet()**](GroupsApi.md#groupGroupIdLeadersGet) | **GET** /group/{groupId}/leaders | Get all groups&#39; leaders of a specific group |
| [**groupGroupIdLeadersPost()**](GroupsApi.md#groupGroupIdLeadersPost) | **POST** /group/{groupId}/leaders | Add several leaders into a group |
| [**groupGroupIdPut()**](GroupsApi.md#groupGroupIdPut) | **PUT** /group/{groupId} | Update a group |
| [**groupGroupIdUserUserIdDelete()**](GroupsApi.md#groupGroupIdUserUserIdDelete) | **DELETE** /group/{groupId}/user/{userId} | Remove an user from a specific group |
| [**groupGroupIdUserUserIdPost()**](GroupsApi.md#groupGroupIdUserUserIdPost) | **POST** /group/{groupId}/user/{userId} | Add an user into a specific group |
| [**groupGroupIdUsersGet()**](GroupsApi.md#groupGroupIdUsersGet) | **GET** /group/{groupId}/users | Get all users of a specific group |
| [**groupGroupIdUsersPost()**](GroupsApi.md#groupGroupIdUsersPost) | **POST** /group/{groupId}/users | Add several users into a group |
| [**groupPost()**](GroupsApi.md#groupPost) | **POST** /group | Create a new group |
| [**groupsGet()**](GroupsApi.md#groupsGet) | **GET** /groups | Get all groups |
| [**groupsOrderedGet()**](GroupsApi.md#groupsOrderedGet) | **GET** /groups/ordered | Get all groups ordered |


## `groupGroupIdDelete()`

```php
groupGroupIdDelete($group_id)
```

Delete a group

Delete existing group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group

try {
    $apiInstance->groupGroupIdDelete($group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |

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

## `groupGroupIdGet()`

```php
groupGroupIdGet($group_id): \KizeoFormsApi\Client\Model\GroupComplete
```

Get a group

Get all informations about the group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdLeaderLeaderIdDelete()`

```php
groupGroupIdLeaderLeaderIdDelete($group_id, $leader_id): \KizeoFormsApi\Client\Model\GroupComplete
```

Remove a leader from a specific group

Remove a leader from a specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$leader_id = 56; // int | Id of the leader

try {
    $result = $apiInstance->groupGroupIdLeaderLeaderIdDelete($group_id, $leader_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeaderLeaderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **leader_id** | **int**| Id of the leader | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdLeaderLeaderIdPost()`

```php
groupGroupIdLeaderLeaderIdPost($group_id, $leader_id): \KizeoFormsApi\Client\Model\GroupComplete
```

Add a leader into a specific group

Add a leader into a specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$leader_id = 56; // int | Id of the leader

try {
    $result = $apiInstance->groupGroupIdLeaderLeaderIdPost($group_id, $leader_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeaderLeaderIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **leader_id** | **int**| Id of the leader | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdLeadersGet()`

```php
groupGroupIdLeadersGet($group_id): \KizeoFormsApi\Client\Model\GroupUser
```

Get all groups' leaders of a specific group

Use to get all groups' leaders of a specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdLeadersGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeadersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupUser**](../Model/GroupUser.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdLeadersPost()`

```php
groupGroupIdLeadersPost($group_id, $body): \KizeoFormsApi\Client\Model\User
```

Add several leaders into a group

Use to add several leaders into a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$body = new \KizeoFormsApi\Client\Model\UserResponse(); // \KizeoFormsApi\Client\Model\UserResponse | Leaders ids

try {
    $result = $apiInstance->groupGroupIdLeadersPost($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdLeadersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **body** | [**\KizeoFormsApi\Client\Model\UserResponse**](../Model/UserResponse.md)| Leaders ids | |

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

## `groupGroupIdPut()`

```php
groupGroupIdPut($group_id, $body)
```

Update a group

Update existing group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$body = new \KizeoFormsApi\Client\Model\GroupModify(); // \KizeoFormsApi\Client\Model\GroupModify | Group Parameters

try {
    $apiInstance->groupGroupIdPut($group_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **body** | [**\KizeoFormsApi\Client\Model\GroupModify**](../Model/GroupModify.md)| Group Parameters | |

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

## `groupGroupIdUserUserIdDelete()`

```php
groupGroupIdUserUserIdDelete($group_id, $user_id): \KizeoFormsApi\Client\Model\GroupComplete
```

Remove an user from a specific group

Remove an user from a specific group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$user_id = 56; // int | Id of the user

try {
    $result = $apiInstance->groupGroupIdUserUserIdDelete($group_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUserUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **user_id** | **int**| Id of the user | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdUserUserIdPost()`

```php
groupGroupIdUserUserIdPost($group_id, $user_id): \KizeoFormsApi\Client\Model\GroupComplete
```

Add an user into a specific group

Add an user into a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$user_id = 56; // int | Id of the user

try {
    $result = $apiInstance->groupGroupIdUserUserIdPost($group_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUserUserIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **user_id** | **int**| Id of the user | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupComplete**](../Model/GroupComplete.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdUsersGet()`

```php
groupGroupIdUsersGet($group_id): \KizeoFormsApi\Client\Model\GroupUser
```

Get all users of a specific group

Use to get all users of the requested group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group

try {
    $result = $apiInstance->groupGroupIdUsersGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupUser**](../Model/GroupUser.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupGroupIdUsersPost()`

```php
groupGroupIdUsersPost($group_id, $body): \KizeoFormsApi\Client\Model\GroupResponse
```

Add several users into a group

Use to add several users into a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | Id of the group
$body = new \KizeoFormsApi\Client\Model\UserResponse(); // \KizeoFormsApi\Client\Model\UserResponse | Users ids

try {
    $result = $apiInstance->groupGroupIdUsersPost($group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupGroupIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| Id of the group | |
| **body** | [**\KizeoFormsApi\Client\Model\UserResponse**](../Model/UserResponse.md)| Users ids | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupPost()`

```php
groupPost($body): \KizeoFormsApi\Client\Model\GroupResponse
```

Create a new group

Use to a create group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \KizeoFormsApi\Client\Model\Group(); // \KizeoFormsApi\Client\Model\Group | Group Parameters

try {
    $result = $apiInstance->groupPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\KizeoFormsApi\Client\Model\Group**](../Model/Group.md)| Group Parameters | |

### Return type

[**\KizeoFormsApi\Client\Model\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsGet()`

```php
groupsGet()
```

Get all groups

Get Groups Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->groupsGet();
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGet: ', $e->getMessage(), PHP_EOL;
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

## `groupsOrderedGet()`

```php
groupsOrderedGet(): \KizeoFormsApi\Client\Model\Group
```

Get all groups ordered

Use to get all groups ordered

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: authentication
$config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = KizeoFormsApi\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new KizeoFormsApi\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->groupsOrderedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsOrderedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\KizeoFormsApi\Client\Model\Group**](../Model/Group.md)

### Authorization

[authentication](../../README.md#authentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
