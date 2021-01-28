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
  module Storage
    module V1
      # A bucket.
      # @!attribute [rw] acl
      #   @return [Array<Google::Storage::V1::BucketAccessControl>]
      #     Access controls on the bucket.
      # @!attribute [rw] default_object_acl
      #   @return [Array<Google::Storage::V1::ObjectAccessControl>]
      #     Default access controls to apply to new objects when no ACL is provided.
      # @!attribute [rw] lifecycle
      #   @return [Google::Storage::V1::Bucket::Lifecycle]
      #     The bucket's lifecycle configuration. See
      #     [https://developers.google.com/storage/docs/lifecycle]Lifecycle Management]
      #     for more information.
      # @!attribute [rw] time_created
      #   @return [Google::Protobuf::Timestamp]
      #     The creation time of the bucket in
      #     [https://tools.ietf.org/html/rfc3339][RFC 3339] format.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] id
      #   @return [String]
      #     The ID of the bucket. For buckets, the `id` and `name` properties are the
      #     same.
      #     Attempting to update this field after the bucket is created will result in
      #     an error.
      # @!attribute [rw] name
      #   @return [String]
      #     The name of the bucket.
      #     Attempting to update this field after the bucket is created will result in
      #     an error.
      # @!attribute [rw] project_number
      #   @return [Integer]
      #     The project number of the project the bucket belongs to.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] metageneration
      #   @return [Integer]
      #     The metadata generation of this bucket.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] cors
      #   @return [Array<Google::Storage::V1::Bucket::Cors>]
      #     The bucket's [https://www.w3.org/TR/cors/][Cross-Origin Resource Sharing]
      #     (CORS) configuration.
      # @!attribute [rw] location
      #   @return [String]
      #     The location of the bucket. Object data for objects in the bucket resides
      #     in physical storage within this region.  Defaults to `US`. See the
      #     [https://developers.google.com/storage/docs/concepts-techniques#specifyinglocations"][developer's
      #     guide] for the authoritative list. Attempting to update this field after
      #     the bucket is created will result in an error.
      # @!attribute [rw] storage_class
      #   @return [String]
      #     The bucket's default storage class, used whenever no storageClass is
      #     specified for a newly-created object. This defines how objects in the
      #     bucket are stored and determines the SLA and the cost of storage.
      #     If this value is not specified when the bucket is created, it will default
      #     to `STANDARD`. For more information, see
      #     https://developers.google.com/storage/docs/storage-classes.
      # @!attribute [rw] etag
      #   @return [String]
      #     HTTP 1.1 [https://tools.ietf.org/html/rfc7232#section-2.3"]Entity tag]
      #     for the bucket.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] updated
      #   @return [Google::Protobuf::Timestamp]
      #     The modification time of the bucket.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] default_event_based_hold
      #   @return [true, false]
      #     The default value for event-based hold on newly created objects in this
      #     bucket.  Event-based hold is a way to retain objects indefinitely until an
      #     event occurs, signified by the
      #     hold's release. After being released, such objects will be subject to
      #     bucket-level retention (if any).  One sample use case of this flag is for
      #     banks to hold loan documents for at least 3 years after loan is paid in
      #     full. Here, bucket-level retention is 3 years and the event is loan being
      #     paid in full. In this example, these objects will be held intact for any
      #     number of years until the event has occurred (event-based hold on the
      #     object is released) and then 3 more years after that. That means retention
      #     duration of the objects begins from the moment event-based hold
      #     transitioned from true to false.  Objects under event-based hold cannot be
      #     deleted, overwritten or archived until the hold is removed.
      # @!attribute [rw] labels
      #   @return [Hash{String => String}]
      #     User-provided labels, in key/value pairs.
      # @!attribute [rw] website
      #   @return [Google::Storage::V1::Bucket::Website]
      #     The bucket's website configuration, controlling how the service behaves
      #     when accessing bucket contents as a web site. See the
      #     [https://cloud.google.com/storage/docs/static-website][Static Website
      #     Examples] for more information.
      # @!attribute [rw] versioning
      #   @return [Google::Storage::V1::Bucket::Versioning]
      #     The bucket's versioning configuration.
      # @!attribute [rw] logging
      #   @return [Google::Storage::V1::Bucket::Logging]
      #     The bucket's logging configuration, which defines the destination bucket
      #     and optional name prefix for the current bucket's logs.
      # @!attribute [rw] owner
      #   @return [Google::Storage::V1::Owner]
      #     The owner of the bucket. This is always the project team's owner group.
      # @!attribute [rw] encryption
      #   @return [Google::Storage::V1::Bucket::Encryption]
      #     Encryption configuration for a bucket.
      # @!attribute [rw] billing
      #   @return [Google::Storage::V1::Bucket::Billing]
      #     The bucket's billing configuration.
      # @!attribute [rw] retention_policy
      #   @return [Google::Storage::V1::Bucket::RetentionPolicy]
      #     The bucket's retention policy. The retention policy enforces a minimum
      #     retention time for all objects contained in the bucket, based on their
      #     creation time. Any attempt to overwrite or delete objects younger than the
      #     retention period will result in a PERMISSION_DENIED error.  An unlocked
      #     retention policy can be modified or removed from the bucket via a
      #     storage.buckets.update operation. A locked retention policy cannot be
      #     removed or shortened in duration for the lifetime of the bucket.
      #     Attempting to remove or decrease period of a locked retention policy will
      #     result in a PERMISSION_DENIED error.
      # @!attribute [rw] location_type
      #   @return [String]
      #     The location type of the bucket (region, dual-region, multi-region, etc).
      # @!attribute [rw] iam_configuration
      #   @return [Google::Storage::V1::Bucket::IamConfiguration]
      #     The bucket's IAM configuration.
      # @!attribute [rw] zone_affinity
      #   @return [Array<String>]
      #     The zone or zones from which the bucket is intended to use zonal quota.
      #     Requests for data from outside the specified affinities are still allowed
      #     but won’t be able to use zonal quota. The values are case-insensitive.
      #     Attempting to update this field after bucket is created will result in an
      #     error.
      class Bucket
        # Billing properties of a bucket.
        # @!attribute [rw] requester_pays
        #   @return [true, false]
        #     When set to true, Requester Pays is enabled for this bucket.
        class Billing; end

        # Cross-Origin Response sharing (CORS) properties for a bucket.
        # For more on GCS and CORS, see
        # https://cloud.google.com/storage/docs/cross-origin.
        # For more on CORS in general, see https://tools.ietf.org/html/rfc6454.
        # @!attribute [rw] origin
        #   @return [Array<String>]
        #     The list of Origins eligible to receive CORS response headers. See
        #     [https://tools.ietf.org/html/rfc6454][RFC 6454] for more on origins.
        #     Note: "*" is permitted in the list of origins, and means "any Origin".
        # @!attribute [rw] method
        #   @return [Array<String>]
        #     The list of HTTP methods on which to include CORS response headers,
        #     (`GET`, `OPTIONS`, `POST`, etc) Note: "*" is permitted in the list of
        #     methods, and means "any method".
        # @!attribute [rw] response_header
        #   @return [Array<String>]
        #     The list of HTTP headers other than the
        #     [https://www.w3.org/TR/cors/#simple-response-header][simple response
        #     headers] to give permission for the user-agent to share across domains.
        # @!attribute [rw] max_age_seconds
        #   @return [Integer]
        #     The value, in seconds, to return in the
        #     [https://www.w3.org/TR/cors/#access-control-max-age-response-header][Access-Control-Max-Age
        #     header] used in preflight responses.
        class Cors; end

        # Encryption properties of a bucket.
        # @!attribute [rw] default_kms_key_name
        #   @return [String]
        #     A Cloud KMS key that will be used to encrypt objects inserted into this
        #     bucket, if no encryption method is specified.
        class Encryption; end

        # Bucket restriction options currently enforced on the bucket.
        # @!attribute [rw] uniform_bucket_level_access
        #   @return [Google::Storage::V1::Bucket::IamConfiguration::UniformBucketLevelAccess]
        class IamConfiguration
          # @!attribute [rw] enabled
          #   @return [true, false]
          #     If set, access checks only use bucket-level IAM policies or above.
          # @!attribute [rw] locked_time
          #   @return [Google::Protobuf::Timestamp]
          #     The deadline time for changing
          #     <code>iamConfiguration.uniformBucketLevelAccess.enabled</code> from
          #     true to false in [https://tools.ietf.org/html/rfc3339][RFC 3339]. After
          #     the deadline is passed the field is immutable.
          class UniformBucketLevelAccess; end
        end

        # Lifecycle properties of a bucket.
        # For more information, see https://cloud.google.com/storage/docs/lifecycle.
        # @!attribute [rw] rule
        #   @return [Array<Google::Storage::V1::Bucket::Lifecycle::Rule>]
        #     A lifecycle management rule, which is made of an action to take and the
        #     condition(s) under which the action will be taken.
        class Lifecycle
          # A lifecycle Rule, combining an action to take on an object and a
          # condition which will trigger that action.
          # @!attribute [rw] action
          #   @return [Google::Storage::V1::Bucket::Lifecycle::Rule::Action]
          #     The action to take.
          # @!attribute [rw] condition
          #   @return [Google::Storage::V1::Bucket::Lifecycle::Rule::Condition]
          #     The condition(s) under which the action will be taken.
          class Rule
            # An action to take on an object.
            # @!attribute [rw] type
            #   @return [String]
            #     Type of the action. Currently, only `Delete` and
            #     `SetStorageClass` are supported.
            # @!attribute [rw] storage_class
            #   @return [String]
            #     Target storage class. Required iff the type of the action is
            #     SetStorageClass.
            class Action; end

            # A condition of an object which triggers some action.
            # @!attribute [rw] age
            #   @return [Integer]
            #     Age of an object (in days). This condition is satisfied when an
            #     object reaches the specified age.
            # @!attribute [rw] created_before
            #   @return [Google::Protobuf::Timestamp]
            #     A date in [RFC 3339][1] format with only the date part (for
            #     instance, "2013-01-15"). This condition is satisfied when an
            #     object is created before midnight of the specified date in UTC.
            #     [1]: https://tools.ietf.org/html/rfc3339
            # @!attribute [rw] is_live
            #   @return [Google::Protobuf::BoolValue]
            #     Relevant only for versioned objects. If the value is
            #     `true`, this condition matches live objects; if the value
            #     is `false`, it matches archived objects.
            # @!attribute [rw] num_newer_versions
            #   @return [Integer]
            #     Relevant only for versioned objects. If the value is N, this
            #     condition is satisfied when there are at least N versions (including
            #     the live version) newer than this version of the object.
            # @!attribute [rw] matches_storage_class
            #   @return [Array<String>]
            #     Objects having any of the storage classes specified by this condition
            #     will be matched. Values include `MULTI_REGIONAL`, `REGIONAL`,
            #     `NEARLINE`, `COLDLINE`, `STANDARD`, and
            #     `DURABLE_REDUCED_AVAILABILITY`.
            # @!attribute [rw] matches_pattern
            #   @return [String]
            #     A regular expression that satisfies the RE2 syntax. This condition is
            #     satisfied when the name of the object matches the RE2 pattern.  Note:
            #     This feature is currently in the "Early Access" launch stage and is
            #     only available to a whitelisted set of users; that means that this
            #     feature may be changed in backward-incompatible ways and that it is
            #     not guaranteed to be released.
            class Condition; end
          end
        end

        # Logging-related properties of a bucket.
        # @!attribute [rw] log_bucket
        #   @return [String]
        #     The destination bucket where the current bucket's logs should be placed.
        # @!attribute [rw] log_object_prefix
        #   @return [String]
        #     A prefix for log object names.
        class Logging; end

        # Retention policy properties of a bucket.
        # @!attribute [rw] effective_time
        #   @return [Google::Protobuf::Timestamp]
        #     Server-determined value that indicates the time from which policy was
        #     enforced and effective. This value is in
        #     [https://tools.ietf.org/html/rfc3339][RFC 3339] format.
        # @!attribute [rw] is_locked
        #   @return [true, false]
        #     Once locked, an object retention policy cannot be modified.
        # @!attribute [rw] retention_period
        #   @return [Integer]
        #     The duration in seconds that objects need to be retained. Retention
        #     duration must be greater than zero and less than 100 years. Note that
        #     enforcement of retention periods less than a day is not guaranteed. Such
        #     periods should only be used for testing purposes.
        class RetentionPolicy; end

        # Properties of a bucket related to versioning.
        # For more on GCS versioning, see
        # https://cloud.google.com/storage/docs/object-versioning.
        # @!attribute [rw] enabled
        #   @return [true, false]
        #     While set to true, versioning is fully enabled for this bucket.
        class Versioning; end

        # Properties of a bucket related to accessing the contents as a static
        # website. For more on hosting a static website via GCS, see
        # https://cloud.google.com/storage/docs/hosting-static-website.
        # @!attribute [rw] main_page_suffix
        #   @return [String]
        #     If the requested object path is missing, the service will ensure the path
        #     has a trailing '/', append this suffix, and attempt to retrieve the
        #     resulting object. This allows the creation of `index.html`
        #     objects to represent directory pages.
        # @!attribute [rw] not_found_page
        #   @return [String]
        #     If the requested object path is missing, and any
        #     `mainPageSuffix` object is missing, if applicable, the service
        #     will return the named object from this bucket as the content for a
        #     [https://tools.ietf.org/html/rfc7231#section-6.5.4][404 Not Found]
        #     result.
        class Website; end
      end

      # An access-control entry.
      # @!attribute [rw] role
      #   @return [String]
      #     The access permission for the entity.
      # @!attribute [rw] etag
      #   @return [String]
      #     HTTP 1.1 ["https://tools.ietf.org/html/rfc7232#section-2.3][Entity tag]
      #     for the access-control entry.
      # @!attribute [rw] id
      #   @return [String]
      #     The ID of the access-control entry.
      # @!attribute [rw] bucket
      #   @return [String]
      #     The name of the bucket.
      # @!attribute [rw] entity
      #   @return [String]
      #     The entity holding the permission, in one of the following forms:
      #     * `user-{userid}`
      #     * `user-{email}`
      #     * `group-{groupid}`
      #     * `group-{email}`
      #     * `domain-{domain}`
      #     * `project-{team-projectid}`
      #     * `allUsers`
      #     * `allAuthenticatedUsers`
      #       Examples:
      #     * The user `liz@example.com` would be `user-liz@example.com`.
      #     * The group `example@googlegroups.com` would be
      #       `group-example@googlegroups.com`
      #     * All members of the Google Apps for Business domain `example.com` would be
      #       `domain-example.com`
      # @!attribute [rw] entity_id
      #   @return [String]
      #     The ID for the entity, if any.
      # @!attribute [rw] email
      #   @return [String]
      #     The email address associated with the entity, if any.
      # @!attribute [rw] domain
      #   @return [String]
      #     The domain associated with the entity, if any.
      # @!attribute [rw] project_team
      #   @return [Google::Storage::V1::ProjectTeam]
      #     The project team associated with the entity, if any.
      class BucketAccessControl; end

      # The response to a call to BucketAccessControls.ListBucketAccessControls.
      # @!attribute [rw] items
      #   @return [Array<Google::Storage::V1::BucketAccessControl>]
      #     The list of items.
      class ListBucketAccessControlsResponse; end

      # The result of a call to Buckets.ListBuckets
      # @!attribute [rw] items
      #   @return [Array<Google::Storage::V1::Bucket>]
      #     The list of items.
      # @!attribute [rw] next_page_token
      #   @return [String]
      #     The continuation token, used to page through large result sets. Provide
      #     this value in a subsequent request to return the next page of results.
      class ListBucketsResponse; end

      # An notification channel used to watch for resource changes.
      # @!attribute [rw] id
      #   @return [String]
      #     A UUID or similar unique string that identifies this channel.
      # @!attribute [rw] resource_id
      #   @return [String]
      #     An opaque ID that identifies the resource being watched on this channel.
      #     Stable across different API versions.
      # @!attribute [rw] resource_uri
      #   @return [String]
      #     A version-specific identifier for the watched resource.
      # @!attribute [rw] token
      #   @return [String]
      #     An arbitrary string delivered to the target address with each notification
      #     delivered over this channel. Optional.
      # @!attribute [rw] expiration
      #   @return [Google::Protobuf::Timestamp]
      #     Date and time of notification channel expiration. Optional.
      # @!attribute [rw] type
      #   @return [String]
      #     The type of delivery mechanism used for this channel.
      # @!attribute [rw] address
      #   @return [String]
      #     The address where notifications are delivered for this channel.
      # @!attribute [rw] params
      #   @return [Hash{String => String}]
      #     Additional parameters controlling delivery channel behavior. Optional.
      # @!attribute [rw] payload
      #   @return [true, false]
      #     A Boolean value to indicate whether payload is wanted. Optional.
      class Channel; end

      # The result of a call to Channels.ListChannels
      # @!attribute [rw] items
      #   @return [Array<Google::Storage::V1::ListChannelsResponse::Items>]
      #     The list of notification channels for a bucket.
      class ListChannelsResponse
        # @!attribute [rw] channel_id
        #   @return [String]
        #     User-specified name for a channel. Needed to unsubscribe.
        # @!attribute [rw] resource_id
        #   @return [String]
        #     Opaque value generated by GCS representing a bucket. Needed to
        #     unsubscribe.
        # @!attribute [rw] push_url
        #   @return [String]
        #     Url used to identify where notifications are sent to.
        # @!attribute [rw] subscriber_email
        #   @return [String]
        #     Email address of the subscriber.
        # @!attribute [rw] creation_time
        #   @return [Google::Protobuf::Timestamp]
        #     Time when the channel was created.
        class Items; end
      end

      # Message used to convey content being read or written, along with its
      # checksum.
      # @!attribute [rw] content
      #   @return [String]
      #     The data.
      # @!attribute [rw] crc32c
      #   @return [Google::Protobuf::UInt32Value]
      #     CRC32C digest of the contents.
      class ChecksummedData; end

      # Message used for storing full (not subrange) object checksums.
      # @!attribute [rw] crc32c
      #   @return [Google::Protobuf::UInt32Value]
      #     CRC32C digest of the object data. Computed by the GCS service for
      #     all written objects, and validated by the GCS service against
      #     client-supplied values if present in an InsertObjectRequest.
      # @!attribute [rw] md5_hash
      #   @return [String]
      #     Hex-encoded MD5 hash of the object data (hexdigest). Whether/how this
      #     checksum is provided and validated is service-dependent.
      class ObjectChecksums; end

      # A collection of enums used in multiple places throughout the API.
      class CommonEnums
        # Predefined or "canned" aliases for sets of specific bucket ACL entries.
        module PredefinedBucketAcl
          # No predefined ACL.
          PREDEFINED_BUCKET_ACL_UNSPECIFIED = 0

          # Project team owners get `OWNER` access, and
          # `allAuthenticatedUsers` get `READER` access.
          BUCKET_ACL_AUTHENTICATED_READ = 1

          # Project team owners get `OWNER` access.
          BUCKET_ACL_PRIVATE = 2

          # Project team members get access according to their roles.
          BUCKET_ACL_PROJECT_PRIVATE = 3

          # Project team owners get `OWNER` access, and
          # `allUsers` get `READER` access.
          BUCKET_ACL_PUBLIC_READ = 4

          # Project team owners get `OWNER` access, and
          # `allUsers` get `WRITER` access.
          BUCKET_ACL_PUBLIC_READ_WRITE = 5
        end

        # Predefined or "canned" aliases for sets of specific object ACL entries.
        module PredefinedObjectAcl
          # No predefined ACL.
          PREDEFINED_OBJECT_ACL_UNSPECIFIED = 0

          # Object owner gets `OWNER` access, and
          # `allAuthenticatedUsers` get `READER` access.
          OBJECT_ACL_AUTHENTICATED_READ = 1

          # Object owner gets `OWNER` access, and project team owners get
          # `OWNER` access.
          OBJECT_ACL_BUCKET_OWNER_FULL_CONTROL = 2

          # Object owner gets `OWNER` access, and project team owners get
          # `READER` access.
          OBJECT_ACL_BUCKET_OWNER_READ = 3

          # Object owner gets `OWNER` access.
          OBJECT_ACL_PRIVATE = 4

          # Object owner gets `OWNER` access, and project team members get
          # access according to their roles.
          OBJECT_ACL_PROJECT_PRIVATE = 5

          # Object owner gets `OWNER` access, and `allUsers`
          # get `READER` access.
          OBJECT_ACL_PUBLIC_READ = 6
        end

        # A set of properties to return in a response.
        module Projection
          # No specified projection.
          PROJECTION_UNSPECIFIED = 0

          # Omit `owner`, `acl`, and `defaultObjectAcl` properties.
          NO_ACL = 1

          # Include all properties.
          FULL = 2
        end
      end

      # Specifies a requested range of bytes to download.
      # @!attribute [rw] start
      #   @return [Integer]
      #     The starting offset of the object data.
      # @!attribute [rw] end
      #   @return [Integer]
      #     The ending offset of the object data.
      # @!attribute [rw] complete_length
      #   @return [Integer]
      #     The complete length of the object data.
      class ContentRange; end

      # Hmac Key Metadata, which includes all information other than the secret.
      # @!attribute [rw] id
      #   @return [String]
      #     Resource name ID of the key in the format <projectId>/<accessId>.
      # @!attribute [rw] access_id
      #   @return [String]
      #     Globally unique id for keys.
      # @!attribute [rw] project_id
      #   @return [String]
      #     The project ID that the hmac key is contained in.
      # @!attribute [rw] service_account_email
      #   @return [String]
      #     Email of the service account the key authenticates as.
      # @!attribute [rw] state
      #   @return [String]
      #     State of the key. One of ACTIVE, INACTIVE, or DELETED.
      # @!attribute [rw] time_created
      #   @return [Google::Protobuf::Timestamp]
      #     The creation time of the HMAC key in RFC 3339 format.
      # @!attribute [rw] updated
      #   @return [Google::Protobuf::Timestamp]
      #     The last modification time of the HMAC key metadata in RFC 3339 format.
      # @!attribute [rw] etag
      #   @return [String]
      #     Tag updated with each key update.
      class HmacKeyMetadata; end

      # A subscription to receive Google PubSub notifications.
      # @!attribute [rw] topic
      #   @return [String]
      #     The Cloud PubSub topic to which this subscription publishes. Formatted as:
      #     '//pubsub.googleapis.com/projects/{project-identifier}/topics/{my-topic}'
      # @!attribute [rw] event_types
      #   @return [Array<String>]
      #     If present, only send notifications about listed event types. If empty,
      #     sent notifications for all event types.
      # @!attribute [rw] custom_attributes
      #   @return [Hash{String => String}]
      #     An optional list of additional attributes to attach to each Cloud PubSub
      #     message published for this notification subscription.
      # @!attribute [rw] etag
      #   @return [String]
      #     HTTP 1.1 [https://tools.ietf.org/html/rfc7232#section-2.3][Entity tag]
      #     for this subscription notification.
      # @!attribute [rw] object_name_prefix
      #   @return [String]
      #     If present, only apply this notification configuration to object names that
      #     begin with this prefix.
      # @!attribute [rw] payload_format
      #   @return [String]
      #     The desired content of the Payload.
      # @!attribute [rw] id
      #   @return [String]
      #     The ID of the notification.
      class Notification; end

      # The result of a call to Notifications.ListNotifications
      # @!attribute [rw] items
      #   @return [Array<Google::Storage::V1::Notification>]
      #     The list of items.
      class ListNotificationsResponse; end

      # An object.
      # @!attribute [rw] content_encoding
      #   @return [String]
      #     Content-Encoding of the object data, matching
      #     [https://tools.ietf.org/html/rfc7231#section-3.1.2.2][RFC 7231 §3.1.2.2]
      # @!attribute [rw] content_disposition
      #   @return [String]
      #     Content-Disposition of the object data, matching
      #     [https://tools.ietf.org/html/rfc6266][RFC 6266].
      # @!attribute [rw] cache_control
      #   @return [String]
      #     Cache-Control directive for the object data, matching
      #     [https://tools.ietf.org/html/rfc7234#section-5.2"][RFC 7234 §5.2].
      #     If omitted, and the object is accessible to all anonymous users, the
      #     default will be `public, max-age=3600`.
      # @!attribute [rw] acl
      #   @return [Array<Google::Storage::V1::ObjectAccessControl>]
      #     Access controls on the object.
      # @!attribute [rw] content_language
      #   @return [String]
      #     Content-Language of the object data, matching
      #     [https://tools.ietf.org/html/rfc7231#section-3.1.3.2][RFC 7231 §3.1.3.2].
      # @!attribute [rw] metageneration
      #   @return [Integer]
      #     The version of the metadata for this object at this generation. Used for
      #     preconditions and for detecting changes in metadata. A metageneration
      #     number is only meaningful in the context of a particular generation of a
      #     particular object.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] time_deleted
      #   @return [Google::Protobuf::Timestamp]
      #     The deletion time of the object. Will be returned if and only if this
      #     version of the object has been deleted.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] content_type
      #   @return [String]
      #     Content-Type of the object data, matching
      #     [https://tools.ietf.org/html/rfc7231#section-3.1.1.5][RFC 7231 §3.1.1.5].
      #     If an object is stored without a Content-Type, it is served as
      #     `application/octet-stream`.
      # @!attribute [rw] size
      #   @return [Integer]
      #     Content-Length of the object data in bytes, matching
      #     [https://tools.ietf.org/html/rfc7230#section-3.3.2][RFC 7230 §3.3.2].
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] time_created
      #   @return [Google::Protobuf::Timestamp]
      #     The creation time of the object.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] crc32c
      #   @return [Google::Protobuf::UInt32Value]
      #     CRC32c checksum. For more information about using the CRC32c
      #     checksum, see
      #     [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
      #     ETags: Best Practices]. This is a server determined value and should not be
      #     supplied by the user when sending an Object. The server will ignore any
      #     value provided. Users should instead use the object_checksums field on the
      #     InsertObjectRequest when uploading an object.
      # @!attribute [rw] component_count
      #   @return [Integer]
      #     Number of underlying components that make up this object. Components are
      #     accumulated by compose operations.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] md5_hash
      #   @return [String]
      #     MD5 hash of the data; encoded using base64 as per
      #     [https://tools.ietf.org/html/rfc4648#section-4][RFC 4648 §4]. For more
      #     information about using the MD5 hash, see
      #     [https://cloud.google.com/storage/docs/hashes-etags#_JSONAPI][Hashes and
      #     ETags: Best Practices]. This is a server determined value and should not be
      #     supplied by the user when sending an Object. The server will ignore any
      #     value provided. Users should instead use the object_checksums field on the
      #     InsertObjectRequest when uploading an object.
      # @!attribute [rw] etag
      #   @return [String]
      #     HTTP 1.1 Entity tag for the object. See
      #     [https://tools.ietf.org/html/rfc7232#section-2.3][RFC 7232 §2.3].
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] updated
      #   @return [Google::Protobuf::Timestamp]
      #     The modification time of the object metadata.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] storage_class
      #   @return [String]
      #     Storage class of the object.
      # @!attribute [rw] kms_key_name
      #   @return [String]
      #     Cloud KMS Key used to encrypt this object, if the object is encrypted by
      #     such a key.
      # @!attribute [rw] time_storage_class_updated
      #   @return [Google::Protobuf::Timestamp]
      #     The time at which the object's storage class was last changed. When the
      #     object is initially created, it will be set to time_created.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] temporary_hold
      #   @return [true, false]
      #     Whether an object is under temporary hold. While this flag is set to true,
      #     the object is protected against deletion and overwrites.  A common use case
      #     of this flag is regulatory investigations where objects need to be retained
      #     while the investigation is ongoing. Note that unlike event-based hold,
      #     temporary hold does not impact retention expiration time of an object.
      # @!attribute [rw] retention_expiration_time
      #   @return [Google::Protobuf::Timestamp]
      #     A server-determined value that specifies the earliest time that the
      #     object's retention period expires. This value is in
      #     [https://tools.ietf.org/html/rfc3339][RFC 3339] format.
      #     Note 1: This field is not provided for objects with an active event-based
      #     hold, since retention expiration is unknown until the hold is removed.
      #     Note 2: This value can be provided even when temporary hold is set (so that
      #     the user can reason about policy without having to first unset the
      #     temporary hold).
      # @!attribute [rw] metadata
      #   @return [Hash{String => String}]
      #     User-provided metadata, in key/value pairs.
      # @!attribute [rw] event_based_hold
      #   @return [Google::Protobuf::BoolValue]
      #     Whether an object is under event-based hold. Event-based hold is a way to
      #     retain objects until an event occurs, which is signified by the
      #     hold's release (i.e. this value is set to false). After being released (set
      #     to false), such objects will be subject to bucket-level retention (if any).
      #     One sample use case of this flag is for banks to hold loan documents for at
      #     least 3 years after loan is paid in full. Here, bucket-level retention is 3
      #     years and the event is the loan being paid in full. In this example, these
      #     objects will be held intact for any number of years until the event has
      #     occurred (event-based hold on the object is released) and then 3 more years
      #     after that. That means retention duration of the objects begins from the
      #     moment event-based hold transitioned from true to false.
      # @!attribute [rw] name
      #   @return [String]
      #     The name of the object.
      #     Attempting to update this field after the object is created will result in
      #     an error.
      # @!attribute [rw] id
      #   @return [String]
      #     The ID of the object, including the bucket name, object name, and
      #     generation number.
      #     Attempting to update this field after the object is created will result in
      #     an error.
      # @!attribute [rw] bucket
      #   @return [String]
      #     The name of the bucket containing this object.
      #     Attempting to update this field after the object is created will result in
      #     an error.
      # @!attribute [rw] generation
      #   @return [Integer]
      #     The content generation of this object. Used for object versioning.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] owner
      #   @return [Google::Storage::V1::Owner]
      #     The owner of the object. This will always be the uploader of the object.
      #     Attempting to set this field will result in an error.
      # @!attribute [rw] customer_encryption
      #   @return [Google::Storage::V1::Object::CustomerEncryption]
      #     Metadata of customer-supplied encryption key, if the object is encrypted by
      #     such a key.
      class Object
        # Describes the customer-specified mechanism used to store the data at rest.
        # @!attribute [rw] encryption_algorithm
        #   @return [String]
        #     The encryption algorithm.
        # @!attribute [rw] key_sha256
        #   @return [String]
        #     SHA256 hash value of the encryption key.
        class CustomerEncryption; end
      end

      # An access-control entry.
      # @!attribute [rw] role
      #   @return [String]
      #     The access permission for the entity.
      # @!attribute [rw] etag
      #   @return [String]
      #     HTTP 1.1 Entity tag for the access-control entry.
      #     See [https://tools.ietf.org/html/rfc7232#section-2.3][RFC 7232 §2.3].
      # @!attribute [rw] id
      #   @return [String]
      #     The ID of the access-control entry.
      # @!attribute [rw] bucket
      #   @return [String]
      #     The name of the bucket.
      # @!attribute [rw] object
      #   @return [String]
      #     The name of the object, if applied to an object.
      # @!attribute [rw] generation
      #   @return [Integer]
      #     The content generation of the object, if applied to an object.
      # @!attribute [rw] entity
      #   @return [String]
      #     The entity holding the permission, in one of the following forms:
      #     * `user-{userid}`
      #     * `user-{email}`
      #     * `group-{groupid}`
      #     * `group-{email}`
      #     * `domain-{domain}`
      #     * `project-{team-projectid}`
      #     * `allUsers`
      #     * `allAuthenticatedUsers`
      #       Examples:
      #     * The user `liz@example.com` would be `user-liz@example.com`.
      #     * The group `example@googlegroups.com` would be
      #       `group-example@googlegroups.com`.
      #     * All members of the Google Apps for Business domain `example.com` would be
      #       `domain-example.com`.
      # @!attribute [rw] entity_id
      #   @return [String]
      #     The ID for the entity, if any.
      # @!attribute [rw] email
      #   @return [String]
      #     The email address associated with the entity, if any.
      # @!attribute [rw] domain
      #   @return [String]
      #     The domain associated with the entity, if any.
      # @!attribute [rw] project_team
      #   @return [Google::Storage::V1::ProjectTeam]
      #     The project team associated with the entity, if any.
      class ObjectAccessControl; end

      # The result of a call to ObjectAccessControls.ListObjectAccessControls.
      # @!attribute [rw] items
      #   @return [Array<Google::Storage::V1::ObjectAccessControl>]
      #     The list of items.
      class ListObjectAccessControlsResponse; end

      # The result of a call to Objects.ListObjects
      # @!attribute [rw] prefixes
      #   @return [Array<String>]
      #     The list of prefixes of objects matching-but-not-listed up to and including
      #     the requested delimiter.
      # @!attribute [rw] items
      #   @return [Array<Google::Storage::V1::Object>]
      #     The list of items.
      # @!attribute [rw] next_page_token
      #   @return [String]
      #     The continuation token, used to page through large result sets. Provide
      #     this value in a subsequent request to return the next page of results.
      class ListObjectsResponse; end

      # Represents the Viewers, Editors, or Owners of a given project.
      # @!attribute [rw] project_number
      #   @return [String]
      #     The project number.
      # @!attribute [rw] team
      #   @return [String]
      #     The team.
      class ProjectTeam; end

      # A subscription to receive Google PubSub notifications.
      # @!attribute [rw] email_address
      #   @return [String]
      #     The ID of the notification.
      class ServiceAccount; end

      # The owner of a specific resource.
      # @!attribute [rw] entity
      #   @return [String]
      #     The entity, in the form `user-`*userId*.
      # @!attribute [rw] entity_id
      #   @return [String]
      #     The ID for the entity.
      class Owner; end
    end
  end
end