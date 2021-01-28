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
    module Managedidentities
      module V1beta1
        # Represents a managed Microsoft Active Directory domain.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. The unique name of the domain using the form:
        #     `projects/{project_id}/locations/global/domains/{domain_name}`.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Optional. Resource labels that can contain user-provided metadata.
        # @!attribute [rw] authorized_networks
        #   @return [Array<String>]
        #     Optional. The full names of the Google Compute Engine
        #     [networks](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) the domain
        #     instance is connected to. Networks can be added using UpdateDomain.
        #     The domain is only available on networks listed in `authorized_networks`.
        #     If CIDR subnets overlap between networks, domain creation will fail.
        # @!attribute [rw] reserved_ip_range
        #   @return [String]
        #     Required. The CIDR range of internal addresses that are reserved for this
        #     domain. Reserved networks must be /24 or larger. Ranges must be
        #     unique and non-overlapping with existing subnets in
        #     [Domain].[authorized_networks].
        # @!attribute [rw] locations
        #   @return [Array<String>]
        #     Required. Locations where domain needs to be provisioned.
        #     [regions][compute/docs/regions-zones/]
        #     e.g. us-west1 or us-east4
        #     Service supports up to 4 locations at once. Each location will use a /26
        #     block.
        # @!attribute [rw] admin
        #   @return [String]
        #     Optional. The name of delegated administrator account used to perform
        #     Active Directory operations. If not specified, `setupadmin` will be used.
        # @!attribute [rw] fqdn
        #   @return [String]
        #     Output only. The fully-qualified domain name of the exposed domain used by
        #     clients to connect to the service. Similar to what would be chosen for an
        #     Active Directory set up on an internal network.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the instance was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The last update time.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Managedidentities::V1beta1::Domain::State]
        #     Output only. The current state of this domain.
        # @!attribute [rw] status_message
        #   @return [String]
        #     Output only. Additional information about the current status of this
        #     domain, if available.
        # @!attribute [rw] trusts
        #   @return [Array<Google::Cloud::Managedidentities::V1beta1::Trust>]
        #     Output only. The current trusts associated with the domain.
        class Domain
          # Represents the different states of a managed domain.
          module State
            # Not set.
            STATE_UNSPECIFIED = 0

            # The domain is being created.
            CREATING = 1

            # The domain has been created and is fully usable.
            READY = 2

            # The domain's configuration is being updated.
            UPDATING = 3

            # The domain is being deleted.
            DELETING = 4

            # The domain is being repaired and may be unusable. Details
            # can be found in the `status_message` field.
            REPAIRING = 5

            # The domain is undergoing maintenance.
            PERFORMING_MAINTENANCE = 6

            # The domain is not serving requests.
            UNAVAILABLE = 7
          end
        end

        # Represents a relationship between two domains. This allows a controller in
        # one domain to authenticate a user in another domain.
        # @!attribute [rw] target_domain_name
        #   @return [String]
        #     The fully qualified target domain name which will be in trust with the
        #     current domain.
        # @!attribute [rw] trust_type
        #   @return [Google::Cloud::Managedidentities::V1beta1::Trust::TrustType]
        #     The type of trust represented by the trust resource.
        # @!attribute [rw] trust_direction
        #   @return [Google::Cloud::Managedidentities::V1beta1::Trust::TrustDirection]
        #     The trust direction, which decides if the current domain is trusted,
        #     trusting, or both.
        # @!attribute [rw] selective_authentication
        #   @return [true, false]
        #     The trust authentication type, which decides whether the trusted side has
        #     forest/domain wide access or selective access to an approved set of
        #     resources.
        # @!attribute [rw] target_dns_ip_addresses
        #   @return [Array<String>]
        #     The target DNS server IP addresses which can resolve the remote domain
        #     involved in the trust.
        # @!attribute [rw] trust_handshake_secret
        #   @return [String]
        #     Input only, and will not be stored. The trust secret used for the handshake
        #     with the target domain.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the instance was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The last update time.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Managedidentities::V1beta1::Trust::State]
        #     Output only. The current state of the trust.
        # @!attribute [rw] state_description
        #   @return [String]
        #     Output only. Additional information about the current state of the
        #     trust, if available.
        # @!attribute [rw] last_trust_heartbeat_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The last heartbeat time when the trust was known to be
        #     connected.
        class Trust
          # Represents the different states of a domain trust.
          module State
            # Not set.
            STATE_UNSPECIFIED = 0

            # The domain trust is being created.
            CREATING = 1

            # The domain trust is being updated.
            UPDATING = 2

            # The domain trust is being deleted.
            DELETING = 3

            # The domain trust is connected.
            CONNECTED = 4

            # The domain trust is disconnected.
            DISCONNECTED = 5
          end

          # Represents the direction of trust.
          # See
          # [System.DirectoryServices.ActiveDirectory.TrustDirection](https://docs.microsoft.com/en-us/dotnet/api/system.directoryservices.activedirectory.trustdirection?view=netframework-4.7.2)
          # for more information.
          module TrustDirection
            # Not set.
            TRUST_DIRECTION_UNSPECIFIED = 0

            # The inbound direction represents the trusting side.
            INBOUND = 1

            # The outboud direction represents the trusted side.
            OUTBOUND = 2

            # The bidirectional direction represents the trusted / trusting side.
            BIDIRECTIONAL = 3
          end

          # Represents the different inter-forest trust types.
          module TrustType
            # Not set.
            TRUST_TYPE_UNSPECIFIED = 0

            # The forest trust.
            FOREST = 1

            # The external domain trust.
            EXTERNAL = 2
          end
        end
      end
    end
  end
end