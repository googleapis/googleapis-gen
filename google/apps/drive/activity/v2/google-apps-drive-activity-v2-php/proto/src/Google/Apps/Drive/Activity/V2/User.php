<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/drive/activity/v2/actor.proto

namespace Google\Apps\Drive\Activity\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about an end user.
 *
 * Generated from protobuf message <code>google.apps.drive.activity.v2.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Drive\Activity\V2\User\KnownUser $known_user
     *           A known user.
     *     @type \Google\Apps\Drive\Activity\V2\User\DeletedUser $deleted_user
     *           A user whose account has since been deleted.
     *     @type \Google\Apps\Drive\Activity\V2\User\UnknownUser $unknown_user
     *           A user about whom nothing is currently known.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Drive\Activity\V2\Actor::initOnce();
        parent::__construct($data);
    }

    /**
     * A known user.
     *
     * Generated from protobuf field <code>.google.apps.drive.activity.v2.User.KnownUser known_user = 2;</code>
     * @return \Google\Apps\Drive\Activity\V2\User\KnownUser|null
     */
    public function getKnownUser()
    {
        return $this->readOneof(2);
    }

    public function hasKnownUser()
    {
        return $this->hasOneof(2);
    }

    /**
     * A known user.
     *
     * Generated from protobuf field <code>.google.apps.drive.activity.v2.User.KnownUser known_user = 2;</code>
     * @param \Google\Apps\Drive\Activity\V2\User\KnownUser $var
     * @return $this
     */
    public function setKnownUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Drive\Activity\V2\User\KnownUser::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A user whose account has since been deleted.
     *
     * Generated from protobuf field <code>.google.apps.drive.activity.v2.User.DeletedUser deleted_user = 3;</code>
     * @return \Google\Apps\Drive\Activity\V2\User\DeletedUser|null
     */
    public function getDeletedUser()
    {
        return $this->readOneof(3);
    }

    public function hasDeletedUser()
    {
        return $this->hasOneof(3);
    }

    /**
     * A user whose account has since been deleted.
     *
     * Generated from protobuf field <code>.google.apps.drive.activity.v2.User.DeletedUser deleted_user = 3;</code>
     * @param \Google\Apps\Drive\Activity\V2\User\DeletedUser $var
     * @return $this
     */
    public function setDeletedUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Drive\Activity\V2\User\DeletedUser::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A user about whom nothing is currently known.
     *
     * Generated from protobuf field <code>.google.apps.drive.activity.v2.User.UnknownUser unknown_user = 4;</code>
     * @return \Google\Apps\Drive\Activity\V2\User\UnknownUser|null
     */
    public function getUnknownUser()
    {
        return $this->readOneof(4);
    }

    public function hasUnknownUser()
    {
        return $this->hasOneof(4);
    }

    /**
     * A user about whom nothing is currently known.
     *
     * Generated from protobuf field <code>.google.apps.drive.activity.v2.User.UnknownUser unknown_user = 4;</code>
     * @param \Google\Apps\Drive\Activity\V2\User\UnknownUser $var
     * @return $this
     */
    public function setUnknownUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Drive\Activity\V2\User\UnknownUser::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

