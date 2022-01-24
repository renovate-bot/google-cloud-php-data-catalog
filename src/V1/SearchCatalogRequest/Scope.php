<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1\SearchCatalogRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The criteria that select the subspace used for query matching.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SearchCatalogRequest.Scope</code>
 */
class Scope extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of organization IDs to search within.
     * To find your organization ID, follow the steps from
     * [Creating and managing organizations]
     * (/resource-manager/docs/creating-managing-organization).
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     */
    private $include_org_ids;
    /**
     * The list of project IDs to search within.
     * For more information on the distinction between project names, IDs, and
     * numbers, see [Projects](https://cloud.google.com/docs/overview/#projects).
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     */
    private $include_project_ids;
    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in
     * search results. By default, they are excluded.
     * See [Google Cloud Public Datasets](https://cloud.google.com/public-datasets) for more
     * information.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     */
    private $include_gcp_public_datasets = false;
    /**
     * Optional. The list of locations to search within. If empty, all locations are
     * searched.
     * Returns an error if any location in the list isn't one of the [Supported
     * regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     * If a location is unreachable, its name is returned in the
     * `SearchCatalogResponse.unreachable` field. To get additional information
     * on the error, repeat the search request and set the location name as the
     * value of this parameter.
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $restricted_locations;
    /**
     * Optional. If `true`, include [public tag
     * templates][google.cloud.datacatalog.v1.TagTemplate.is_publicly_readable]
     * in the search results. By default, they are included only if you have
     * explicit permissions on them to view them. For example, if you are the
     * owner.
     * Other scope fields, for example, `include_org_ids`,
     * still restrict the returned public tag templates and at least one of
     * them is required.
     *
     * Generated from protobuf field <code>bool include_public_tag_templates = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $include_public_tag_templates = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_org_ids
     *           The list of organization IDs to search within.
     *           To find your organization ID, follow the steps from
     *           [Creating and managing organizations]
     *           (/resource-manager/docs/creating-managing-organization).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_project_ids
     *           The list of project IDs to search within.
     *           For more information on the distinction between project names, IDs, and
     *           numbers, see [Projects](https://cloud.google.com/docs/overview/#projects).
     *     @type bool $include_gcp_public_datasets
     *           If `true`, include Google Cloud Platform (GCP) public datasets in
     *           search results. By default, they are excluded.
     *           See [Google Cloud Public Datasets](https://cloud.google.com/public-datasets) for more
     *           information.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $restricted_locations
     *           Optional. The list of locations to search within. If empty, all locations are
     *           searched.
     *           Returns an error if any location in the list isn't one of the [Supported
     *           regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     *           If a location is unreachable, its name is returned in the
     *           `SearchCatalogResponse.unreachable` field. To get additional information
     *           on the error, repeat the search request and set the location name as the
     *           value of this parameter.
     *     @type bool $include_public_tag_templates
     *           Optional. If `true`, include [public tag
     *           templates][google.cloud.datacatalog.v1.TagTemplate.is_publicly_readable]
     *           in the search results. By default, they are included only if you have
     *           explicit permissions on them to view them. For example, if you are the
     *           owner.
     *           Other scope fields, for example, `include_org_ids`,
     *           still restrict the returned public tag templates and at least one of
     *           them is required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of organization IDs to search within.
     * To find your organization ID, follow the steps from
     * [Creating and managing organizations]
     * (/resource-manager/docs/creating-managing-organization).
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeOrgIds()
    {
        return $this->include_org_ids;
    }

    /**
     * The list of organization IDs to search within.
     * To find your organization ID, follow the steps from
     * [Creating and managing organizations]
     * (/resource-manager/docs/creating-managing-organization).
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeOrgIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_org_ids = $arr;

        return $this;
    }

    /**
     * The list of project IDs to search within.
     * For more information on the distinction between project names, IDs, and
     * numbers, see [Projects](https://cloud.google.com/docs/overview/#projects).
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeProjectIds()
    {
        return $this->include_project_ids;
    }

    /**
     * The list of project IDs to search within.
     * For more information on the distinction between project names, IDs, and
     * numbers, see [Projects](https://cloud.google.com/docs/overview/#projects).
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeProjectIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_project_ids = $arr;

        return $this;
    }

    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in
     * search results. By default, they are excluded.
     * See [Google Cloud Public Datasets](https://cloud.google.com/public-datasets) for more
     * information.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @return bool
     */
    public function getIncludeGcpPublicDatasets()
    {
        return $this->include_gcp_public_datasets;
    }

    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in
     * search results. By default, they are excluded.
     * See [Google Cloud Public Datasets](https://cloud.google.com/public-datasets) for more
     * information.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeGcpPublicDatasets($var)
    {
        GPBUtil::checkBool($var);
        $this->include_gcp_public_datasets = $var;

        return $this;
    }

    /**
     * Optional. The list of locations to search within. If empty, all locations are
     * searched.
     * Returns an error if any location in the list isn't one of the [Supported
     * regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     * If a location is unreachable, its name is returned in the
     * `SearchCatalogResponse.unreachable` field. To get additional information
     * on the error, repeat the search request and set the location name as the
     * value of this parameter.
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedLocations()
    {
        return $this->restricted_locations;
    }

    /**
     * Optional. The list of locations to search within. If empty, all locations are
     * searched.
     * Returns an error if any location in the list isn't one of the [Supported
     * regions](https://cloud.google.com/data-catalog/docs/concepts/regions#supported_regions).
     * If a location is unreachable, its name is returned in the
     * `SearchCatalogResponse.unreachable` field. To get additional information
     * on the error, repeat the search request and set the location name as the
     * value of this parameter.
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->restricted_locations = $arr;

        return $this;
    }

    /**
     * Optional. If `true`, include [public tag
     * templates][google.cloud.datacatalog.v1.TagTemplate.is_publicly_readable]
     * in the search results. By default, they are included only if you have
     * explicit permissions on them to view them. For example, if you are the
     * owner.
     * Other scope fields, for example, `include_org_ids`,
     * still restrict the returned public tag templates and at least one of
     * them is required.
     *
     * Generated from protobuf field <code>bool include_public_tag_templates = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIncludePublicTagTemplates()
    {
        return $this->include_public_tag_templates;
    }

    /**
     * Optional. If `true`, include [public tag
     * templates][google.cloud.datacatalog.v1.TagTemplate.is_publicly_readable]
     * in the search results. By default, they are included only if you have
     * explicit permissions on them to view them. For example, if you are the
     * owner.
     * Other scope fields, for example, `include_org_ids`,
     * still restrict the returned public tag templates and at least one of
     * them is required.
     *
     * Generated from protobuf field <code>bool include_public_tag_templates = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludePublicTagTemplates($var)
    {
        GPBUtil::checkBool($var);
        $this->include_public_tag_templates = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Scope::class, \Google\Cloud\DataCatalog\V1\SearchCatalogRequest_Scope::class);

