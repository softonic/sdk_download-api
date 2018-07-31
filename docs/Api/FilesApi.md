# Softonic\DownloadApiSdk\FilesApi

All URIs are relative to *https://download.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readFile**](FilesApi.md#readFile) | **GET** /files/{id_files} | Fetches a single File


# **readFile**
> \Softonic\DownloadApiSdk\Client\Model\File readFile($id_files, $country, $extra)

Fetches a single File

Fetches a single File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: download_api_access_code
$config = Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: download_api_application
$config = Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: download_api_implicit
$config = Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: download_api_password
$config = Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DownloadApiSdk\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_files = "id_files_example"; // string | SHA-1 hash that identifies a file
$country = "country_example"; // string | The country from where the request is being done, used to sort download URL list
$extra = "extra_example"; // string | Associative array of parameters serialized and encoded in base64

try {
    $result = $apiInstance->readFile($id_files, $country, $extra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->readFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash that identifies a file |
 **country** | **string**| The country from where the request is being done, used to sort download URL list |
 **extra** | **string**| Associative array of parameters serialized and encoded in base64 | [optional]

### Return type

[**\Softonic\DownloadApiSdk\Client\Model\File**](../Model/File.md)

### Authorization

[download_api_access_code](../../README.md#download_api_access_code), [download_api_application](../../README.md#download_api_application), [download_api_implicit](../../README.md#download_api_implicit), [download_api_password](../../README.md#download_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

