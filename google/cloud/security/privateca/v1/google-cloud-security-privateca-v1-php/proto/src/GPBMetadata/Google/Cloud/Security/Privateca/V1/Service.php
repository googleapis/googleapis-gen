<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace GPBMetadata\Google\Cloud\Security\Privateca\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�p
0google/cloud/security/privateca/v1/service.proto"google.cloud.security.privateca.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto2google/cloud/security/privateca/v1/resources.proto#google/longrunning/operations.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateCertificateRequest7
parent (	B\'�A�A!
privateca.googleapis.com/CaPool
certificate_id (	B�AI
certificate (2/.google.cloud.security.privateca.v1.CertificateB�A

request_id (	B�A
validate_only (B�A-
 issuing_certificate_authority_id (	B�A"S
GetCertificateRequest:
name (	B,�A�A&
$privateca.googleapis.com/Certificate"�
ListCertificatesRequest7
parent (	B\'�A�A!
privateca.googleapis.com/CaPool
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListCertificatesResponseE
certificates (2/.google.cloud.security.privateca.v1.Certificate
next_page_token (	
unreachable (	"�
RevokeCertificateRequest:
name (	B,�A�A&
$privateca.googleapis.com/CertificateI
reason (24.google.cloud.security.privateca.v1.RevocationReasonB�A

request_id (	B�A"�
UpdateCertificateRequestI
certificate (2/.google.cloud.security.privateca.v1.CertificateB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
#ActivateCertificateAuthorityRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority
pem_ca_certificate (	B�AV
subordinate_config (25.google.cloud.security.privateca.v1.SubordinateConfigB�A

request_id (	B�A"�
!CreateCertificateAuthorityRequest7
parent (	B\'�A�A!
privateca.googleapis.com/CaPool%
certificate_authority_id (	B�A\\
certificate_authority (28.google.cloud.security.privateca.v1.CertificateAuthorityB�A

request_id (	B�A"�
"DisableCertificateAuthorityRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority

request_id (	B�A"�
!EnableCertificateAuthorityRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority

request_id (	B�A"j
#FetchCertificateAuthorityCsrRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority"<
$FetchCertificateAuthorityCsrResponse
pem_csr (	B�A"e
GetCertificateAuthorityRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority"�
!ListCertificateAuthoritiesRequest7
parent (	B\'�A�A!
privateca.googleapis.com/CaPool
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
"ListCertificateAuthoritiesResponseY
certificate_authorities (28.google.cloud.security.privateca.v1.CertificateAuthority
next_page_token (	
unreachable (	"�
#UndeleteCertificateAuthorityRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority

request_id (	B�A"�
!DeleteCertificateAuthorityRequestC
name (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority

request_id (	B�A\'
ignore_active_certificates (B�A"�
!UpdateCertificateAuthorityRequest\\
certificate_authority (28.google.cloud.security.privateca.v1.CertificateAuthorityB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
CreateCaPoolRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location

ca_pool_id (	B�A@
ca_pool (2*.google.cloud.security.privateca.v1.CaPoolB�A

request_id (	B�A"�
UpdateCaPoolRequest@
ca_pool (2*.google.cloud.security.privateca.v1.CaPoolB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"e
DeleteCaPoolRequest5
name (	B\'�A�A!
privateca.googleapis.com/CaPool

request_id (	B�A"h
FetchCaCertsRequest8
ca_pool (	B\'�A�A!
privateca.googleapis.com/CaPool

request_id (	B�A"�
FetchCaCertsResponseT
ca_certs (2B.google.cloud.security.privateca.v1.FetchCaCertsResponse.CertChain!
	CertChain
certificates (	"I
GetCaPoolRequest5
name (	B\'�A�A!
privateca.googleapis.com/CaPool"�
ListCaPoolsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListCaPoolsResponse<
ca_pools (2*.google.cloud.security.privateca.v1.CaPool
next_page_token (	
unreachable (	"o
#GetCertificateRevocationListRequestH
name (	B:�A�A4
2privateca.googleapis.com/CertificateRevocationList"�
%ListCertificateRevocationListsRequestE
parent (	B5�A�A/
-privateca.googleapis.com/CertificateAuthority
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
&ListCertificateRevocationListsResponsec
certificate_revocation_lists (2=.google.cloud.security.privateca.v1.CertificateRevocationList
next_page_token (	
unreachable (	"�
&UpdateCertificateRevocationListRequestg
certificate_revocation_list (2=.google.cloud.security.privateca.v1.CertificateRevocationListB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
 CreateCertificateTemplateRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location$
certificate_template_id (	B�AZ
certificate_template (27.google.cloud.security.privateca.v1.CertificateTemplateB�A

request_id (	B�A"
 DeleteCertificateTemplateRequestB
name (	B4�A�A.
,privateca.googleapis.com/CertificateTemplate

request_id (	B�A"c
GetCertificateTemplateRequestB
name (	B4�A�A.
,privateca.googleapis.com/CertificateTemplate"�
ListCertificateTemplatesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
 ListCertificateTemplatesResponseV
certificate_templates (27.google.cloud.security.privateca.v1.CertificateTemplate
next_page_token (	
unreachable (	"�
 UpdateCertificateTemplateRequestZ
certificate_template (27.google.cloud.security.privateca.v1.CertificateTemplateB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�;
CertificateAuthorityService�
CreateCertificate<.google.cloud.security.privateca.v1.CreateCertificateRequest/.google.cloud.security.privateca.v1.Certificate"s���I":/v1/{parent=projects/*/locations/*/caPools/*}/certificates:certificate�A!parent,certificate,certificate_id�
GetCertificate9.google.cloud.security.privateca.v1.GetCertificateRequest/.google.cloud.security.privateca.v1.Certificate"I���<:/v1/{name=projects/*/locations/*/caPools/*/certificates/*}�Aname�
ListCertificates;.google.cloud.security.privateca.v1.ListCertificatesRequest<.google.cloud.security.privateca.v1.ListCertificatesResponse"K���<:/v1/{parent=projects/*/locations/*/caPools/*}/certificates�Aparent�
RevokeCertificate<.google.cloud.security.privateca.v1.RevokeCertificateRequest/.google.cloud.security.privateca.v1.Certificate"S���F"A/v1/{name=projects/*/locations/*/caPools/*/certificates/*}:revoke:*�Aname�
UpdateCertificate<.google.cloud.security.privateca.v1.UpdateCertificateRequest/.google.cloud.security.privateca.v1.Certificate"u���U2F/v1/{certificate.name=projects/*/locations/*/caPools/*/certificates/*}:certificate�Acertificate,update_mask�
ActivateCertificateAuthorityG.google.cloud.security.privateca.v1.ActivateCertificateAuthorityRequest.google.longrunning.Operation"����R"M/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}:activate:*�Aname�A)
CertificateAuthorityOperationMetadata�
CreateCertificateAuthorityE.google.cloud.security.privateca.v1.CreateCertificateAuthorityRequest.google.longrunning.Operation"����]"D/v1/{parent=projects/*/locations/*/caPools/*}/certificateAuthorities:certificate_authority�A5parent,certificate_authority,certificate_authority_id�A)
CertificateAuthorityOperationMetadata�
DisableCertificateAuthorityF.google.cloud.security.privateca.v1.DisableCertificateAuthorityRequest.google.longrunning.Operation"����Q"L/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}:disable:*�Aname�A)
CertificateAuthorityOperationMetadata�
EnableCertificateAuthorityE.google.cloud.security.privateca.v1.EnableCertificateAuthorityRequest.google.longrunning.Operation"����P"K/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}:enable:*�Aname�A)
CertificateAuthorityOperationMetadata�
FetchCertificateAuthorityCsrG.google.cloud.security.privateca.v1.FetchCertificateAuthorityCsrRequestH.google.cloud.security.privateca.v1.FetchCertificateAuthorityCsrResponse"Y���LJ/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}:fetch�Aname�
GetCertificateAuthorityB.google.cloud.security.privateca.v1.GetCertificateAuthorityRequest8.google.cloud.security.privateca.v1.CertificateAuthority"S���FD/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}�Aname�
ListCertificateAuthoritiesE.google.cloud.security.privateca.v1.ListCertificateAuthoritiesRequestF.google.cloud.security.privateca.v1.ListCertificateAuthoritiesResponse"U���FD/v1/{parent=projects/*/locations/*/caPools/*}/certificateAuthorities�Aparent�
UndeleteCertificateAuthorityG.google.cloud.security.privateca.v1.UndeleteCertificateAuthorityRequest.google.longrunning.Operation"����R"M/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}:undelete:*�Aname�A)
CertificateAuthorityOperationMetadata�
DeleteCertificateAuthorityE.google.cloud.security.privateca.v1.DeleteCertificateAuthorityRequest.google.longrunning.Operation"���F*D/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*}�Aname�A)
CertificateAuthorityOperationMetadata�
UpdateCertificateAuthorityE.google.cloud.security.privateca.v1.UpdateCertificateAuthorityRequest.google.longrunning.Operation"����s2Z/v1/{certificate_authority.name=projects/*/locations/*/caPools/*/certificateAuthorities/*}:certificate_authority�A!certificate_authority,update_mask�A)
CertificateAuthorityOperationMetadata�
CreateCaPool7.google.cloud.security.privateca.v1.CreateCaPoolRequest.google.longrunning.Operation"v���6"+/v1/{parent=projects/*/locations/*}/caPools:ca_pool�Aparent,ca_pool,ca_pool_id�A
CaPoolOperationMetadata�
UpdateCaPool7.google.cloud.security.privateca.v1.UpdateCaPoolRequest.google.longrunning.Operation"x���>23/v1/{ca_pool.name=projects/*/locations/*/caPools/*}:ca_pool�Aca_pool,update_mask�A
CaPoolOperationMetadata�
	GetCaPool4.google.cloud.security.privateca.v1.GetCaPoolRequest*.google.cloud.security.privateca.v1.CaPool":���-+/v1/{name=projects/*/locations/*/caPools/*}�Aname�
ListCaPools6.google.cloud.security.privateca.v1.ListCaPoolsRequest7.google.cloud.security.privateca.v1.ListCaPoolsResponse"<���-+/v1/{parent=projects/*/locations/*}/caPools�Aparent�
DeleteCaPool7.google.cloud.security.privateca.v1.DeleteCaPoolRequest.google.longrunning.Operation"X���-*+/v1/{name=projects/*/locations/*/caPools/*}�Aname�A
CaPoolOperationMetadata�
FetchCaCerts7.google.cloud.security.privateca.v1.FetchCaCertsRequest8.google.cloud.security.privateca.v1.FetchCaCertsResponse"P���@";/v1/{ca_pool=projects/*/locations/*/caPools/*}:fetchCaCerts:*�Aca_pool�
GetCertificateRevocationListG.google.cloud.security.privateca.v1.GetCertificateRevocationListRequest=.google.cloud.security.privateca.v1.CertificateRevocationList"p���ca/v1/{name=projects/*/locations/*/caPools/*/certificateAuthorities/*/certificateRevocationLists/*}�Aname�
ListCertificateRevocationListsI.google.cloud.security.privateca.v1.ListCertificateRevocationListsRequestJ.google.cloud.security.privateca.v1.ListCertificateRevocationListsResponse"r���ca/v1/{parent=projects/*/locations/*/caPools/*/certificateAuthorities/*}/certificateRevocationLists�Aparent�
UpdateCertificateRevocationListJ.google.cloud.security.privateca.v1.UpdateCertificateRevocationListRequest.google.longrunning.Operation"�����2}/v1/{certificate_revocation_list.name=projects/*/locations/*/caPools/*/certificateAuthorities/*/certificateRevocationLists/*}:certificate_revocation_list�A\'certificate_revocation_list,update_mask�A.
CertificateRevocationListOperationMetadata�
CreateCertificateTemplateD.google.cloud.security.privateca.v1.CreateCertificateTemplateRequest.google.longrunning.Operation"����P"8/v1/{parent=projects/*/locations/*}/certificateTemplates:certificate_template�A3parent,certificate_template,certificate_template_id�A(
CertificateTemplateOperationMetadata�
DeleteCertificateTemplateD.google.cloud.security.privateca.v1.DeleteCertificateTemplateRequest.google.longrunning.Operation"����:*8/v1/{name=projects/*/locations/*/certificateTemplates/*}�Aname�AM
google.protobuf.Empty4google.cloud.security.privateca.v1.OperationMetadata�
GetCertificateTemplateA.google.cloud.security.privateca.v1.GetCertificateTemplateRequest7.google.cloud.security.privateca.v1.CertificateTemplate"G���:8/v1/{name=projects/*/locations/*/certificateTemplates/*}�Aname�
ListCertificateTemplatesC.google.cloud.security.privateca.v1.ListCertificateTemplatesRequestD.google.cloud.security.privateca.v1.ListCertificateTemplatesResponse"I���:8/v1/{parent=projects/*/locations/*}/certificateTemplates�Aparent�
UpdateCertificateTemplateD.google.cloud.security.privateca.v1.UpdateCertificateTemplateRequest.google.longrunning.Operation"����e2M/v1/{certificate_template.name=projects/*/locations/*/certificateTemplates/*}:certificate_template�A certificate_template,update_mask�A(
CertificateTemplateOperationMetadataL�Aprivateca.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
&com.google.cloud.security.privateca.v1BPrivateCaProtoPZKgoogle.golang.org/genproto/googleapis/cloud/security/privateca/v1;privateca��"Google.Cloud.Security.PrivateCA.V1�"Google\\Cloud\\Security\\PrivateCA\\v1�&Google::Cloud::Security::PrivateCA::v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

