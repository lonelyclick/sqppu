<?php
/**
 * NetworkSubscriberApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Distributor PPU Service
 *
 * © KnowRoaming LTD 2017
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * NetworkSubscriberApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworkSubscriberApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sendSms
     *
     * Send an SMS
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSms $body body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendSms($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $this->sendSmsWithHttpInfo($distributor_id, $imsi, $body, $request_id);
    }

    /**
     * Operation sendSmsWithHttpInfo
     *
     * Send an SMS
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSms $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendSmsWithHttpInfo($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $returnType = '';
        $request = $this->sendSmsRequest($distributor_id, $imsi, $body, $request_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendSmsAsync
     *
     * Send an SMS
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSms $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSmsAsync($distributor_id, $imsi, $body = null, $request_id = null)
    {
        return $this->sendSmsAsyncWithHttpInfo($distributor_id, $imsi, $body, $request_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendSmsAsyncWithHttpInfo
     *
     * Send an SMS
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSms $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSmsAsyncWithHttpInfo($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $returnType = '';
        $request = $this->sendSmsRequest($distributor_id, $imsi, $body, $request_id);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendSms'
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSms $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendSmsRequest($distributor_id, $imsi, $body = null, $request_id = null)
    {
        // verify the required parameter 'distributor_id' is set
        if ($distributor_id === null || (is_array($distributor_id) && count($distributor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $distributor_id when calling sendSms'
            );
        }
        // verify the required parameter 'imsi' is set
        if ($imsi === null || (is_array($imsi) && count($imsi) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $imsi when calling sendSms'
            );
        }

        $resourcePath = '/{distributorId}/networkSubscriber/{imsi}/sendSms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($request_id !== null) {
            $headerParams['RequestId'] = ObjectSerializer::toHeaderValue($request_id);
        }

        // path params
        if ($distributor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'distributorId' . '}',
                ObjectSerializer::toPathValue($distributor_id),
                $resourcePath
            );
        }
        // path params
        if ($imsi !== null) {
            $resourcePath = str_replace(
                '{' . 'imsi' . '}',
                ObjectSerializer::toPathValue($imsi),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendSmsBinary
     *
     * Send an SMS in binary
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinary $body body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendSmsBinary($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $this->sendSmsBinaryWithHttpInfo($distributor_id, $imsi, $body, $request_id);
    }

    /**
     * Operation sendSmsBinaryWithHttpInfo
     *
     * Send an SMS in binary
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinary $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendSmsBinaryWithHttpInfo($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $returnType = '';
        $request = $this->sendSmsBinaryRequest($distributor_id, $imsi, $body, $request_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendSmsBinaryAsync
     *
     * Send an SMS in binary
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinary $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSmsBinaryAsync($distributor_id, $imsi, $body = null, $request_id = null)
    {
        return $this->sendSmsBinaryAsyncWithHttpInfo($distributor_id, $imsi, $body, $request_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendSmsBinaryAsyncWithHttpInfo
     *
     * Send an SMS in binary
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinary $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSmsBinaryAsyncWithHttpInfo($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $returnType = '';
        $request = $this->sendSmsBinaryRequest($distributor_id, $imsi, $body, $request_id);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendSmsBinary'
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinary $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendSmsBinaryRequest($distributor_id, $imsi, $body = null, $request_id = null)
    {
        // verify the required parameter 'distributor_id' is set
        if ($distributor_id === null || (is_array($distributor_id) && count($distributor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $distributor_id when calling sendSmsBinary'
            );
        }
        // verify the required parameter 'imsi' is set
        if ($imsi === null || (is_array($imsi) && count($imsi) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $imsi when calling sendSmsBinary'
            );
        }

        $resourcePath = '/{distributorId}/networkSubscriber/{imsi}/sendSmsBinary';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($request_id !== null) {
            $headerParams['RequestId'] = ObjectSerializer::toHeaderValue($request_id);
        }

        // path params
        if ($distributor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'distributorId' . '}',
                ObjectSerializer::toPathValue($distributor_id),
                $resourcePath
            );
        }
        // path params
        if ($imsi !== null) {
            $resourcePath = str_replace(
                '{' . 'imsi' . '}',
                ObjectSerializer::toPathValue($imsi),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendSmsBinaryCustom
     *
     * Send a binary SMS with custom SMPP and GSM SMS parameters
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinaryCustom $body body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendSmsBinaryCustom($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $this->sendSmsBinaryCustomWithHttpInfo($distributor_id, $imsi, $body, $request_id);
    }

    /**
     * Operation sendSmsBinaryCustomWithHttpInfo
     *
     * Send a binary SMS with custom SMPP and GSM SMS parameters
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinaryCustom $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendSmsBinaryCustomWithHttpInfo($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $returnType = '';
        $request = $this->sendSmsBinaryCustomRequest($distributor_id, $imsi, $body, $request_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendSmsBinaryCustomAsync
     *
     * Send a binary SMS with custom SMPP and GSM SMS parameters
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinaryCustom $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSmsBinaryCustomAsync($distributor_id, $imsi, $body = null, $request_id = null)
    {
        return $this->sendSmsBinaryCustomAsyncWithHttpInfo($distributor_id, $imsi, $body, $request_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendSmsBinaryCustomAsyncWithHttpInfo
     *
     * Send a binary SMS with custom SMPP and GSM SMS parameters
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinaryCustom $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSmsBinaryCustomAsyncWithHttpInfo($distributor_id, $imsi, $body = null, $request_id = null)
    {
        $returnType = '';
        $request = $this->sendSmsBinaryCustomRequest($distributor_id, $imsi, $body, $request_id);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendSmsBinaryCustom'
     *
     * @param  int $distributor_id The unique identifier of a distributor (required)
     * @param  int $imsi The unique identifier of a network subscriber (required)
     * @param  \Swagger\Client\Model\RequestSendSmsBinaryCustom $body (optional)
     * @param  string $request_id It will be returned in the response header, the purpose of the RequestId to provide a reference ID to the client side developer if one is using a asynchronous system (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendSmsBinaryCustomRequest($distributor_id, $imsi, $body = null, $request_id = null)
    {
        // verify the required parameter 'distributor_id' is set
        if ($distributor_id === null || (is_array($distributor_id) && count($distributor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $distributor_id when calling sendSmsBinaryCustom'
            );
        }
        // verify the required parameter 'imsi' is set
        if ($imsi === null || (is_array($imsi) && count($imsi) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $imsi when calling sendSmsBinaryCustom'
            );
        }

        $resourcePath = '/{distributorId}/networkSubscriber/{imsi}/sendSmsBinaryCustom';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($request_id !== null) {
            $headerParams['RequestId'] = ObjectSerializer::toHeaderValue($request_id);
        }

        // path params
        if ($distributor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'distributorId' . '}',
                ObjectSerializer::toPathValue($distributor_id),
                $resourcePath
            );
        }
        // path params
        if ($imsi !== null) {
            $resourcePath = str_replace(
                '{' . 'imsi' . '}',
                ObjectSerializer::toPathValue($imsi),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
