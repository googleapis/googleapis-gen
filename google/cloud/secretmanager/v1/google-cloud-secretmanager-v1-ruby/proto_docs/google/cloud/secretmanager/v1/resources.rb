# frozen_string_literal: true

# Copyright 2021 Google LLC
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

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Cloud
    module SecretManager
      module V1
        # A {::Google::Cloud::SecretManager::V1::Secret Secret} is a logical secret whose value and versions can
        # be accessed.
        #
        # A {::Google::Cloud::SecretManager::V1::Secret Secret} is made up of zero or more {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersions} that
        # represent the secret data.
        # @!attribute [r] name
        #   @return [::String]
        #     Output only. The resource name of the {::Google::Cloud::SecretManager::V1::Secret Secret} in the format `projects/*/secrets/*`.
        # @!attribute [rw] replication
        #   @return [::Google::Cloud::SecretManager::V1::Replication]
        #     Required. Immutable. The replication policy of the secret data attached to the {::Google::Cloud::SecretManager::V1::Secret Secret}.
        #
        #     The replication policy cannot be changed after the Secret has been created.
        # @!attribute [r] create_time
        #   @return [::Google::Protobuf::Timestamp]
        #     Output only. The time at which the {::Google::Cloud::SecretManager::V1::Secret Secret} was created.
        # @!attribute [rw] labels
        #   @return [::Google::Protobuf::Map{::String => ::String}]
        #     The labels assigned to this Secret.
        #
        #     Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
        #     of maximum 128 bytes, and must conform to the following PCRE regular
        #     expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
        #
        #     Label values must be between 0 and 63 characters long, have a UTF-8
        #     encoding of maximum 128 bytes, and must conform to the following PCRE
        #     regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
        #
        #     No more than 64 labels can be assigned to a given resource.
        # @!attribute [rw] topics
        #   @return [::Array<::Google::Cloud::SecretManager::V1::Topic>]
        #     Optional. A list of up to 10 Pub/Sub topics to which messages are published when
        #     control plane operations are called on the secret or its versions.
        # @!attribute [rw] expire_time
        #   @return [::Google::Protobuf::Timestamp]
        #     Optional. Timestamp in UTC when the {::Google::Cloud::SecretManager::V1::Secret Secret} is scheduled to expire. This is
        #     always provided on output, regardless of what was sent on input.
        # @!attribute [rw] ttl
        #   @return [::Google::Protobuf::Duration]
        #     Input only. The TTL for the {::Google::Cloud::SecretManager::V1::Secret Secret}.
        class Secret
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods

          # @!attribute [rw] key
          #   @return [::String]
          # @!attribute [rw] value
          #   @return [::String]
          class LabelsEntry
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end

        # A secret version resource in the Secret Manager API.
        # @!attribute [r] name
        #   @return [::String]
        #     Output only. The resource name of the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} in the
        #     format `projects/*/secrets/*/versions/*`.
        #
        #     {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} IDs in a {::Google::Cloud::SecretManager::V1::Secret Secret} start at 1 and
        #     are incremented for each subsequent version of the secret.
        # @!attribute [r] create_time
        #   @return [::Google::Protobuf::Timestamp]
        #     Output only. The time at which the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} was created.
        # @!attribute [r] destroy_time
        #   @return [::Google::Protobuf::Timestamp]
        #     Output only. The time this {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} was destroyed.
        #     Only present if {::Google::Cloud::SecretManager::V1::SecretVersion#state state} is
        #     {::Google::Cloud::SecretManager::V1::SecretVersion::State::DESTROYED DESTROYED}.
        # @!attribute [r] state
        #   @return [::Google::Cloud::SecretManager::V1::SecretVersion::State]
        #     Output only. The current state of the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}.
        # @!attribute [rw] replication_status
        #   @return [::Google::Cloud::SecretManager::V1::ReplicationStatus]
        #     The replication status of the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}.
        class SecretVersion
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods

          # The state of a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}, indicating if it can be accessed.
          module State
            # Not specified. This value is unused and invalid.
            STATE_UNSPECIFIED = 0

            # The {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} may be accessed.
            ENABLED = 1

            # The {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} may not be accessed, but the secret data
            # is still available and can be placed back into the {::Google::Cloud::SecretManager::V1::SecretVersion::State::ENABLED ENABLED}
            # state.
            DISABLED = 2

            # The {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} is destroyed and the secret data is no longer
            # stored. A version may not leave this state once entered.
            DESTROYED = 3
          end
        end

        # A policy that defines the replication and encryption configuration of data.
        # @!attribute [rw] automatic
        #   @return [::Google::Cloud::SecretManager::V1::Replication::Automatic]
        #     The {::Google::Cloud::SecretManager::V1::Secret Secret} will automatically be replicated without any restrictions.
        # @!attribute [rw] user_managed
        #   @return [::Google::Cloud::SecretManager::V1::Replication::UserManaged]
        #     The {::Google::Cloud::SecretManager::V1::Secret Secret} will only be replicated into the locations specified.
        class Replication
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods

          # A replication policy that replicates the {::Google::Cloud::SecretManager::V1::Secret Secret} payload without any
          # restrictions.
          # @!attribute [rw] customer_managed_encryption
          #   @return [::Google::Cloud::SecretManager::V1::CustomerManagedEncryption]
          #     Optional. The customer-managed encryption configuration of the {::Google::Cloud::SecretManager::V1::Secret Secret}. If no
          #     configuration is provided, Google-managed default encryption is used.
          #
          #     Updates to the {::Google::Cloud::SecretManager::V1::Secret Secret} encryption configuration only apply to
          #     {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersions} added afterwards. They do not apply
          #     retroactively to existing {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersions}.
          class Automatic
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A replication policy that replicates the {::Google::Cloud::SecretManager::V1::Secret Secret} payload into the
          # locations specified in [Secret.replication.user_managed.replicas][]
          # @!attribute [rw] replicas
          #   @return [::Array<::Google::Cloud::SecretManager::V1::Replication::UserManaged::Replica>]
          #     Required. The list of Replicas for this {::Google::Cloud::SecretManager::V1::Secret Secret}.
          #
          #     Cannot be empty.
          class UserManaged
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Represents a Replica for this {::Google::Cloud::SecretManager::V1::Secret Secret}.
            # @!attribute [rw] location
            #   @return [::String]
            #     The canonical IDs of the location to replicate data.
            #     For example: `"us-east1"`.
            # @!attribute [rw] customer_managed_encryption
            #   @return [::Google::Cloud::SecretManager::V1::CustomerManagedEncryption]
            #     Optional. The customer-managed encryption configuration of the [User-Managed
            #     Replica][Replication.UserManaged.Replica]. If no configuration is
            #     provided, Google-managed default encryption is used.
            #
            #     Updates to the {::Google::Cloud::SecretManager::V1::Secret Secret} encryption configuration only apply to
            #     {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersions} added afterwards. They do not apply
            #     retroactively to existing {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersions}.
            class Replica
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end
          end
        end

        # Configuration for encrypting secret payloads using customer-managed
        # encryption keys (CMEK).
        # @!attribute [rw] kms_key_name
        #   @return [::String]
        #     Required. The resource name of the Cloud KMS CryptoKey used to encrypt secret
        #     payloads.
        #
        #     For secrets using the {::Google::Cloud::SecretManager::V1::Replication::UserManaged UserManaged} replication
        #     policy type, Cloud KMS CryptoKeys must reside in the same location as the
        #     [replica location][Secret.UserManaged.Replica.location].
        #
        #     For secrets using the {::Google::Cloud::SecretManager::V1::Replication::Automatic Automatic} replication policy
        #     type, Cloud KMS CryptoKeys must reside in `global`.
        #
        #     The expected format is `projects/*/locations/*/keyRings/*/cryptoKeys/*`.
        class CustomerManagedEncryption
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # The replication status of a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}.
        # @!attribute [rw] automatic
        #   @return [::Google::Cloud::SecretManager::V1::ReplicationStatus::AutomaticStatus]
        #     Describes the replication status of a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} with
        #     automatic replication.
        #
        #     Only populated if the parent {::Google::Cloud::SecretManager::V1::Secret Secret} has an automatic replication
        #     policy.
        # @!attribute [rw] user_managed
        #   @return [::Google::Cloud::SecretManager::V1::ReplicationStatus::UserManagedStatus]
        #     Describes the replication status of a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} with
        #     user-managed replication.
        #
        #     Only populated if the parent {::Google::Cloud::SecretManager::V1::Secret Secret} has a user-managed replication
        #     policy.
        class ReplicationStatus
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods

          # The replication status of a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} using automatic replication.
          #
          # Only populated if the parent {::Google::Cloud::SecretManager::V1::Secret Secret} has an automatic replication
          # policy.
          # @!attribute [r] customer_managed_encryption
          #   @return [::Google::Cloud::SecretManager::V1::CustomerManagedEncryptionStatus]
          #     Output only. The customer-managed encryption status of the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}. Only
          #     populated if customer-managed encryption is used.
          class AutomaticStatus
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The replication status of a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion} using user-managed
          # replication.
          #
          # Only populated if the parent {::Google::Cloud::SecretManager::V1::Secret Secret} has a user-managed replication
          # policy.
          # @!attribute [r] replicas
          #   @return [::Array<::Google::Cloud::SecretManager::V1::ReplicationStatus::UserManagedStatus::ReplicaStatus>]
          #     Output only. The list of replica statuses for the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}.
          class UserManagedStatus
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Describes the status of a user-managed replica for the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}.
            # @!attribute [r] location
            #   @return [::String]
            #     Output only. The canonical ID of the replica location.
            #     For example: `"us-east1"`.
            # @!attribute [r] customer_managed_encryption
            #   @return [::Google::Cloud::SecretManager::V1::CustomerManagedEncryptionStatus]
            #     Output only. The customer-managed encryption status of the {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}. Only
            #     populated if customer-managed encryption is used.
            class ReplicaStatus
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end
          end
        end

        # Describes the status of customer-managed encryption.
        # @!attribute [rw] kms_key_version_name
        #   @return [::String]
        #     Required. The resource name of the Cloud KMS CryptoKeyVersion used to encrypt the
        #     secret payload, in the following format:
        #     `projects/*/locations/*/keyRings/*/cryptoKeys/*/versions/*`.
        class CustomerManagedEncryptionStatus
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # A Pub/Sub topic which Secret Manager will publish to when control plane
        # events occur on this secret.
        # @!attribute [rw] name
        #   @return [::String]
        #     Required. The resource name of the Pub/Sub topic that will be published to, in the
        #     following format: `projects/*/topics/*`. For publication to succeed, the
        #     Secret Manager P4SA must have `pubsub.publisher` permissions on the topic.
        class Topic
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # A secret payload resource in the Secret Manager API. This contains the
        # sensitive secret payload that is associated with a {::Google::Cloud::SecretManager::V1::SecretVersion SecretVersion}.
        # @!attribute [rw] data
        #   @return [::String]
        #     The secret data. Must be no larger than 64KiB.
        class SecretPayload
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end
      end
    end
  end
end
