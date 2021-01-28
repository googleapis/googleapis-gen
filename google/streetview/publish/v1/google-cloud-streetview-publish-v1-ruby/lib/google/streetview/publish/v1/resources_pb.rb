# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/streetview/publish/v1/resources.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
require 'google/protobuf/timestamp_pb'
require 'google/type/latlng_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/streetview/publish/v1/resources.proto", :syntax => :proto3) do
    add_message "google.streetview.publish.v1.UploadRef" do
      optional :upload_url, :string, 1
    end
    add_message "google.streetview.publish.v1.PhotoId" do
      optional :id, :string, 1
    end
    add_message "google.streetview.publish.v1.Level" do
      optional :number, :double, 1
      optional :name, :string, 2
    end
    add_message "google.streetview.publish.v1.Pose" do
      optional :lat_lng_pair, :message, 1, "google.type.LatLng"
      optional :altitude, :double, 2
      optional :heading, :double, 3
      optional :pitch, :double, 4
      optional :roll, :double, 5
      optional :level, :message, 7, "google.streetview.publish.v1.Level"
      optional :accuracy_meters, :float, 9
    end
    add_message "google.streetview.publish.v1.Place" do
      optional :place_id, :string, 1
      optional :name, :string, 2
      optional :language_code, :string, 3
    end
    add_message "google.streetview.publish.v1.Connection" do
      optional :target, :message, 1, "google.streetview.publish.v1.PhotoId"
    end
    add_message "google.streetview.publish.v1.Photo" do
      optional :photo_id, :message, 1, "google.streetview.publish.v1.PhotoId"
      optional :upload_reference, :message, 2, "google.streetview.publish.v1.UploadRef"
      optional :download_url, :string, 3
      optional :thumbnail_url, :string, 9
      optional :share_link, :string, 11
      optional :pose, :message, 4, "google.streetview.publish.v1.Pose"
      repeated :connections, :message, 5, "google.streetview.publish.v1.Connection"
      optional :capture_time, :message, 6, "google.protobuf.Timestamp"
      repeated :places, :message, 7, "google.streetview.publish.v1.Place"
      optional :view_count, :int64, 10
      optional :transfer_status, :enum, 12, "google.streetview.publish.v1.Photo.TransferStatus"
      optional :maps_publish_status, :enum, 13, "google.streetview.publish.v1.Photo.MapsPublishStatus"
    end
    add_enum "google.streetview.publish.v1.Photo.TransferStatus" do
      value :TRANSFER_STATUS_UNKNOWN, 0
      value :NEVER_TRANSFERRED, 1
      value :PENDING, 2
      value :COMPLETED, 3
      value :REJECTED, 4
      value :EXPIRED, 5
      value :CANCELLED, 6
      value :RECEIVED_VIA_TRANSFER, 7
    end
    add_enum "google.streetview.publish.v1.Photo.MapsPublishStatus" do
      value :UNSPECIFIED_MAPS_PUBLISH_STATUS, 0
      value :PUBLISHED, 1
      value :REJECTED_UNKNOWN, 2
    end
  end
end

module Google
  module Streetview
    module Publish
      module V1
        UploadRef = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.UploadRef").msgclass
        PhotoId = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.PhotoId").msgclass
        Level = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Level").msgclass
        Pose = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Pose").msgclass
        Place = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Place").msgclass
        Connection = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Connection").msgclass
        Photo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Photo").msgclass
        Photo::TransferStatus = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Photo.TransferStatus").enummodule
        Photo::MapsPublishStatus = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.streetview.publish.v1.Photo.MapsPublishStatus").enummodule
      end
    end
  end
end
