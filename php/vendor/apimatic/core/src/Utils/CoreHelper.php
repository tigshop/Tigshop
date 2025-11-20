<?php

declare(strict_types=1);

namespace Core\Utils;

use Core\Types\Sdk\CoreFileWrapper;
use DateTime;
use InvalidArgumentException;
use JsonSerializable;
use stdClass;

class CoreHelper
{
    /**
     * Serialize any given mixed value.
     *
     * @param mixed $value Any value to be serialized
     *
     * @return string|null serialized value
     */
    public static function serialize($value): ?string
    {
        if ($value instanceof CoreFileWrapper) {
            return $value->getFileContent();
        }
        if (is_string($value)) {
            return $value;
        }
        if (is_null($value)) {
            return null;
        }
        return json_encode($value);
    }

    /**
     * Deserialize a Json string
     *
     * @param string|null $json A valid Json string
     *
     * @return mixed Decoded Json
     */
    public static function deserialize(?string $json, bool $associative = true)
    {
        return json_decode($json, $associative) ?? $json;
    }

    /**
     * Validates and processes the given Url to ensure safe usage with cURL.
     * @param string $url The given Url to process
     * @return string Pre-processed Url as string
     * @throws InvalidArgumentException
     */
    public static function validateUrl(string $url): string
    {
        // ensure that the urls are absolute
        $matchCount = preg_match("#^(https?://[^/]+)#", $url, $matches);
        if ($matchCount == 0) {
            throw new InvalidArgumentException('Invalid Url format.');
        }
        // separate out protocol and path
        $protocol = $matches[1];
        $path = substr($url, strlen($protocol));

        // replace multiple consecutive forward slashes by single ones
        $path = preg_replace("#//+#", "/", $path);

        // remove forward slash from end
        $path = rtrim($path, '/');

        return $protocol . $path;
    }

    /**
     * Check if an array isAssociative (has string keys)
     *
     * @param  array $array Any value to be tested for associative array
     * @return boolean True if the array is Associative, false if it is Indexed
     */
    public static function isAssociative(array $array): bool
    {
        foreach ($array as $key => $value) {
            if (is_string($key)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Check if provided value is null or empty.
     *
     * @param $value mixed Value to be checked.
     * @return bool True if given value is empty of null.
     */
    public static function isNullOrEmpty($value): bool
    {
        if (is_string($value) && $value == '0') {
            return false;
        }
        return empty($value);
    }

    /**
     * Check if all the given value or values are present in the provided list.
     *
     * @param mixed $value        Value to be checked, could be scalar, array, 2D array, etc.
     * @param array $listOfValues List to be searched for values
     * @return bool Whether given value is present in the provided list
     */
    public static function checkValueOrValuesInList($value, array $listOfValues): bool
    {
        if (is_null($value)) {
            return true;
        }
        if (!is_array($value)) {
            return in_array($value, $listOfValues, true);
        }
        foreach ($value as $v) {
            if (!self::checkValueOrValuesInList($v, $listOfValues)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Clone the given value
     *
     * @param mixed $value Value to be cloned.
     * @return mixed Cloned value
     */
    public static function clone($value)
    {
        if (is_array($value)) {
            return array_map([self::class, 'clone'], $value);
        }
        if (is_object($value)) {
            return clone $value;
        }
        return $value;
    }

    /**
     * Converts provided value to ?string type.
     *
     * @param $value false|string
     */
    public static function convertToNullableString($value): ?string
    {
        if ($value === false) {
            return null;
        }
        return $value;
    }

    /**
     * Return basic OS info.
     */
    public static function getOsInfo(string $osFamily = PHP_OS_FAMILY, string $functionName = 'php_uname'): string
    {
        if ($osFamily === 'Unknown' || empty($osFamily)) {
            return '';
        }
        if (!function_exists($functionName)) {
            return $osFamily;
        }
        return $osFamily . '-' . call_user_func($functionName, 'r');
    }

    /**
     * Return base64 encoded string for given username and password, prepended with Basic substring.
     */
    public static function getBasicAuthEncodedString(string $username, string $password): string
    {
        if ($username == '' || $password == '') {
            return '';
        }
        return 'Basic ' . base64_encode("$username:$password");
    }

    /**
     * Return the accessToken prepended with Bearer substring.
     */
    public static function getBearerAuthString(string $accessToken): string
    {
        if ($accessToken == '') {
            return '';
        }
        return 'Bearer ' . $accessToken;
    }

    /**
     * Prepare a mixed typed value or array into a readable form.
     *
     * @param mixed $value Any mixed typed value.
     * @param bool $exportBoolAsString Should export boolean values as string? Default: true
     * @param bool $castAsString Should cast the output into string? Default: false
     *
     * @return mixed A valid readable instance to be sent in form/query.
     */
    public static function prepareValue(
        $value,
        bool $exportBoolAsString = true,
        bool $castAsString = false
    ) {
        if (is_null($value)) {
            return null;
        }

        if (is_bool($value)) {
            return $exportBoolAsString ? var_export($value, true) : $value;
        }

        return $castAsString ? (string) $value : self::prepareCollectedValues($value, $exportBoolAsString);
    }

    /**
     * Prepare a mixed typed value or array into a readable form.
     *
     * @param mixed $value Any mixed typed value.
     * @param bool $exportBoolAsString Should export boolean values as string? Default: true
     *
     * @return mixed A valid readable instance to be sent in form/query.
     */
    private static function prepareCollectedValues($value, bool $exportBoolAsString)
    {
        $selfCaller = function ($v) use ($exportBoolAsString) {
            return self::prepareValue($v, $exportBoolAsString);
        };

        if (is_array($value)) {
            // recursively calling this function to resolve all types in any array
            return array_map($selfCaller, $value);
        }

        if ($value instanceof JsonSerializable) {
            $modelArray = $value->jsonSerialize();
            // recursively calling this function to resolve all types in any model
            return array_map($selfCaller, $modelArray instanceof stdClass ? [] : $modelArray);
        }

        return $value;
    }

    /**
     * Converts the properties to a human-readable string representation.
     *
     * Sample output:
     *
     * $prefix [$properties:key: $properties:value, $processedProperties]
     */
    public static function stringify(
        string $prefix,
        array $properties,
        string $processedProperties = ''
    ): string {
        $formattedProperties = array_map([self::class, 'stringifyProperty'], array_keys($properties), $properties);
        if (!empty($processedProperties)) {
            $formattedProperties[] = substr($processedProperties, strpos($processedProperties, '[') + 1, -1);
        }

        $formattedPropertiesString = implode(', ', array_filter($formattedProperties));
        return ltrim("$prefix [$formattedPropertiesString]");
    }

    /**
     * Converts the provided key value pair into a human-readable string representation.
     */
    private static function stringifyProperty($key, $value)
    {
        if (is_null($value)) {
            return null; // Skip null values
        }

        $value = self::handleNonConvertibleTypes($value);
        $value = is_array($value) ? self::stringify('', $value) : self::prepareValue($value, true, true);

        if (is_string($key)) {
            return "$key: $value";
        }

        // Skip keys representation for numeric keys (i.e. non associative arrays)
        return $value;
    }

    private static function handleNonConvertibleTypes($value)
    {
        if ($value instanceof stdClass) {
            return (array) $value;
        }

        if ($value instanceof DateTime) {
            return DateHelper::toRfc3339DateTime($value);
        }

        return $value;
    }
}
