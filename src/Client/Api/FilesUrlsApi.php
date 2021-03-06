<?php
/**
 * FilesUrlsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\DownloadApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Download API
 *
 * Generated URLs with TTL for downloading binary files
 *
 * OpenAPI spec version: 2.44.0
 * Contact: admin@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\DownloadApiSdk\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Softonic\DownloadApiSdk\ApiException;
use Softonic\DownloadApiSdk\Configuration;
use Softonic\DownloadApiSdk\HeaderSelector;
use Softonic\DownloadApiSdk\ObjectSerializer;

/**
 * FilesUrlsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilesUrlsApi
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
     * Operation findFileUrl
     *
     * List of FileUrls
     *
     * @param  string $id_files SHA-1 hash that identifies a file (required)
     * @param  string $country The country from where the request is being done, used to sort download URL list (required)
     * @param  string $extra Associative array of parameters serialized and encoded in base64 (optional)
     * @param  int $best Flag to get the best url instead of the whole list (optional)
     *
     * @throws \Softonic\DownloadApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\DownloadApiSdk\Client\Model\FileUrl[]
     */
    public function findFileUrl($id_files, $country, $extra = null, $best = null)
    {
        list($response) = $this->findFileUrlWithHttpInfo($id_files, $country, $extra, $best);
        return $response;
    }

    /**
     * Operation findFileUrlWithHttpInfo
     *
     * List of FileUrls
     *
     * @param  string $id_files SHA-1 hash that identifies a file (required)
     * @param  string $country The country from where the request is being done, used to sort download URL list (required)
     * @param  string $extra Associative array of parameters serialized and encoded in base64 (optional)
     * @param  int $best Flag to get the best url instead of the whole list (optional)
     *
     * @throws \Softonic\DownloadApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\DownloadApiSdk\Client\Model\FileUrl[], HTTP status code, HTTP response headers (array of strings)
     */
    public function findFileUrlWithHttpInfo($id_files, $country, $extra = null, $best = null)
    {
        $returnType = '\Softonic\DownloadApiSdk\Client\Model\FileUrl[]';
        $request = $this->findFileUrlRequest($id_files, $country, $extra, $best);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\Softonic\DownloadApiSdk\Client\Model\FileUrl[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findFileUrlAsync
     *
     * List of FileUrls
     *
     * @param  string $id_files SHA-1 hash that identifies a file (required)
     * @param  string $country The country from where the request is being done, used to sort download URL list (required)
     * @param  string $extra Associative array of parameters serialized and encoded in base64 (optional)
     * @param  int $best Flag to get the best url instead of the whole list (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findFileUrlAsync($id_files, $country, $extra = null, $best = null)
    {
        return $this->findFileUrlAsyncWithHttpInfo($id_files, $country, $extra, $best)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findFileUrlAsyncWithHttpInfo
     *
     * List of FileUrls
     *
     * @param  string $id_files SHA-1 hash that identifies a file (required)
     * @param  string $country The country from where the request is being done, used to sort download URL list (required)
     * @param  string $extra Associative array of parameters serialized and encoded in base64 (optional)
     * @param  int $best Flag to get the best url instead of the whole list (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findFileUrlAsyncWithHttpInfo($id_files, $country, $extra = null, $best = null)
    {
        $returnType = '\Softonic\DownloadApiSdk\Client\Model\FileUrl[]';
        $request = $this->findFileUrlRequest($id_files, $country, $extra, $best);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findFileUrl'
     *
     * @param  string $id_files SHA-1 hash that identifies a file (required)
     * @param  string $country The country from where the request is being done, used to sort download URL list (required)
     * @param  string $extra Associative array of parameters serialized and encoded in base64 (optional)
     * @param  int $best Flag to get the best url instead of the whole list (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findFileUrlRequest($id_files, $country, $extra = null, $best = null)
    {
        // verify the required parameter 'id_files' is set
        if ($id_files === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_files when calling findFileUrl'
            );
        }
        if (strlen($id_files) > 40) {
            throw new \InvalidArgumentException('invalid length for "$id_files" when calling FilesUrlsApi.findFileUrl, must be smaller than or equal to 40.');
        }
        if (strlen($id_files) < 40) {
            throw new \InvalidArgumentException('invalid length for "$id_files" when calling FilesUrlsApi.findFileUrl, must be bigger than or equal to 40.');
        }

        // verify the required parameter 'country' is set
        if ($country === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country when calling findFileUrl'
            );
        }
        if (strlen($country) > 2) {
            throw new \InvalidArgumentException('invalid length for "$country" when calling FilesUrlsApi.findFileUrl, must be smaller than or equal to 2.');
        }
        if (strlen($country) < 2) {
            throw new \InvalidArgumentException('invalid length for "$country" when calling FilesUrlsApi.findFileUrl, must be bigger than or equal to 2.');
        }


        $resourcePath = '/files/{id_files}/urls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($country !== null) {
            $queryParams['country'] = ObjectSerializer::toQueryValue($country);
        }
        // query params
        if ($extra !== null) {
            $queryParams['extra'] = ObjectSerializer::toQueryValue($extra);
        }
        // query params
        if ($best !== null) {
            $queryParams['best'] = ObjectSerializer::toQueryValue($best);
        }

        // path params
        if ($id_files !== null) {
            $resourcePath = str_replace(
                '{' . 'id_files' . '}',
                ObjectSerializer::toPathValue($id_files),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
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
