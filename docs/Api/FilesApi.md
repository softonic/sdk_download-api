# Softonic\DownloadApiSdk\FilesApi

All URIs are relative to *http://download.priv.sftapi.com*

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

$api_instance = new Softonic\DownloadApiSdk\Api\FilesApi();
$id_files = "id_files_example"; // string | SHA-1 hash that identifies a file
$country = "country_example"; // string | The country from where the request is being done, used to sort download URL list
$extra = "extra_example"; // string | Associative array of parameters serialized and encoded in base64

try {
    $result = $api_instance->readFile($id_files, $country, $extra);
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

