<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1alpha/osconfig_zonal_service.proto

namespace GPBMetadata\Google\Cloud\Osconfig\V1Alpha;

class OsconfigZonalService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1Alpha\InstanceOsPoliciesCompliance::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1Alpha\Inventory::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1Alpha\OsPolicyAssignments::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1Alpha\Vulnerability::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/osconfig/v1alpha/osconfig_zonal_service.protogoogle.cloud.osconfig.v1alphagoogle/api/client.protogoogle/api/resource.protoCgoogle/cloud/osconfig/v1alpha/instance_os_policies_compliance.proto-google/cloud/osconfig/v1alpha/inventory.proto9google/cloud/osconfig/v1alpha/os_policy_assignments.proto1google/cloud/osconfig/v1alpha/vulnerability.proto#google/longrunning/operations.proto2�
OsConfigZonalService�
CreateOSPolicyAssignment>.google.cloud.osconfig.v1alpha.CreateOSPolicyAssignmentRequest.google.longrunning.Operation"����T"</v1alpha/{parent=projects/*/locations/*}/osPolicyAssignments:os_policy_assignment�A3parent,os_policy_assignment,os_policy_assignment_id�A9
OSPolicyAssignment#OSPolicyAssignmentOperationMetadata�
UpdateOSPolicyAssignment>.google.cloud.osconfig.v1alpha.UpdateOSPolicyAssignmentRequest.google.longrunning.Operation"����i2Q/v1alpha/{os_policy_assignment.name=projects/*/locations/*/osPolicyAssignments/*}:os_policy_assignment�A os_policy_assignment,update_mask�A9
OSPolicyAssignment#OSPolicyAssignmentOperationMetadata�
GetOSPolicyAssignment;.google.cloud.osconfig.v1alpha.GetOSPolicyAssignmentRequest1.google.cloud.osconfig.v1alpha.OSPolicyAssignment"K���></v1alpha/{name=projects/*/locations/*/osPolicyAssignments/*}�Aname�
ListOSPolicyAssignments=.google.cloud.osconfig.v1alpha.ListOSPolicyAssignmentsRequest>.google.cloud.osconfig.v1alpha.ListOSPolicyAssignmentsResponse"M���></v1alpha/{parent=projects/*/locations/*}/osPolicyAssignments�Aparent�
ListOSPolicyAssignmentRevisionsE.google.cloud.osconfig.v1alpha.ListOSPolicyAssignmentRevisionsRequestF.google.cloud.osconfig.v1alpha.ListOSPolicyAssignmentRevisionsResponse"Y���LJ/v1alpha/{name=projects/*/locations/*/osPolicyAssignments/*}:listRevisions�Aname�
DeleteOSPolicyAssignment>.google.cloud.osconfig.v1alpha.DeleteOSPolicyAssignmentRequest.google.longrunning.Operation"����>*</v1alpha/{name=projects/*/locations/*/osPolicyAssignments/*}�Aname�A<
google.protobuf.Empty#OSPolicyAssignmentOperationMetadata�
GetInstanceOSPoliciesComplianceE.google.cloud.osconfig.v1alpha.GetInstanceOSPoliciesComplianceRequest;.google.cloud.osconfig.v1alpha.InstanceOSPoliciesCompliance"U���HF/v1alpha/{name=projects/*/locations/*/instanceOSPoliciesCompliances/*}�Aname�
!ListInstanceOSPoliciesCompliancesG.google.cloud.osconfig.v1alpha.ListInstanceOSPoliciesCompliancesRequestH.google.cloud.osconfig.v1alpha.ListInstanceOSPoliciesCompliancesResponse"W���HF/v1alpha/{parent=projects/*/locations/*}/instanceOSPoliciesCompliances�Aparent�
GetInventory2.google.cloud.osconfig.v1alpha.GetInventoryRequest(.google.cloud.osconfig.v1alpha.Inventory"K���></v1alpha/{name=projects/*/locations/*/instances/*/inventory}�Aname�
ListInventories5.google.cloud.osconfig.v1alpha.ListInventoriesRequest6.google.cloud.osconfig.v1alpha.ListInventoriesResponse"Q���B@/v1alpha/{parent=projects/*/locations/*/instances/*}/inventories�Aparent�
GetVulnerabilityReport<.google.cloud.osconfig.v1alpha.GetVulnerabilityReportRequest2.google.cloud.osconfig.v1alpha.VulnerabilityReport"U���HF/v1alpha/{name=projects/*/locations/*/instances/*/vulnerabilityReport}�Aname�
ListVulnerabilityReports>.google.cloud.osconfig.v1alpha.ListVulnerabilityReportsRequest?.google.cloud.osconfig.v1alpha.ListVulnerabilityReportsResponse"Z���KI/v1alpha/{parent=projects/*/locations/*/instances/*}/vulnerabilityReports�AparentK�Aosconfig.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.osconfig.v1alphaBOsConfigZonalServiceProtoPZEgoogle.golang.org/genproto/googleapis/cloud/osconfig/v1alpha;osconfig�Google.Cloud.OsConfig.V1Alpha�Google\\Cloud\\OsConfig\\V1alpha� Google::Cloud::OsConfig::V1alpha�A_
compute.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

