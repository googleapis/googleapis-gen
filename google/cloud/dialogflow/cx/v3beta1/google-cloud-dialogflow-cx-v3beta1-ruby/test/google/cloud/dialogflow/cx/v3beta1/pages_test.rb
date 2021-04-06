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

require "helper"

require "gapic/grpc/service_stub"

require "google/cloud/dialogflow/cx/v3beta1/page_pb"
require "google/cloud/dialogflow/cx/v3beta1/page_services_pb"
require "google/cloud/dialogflow/cx/v3beta1/pages"

class ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::ClientTest < Minitest::Test
  class ClientStub
    attr_accessor :call_rpc_count, :requests

    def initialize response, operation, &block
      @response = response
      @operation = operation
      @block = block
      @call_rpc_count = 0
      @requests = []
    end

    def call_rpc *args, **kwargs
      @call_rpc_count += 1

      @requests << @block&.call(*args, **kwargs)

      yield @response, @operation if block_given?

      @response
    end
  end

  def test_list_pages
    # Create GRPC objects.
    grpc_response = ::Google::Cloud::Dialogflow::Cx::V3beta1::ListPagesResponse.new
    grpc_operation = GRPC::ActiveCall::Operation.new nil
    grpc_channel = GRPC::Core::Channel.new "localhost:8888", nil, :this_channel_is_insecure
    grpc_options = {}

    # Create request parameters for a unary method.
    parent = "hello world"
    language_code = "hello world"
    page_size = 42
    page_token = "hello world"

    list_pages_client_stub = ClientStub.new grpc_response, grpc_operation do |name, request, options:|
      assert_equal :list_pages, name
      assert_kind_of ::Google::Cloud::Dialogflow::Cx::V3beta1::ListPagesRequest, request
      assert_equal "hello world", request["parent"]
      assert_equal "hello world", request["language_code"]
      assert_equal 42, request["page_size"]
      assert_equal "hello world", request["page_token"]
      refute_nil options
    end

    Gapic::ServiceStub.stub :new, list_pages_client_stub do
      # Create client
      client = ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client.new do |config|
        config.credentials = grpc_channel
      end

      # Use hash object
      client.list_pages({ parent: parent, language_code: language_code, page_size: page_size, page_token: page_token }) do |response, operation|
        assert_kind_of Gapic::PagedEnumerable, response
        assert_equal grpc_response, response.response
        assert_equal grpc_operation, operation
      end

      # Use named arguments
      client.list_pages parent: parent, language_code: language_code, page_size: page_size, page_token: page_token do |response, operation|
        assert_kind_of Gapic::PagedEnumerable, response
        assert_equal grpc_response, response.response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object
      client.list_pages ::Google::Cloud::Dialogflow::Cx::V3beta1::ListPagesRequest.new(parent: parent, language_code: language_code, page_size: page_size, page_token: page_token) do |response, operation|
        assert_kind_of Gapic::PagedEnumerable, response
        assert_equal grpc_response, response.response
        assert_equal grpc_operation, operation
      end

      # Use hash object with options
      client.list_pages({ parent: parent, language_code: language_code, page_size: page_size, page_token: page_token }, grpc_options) do |response, operation|
        assert_kind_of Gapic::PagedEnumerable, response
        assert_equal grpc_response, response.response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object with options
      client.list_pages(::Google::Cloud::Dialogflow::Cx::V3beta1::ListPagesRequest.new(parent: parent, language_code: language_code, page_size: page_size, page_token: page_token), grpc_options) do |response, operation|
        assert_kind_of Gapic::PagedEnumerable, response
        assert_equal grpc_response, response.response
        assert_equal grpc_operation, operation
      end

      # Verify method calls
      assert_equal 5, list_pages_client_stub.call_rpc_count
    end
  end

  def test_get_page
    # Create GRPC objects.
    grpc_response = ::Google::Cloud::Dialogflow::Cx::V3beta1::Page.new
    grpc_operation = GRPC::ActiveCall::Operation.new nil
    grpc_channel = GRPC::Core::Channel.new "localhost:8888", nil, :this_channel_is_insecure
    grpc_options = {}

    # Create request parameters for a unary method.
    name = "hello world"
    language_code = "hello world"

    get_page_client_stub = ClientStub.new grpc_response, grpc_operation do |name, request, options:|
      assert_equal :get_page, name
      assert_kind_of ::Google::Cloud::Dialogflow::Cx::V3beta1::GetPageRequest, request
      assert_equal "hello world", request["name"]
      assert_equal "hello world", request["language_code"]
      refute_nil options
    end

    Gapic::ServiceStub.stub :new, get_page_client_stub do
      # Create client
      client = ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client.new do |config|
        config.credentials = grpc_channel
      end

      # Use hash object
      client.get_page({ name: name, language_code: language_code }) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use named arguments
      client.get_page name: name, language_code: language_code do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object
      client.get_page ::Google::Cloud::Dialogflow::Cx::V3beta1::GetPageRequest.new(name: name, language_code: language_code) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use hash object with options
      client.get_page({ name: name, language_code: language_code }, grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object with options
      client.get_page(::Google::Cloud::Dialogflow::Cx::V3beta1::GetPageRequest.new(name: name, language_code: language_code), grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Verify method calls
      assert_equal 5, get_page_client_stub.call_rpc_count
    end
  end

  def test_create_page
    # Create GRPC objects.
    grpc_response = ::Google::Cloud::Dialogflow::Cx::V3beta1::Page.new
    grpc_operation = GRPC::ActiveCall::Operation.new nil
    grpc_channel = GRPC::Core::Channel.new "localhost:8888", nil, :this_channel_is_insecure
    grpc_options = {}

    # Create request parameters for a unary method.
    parent = "hello world"
    page = {}
    language_code = "hello world"

    create_page_client_stub = ClientStub.new grpc_response, grpc_operation do |name, request, options:|
      assert_equal :create_page, name
      assert_kind_of ::Google::Cloud::Dialogflow::Cx::V3beta1::CreatePageRequest, request
      assert_equal "hello world", request["parent"]
      assert_equal Gapic::Protobuf.coerce({}, to: ::Google::Cloud::Dialogflow::Cx::V3beta1::Page), request["page"]
      assert_equal "hello world", request["language_code"]
      refute_nil options
    end

    Gapic::ServiceStub.stub :new, create_page_client_stub do
      # Create client
      client = ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client.new do |config|
        config.credentials = grpc_channel
      end

      # Use hash object
      client.create_page({ parent: parent, page: page, language_code: language_code }) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use named arguments
      client.create_page parent: parent, page: page, language_code: language_code do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object
      client.create_page ::Google::Cloud::Dialogflow::Cx::V3beta1::CreatePageRequest.new(parent: parent, page: page, language_code: language_code) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use hash object with options
      client.create_page({ parent: parent, page: page, language_code: language_code }, grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object with options
      client.create_page(::Google::Cloud::Dialogflow::Cx::V3beta1::CreatePageRequest.new(parent: parent, page: page, language_code: language_code), grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Verify method calls
      assert_equal 5, create_page_client_stub.call_rpc_count
    end
  end

  def test_update_page
    # Create GRPC objects.
    grpc_response = ::Google::Cloud::Dialogflow::Cx::V3beta1::Page.new
    grpc_operation = GRPC::ActiveCall::Operation.new nil
    grpc_channel = GRPC::Core::Channel.new "localhost:8888", nil, :this_channel_is_insecure
    grpc_options = {}

    # Create request parameters for a unary method.
    page = {}
    language_code = "hello world"
    update_mask = {}

    update_page_client_stub = ClientStub.new grpc_response, grpc_operation do |name, request, options:|
      assert_equal :update_page, name
      assert_kind_of ::Google::Cloud::Dialogflow::Cx::V3beta1::UpdatePageRequest, request
      assert_equal Gapic::Protobuf.coerce({}, to: ::Google::Cloud::Dialogflow::Cx::V3beta1::Page), request["page"]
      assert_equal "hello world", request["language_code"]
      assert_equal Gapic::Protobuf.coerce({}, to: ::Google::Protobuf::FieldMask), request["update_mask"]
      refute_nil options
    end

    Gapic::ServiceStub.stub :new, update_page_client_stub do
      # Create client
      client = ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client.new do |config|
        config.credentials = grpc_channel
      end

      # Use hash object
      client.update_page({ page: page, language_code: language_code, update_mask: update_mask }) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use named arguments
      client.update_page page: page, language_code: language_code, update_mask: update_mask do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object
      client.update_page ::Google::Cloud::Dialogflow::Cx::V3beta1::UpdatePageRequest.new(page: page, language_code: language_code, update_mask: update_mask) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use hash object with options
      client.update_page({ page: page, language_code: language_code, update_mask: update_mask }, grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object with options
      client.update_page(::Google::Cloud::Dialogflow::Cx::V3beta1::UpdatePageRequest.new(page: page, language_code: language_code, update_mask: update_mask), grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Verify method calls
      assert_equal 5, update_page_client_stub.call_rpc_count
    end
  end

  def test_delete_page
    # Create GRPC objects.
    grpc_response = ::Google::Protobuf::Empty.new
    grpc_operation = GRPC::ActiveCall::Operation.new nil
    grpc_channel = GRPC::Core::Channel.new "localhost:8888", nil, :this_channel_is_insecure
    grpc_options = {}

    # Create request parameters for a unary method.
    name = "hello world"
    force = true

    delete_page_client_stub = ClientStub.new grpc_response, grpc_operation do |name, request, options:|
      assert_equal :delete_page, name
      assert_kind_of ::Google::Cloud::Dialogflow::Cx::V3beta1::DeletePageRequest, request
      assert_equal "hello world", request["name"]
      assert_equal true, request["force"]
      refute_nil options
    end

    Gapic::ServiceStub.stub :new, delete_page_client_stub do
      # Create client
      client = ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client.new do |config|
        config.credentials = grpc_channel
      end

      # Use hash object
      client.delete_page({ name: name, force: force }) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use named arguments
      client.delete_page name: name, force: force do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object
      client.delete_page ::Google::Cloud::Dialogflow::Cx::V3beta1::DeletePageRequest.new(name: name, force: force) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use hash object with options
      client.delete_page({ name: name, force: force }, grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Use protobuf object with options
      client.delete_page(::Google::Cloud::Dialogflow::Cx::V3beta1::DeletePageRequest.new(name: name, force: force), grpc_options) do |response, operation|
        assert_equal grpc_response, response
        assert_equal grpc_operation, operation
      end

      # Verify method calls
      assert_equal 5, delete_page_client_stub.call_rpc_count
    end
  end

  def test_configure
    grpc_channel = GRPC::Core::Channel.new "localhost:8888", nil, :this_channel_is_insecure

    client = block_config = config = nil
    Gapic::ServiceStub.stub :new, nil do
      client = ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client.new do |config|
        config.credentials = grpc_channel
      end
    end

    config = client.configure do |c|
      block_config = c
    end

    assert_same block_config, config
    assert_kind_of ::Google::Cloud::Dialogflow::Cx::V3beta1::Pages::Client::Configuration, config
  end
end
