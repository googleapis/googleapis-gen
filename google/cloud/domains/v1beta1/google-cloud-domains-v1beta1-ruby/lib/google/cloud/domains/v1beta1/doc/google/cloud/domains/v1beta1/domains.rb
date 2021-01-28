# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Google
  module Cloud
    module Domains
      module V1beta1
        # The `Registration` resource facilitates managing and configuring domain name
        # registrations.
        #
        #
        # To create a new `Registration` resource, find a suitable domain name by
        # calling the `SearchDomains` method with a query to see available domain name
        # options. After choosing a name, call `RetrieveRegisterParameters` to
        # ensure availability and obtain information like pricing, which is needed to
        # build a call to `RegisterDomain`.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. Name of the `Registration` resource, in the format
        #     `projects/*/locations/*/registrations/<domain_name>`.
        # @!attribute [rw] domain_name
        #   @return [String]
        #     Required. Immutable. The domain name. Unicode domain names must be expressed in Punycode format.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The creation timestamp of the `Registration` resource.
        # @!attribute [rw] expire_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The expiration timestamp of the `Registration`.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Domains::V1beta1::Registration::State]
        #     Output only. The state of the `Registration`
        # @!attribute [rw] issues
        #   @return [Array<Google::Cloud::Domains::V1beta1::Registration::Issue>]
        #     Output only. The set of issues with the `Registration` that require attention.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Set of labels associated with the `Registration`.
        # @!attribute [rw] management_settings
        #   @return [Google::Cloud::Domains::V1beta1::ManagementSettings]
        #     Settings for management of the `Registration`, including renewal, billing,
        #     and transfer. You cannot update these with the `UpdateRegistration`
        #     method. To update these settings, use the `ConfigureManagementSettings`
        #     method.
        # @!attribute [rw] dns_settings
        #   @return [Google::Cloud::Domains::V1beta1::DnsSettings]
        #     Settings controlling the DNS configuration of the `Registration`. You
        #     cannot update these with the `UpdateRegistration` method. To update these
        #     settings, use the `ConfigureDnsSettings` method.
        # @!attribute [rw] contact_settings
        #   @return [Google::Cloud::Domains::V1beta1::ContactSettings]
        #     Required. Settings for contact information linked to the `Registration`. You cannot
        #     update these with the `UpdateRegistration` method. To update these
        #     settings, use the `ConfigureContactSettings` method.
        # @!attribute [rw] pending_contact_settings
        #   @return [Google::Cloud::Domains::V1beta1::ContactSettings]
        #     Output only. Pending contact settings for the `Registration`. Updates to the
        #     `contact_settings` field that change its `registrant_contact` or `privacy`
        #     fields require email confirmation by the `registrant_contact`
        #     before taking effect. This field is set only if there are pending updates
        #     to the `contact_settings` that have not yet been confirmed. To confirm the
        #     changes, the `registrant_contact` must follow the instructions in the
        #     email they receive.
        # @!attribute [rw] supported_privacy
        #   @return [Array<Google::Cloud::Domains::V1beta1::ContactPrivacy>]
        #     Output only. Set of options for the `contact_settings.privacy` field that this
        #     `Registration` supports.
        class Registration
          # Possible issues with a `Registration` that require attention.
          module Issue
            # The issue is undefined.
            ISSUE_UNSPECIFIED = 0

            # Contact the Cloud Support team to resolve a problem with this domain.
            CONTACT_SUPPORT = 1

            # [ICANN](https://icann.org/) requires verification of the email address
            # in the `Registration`'s `contact_settings.registrant_contact` field. To
            # verify the email address, follow the
            # instructions in the email the `registrant_contact` receives following
            # registration. If you do not complete email verification within
            # 14 days of registration, the domain is suspended. To resend the
            # verification email, call ConfigureContactSettings and provide the current
            # `registrant_contact.email`.
            UNVERIFIED_EMAIL = 2
          end

          # Possible states of a `Registration`.
          module State
            # The state is undefined.
            STATE_UNSPECIFIED = 0

            # The domain is being registered.
            REGISTRATION_PENDING = 1

            # The domain registration failed. You can delete resources in this state
            # to allow registration to be retried.
            REGISTRATION_FAILED = 2

            # The domain is registered and operational. The domain renews automatically
            # as long as it remains in this state.
            ACTIVE = 6

            # The domain is suspended and inoperative. For more details, see the
            # `issues` field.
            SUSPENDED = 7

            # The domain has been exported from Cloud Domains to
            # [Google Domains](https://domains.google/). You can no longer update it
            # with this API, and information shown about it may be stale. Without further action, domains in this
            # state expire at their `expire_time`. You can delete the resource
            # after the `expire_time` has passed.
            EXPORTED = 8
          end
        end

        # Defines renewal, billing, and transfer settings for a `Registration`.
        # @!attribute [rw] renewal_method
        #   @return [Google::Cloud::Domains::V1beta1::ManagementSettings::RenewalMethod]
        #     Output only. The renewal method for this `Registration`.
        # @!attribute [rw] transfer_lock_state
        #   @return [Google::Cloud::Domains::V1beta1::TransferLockState]
        #     Controls whether the domain can be transferred to another registrar.
        class ManagementSettings
          # Defines how the `Registration` is renewed.
          module RenewalMethod
            # The renewal method is undefined.
            RENEWAL_METHOD_UNSPECIFIED = 0

            # The domain is automatically renewed each year .
            #
            # To disable automatic renewals, export the domain by calling
            # `ExportRegistration` .
            AUTOMATIC_RENEWAL = 1

            # The domain must be explicitly renewed each year before its
            # `expire_time`. This option is only available when the `Registration`
            # is in state `EXPORTED`.
            #
            # To manage the domain's current billing and
            # renewal settings, go to [Google Domains](https://domains.google/).
            MANUAL_RENEWAL = 2
          end
        end

        # Defines the DNS configuration of a `Registration`, including name servers,
        # DNSSEC, and glue records.
        # @!attribute [rw] custom_dns
        #   @return [Google::Cloud::Domains::V1beta1::DnsSettings::CustomDns]
        #     An arbitrary DNS provider identified by its name servers.
        # @!attribute [rw] google_domains_dns
        #   @return [Google::Cloud::Domains::V1beta1::DnsSettings::GoogleDomainsDns]
        #     The free DNS zone provided by
        #     [Google Domains](https://domains.google/).
        # @!attribute [rw] glue_records
        #   @return [Array<Google::Cloud::Domains::V1beta1::DnsSettings::GlueRecord>]
        #     The list of glue records for this `Registration`. Commonly empty.
        class DnsSettings
          # Configuration for an arbitrary DNS provider.
          # @!attribute [rw] name_servers
          #   @return [Array<String>]
          #     Required. A list of name servers that store the DNS zone for this domain. Each name
          #     server is a domain name, with Unicode domain names expressed in
          #     Punycode format.
          # @!attribute [rw] ds_records
          #   @return [Array<Google::Cloud::Domains::V1beta1::DnsSettings::DsRecord>]
          #     The list of DS records for this domain, which are used to enable DNSSEC.
          #     The domain's DNS provider can provide the values to set here. If this
          #     field is empty, DNSSEC is disabled.
          class CustomDns; end

          # Configuration for using the free DNS zone provided by Google Domains as a
          # `Registration`'s `dns_provider`. You cannot configure the DNS zone itself
          # using the API. To configure the DNS zone, go to
          # [Google Domains](https://domains.google/).
          # @!attribute [rw] name_servers
          #   @return [Array<String>]
          #     Output only. A list of name servers that store the DNS zone for this domain. Each name
          #     server is a domain name, with Unicode domain names expressed in
          #     Punycode format. This field is automatically populated with the name
          #     servers assigned to the Google Domains DNS zone.
          # @!attribute [rw] ds_state
          #   @return [Google::Cloud::Domains::V1beta1::DnsSettings::DsState]
          #     Required. The state of DS records for this domain. Used to enable or disable
          #     automatic DNSSEC.
          # @!attribute [rw] ds_records
          #   @return [Array<Google::Cloud::Domains::V1beta1::DnsSettings::DsRecord>]
          #     Output only. The list of DS records published for this domain. The list is
          #     automatically populated when `ds_state` is `DS_RECORDS_PUBLISHED`,
          #     otherwise it remains empty.
          class GoogleDomainsDns; end

          # Defines a Delegation Signer (DS) record, which is needed to enable DNSSEC
          # for a domain. It contains a digest (hash) of a DNSKEY record that must be
          # present in the domain's DNS zone.
          # @!attribute [rw] key_tag
          #   @return [Integer]
          #     The key tag of the record. Must be set in range 0 -- 65535.
          # @!attribute [rw] algorithm
          #   @return [Google::Cloud::Domains::V1beta1::DnsSettings::DsRecord::Algorithm]
          #     The algorithm used to generate the referenced DNSKEY.
          # @!attribute [rw] digest_type
          #   @return [Google::Cloud::Domains::V1beta1::DnsSettings::DsRecord::DigestType]
          #     The hash function used to generate the digest of the referenced DNSKEY.
          # @!attribute [rw] digest
          #   @return [String]
          #     The digest generated from the referenced DNSKEY.
          class DsRecord
            # List of algorithms used to create a DNSKEY. Certain
            # algorithms are not supported for particular domains.
            module Algorithm
              # The algorithm is unspecified.
              ALGORITHM_UNSPECIFIED = 0

              # DSA/SHA1. Not recommended for new deployments.
              DSA = 3

              # ECC. Not recommended for new deployments.
              ECC = 4

              # RSA/SHA-1. Not recommended for new deployments.
              RSASHA1 = 5

              # DSA-NSEC3-SHA1. Not recommended for new deployments.
              DSANSEC3SHA1 = 6

              # RSA/SHA1-NSEC3-SHA1. Not recommended for new deployments.
              RSASHA1NSEC3SHA1 = 7

              # RSA/SHA-256.
              RSASHA256 = 8

              # RSA/SHA-512.
              RSASHA512 = 10

              # GOST R 34.10-2001.
              ECCGOST = 12

              # ECDSA Curve P-256 with SHA-256.
              ECDSAP256SHA256 = 13

              # ECDSA Curve P-384 with SHA-384.
              ECDSAP384SHA384 = 14

              # Ed25519.
              ED25519 = 15

              # Ed448.
              ED448 = 16
            end

            # List of hash functions that may have been used to generate a digest of a
            # DNSKEY.
            module DigestType
              # The DigestType is unspecified.
              DIGEST_TYPE_UNSPECIFIED = 0

              # SHA-1. Not recommended for new deployments.
              SHA1 = 1

              # SHA-256.
              SHA256 = 2

              # GOST R 34.11-94.
              GOST3411 = 3

              # SHA-384.
              SHA384 = 4
            end
          end

          # Defines a host on your domain that is a DNS name server for your domain
          # and/or other domains. Glue records are a way of making the IP address of a
          # name server known, even when it serves DNS queries for its parent domain.
          # For example, when `ns.example.com` is a name server for `example.com`, the
          # host `ns.example.com` must have a glue record to break the circular DNS
          # reference.
          # @!attribute [rw] host_name
          #   @return [String]
          #     Required. Domain name of the host in Punycode format.
          # @!attribute [rw] ipv4_addresses
          #   @return [Array<String>]
          #     List of IPv4 addresses corresponding to this host in the standard decimal
          #     format (e.g. `198.51.100.1`). At least one of `ipv4_address` and
          #     `ipv6_address` must be set.
          # @!attribute [rw] ipv6_addresses
          #   @return [Array<String>]
          #     List of IPv6 addresses corresponding to this host in the standard
          #     hexadecimal format (e.g. `2001:db8::`). At least one of
          #     `ipv4_address` and `ipv6_address` must be set.
          class GlueRecord; end

          # The publication state of DS records for a `Registration`.
          module DsState
            # DS state is unspecified.
            DS_STATE_UNSPECIFIED = 0

            # DNSSEC is disabled for this domain. No DS records for this domain are
            # published in the parent DNS zone.
            DS_RECORDS_UNPUBLISHED = 1

            # DNSSEC is enabled for this domain. Appropriate DS records for this domain
            # are published in the parent DNS zone. This option is valid only if the
            # DNS zone referenced in the `Registration`'s `dns_provider` field is
            # already DNSSEC-signed.
            DS_RECORDS_PUBLISHED = 2
          end
        end

        # Defines the contact information associated with a `Registration`.
        #
        # [ICANN](https://icann.org/) requires all domain names to have associated
        # contact information. The `registrant_contact` is considered the
        # domain's legal owner, and often the other contacts are identical.
        # @!attribute [rw] privacy
        #   @return [Google::Cloud::Domains::V1beta1::ContactPrivacy]
        #     Required. Privacy setting for the contacts associated with the `Registration`.
        # @!attribute [rw] registrant_contact
        #   @return [Google::Cloud::Domains::V1beta1::ContactSettings::Contact]
        #     Required. The registrant contact for the `Registration`.
        #
        #     *Caution: Anyone with access to this email address, phone number,
        #     and/or postal address can take control of the domain.*
        #
        #     *Warning: For new `Registration`s, the registrant will receive an email
        #     confirmation that they must complete within 14 days to avoid domain
        #     suspension.*
        # @!attribute [rw] admin_contact
        #   @return [Google::Cloud::Domains::V1beta1::ContactSettings::Contact]
        #     Required. The administrative contact for the `Registration`.
        # @!attribute [rw] technical_contact
        #   @return [Google::Cloud::Domains::V1beta1::ContactSettings::Contact]
        #     Required. The technical contact for the `Registration`.
        class ContactSettings
          # Details required for a contact associated with a `Registration`.
          # @!attribute [rw] postal_address
          #   @return [Google::Type::PostalAddress]
          #     Required. Postal address of the contact.
          # @!attribute [rw] email
          #   @return [String]
          #     Required. Email address of the contact.
          # @!attribute [rw] phone_number
          #   @return [String]
          #     Required. Phone number of the contact in international format. For example,
          #     `"+1-800-555-0123"`.
          # @!attribute [rw] fax_number
          #   @return [String]
          #     Fax number of the contact in international format. For example,
          #     `"+1-800-555-0123"`.
          class Contact; end
        end

        # Request for the `SearchDomains` method.
        # @!attribute [rw] query
        #   @return [String]
        #     Required. String used to search for available domain names.
        # @!attribute [rw] location
        #   @return [String]
        #     Required. The location. Must be in the format `projects/*/locations/*`.
        class SearchDomainsRequest; end

        # Response for the `SearchDomains` method.
        # @!attribute [rw] register_parameters
        #   @return [Array<Google::Cloud::Domains::V1beta1::RegisterParameters>]
        #     Results of the domain name search.
        class SearchDomainsResponse; end

        # Request for the `RetrieveRegisterParameters` method.
        # @!attribute [rw] domain_name
        #   @return [String]
        #     Required. The domain name. Unicode domain names must be expressed in Punycode format.
        # @!attribute [rw] location
        #   @return [String]
        #     Required. The location. Must be in the format `projects/*/locations/*`.
        class RetrieveRegisterParametersRequest; end

        # Response for the `RetrieveRegisterParameters` method.
        # @!attribute [rw] register_parameters
        #   @return [Google::Cloud::Domains::V1beta1::RegisterParameters]
        #     Parameters to use when calling the `RegisterDomain` method.
        class RetrieveRegisterParametersResponse; end

        # Request for the `RegisterDomain` method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent resource of the `Registration`. Must be in the
        #     format `projects/*/locations/*`.
        # @!attribute [rw] registration
        #   @return [Google::Cloud::Domains::V1beta1::Registration]
        #     Required. The complete `Registration` resource to be created.
        # @!attribute [rw] domain_notices
        #   @return [Array<Google::Cloud::Domains::V1beta1::DomainNotice>]
        #     The list of domain notices that you acknowledge. Call
        #     `RetrieveRegisterParameters` to see the notices that need acknowledgement.
        # @!attribute [rw] contact_notices
        #   @return [Array<Google::Cloud::Domains::V1beta1::ContactNotice>]
        #     The list of contact notices that the caller acknowledges. The notices
        #     required here depend on the values specified in
        #     `registration.contact_settings`.
        # @!attribute [rw] yearly_price
        #   @return [Google::Type::Money]
        #     Required. Yearly price to register or renew the domain.
        #     The value that should be put here can be obtained from
        #     RetrieveRegisterParameters or SearchDomains calls.
        # @!attribute [rw] validate_only
        #   @return [true, false]
        #     When true, only validation will be performed, without actually registering
        #     the domain. Follows:
        #     https://cloud.google.com/apis/design/design_patterns#request_validation
        class RegisterDomainRequest; end

        # Request for the `ListRegistrations` method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The project and location from which to list `Registration`s, specified in
        #     the format `projects/*/locations/*`.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Maximum number of results to return.
        # @!attribute [rw] page_token
        #   @return [String]
        #     When set to the `next_page_token` from a prior response, provides the next
        #     page of results.
        # @!attribute [rw] filter
        #   @return [String]
        #     Filter expression to restrict the `Registration`s returned.
        #
        #     The expression must specify the field name, a comparison operator, and the
        #     value that you want to use for filtering. The value must be a string, a
        #     number, a boolean, or an enum value. The comparison operator should be one
        #     of =, !=, >, <, >=, <=, or : for prefix or wildcard matches.
        #
        #     For example, to filter to a specific domain name, use an expression like
        #     `domainName="example.com"`. You can also check for the existence of a
        #     field; for example, to find domains using custom DNS settings, use an
        #     expression like `dnsSettings.customDns:*`.
        #
        #     You can also create compound filters by combining expressions with the
        #     `AND` and `OR` operators. For example, to find domains that are suspended
        #     or have specific issues flagged, use an expression like
        #     `(state=SUSPENDED) OR (issue:*)`.
        class ListRegistrationsRequest; end

        # Response for the `ListRegistrations` method.
        # @!attribute [rw] registrations
        #   @return [Array<Google::Cloud::Domains::V1beta1::Registration>]
        #     A list of `Registration`s.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     When present, there are more results to retrieve. Set `page_token` to this
        #     value on a subsequent call to get the next page of results.
        class ListRegistrationsResponse; end

        # Request for the `GetRegistration` method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the `Registration` to get, in the format
        #     `projects/*/locations/*/registrations/*`.
        class GetRegistrationRequest; end

        # Request for the `UpdateRegistration` method.
        # @!attribute [rw] registration
        #   @return [Google::Cloud::Domains::V1beta1::Registration]
        #     Fields of the `Registration` to update.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. The field mask describing which fields to update as a comma-separated list.
        #     For example, if only the labels are being updated, the `update_mask` would
        #     be `"labels"`.
        class UpdateRegistrationRequest; end

        # Request for the `ConfigureManagementSettings` method.
        # @!attribute [rw] registration
        #   @return [String]
        #     Required. The name of the `Registration` whose management settings are being updated,
        #     in the format `projects/*/locations/*/registrations/*`.
        # @!attribute [rw] management_settings
        #   @return [Google::Cloud::Domains::V1beta1::ManagementSettings]
        #     Fields of the `ManagementSettings` to update.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. The field mask describing which fields to update as a comma-separated list.
        #     For example, if only the transfer lock is being updated, the `update_mask`
        #     would be `"transfer_lock_state"`.
        class ConfigureManagementSettingsRequest; end

        # Request for the `ConfigureDnsSettings` method.
        # @!attribute [rw] registration
        #   @return [String]
        #     Required. The name of the `Registration` whose DNS settings are being updated,
        #     in the format `projects/*/locations/*/registrations/*`.
        # @!attribute [rw] dns_settings
        #   @return [Google::Cloud::Domains::V1beta1::DnsSettings]
        #     Fields of the `DnsSettings` to update.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. The field mask describing which fields to update as a comma-separated list.
        #     For example, if only the name servers are being updated for an existing
        #     Custom DNS configuration, the `update_mask` would be
        #     `"custom_dns.name_servers"`.
        #
        #     When changing the DNS provider from one type to another, pass the new
        #     provider's field name as part of the field mask. For example, when changing
        #     from a Google Domains DNS configuration to a Custom DNS configuration, the
        #     `update_mask` would be `"custom_dns"`. //
        # @!attribute [rw] validate_only
        #   @return [true, false]
        #     Validate the request without actually updating the DNS settings.
        class ConfigureDnsSettingsRequest; end

        # Request for the `ConfigureContactSettings` method.
        # @!attribute [rw] registration
        #   @return [String]
        #     Required. The name of the `Registration` whose contact settings are being updated,
        #     in the format `projects/*/locations/*/registrations/*`.
        # @!attribute [rw] contact_settings
        #   @return [Google::Cloud::Domains::V1beta1::ContactSettings]
        #     Fields of the `ContactSettings` to update.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. The field mask describing which fields to update as a comma-separated list.
        #     For example, if only the registrant contact is being updated, the
        #     `update_mask` would be `"registrant_contact"`.
        # @!attribute [rw] contact_notices
        #   @return [Array<Google::Cloud::Domains::V1beta1::ContactNotice>]
        #     The list of contact notices that the caller acknowledges. The notices
        #     required here depend on the values specified in `contact_settings`.
        # @!attribute [rw] validate_only
        #   @return [true, false]
        #     Validate the request without actually updating the contact settings.
        class ConfigureContactSettingsRequest; end

        # Request for the `ExportRegistration` method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the `Registration` to export,
        #     in the format `projects/*/locations/*/registrations/*`.
        class ExportRegistrationRequest; end

        # Request for the `DeleteRegistration` method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the `Registration` to delete,
        #     in the format `projects/*/locations/*/registrations/*`.
        class DeleteRegistrationRequest; end

        # Request for the `RetrieveAuthorizationCode` method.
        # @!attribute [rw] registration
        #   @return [String]
        #     Required. The name of the `Registration` whose authorization code is being retrieved,
        #     in the format `projects/*/locations/*/registrations/*`.
        class RetrieveAuthorizationCodeRequest; end

        # Request for the `ResetAuthorizationCode` method.
        # @!attribute [rw] registration
        #   @return [String]
        #     Required. The name of the `Registration` whose authorization code is being reset,
        #     in the format `projects/*/locations/*/registrations/*`.
        class ResetAuthorizationCodeRequest; end

        # Parameters required to register a new domain.
        # @!attribute [rw] domain_name
        #   @return [String]
        #     The domain name. Unicode domain names are expressed in Punycode format.
        # @!attribute [rw] availability
        #   @return [Google::Cloud::Domains::V1beta1::RegisterParameters::Availability]
        #     Indicates whether the domain is available for registration. This value is
        #     accurate when obtained by calling `RetrieveRegisterParameters`, but is
        #     approximate when obtained by calling `SearchDomains`.
        # @!attribute [rw] supported_privacy
        #   @return [Array<Google::Cloud::Domains::V1beta1::ContactPrivacy>]
        #     Contact privacy options that the domain supports.
        # @!attribute [rw] domain_notices
        #   @return [Array<Google::Cloud::Domains::V1beta1::DomainNotice>]
        #     Notices about special properties of the domain.
        # @!attribute [rw] yearly_price
        #   @return [Google::Type::Money]
        #     Price to register or renew the domain for one year.
        class RegisterParameters
          # Possible availability states of a domain name.
          module Availability
            # The availability is unspecified.
            AVAILABILITY_UNSPECIFIED = 0

            # The domain is available for registration.
            AVAILABLE = 1

            # The domain is not available for registration. Generally this means it is
            # already registered to another party.
            UNAVAILABLE = 2

            # The domain is not currently supported by Cloud Domains, but may
            # be available elsewhere.
            UNSUPPORTED = 3

            # Cloud Domains is unable to determine domain availability, generally
            # due to system maintenance at the domain name registry.
            UNKNOWN = 4
          end
        end

        # Defines an authorization code.
        # @!attribute [rw] code
        #   @return [String]
        #     The Authorization Code in ASCII. It can be used to transfer the domain
        #     to or from another registrar.
        class AuthorizationCode; end

        # Represents the metadata of the long-running operation. Output only.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     The time the operation was created.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     The time the operation finished running.
        # @!attribute [rw] target
        #   @return [String]
        #     Server-defined resource path for the target of the operation.
        # @!attribute [rw] verb
        #   @return [String]
        #     Name of the verb executed by the operation.
        # @!attribute [rw] status_detail
        #   @return [String]
        #     Human-readable status of the operation, if any.
        # @!attribute [rw] api_version
        #   @return [String]
        #     API version used to start the operation.
        class OperationMetadata; end

        # Notices related to contact information.
        module ContactNotice
          # The notice is undefined.
          CONTACT_NOTICE_UNSPECIFIED = 0

          # Required when setting the `privacy` field of `ContactSettings` to
          # `PUBLIC_CONTACT_DATA`, which exposes contact data publicly.
          PUBLIC_CONTACT_DATA_ACKNOWLEDGEMENT = 1
        end

        # Defines a set of possible contact privacy settings for a `Registration`.
        #
        # [ICANN](https://icann.org/) maintains the WHOIS database, a publicly
        # accessible mapping from domain name to contact information, and requires that
        # each domain name have an entry. Choose from these options to control how much
        # information in your `ContactSettings` is published.
        module ContactPrivacy
          # The contact privacy settings are undefined.
          CONTACT_PRIVACY_UNSPECIFIED = 0

          # All the data from `ContactSettings` is publicly available. When setting
          # this option, you must also provide a
          # `PUBLIC_CONTACT_DATA_ACKNOWLEDGEMENT` in the `contact_notices` field of the
          # request.
          PUBLIC_CONTACT_DATA = 1

          # None of the data from `ContactSettings` is publicly available. Instead,
          # proxy contact data is published for your domain. Email sent to the proxy
          # email address is forwarded to the registrant's email address. Cloud Domains
          # provides this privacy proxy service at no additional cost.
          PRIVATE_CONTACT_DATA = 2

          # Some data from `ContactSettings` is publicly available. The actual
          # information redacted depends on the domain. For details, see [the
          # registration privacy
          # article](https://support.google.com/domains/answer/3251242).
          REDACTED_CONTACT_DATA = 3
        end

        # Notices about special properties of certain domains.
        module DomainNotice
          # The notice is undefined.
          DOMAIN_NOTICE_UNSPECIFIED = 0

          # Indicates that the domain is preloaded on the HTTP Strict Transport
          # Security list in browsers. Serving a website on such domain requires
          # an SSL certificate. For details, see
          # [how to get an SSL
          # certificate](https://support.google.com/domains/answer/7638036).
          HSTS_PRELOADED = 1
        end

        # Possible states of a `Registration`'s transfer lock.
        module TransferLockState
          # The state is unspecified.
          TRANSFER_LOCK_STATE_UNSPECIFIED = 0

          # The domain is unlocked and can be transferred to another registrar.
          UNLOCKED = 1

          # The domain is locked and cannot be transferred to another registrar.
          LOCKED = 2
        end
      end
    end
  end
end