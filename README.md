# DownloadApiSdk
Add your description here

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.96-38
- Package version: v2.0.96
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://corporate.softonic.com/contact-us](http://corporate.softonic.com/contact-us)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/softonic/download_api_sdk.git"
    }
  ],
  "require": {
    "softonic/download_api_sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DownloadApiSdk/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://download.sftapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FilesApi* | [**readFile**](docs/Api/FilesApi.md#readfile) | **GET** /files/{id_files} | Fetches a single File
*FilesUrlsApi* | [**findFileUrl**](docs/Api/FilesUrlsApi.md#findfileurl) | **GET** /files/{id_files}/urls | List of FileUrls


## Documentation For Models

 - [File](docs/Model/File.md)
 - [FileUrl](docs/Model/FileUrl.md)


## Documentation For Authorization


## download_api_access_code

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://oauth.softonic.com/token
- **Scopes**: 
 - **download_api.read.files**: Read Files
 - **download_api.find.files.urls**: Find Files/Urls

## download_api_application

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **download_api.read.files**: Read Files
 - **download_api.find.files.urls**: Find Files/Urls

## download_api_implicit

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://oauth.softonic.com/authorize
- **Scopes**: 
 - **download_api.read.files**: Read Files
 - **download_api.find.files.urls**: Find Files/Urls

## download_api_password

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **download_api.read.files**: Read Files
 - **download_api.find.files.urls**: Find Files/Urls


## Author

XXXXXXXXX@softonic.com


