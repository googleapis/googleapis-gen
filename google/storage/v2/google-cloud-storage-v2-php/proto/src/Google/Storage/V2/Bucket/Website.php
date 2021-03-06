<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/v2/storage.proto

namespace Google\Storage\V2\Bucket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Properties of a bucket related to accessing the contents as a static
 * website. For more on hosting a static website via Cloud Storage, see
 * https://cloud.google.com/storage/docs/hosting-static-website.
 *
 * Generated from protobuf message <code>google.storage.v2.Bucket.Website</code>
 */
class Website extends \Google\Protobuf\Internal\Message
{
    /**
     * If the requested object path is missing, the service will ensure the path
     * has a trailing '/', append this suffix, and attempt to retrieve the
     * resulting object. This allows the creation of `index.html`
     * objects to represent directory pages.
     *
     * Generated from protobuf field <code>string main_page_suffix = 1;</code>
     */
    protected $main_page_suffix = '';
    /**
     * If the requested object path is missing, and any
     * `mainPageSuffix` object is missing, if applicable, the service
     * will return the named object from this bucket as the content for a
     * [https://tools.ietf.org/html/rfc7231#section-6.5.4][404 Not Found]
     * result.
     *
     * Generated from protobuf field <code>string not_found_page = 2;</code>
     */
    protected $not_found_page = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main_page_suffix
     *           If the requested object path is missing, the service will ensure the path
     *           has a trailing '/', append this suffix, and attempt to retrieve the
     *           resulting object. This allows the creation of `index.html`
     *           objects to represent directory pages.
     *     @type string $not_found_page
     *           If the requested object path is missing, and any
     *           `mainPageSuffix` object is missing, if applicable, the service
     *           will return the named object from this bucket as the content for a
     *           [https://tools.ietf.org/html/rfc7231#section-6.5.4][404 Not Found]
     *           result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * If the requested object path is missing, the service will ensure the path
     * has a trailing '/', append this suffix, and attempt to retrieve the
     * resulting object. This allows the creation of `index.html`
     * objects to represent directory pages.
     *
     * Generated from protobuf field <code>string main_page_suffix = 1;</code>
     * @return string
     */
    public function getMainPageSuffix()
    {
        return $this->main_page_suffix;
    }

    /**
     * If the requested object path is missing, the service will ensure the path
     * has a trailing '/', append this suffix, and attempt to retrieve the
     * resulting object. This allows the creation of `index.html`
     * objects to represent directory pages.
     *
     * Generated from protobuf field <code>string main_page_suffix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMainPageSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_page_suffix = $var;

        return $this;
    }

    /**
     * If the requested object path is missing, and any
     * `mainPageSuffix` object is missing, if applicable, the service
     * will return the named object from this bucket as the content for a
     * [https://tools.ietf.org/html/rfc7231#section-6.5.4][404 Not Found]
     * result.
     *
     * Generated from protobuf field <code>string not_found_page = 2;</code>
     * @return string
     */
    public function getNotFoundPage()
    {
        return $this->not_found_page;
    }

    /**
     * If the requested object path is missing, and any
     * `mainPageSuffix` object is missing, if applicable, the service
     * will return the named object from this bucket as the content for a
     * [https://tools.ietf.org/html/rfc7231#section-6.5.4][404 Not Found]
     * result.
     *
     * Generated from protobuf field <code>string not_found_page = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNotFoundPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->not_found_page = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Website::class, \Google\Storage\V2\Bucket_Website::class);

