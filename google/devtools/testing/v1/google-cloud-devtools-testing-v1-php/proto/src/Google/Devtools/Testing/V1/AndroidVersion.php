<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/testing/v1/test_environment_discovery.proto

namespace Google\Devtools\Testing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A version of the Android OS.
 *
 * Generated from protobuf message <code>google.devtools.testing.v1.AndroidVersion</code>
 */
class AndroidVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * An opaque id for this Android version.
     * Use this id to invoke the TestExecutionService.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A string representing this version of the Android OS.
     * Examples: "4.3", "4.4".
     *
     * Generated from protobuf field <code>string version_string = 2;</code>
     */
    protected $version_string = '';
    /**
     * The API level for this Android version.
     * Examples: 18, 19.
     *
     * Generated from protobuf field <code>int32 api_level = 3;</code>
     */
    protected $api_level = 0;
    /**
     * The code name for this Android version.
     * Examples: "JellyBean", "KitKat".
     *
     * Generated from protobuf field <code>string code_name = 4;</code>
     */
    protected $code_name = '';
    /**
     * The date this Android version became available in the market.
     *
     * Generated from protobuf field <code>.google.type.Date release_date = 5;</code>
     */
    protected $release_date = null;
    /**
     * Market share for this version.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.Distribution distribution = 6;</code>
     */
    protected $distribution = null;
    /**
     * Tags for this dimension.
     * Examples: "default", "preview", "deprecated".
     *
     * Generated from protobuf field <code>repeated string tags = 7;</code>
     */
    private $tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           An opaque id for this Android version.
     *           Use this id to invoke the TestExecutionService.
     *     @type string $version_string
     *           A string representing this version of the Android OS.
     *           Examples: "4.3", "4.4".
     *     @type int $api_level
     *           The API level for this Android version.
     *           Examples: 18, 19.
     *     @type string $code_name
     *           The code name for this Android version.
     *           Examples: "JellyBean", "KitKat".
     *     @type \Google\Type\Date $release_date
     *           The date this Android version became available in the market.
     *     @type \Google\Devtools\Testing\V1\Distribution $distribution
     *           Market share for this version.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tags
     *           Tags for this dimension.
     *           Examples: "default", "preview", "deprecated".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Testing\V1\TestEnvironmentDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * An opaque id for this Android version.
     * Use this id to invoke the TestExecutionService.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * An opaque id for this Android version.
     * Use this id to invoke the TestExecutionService.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * A string representing this version of the Android OS.
     * Examples: "4.3", "4.4".
     *
     * Generated from protobuf field <code>string version_string = 2;</code>
     * @return string
     */
    public function getVersionString()
    {
        return $this->version_string;
    }

    /**
     * A string representing this version of the Android OS.
     * Examples: "4.3", "4.4".
     *
     * Generated from protobuf field <code>string version_string = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionString($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_string = $var;

        return $this;
    }

    /**
     * The API level for this Android version.
     * Examples: 18, 19.
     *
     * Generated from protobuf field <code>int32 api_level = 3;</code>
     * @return int
     */
    public function getApiLevel()
    {
        return $this->api_level;
    }

    /**
     * The API level for this Android version.
     * Examples: 18, 19.
     *
     * Generated from protobuf field <code>int32 api_level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setApiLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->api_level = $var;

        return $this;
    }

    /**
     * The code name for this Android version.
     * Examples: "JellyBean", "KitKat".
     *
     * Generated from protobuf field <code>string code_name = 4;</code>
     * @return string
     */
    public function getCodeName()
    {
        return $this->code_name;
    }

    /**
     * The code name for this Android version.
     * Examples: "JellyBean", "KitKat".
     *
     * Generated from protobuf field <code>string code_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCodeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->code_name = $var;

        return $this;
    }

    /**
     * The date this Android version became available in the market.
     *
     * Generated from protobuf field <code>.google.type.Date release_date = 5;</code>
     * @return \Google\Type\Date|null
     */
    public function getReleaseDate()
    {
        return isset($this->release_date) ? $this->release_date : null;
    }

    public function hasReleaseDate()
    {
        return isset($this->release_date);
    }

    public function clearReleaseDate()
    {
        unset($this->release_date);
    }

    /**
     * The date this Android version became available in the market.
     *
     * Generated from protobuf field <code>.google.type.Date release_date = 5;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setReleaseDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->release_date = $var;

        return $this;
    }

    /**
     * Market share for this version.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.Distribution distribution = 6;</code>
     * @return \Google\Devtools\Testing\V1\Distribution|null
     */
    public function getDistribution()
    {
        return isset($this->distribution) ? $this->distribution : null;
    }

    public function hasDistribution()
    {
        return isset($this->distribution);
    }

    public function clearDistribution()
    {
        unset($this->distribution);
    }

    /**
     * Market share for this version.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.Distribution distribution = 6;</code>
     * @param \Google\Devtools\Testing\V1\Distribution $var
     * @return $this
     */
    public function setDistribution($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Testing\V1\Distribution::class);
        $this->distribution = $var;

        return $this;
    }

    /**
     * Tags for this dimension.
     * Examples: "default", "preview", "deprecated".
     *
     * Generated from protobuf field <code>repeated string tags = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Tags for this dimension.
     * Examples: "default", "preview", "deprecated".
     *
     * Generated from protobuf field <code>repeated string tags = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

}

