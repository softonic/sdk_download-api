<?php
/**
 * File
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\DownloadApiSdk
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: 2.0.100-52
 * Contact: XXXXXXXXX@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\DownloadApiSdk\Client\Model;

use \ArrayAccess;

/**
 * File Class Doc Comment
 *
 * @category    Class
 * @package     Softonic\DownloadApiSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class File implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_files' => 'string',
        'filename' => 'string',
        'urls' => '\Softonic\DownloadApiSdk\Client\Model\FileUrl[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_files' => null,
        'filename' => null,
        'urls' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id_files' => 'id_files',
        'filename' => 'filename',
        'urls' => 'urls'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_files' => 'setIdFiles',
        'filename' => 'setFilename',
        'urls' => 'setUrls'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_files' => 'getIdFiles',
        'filename' => 'getFilename',
        'urls' => 'getUrls'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_files'] = isset($data['id_files']) ? $data['id_files'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id_files'] === null) {
            $invalid_properties[] = "'id_files' can't be null";
        }
        if ((strlen($this->container['id_files']) > 40)) {
            $invalid_properties[] = "invalid value for 'id_files', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['id_files']) < 40)) {
            $invalid_properties[] = "invalid value for 'id_files', the character length must be bigger than or equal to 40.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id_files'] === null) {
            return false;
        }
        if (strlen($this->container['id_files']) > 40) {
            return false;
        }
        if (strlen($this->container['id_files']) < 40) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_files
     * @return string
     */
    public function getIdFiles()
    {
        return $this->container['id_files'];
    }

    /**
     * Sets id_files
     * @param string $id_files SHA-1 hash that identifies a file
     * @return $this
     */
    public function setIdFiles($id_files)
    {
        if ((strlen($id_files) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling File., must be smaller than or equal to 40.');
        }
        if ((strlen($id_files) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id_files when calling File., must be bigger than or equal to 40.');
        }

        $this->container['id_files'] = $id_files;

        return $this;
    }

    /**
     * Gets filename
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     * @param string $filename Name of the file
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets urls
     * @return \Softonic\DownloadApiSdk\Client\Model\FileUrl[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \Softonic\DownloadApiSdk\Client\Model\FileUrl[] $urls Download urls information
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Softonic\DownloadApiSdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Softonic\DownloadApiSdk\ObjectSerializer::sanitizeForSerialization($this));
    }
}

