<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/source/v1/source_context.proto

namespace Google\Cloud\DevTools\Source\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A SourceContext is a reference to a tree of files. A SourceContext together
 * with a path point to a unique revision of a single file or directory.
 *
 * Generated from protobuf message <code>google.devtools.source.v1.SourceContext</code>
 */
class SourceContext extends \Google\Protobuf\Internal\Message
{
    protected $context;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DevTools\Source\V1\CloudRepoSourceContext $cloud_repo
     *           A SourceContext referring to a revision in a cloud repo.
     *     @type \Google\Cloud\DevTools\Source\V1\CloudWorkspaceSourceContext $cloud_workspace
     *           A SourceContext referring to a snapshot in a cloud workspace.
     *     @type \Google\Cloud\DevTools\Source\V1\GerritSourceContext $gerrit
     *           A SourceContext referring to a Gerrit project.
     *     @type \Google\Cloud\DevTools\Source\V1\GitSourceContext $git
     *           A SourceContext referring to any third party Git repo (e.g. GitHub).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Source\V1\SourceContext::initOnce();
        parent::__construct($data);
    }

    /**
     * A SourceContext referring to a revision in a cloud repo.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.CloudRepoSourceContext cloud_repo = 1;</code>
     * @return \Google\Cloud\DevTools\Source\V1\CloudRepoSourceContext
     */
    public function getCloudRepo()
    {
        return $this->readOneof(1);
    }

    public function hasCloudRepo()
    {
        return $this->hasOneof(1);
    }

    /**
     * A SourceContext referring to a revision in a cloud repo.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.CloudRepoSourceContext cloud_repo = 1;</code>
     * @param \Google\Cloud\DevTools\Source\V1\CloudRepoSourceContext $var
     * @return $this
     */
    public function setCloudRepo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DevTools\Source\V1\CloudRepoSourceContext::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A SourceContext referring to a snapshot in a cloud workspace.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.CloudWorkspaceSourceContext cloud_workspace = 2;</code>
     * @return \Google\Cloud\DevTools\Source\V1\CloudWorkspaceSourceContext
     */
    public function getCloudWorkspace()
    {
        return $this->readOneof(2);
    }

    public function hasCloudWorkspace()
    {
        return $this->hasOneof(2);
    }

    /**
     * A SourceContext referring to a snapshot in a cloud workspace.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.CloudWorkspaceSourceContext cloud_workspace = 2;</code>
     * @param \Google\Cloud\DevTools\Source\V1\CloudWorkspaceSourceContext $var
     * @return $this
     */
    public function setCloudWorkspace($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DevTools\Source\V1\CloudWorkspaceSourceContext::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A SourceContext referring to a Gerrit project.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.GerritSourceContext gerrit = 3;</code>
     * @return \Google\Cloud\DevTools\Source\V1\GerritSourceContext
     */
    public function getGerrit()
    {
        return $this->readOneof(3);
    }

    public function hasGerrit()
    {
        return $this->hasOneof(3);
    }

    /**
     * A SourceContext referring to a Gerrit project.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.GerritSourceContext gerrit = 3;</code>
     * @param \Google\Cloud\DevTools\Source\V1\GerritSourceContext $var
     * @return $this
     */
    public function setGerrit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DevTools\Source\V1\GerritSourceContext::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A SourceContext referring to any third party Git repo (e.g. GitHub).
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.GitSourceContext git = 6;</code>
     * @return \Google\Cloud\DevTools\Source\V1\GitSourceContext
     */
    public function getGit()
    {
        return $this->readOneof(6);
    }

    public function hasGit()
    {
        return $this->hasOneof(6);
    }

    /**
     * A SourceContext referring to any third party Git repo (e.g. GitHub).
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.GitSourceContext git = 6;</code>
     * @param \Google\Cloud\DevTools\Source\V1\GitSourceContext $var
     * @return $this
     */
    public function setGit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DevTools\Source\V1\GitSourceContext::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->whichOneof("context");
    }

}

