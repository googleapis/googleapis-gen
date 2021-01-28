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
  module Ads
    module GoogleAds
      module V3
        module Common
          # A YouTube asset.
          # @!attribute [rw] youtube_video_id
          #   @return [::Google::Protobuf::StringValue]
          #     YouTube video id. This is the 11 character string value used in the
          #     YouTube video URL.
          class YoutubeVideoAsset
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A MediaBundle asset.
          # @!attribute [rw] data
          #   @return [::Google::Protobuf::BytesValue]
          #     Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
          #     depends on the ad field where it will be used. For more information on the
          #     format, see the documentation of the ad field where you plan on using the
          #     MediaBundleAsset. This field is mutate only.
          class MediaBundleAsset
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # An Image asset.
          # @!attribute [rw] data
          #   @return [::Google::Protobuf::BytesValue]
          #     The raw bytes data of an image. This field is mutate only.
          # @!attribute [rw] file_size
          #   @return [::Google::Protobuf::Int64Value]
          #     File size of the image asset in bytes.
          # @!attribute [rw] mime_type
          #   @return [::Google::Ads::GoogleAds::V3::Enums::MimeTypeEnum::MimeType]
          #     MIME type of the image asset.
          # @!attribute [rw] full_size
          #   @return [::Google::Ads::GoogleAds::V3::Common::ImageDimension]
          #     Metadata for this image at its original size.
          class ImageAsset
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Metadata for an image at a certain size, either original or resized.
          # @!attribute [rw] height_pixels
          #   @return [::Google::Protobuf::Int64Value]
          #     Height of the image.
          # @!attribute [rw] width_pixels
          #   @return [::Google::Protobuf::Int64Value]
          #     Width of the image.
          # @!attribute [rw] url
          #   @return [::Google::Protobuf::StringValue]
          #     A URL that returns the image with this height and width.
          class ImageDimension
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A Text asset.
          # @!attribute [rw] text
          #   @return [::Google::Protobuf::StringValue]
          #     Text content of the text asset.
          class TextAsset
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
