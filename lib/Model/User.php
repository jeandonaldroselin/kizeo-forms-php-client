<?php
/**
 * User
 *
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

namespace KizeoFormsApi\Client\Model;

use \ArrayAccess;
use \KizeoFormsApi\Client\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @package  KizeoFormsApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'login' => 'string',
        'password' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'admin' => 'bool',
        'form_user' => 'bool',
        'allow_form_menu' => 'bool',
        'allow_externallist_menu' => 'bool',
        'allow_user_menu' => 'bool',
        'allow_application_menu' => 'bool',
        'allow_export_menu' => 'bool',
        'allow_data_menu' => 'bool',
        'allow_account_menu' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'login' => null,
        'password' => null,
        'first_name' => null,
        'last_name' => null,
        'phone' => null,
        'email' => null,
        'admin' => null,
        'form_user' => null,
        'allow_form_menu' => null,
        'allow_externallist_menu' => null,
        'allow_user_menu' => null,
        'allow_application_menu' => null,
        'allow_export_menu' => null,
        'allow_data_menu' => null,
        'allow_account_menu' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'login' => false,
        'password' => false,
        'first_name' => false,
        'last_name' => false,
        'phone' => false,
        'email' => false,
        'admin' => false,
        'form_user' => false,
        'allow_form_menu' => false,
        'allow_externallist_menu' => false,
        'allow_user_menu' => false,
        'allow_application_menu' => false,
        'allow_export_menu' => false,
        'allow_data_menu' => false,
        'allow_account_menu' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'login' => 'login',
        'password' => 'password',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'phone' => 'phone',
        'email' => 'email',
        'admin' => 'admin',
        'form_user' => 'form_user',
        'allow_form_menu' => 'allow_form_menu',
        'allow_externallist_menu' => 'allow_externallist_menu',
        'allow_user_menu' => 'allow_user_menu',
        'allow_application_menu' => 'allow_application_menu',
        'allow_export_menu' => 'allow_export_menu',
        'allow_data_menu' => 'allow_data_menu',
        'allow_account_menu' => 'allow_account_menu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login' => 'setLogin',
        'password' => 'setPassword',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'admin' => 'setAdmin',
        'form_user' => 'setFormUser',
        'allow_form_menu' => 'setAllowFormMenu',
        'allow_externallist_menu' => 'setAllowExternallistMenu',
        'allow_user_menu' => 'setAllowUserMenu',
        'allow_application_menu' => 'setAllowApplicationMenu',
        'allow_export_menu' => 'setAllowExportMenu',
        'allow_data_menu' => 'setAllowDataMenu',
        'allow_account_menu' => 'setAllowAccountMenu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login' => 'getLogin',
        'password' => 'getPassword',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'admin' => 'getAdmin',
        'form_user' => 'getFormUser',
        'allow_form_menu' => 'getAllowFormMenu',
        'allow_externallist_menu' => 'getAllowExternallistMenu',
        'allow_user_menu' => 'getAllowUserMenu',
        'allow_application_menu' => 'getAllowApplicationMenu',
        'allow_export_menu' => 'getAllowExportMenu',
        'allow_data_menu' => 'getAllowDataMenu',
        'allow_account_menu' => 'getAllowAccountMenu'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('login', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('admin', $data ?? [], null);
        $this->setIfExists('form_user', $data ?? [], null);
        $this->setIfExists('allow_form_menu', $data ?? [], null);
        $this->setIfExists('allow_externallist_menu', $data ?? [], null);
        $this->setIfExists('allow_user_menu', $data ?? [], null);
        $this->setIfExists('allow_application_menu', $data ?? [], null);
        $this->setIfExists('allow_export_menu', $data ?? [], null);
        $this->setIfExists('allow_data_menu', $data ?? [], null);
        $this->setIfExists('allow_account_menu', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login login
     *
     * @return self
     */
    public function setLogin($login)
    {
        if (is_null($login)) {
            throw new \InvalidArgumentException('non-nullable login cannot be null');
        }
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool|null
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool|null $admin is admin ?
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        if (is_null($admin)) {
            throw new \InvalidArgumentException('non-nullable admin cannot be null');
        }
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets form_user
     *
     * @return bool|null
     */
    public function getFormUser()
    {
        return $this->container['form_user'];
    }

    /**
     * Sets form_user
     *
     * @param bool|null $form_user is user ?
     *
     * @return self
     */
    public function setFormUser($form_user)
    {
        if (is_null($form_user)) {
            throw new \InvalidArgumentException('non-nullable form_user cannot be null');
        }
        $this->container['form_user'] = $form_user;

        return $this;
    }

    /**
     * Gets allow_form_menu
     *
     * @return bool|null
     */
    public function getAllowFormMenu()
    {
        return $this->container['allow_form_menu'];
    }

    /**
     * Sets allow_form_menu
     *
     * @param bool|null $allow_form_menu Allow user to access Form Designer Menu
     *
     * @return self
     */
    public function setAllowFormMenu($allow_form_menu)
    {
        if (is_null($allow_form_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_form_menu cannot be null');
        }
        $this->container['allow_form_menu'] = $allow_form_menu;

        return $this;
    }

    /**
     * Gets allow_externallist_menu
     *
     * @return bool|null
     */
    public function getAllowExternallistMenu()
    {
        return $this->container['allow_externallist_menu'];
    }

    /**
     * Sets allow_externallist_menu
     *
     * @param bool|null $allow_externallist_menu Allow user to access External List Menu
     *
     * @return self
     */
    public function setAllowExternallistMenu($allow_externallist_menu)
    {
        if (is_null($allow_externallist_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_externallist_menu cannot be null');
        }
        $this->container['allow_externallist_menu'] = $allow_externallist_menu;

        return $this;
    }

    /**
     * Gets allow_user_menu
     *
     * @return bool|null
     */
    public function getAllowUserMenu()
    {
        return $this->container['allow_user_menu'];
    }

    /**
     * Sets allow_user_menu
     *
     * @param bool|null $allow_user_menu Allow user to access User Menu
     *
     * @return self
     */
    public function setAllowUserMenu($allow_user_menu)
    {
        if (is_null($allow_user_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_user_menu cannot be null');
        }
        $this->container['allow_user_menu'] = $allow_user_menu;

        return $this;
    }

    /**
     * Gets allow_application_menu
     *
     * @return bool|null
     */
    public function getAllowApplicationMenu()
    {
        return $this->container['allow_application_menu'];
    }

    /**
     * Sets allow_application_menu
     *
     * @param bool|null $allow_application_menu Allow user to access Application Menu
     *
     * @return self
     */
    public function setAllowApplicationMenu($allow_application_menu)
    {
        if (is_null($allow_application_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_application_menu cannot be null');
        }
        $this->container['allow_application_menu'] = $allow_application_menu;

        return $this;
    }

    /**
     * Gets allow_export_menu
     *
     * @return bool|null
     */
    public function getAllowExportMenu()
    {
        return $this->container['allow_export_menu'];
    }

    /**
     * Sets allow_export_menu
     *
     * @param bool|null $allow_export_menu Allow user to access Export Menu
     *
     * @return self
     */
    public function setAllowExportMenu($allow_export_menu)
    {
        if (is_null($allow_export_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_export_menu cannot be null');
        }
        $this->container['allow_export_menu'] = $allow_export_menu;

        return $this;
    }

    /**
     * Gets allow_data_menu
     *
     * @return bool|null
     */
    public function getAllowDataMenu()
    {
        return $this->container['allow_data_menu'];
    }

    /**
     * Sets allow_data_menu
     *
     * @param bool|null $allow_data_menu Allow user to access Data Menu
     *
     * @return self
     */
    public function setAllowDataMenu($allow_data_menu)
    {
        if (is_null($allow_data_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_data_menu cannot be null');
        }
        $this->container['allow_data_menu'] = $allow_data_menu;

        return $this;
    }

    /**
     * Gets allow_account_menu
     *
     * @return bool|null
     */
    public function getAllowAccountMenu()
    {
        return $this->container['allow_account_menu'];
    }

    /**
     * Sets allow_account_menu
     *
     * @param bool|null $allow_account_menu Allow user to access Account Menu
     *
     * @return self
     */
    public function setAllowAccountMenu($allow_account_menu)
    {
        if (is_null($allow_account_menu)) {
            throw new \InvalidArgumentException('non-nullable allow_account_menu cannot be null');
        }
        $this->container['allow_account_menu'] = $allow_account_menu;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


