# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3beta1/webhook.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/cloud/dialogflow/cx/v3beta1/response_message_pb'
require 'google/protobuf/duration_pb'
require 'google/protobuf/empty_pb'
require 'google/protobuf/field_mask_pb'
require 'google/protobuf/struct_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/dialogflow/cx/v3beta1/webhook.proto", :syntax => :proto3) do
    add_message "google.cloud.dialogflow.cx.v3beta1.Webhook" do
      optional :name, :string, 1
      optional :display_name, :string, 2
      optional :timeout, :message, 6, "google.protobuf.Duration"
      optional :disabled, :bool, 5
      oneof :webhook do
        optional :generic_web_service, :message, 4, "google.cloud.dialogflow.cx.v3beta1.Webhook.GenericWebService"
      end
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.Webhook.GenericWebService" do
      optional :uri, :string, 1
      optional :username, :string, 2
      optional :password, :string, 3
      map :request_headers, :string, :string, 4
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.ListWebhooksRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.ListWebhooksResponse" do
      repeated :webhooks, :message, 1, "google.cloud.dialogflow.cx.v3beta1.Webhook"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.GetWebhookRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.CreateWebhookRequest" do
      optional :parent, :string, 1
      optional :webhook, :message, 2, "google.cloud.dialogflow.cx.v3beta1.Webhook"
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.UpdateWebhookRequest" do
      optional :webhook, :message, 1, "google.cloud.dialogflow.cx.v3beta1.Webhook"
      optional :update_mask, :message, 2, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.DeleteWebhookRequest" do
      optional :name, :string, 1
      optional :force, :bool, 2
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookRequest" do
      optional :detect_intent_response_id, :string, 1
      optional :language_code, :string, 15
      optional :fulfillment_info, :message, 6, "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.FulfillmentInfo"
      optional :intent_info, :message, 3, "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.IntentInfo"
      optional :page_info, :message, 4, "google.cloud.dialogflow.cx.v3beta1.PageInfo"
      optional :session_info, :message, 5, "google.cloud.dialogflow.cx.v3beta1.SessionInfo"
      repeated :messages, :message, 7, "google.cloud.dialogflow.cx.v3beta1.ResponseMessage"
      optional :payload, :message, 8, "google.protobuf.Struct"
      optional :sentiment_analysis_result, :message, 9, "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.SentimentAnalysisResult"
      oneof :query do
        optional :text, :string, 10
        optional :trigger_intent, :string, 11
        optional :transcript, :string, 12
        optional :trigger_event, :string, 14
      end
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.FulfillmentInfo" do
      optional :tag, :string, 1
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.IntentInfo" do
      optional :last_matched_intent, :string, 1
      optional :display_name, :string, 3
      map :parameters, :string, :message, 2, "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.IntentInfo.IntentParameterValue"
      optional :confidence, :float, 4
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.IntentInfo.IntentParameterValue" do
      optional :original_value, :string, 1
      optional :resolved_value, :message, 2, "google.protobuf.Value"
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookRequest.SentimentAnalysisResult" do
      optional :score, :float, 1
      optional :magnitude, :float, 2
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookResponse" do
      optional :fulfillment_response, :message, 1, "google.cloud.dialogflow.cx.v3beta1.WebhookResponse.FulfillmentResponse"
      optional :page_info, :message, 2, "google.cloud.dialogflow.cx.v3beta1.PageInfo"
      optional :session_info, :message, 3, "google.cloud.dialogflow.cx.v3beta1.SessionInfo"
      optional :payload, :message, 4, "google.protobuf.Struct"
      oneof :transition do
        optional :target_page, :string, 5
        optional :target_flow, :string, 6
      end
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.WebhookResponse.FulfillmentResponse" do
      repeated :messages, :message, 1, "google.cloud.dialogflow.cx.v3beta1.ResponseMessage"
      optional :merge_behavior, :enum, 2, "google.cloud.dialogflow.cx.v3beta1.WebhookResponse.FulfillmentResponse.MergeBehavior"
    end
    add_enum "google.cloud.dialogflow.cx.v3beta1.WebhookResponse.FulfillmentResponse.MergeBehavior" do
      value :MERGE_BEHAVIOR_UNSPECIFIED, 0
      value :APPEND, 1
      value :REPLACE, 2
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.PageInfo" do
      optional :current_page, :string, 1
      optional :form_info, :message, 3, "google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo"
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo" do
      repeated :parameter_info, :message, 2, "google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo.ParameterInfo"
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo.ParameterInfo" do
      optional :display_name, :string, 1
      optional :required, :bool, 2
      optional :state, :enum, 3, "google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo.ParameterInfo.ParameterState"
      optional :value, :message, 4, "google.protobuf.Value"
      optional :just_collected, :bool, 5
    end
    add_enum "google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo.ParameterInfo.ParameterState" do
      value :PARAMETER_STATE_UNSPECIFIED, 0
      value :EMPTY, 1
      value :INVALID, 2
      value :FILLED, 3
    end
    add_message "google.cloud.dialogflow.cx.v3beta1.SessionInfo" do
      optional :session, :string, 1
      map :parameters, :string, :message, 2, "google.protobuf.Value"
    end
  end
end

module Google
  module Cloud
    module Dialogflow
      module Cx
        module V3beta1
          Webhook = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.Webhook").msgclass
          Webhook::GenericWebService = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.Webhook.GenericWebService").msgclass
          ListWebhooksRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.ListWebhooksRequest").msgclass
          ListWebhooksResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.ListWebhooksResponse").msgclass
          GetWebhookRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.GetWebhookRequest").msgclass
          CreateWebhookRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.CreateWebhookRequest").msgclass
          UpdateWebhookRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.UpdateWebhookRequest").msgclass
          DeleteWebhookRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.DeleteWebhookRequest").msgclass
          WebhookRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookRequest").msgclass
          WebhookRequest::FulfillmentInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookRequest.FulfillmentInfo").msgclass
          WebhookRequest::IntentInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookRequest.IntentInfo").msgclass
          WebhookRequest::IntentInfo::IntentParameterValue = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookRequest.IntentInfo.IntentParameterValue").msgclass
          WebhookRequest::SentimentAnalysisResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookRequest.SentimentAnalysisResult").msgclass
          WebhookResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookResponse").msgclass
          WebhookResponse::FulfillmentResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookResponse.FulfillmentResponse").msgclass
          WebhookResponse::FulfillmentResponse::MergeBehavior = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.WebhookResponse.FulfillmentResponse.MergeBehavior").enummodule
          PageInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.PageInfo").msgclass
          PageInfo::FormInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo").msgclass
          PageInfo::FormInfo::ParameterInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo.ParameterInfo").msgclass
          PageInfo::FormInfo::ParameterInfo::ParameterState = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.PageInfo.FormInfo.ParameterInfo.ParameterState").enummodule
          SessionInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.dialogflow.cx.v3beta1.SessionInfo").msgclass
        end
      end
    end
  end
end
