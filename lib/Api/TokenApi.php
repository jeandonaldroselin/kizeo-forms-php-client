<?php
/**
 * TokenApi
 * PHP version 7.4
 *
 * @category Class
 * @package  KizeoFormsApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kizeo REST
 *
 * This is a Swagger generated doc for Kizeo REST API 3. You can find additionnal documentation here : [Online documentation](/doc).
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: support@kizeo.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KizeoFormsApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use KizeoFormsApi\Client\ApiException;
use KizeoFormsApi\Client\Configuration;
use KizeoFormsApi\Client\HeaderSelector;
use KizeoFormsApi\Client\ObjectSerializer;

/**
 * TokenApi Class Doc Comment
 *
 * @category Class
 * @package  KizeoFormsApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokenApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'loginPost' => [
            'application/json',
        ],
        'tokenAllDelete' => [
            'application/json',
        ],
        'tokenTokenDelete' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation loginPost
     *
     * Login to Kizeo Forms
     *
     * @param  \KizeoFormsApi\Client\Model\LoginCredential $body LoginCredential params (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginPost'] to see the possible values for this operation
     *
     * @throws \KizeoFormsApi\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \KizeoFormsApi\Client\Model\LoginCredentialResponse
     */
    public function loginPost($body, string $contentType = self::contentTypes['loginPost'][0])
    {
        list($response) = $this->loginPostWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation loginPostWithHttpInfo
     *
     * Login to Kizeo Forms
     *
     * @param  \KizeoFormsApi\Client\Model\LoginCredential $body LoginCredential params (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginPost'] to see the possible values for this operation
     *
     * @throws \KizeoFormsApi\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \KizeoFormsApi\Client\Model\LoginCredentialResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginPostWithHttpInfo($body, string $contentType = self::contentTypes['loginPost'][0])
    {
        $request = $this->loginPostRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\KizeoFormsApi\Client\Model\LoginCredentialResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\KizeoFormsApi\Client\Model\LoginCredentialResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\KizeoFormsApi\Client\Model\LoginCredentialResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\KizeoFormsApi\Client\Model\LoginCredentialResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\KizeoFormsApi\Client\Model\LoginCredentialResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation loginPostAsync
     *
     * Login to Kizeo Forms
     *
     * @param  \KizeoFormsApi\Client\Model\LoginCredential $body LoginCredential params (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginPostAsync($body, string $contentType = self::contentTypes['loginPost'][0])
    {
        return $this->loginPostAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation loginPostAsyncWithHttpInfo
     *
     * Login to Kizeo Forms
     *
     * @param  \KizeoFormsApi\Client\Model\LoginCredential $body LoginCredential params (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginPostAsyncWithHttpInfo($body, string $contentType = self::contentTypes['loginPost'][0])
    {
        $returnType = '\KizeoFormsApi\Client\Model\LoginCredentialResponse';
        $request = $this->loginPostRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'loginPost'
     *
     * @param  \KizeoFormsApi\Client\Model\LoginCredential $body LoginCredential params (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function loginPostRequest($body, string $contentType = self::contentTypes['loginPost'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling loginPost'
            );
        }


        $resourcePath = '/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation tokenAllDelete
     *
     * Revoke all token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenAllDelete'] to see the possible values for this operation
     *
     * @throws \KizeoFormsApi\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function tokenAllDelete(string $contentType = self::contentTypes['tokenAllDelete'][0])
    {
        $this->tokenAllDeleteWithHttpInfo($contentType);
    }

    /**
     * Operation tokenAllDeleteWithHttpInfo
     *
     * Revoke all token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenAllDelete'] to see the possible values for this operation
     *
     * @throws \KizeoFormsApi\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokenAllDeleteWithHttpInfo(string $contentType = self::contentTypes['tokenAllDelete'][0])
    {
        $request = $this->tokenAllDeleteRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation tokenAllDeleteAsync
     *
     * Revoke all token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenAllDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokenAllDeleteAsync(string $contentType = self::contentTypes['tokenAllDelete'][0])
    {
        return $this->tokenAllDeleteAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokenAllDeleteAsyncWithHttpInfo
     *
     * Revoke all token
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenAllDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokenAllDeleteAsyncWithHttpInfo(string $contentType = self::contentTypes['tokenAllDelete'][0])
    {
        $returnType = '';
        $request = $this->tokenAllDeleteRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'tokenAllDelete'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenAllDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokenAllDeleteRequest(string $contentType = self::contentTypes['tokenAllDelete'][0])
    {


        $resourcePath = '/token/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation tokenTokenDelete
     *
     * Revoke a token
     *
     * @param  string $token Token to revoke (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenTokenDelete'] to see the possible values for this operation
     *
     * @throws \KizeoFormsApi\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function tokenTokenDelete($token, string $contentType = self::contentTypes['tokenTokenDelete'][0])
    {
        $this->tokenTokenDeleteWithHttpInfo($token, $contentType);
    }

    /**
     * Operation tokenTokenDeleteWithHttpInfo
     *
     * Revoke a token
     *
     * @param  string $token Token to revoke (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenTokenDelete'] to see the possible values for this operation
     *
     * @throws \KizeoFormsApi\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokenTokenDeleteWithHttpInfo($token, string $contentType = self::contentTypes['tokenTokenDelete'][0])
    {
        $request = $this->tokenTokenDeleteRequest($token, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation tokenTokenDeleteAsync
     *
     * Revoke a token
     *
     * @param  string $token Token to revoke (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenTokenDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokenTokenDeleteAsync($token, string $contentType = self::contentTypes['tokenTokenDelete'][0])
    {
        return $this->tokenTokenDeleteAsyncWithHttpInfo($token, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tokenTokenDeleteAsyncWithHttpInfo
     *
     * Revoke a token
     *
     * @param  string $token Token to revoke (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenTokenDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokenTokenDeleteAsyncWithHttpInfo($token, string $contentType = self::contentTypes['tokenTokenDelete'][0])
    {
        $returnType = '';
        $request = $this->tokenTokenDeleteRequest($token, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'tokenTokenDelete'
     *
     * @param  string $token Token to revoke (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['tokenTokenDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tokenTokenDeleteRequest($token, string $contentType = self::contentTypes['tokenTokenDelete'][0])
    {

        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling tokenTokenDelete'
            );
        }


        $resourcePath = '/token/{token}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($token !== null) {
            $resourcePath = str_replace(
                '{' . 'token' . '}',
                ObjectSerializer::toPathValue($token),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
