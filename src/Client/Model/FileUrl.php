<?php
/**
 * FileUrl
 *
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

namespace Softonic\DownloadApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\DownloadApiSdk\ObjectSerializer;

/**
 * FileUrl Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileUrl implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileUrl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_files' => 'string',
        'download_url' => 'string',
        'id_cdn' => 'string',
        'cdn_destination' => 'string',
        'filename' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_files' => null,
        'download_url' => null,
        'id_cdn' => null,
        'cdn_destination' => null,
        'filename' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id_files' => 'id_files',
        'download_url' => 'download_url',
        'id_cdn' => 'id_cdn',
        'cdn_destination' => 'cdn_destination',
        'filename' => 'filename'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_files' => 'setIdFiles',
        'download_url' => 'setDownloadUrl',
        'id_cdn' => 'setIdCdn',
        'cdn_destination' => 'setCdnDestination',
        'filename' => 'setFilename'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_files' => 'getIdFiles',
        'download_url' => 'getDownloadUrl',
        'id_cdn' => 'getIdCdn',
        'cdn_destination' => 'getCdnDestination',
        'filename' => 'getFilename'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ID_CDN_AMAZONS3 = 'amazons3';
    const ID_CDN_CLOUDFRONT = 'cloudfront';
    const ID_CDN_FASTLY = 'fastly';
    const ID_CDN_STACKPATH = 'stackpath';
    const CDN_DESTINATION_PROGRAM = 'program';
    const CDN_DESTINATION_PROGRAM_PRIVATE = 'program_private';
    const CDN_DESTINATION_PROGRAM_PRIVATE_BATCH = 'program_private_batch';
    const CDN_DESTINATION_PROGRAM_PRIVATE_STAGING = 'program_private_staging';
    const CDN_DESTINATION_PROGRAM_PRIVATE_INTEGRATION = 'program_private_integration';
    const CDN_DESTINATION_PROGRAM_PRIVATE_DEVELOPMENT = 'program_private_development';
    const CDN_DESTINATION_IMAGES_PUBLIC = 'images_public';
    const CDN_DESTINATION_IMAGES_PUBLIC_STAGING = 'images_public_staging';
    const CDN_DESTINATION_IMAGES_PUBLIC_INTEGRATION = 'images_public_integration';
    const CDN_DESTINATION_IMAGES_PUBLIC_DEVELOPMENT = 'images_public_development';
    const CDN_DESTINATION_RPM_PROTECTED = 'rpm_protected';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdCdnAllowableValues()
    {
        return [
            self::ID_CDN_AMAZONS3,
            self::ID_CDN_CLOUDFRONT,
            self::ID_CDN_FASTLY,
            self::ID_CDN_STACKPATH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCdnDestinationAllowableValues()
    {
        return [
            self::CDN_DESTINATION_PROGRAM,
            self::CDN_DESTINATION_PROGRAM_PRIVATE,
            self::CDN_DESTINATION_PROGRAM_PRIVATE_BATCH,
            self::CDN_DESTINATION_PROGRAM_PRIVATE_STAGING,
            self::CDN_DESTINATION_PROGRAM_PRIVATE_INTEGRATION,
            self::CDN_DESTINATION_PROGRAM_PRIVATE_DEVELOPMENT,
            self::CDN_DESTINATION_IMAGES_PUBLIC,
            self::CDN_DESTINATION_IMAGES_PUBLIC_STAGING,
            self::CDN_DESTINATION_IMAGES_PUBLIC_INTEGRATION,
            self::CDN_DESTINATION_IMAGES_PUBLIC_DEVELOPMENT,
            self::CDN_DESTINATION_RPM_PROTECTED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_files'] = isset($data['id_files']) ? $data['id_files'] : null;
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['id_cdn'] = isset($data['id_cdn']) ? $data['id_cdn'] : null;
        $this->container['cdn_destination'] = isset($data['cdn_destination']) ? $data['cdn_destination'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_files'] === null) {
            $invalidProperties[] = "'id_files' can't be null";
        }
        if ((strlen($this->container['id_files']) > 40)) {
            $invalidProperties[] = "invalid value for 'id_files', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_files']) < 40)) {
            $invalidProperties[] = "invalid value for 'id_files', the character length must be bigger than or equal to 40.";
        }

        $allowedValues = $this->getIdCdnAllowableValues();
        if (!is_null($this->container['id_cdn']) && !in_array($this->container['id_cdn'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'id_cdn', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCdnDestinationAllowableValues();
        if (!is_null($this->container['cdn_destination']) && !in_array($this->container['cdn_destination'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cdn_destination', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id_files'] === null) {
            return false;
        }
        if ((strlen($this->container['id_files']) > 40)) {
            return false;
        }
        if ((strlen($this->container['id_files']) < 40)) {
            return false;
        }
        $allowedValues = $this->getIdCdnAllowableValues();
        if (!is_null($this->container['id_cdn']) && !in_array($this->container['id_cdn'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCdnDestinationAllowableValues();
        if (!is_null($this->container['cdn_destination']) && !in_array($this->container['cdn_destination'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_files
     *
     * @return string
     */
    public function getIdFiles()
    {
        return $this->container['id_files'];
    }

    /**
     * Sets id_files
     *
     * @param string $id_files SHA-1 hash that identifies a file
     *
     * @return $this
     */
    public function setIdFiles($id_files)
    {
        if ((strlen($id_files) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling FileUrl., must be smaller than or equal to 40.');
        }
        if ((strlen($id_files) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling FileUrl., must be bigger than or equal to 40.');
        }

        $this->container['id_files'] = $id_files;

        return $this;
    }

    /**
     * Gets download_url
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string $download_url Download url
     *
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
     * Gets id_cdn
     *
     * @return string
     */
    public function getIdCdn()
    {
        return $this->container['id_cdn'];
    }

    /**
     * Sets id_cdn
     *
     * @param string $id_cdn CDN identifier
     *
     * @return $this
     */
    public function setIdCdn($id_cdn)
    {
        $allowedValues = $this->getIdCdnAllowableValues();
        if (!is_null($id_cdn) && !in_array($id_cdn, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id_cdn', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id_cdn'] = $id_cdn;

        return $this;
    }

    /**
     * Gets cdn_destination
     *
     * @return string
     */
    public function getCdnDestination()
    {
        return $this->container['cdn_destination'];
    }

    /**
     * Sets cdn_destination
     *
     * @param string $cdn_destination CDN destination where the file is being stored
     *
     * @return $this
     */
    public function setCdnDestination($cdn_destination)
    {
        $allowedValues = $this->getCdnDestinationAllowableValues();
        if (!is_null($cdn_destination) && !in_array($cdn_destination, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cdn_destination', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cdn_destination'] = $cdn_destination;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename Name of the file
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }
}


