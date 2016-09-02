# Softonic\DownloadApiSdk\FilesUrlsApi

All URIs are relative to *https://download.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findFileUrl**](FilesUrlsApi.md#findFileUrl) | **GET** /files/{id_files}/urls | List of FileUrls


# **findFileUrl**
> \Softonic\DownloadApiSdk\Model\FileUrl[] findFileUrl($id_files, $country, $extra, $best)

List of FileUrls

List of FileUrls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: download_api_access_code
Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: download_api_implicit
Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: download_api_application
Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: download_api_password
Softonic\DownloadApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\DownloadApiSdk\Api\FilesUrlsApi();
$id_files = "id_files_example"; // string | SHA-1 hash that identifies a file
$country = "country_example"; // string | The country from where the request is being done, used to sort download URL list
$extra = "extra_example"; // string | Associative array of parameters serialized and encoded in base64
$best = 56; // int | Flag to get the best url instead of the whole list

try {
    $result = $api_instance->findFileUrl($id_files, $country, $extra, $best);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesUrlsApi->findFileUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash that identifies a file |
 **country** | **string**| The country from where the request is being done, used to sort download URL list |
 **extra** | **string**| Associative array of parameters serialized and encoded in base64 | [optional]
 **best** | **int**| Flag to get the best url instead of the whole list | [optional]

### Return type

[**\Softonic\DownloadApiSdk\Model\FileUrl[]**](../Model/FileUrl.md)

### Authorization

[download_api_access_code](../../README.md#download_api_access_code), [download_api_implicit](../../README.md#download_api_implicit), [download_api_application](../../README.md#download_api_application), [download_api_password](../../README.md#download_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

