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

require "minitest/autorun"
require "minitest/spec"

require "google/gax"

require "google/cloud/dialogflow"
require "google/cloud/dialogflow/v2beta1/session_entity_types_client"
require "google/cloud/dialogflow/v2beta1/session_entity_type_services_pb"

class CustomTestError_v2beta1 < StandardError; end

# Mock for the GRPC::ClientStub class.
class MockGrpcClientStub_v2beta1

  # @param expected_symbol [Symbol] the symbol of the grpc method to be mocked.
  # @param mock_method [Proc] The method that is being mocked.
  def initialize(expected_symbol, mock_method)
    @expected_symbol = expected_symbol
    @mock_method = mock_method
  end

  # This overrides the Object#method method to return the mocked method when the mocked method
  # is being requested. For methods that aren't being tested, this method returns a proc that
  # will raise an error when called. This is to assure that only the mocked grpc method is being
  # called.
  #
  # @param symbol [Symbol] The symbol of the method being requested.
  # @return [Proc] The proc of the requested method. If the requested method is not being mocked
  #   the proc returned will raise when called.
  def method(symbol)
    return @mock_method if symbol == @expected_symbol

    # The requested method is not being tested, raise if it called.
    proc do
      raise "The method #{symbol} was unexpectedly called during the " \
        "test for #{@expected_symbol}."
    end
  end
end

class MockSessionEntityTypesCredentials_v2beta1 < Google::Cloud::Dialogflow::V2beta1::Credentials
  def initialize(method_name)
    @method_name = method_name
  end

  def updater_proc
    proc do
      raise "The method `#{@method_name}` was trying to make a grpc request. This should not " \
          "happen since the grpc layer is being mocked."
    end
  end
end

describe Google::Cloud::Dialogflow::V2beta1::SessionEntityTypesClient do

  describe 'list_session_entity_types' do
    custom_error = CustomTestError_v2beta1.new "Custom test error for Google::Cloud::Dialogflow::V2beta1::SessionEntityTypesClient#list_session_entity_types."

    it 'invokes list_session_entity_types without error' do
      # Create request parameters
      parent = ''

      # Create expected grpc response
      next_page_token = ""
      session_entity_types_element = {}
      session_entity_types = [session_entity_types_element]
      expected_response = { next_page_token: next_page_token, session_entity_types: session_entity_types }
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Dialogflow::V2beta1::ListSessionEntityTypesResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::ListSessionEntityTypesRequest, request)
        assert_equal(parent, request.parent)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:list_session_entity_types, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("list_session_entity_types")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          response = client.list_session_entity_types(parent)

          # Verify the response
          assert(response.instance_of?(Google::Gax::PagedEnumerable))
          assert_equal(expected_response, response.page.response)
          assert_nil(response.next_page)
          assert_equal(expected_response.session_entity_types.to_a, response.to_a)
        end
      end
    end

    it 'invokes list_session_entity_types with error' do
      # Create request parameters
      parent = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::ListSessionEntityTypesRequest, request)
        assert_equal(parent, request.parent)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:list_session_entity_types, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("list_session_entity_types")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v2beta1 do
            client.list_session_entity_types(parent)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'get_session_entity_type' do
    custom_error = CustomTestError_v2beta1.new "Custom test error for Google::Cloud::Dialogflow::V2beta1::SessionEntityTypesClient#get_session_entity_type."

    it 'invokes get_session_entity_type without error' do
      # Create request parameters
      name = ''

      # Create expected grpc response
      name_2 = "name2-1052831874"
      expected_response = { name: name_2 }
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Dialogflow::V2beta1::SessionEntityType)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::GetSessionEntityTypeRequest, request)
        assert_equal(name, request.name)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:get_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("get_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          response = client.get_session_entity_type(name)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.get_session_entity_type(name) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes get_session_entity_type with error' do
      # Create request parameters
      name = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::GetSessionEntityTypeRequest, request)
        assert_equal(name, request.name)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:get_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("get_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v2beta1 do
            client.get_session_entity_type(name)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'create_session_entity_type' do
    custom_error = CustomTestError_v2beta1.new "Custom test error for Google::Cloud::Dialogflow::V2beta1::SessionEntityTypesClient#create_session_entity_type."

    it 'invokes create_session_entity_type without error' do
      # Create request parameters
      parent = ''
      session_entity_type = {}

      # Create expected grpc response
      name = "name3373707"
      expected_response = { name: name }
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Dialogflow::V2beta1::SessionEntityType)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::CreateSessionEntityTypeRequest, request)
        assert_equal(parent, request.parent)
        assert_equal(Google::Gax::to_proto(session_entity_type, Google::Cloud::Dialogflow::V2beta1::SessionEntityType), request.session_entity_type)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:create_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("create_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          response = client.create_session_entity_type(parent, session_entity_type)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.create_session_entity_type(parent, session_entity_type) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes create_session_entity_type with error' do
      # Create request parameters
      parent = ''
      session_entity_type = {}

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::CreateSessionEntityTypeRequest, request)
        assert_equal(parent, request.parent)
        assert_equal(Google::Gax::to_proto(session_entity_type, Google::Cloud::Dialogflow::V2beta1::SessionEntityType), request.session_entity_type)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:create_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("create_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v2beta1 do
            client.create_session_entity_type(parent, session_entity_type)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'update_session_entity_type' do
    custom_error = CustomTestError_v2beta1.new "Custom test error for Google::Cloud::Dialogflow::V2beta1::SessionEntityTypesClient#update_session_entity_type."

    it 'invokes update_session_entity_type without error' do
      # Create request parameters
      session_entity_type = {}

      # Create expected grpc response
      name = "name3373707"
      expected_response = { name: name }
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Dialogflow::V2beta1::SessionEntityType)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::UpdateSessionEntityTypeRequest, request)
        assert_equal(Google::Gax::to_proto(session_entity_type, Google::Cloud::Dialogflow::V2beta1::SessionEntityType), request.session_entity_type)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:update_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("update_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          response = client.update_session_entity_type(session_entity_type)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.update_session_entity_type(session_entity_type) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes update_session_entity_type with error' do
      # Create request parameters
      session_entity_type = {}

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::UpdateSessionEntityTypeRequest, request)
        assert_equal(Google::Gax::to_proto(session_entity_type, Google::Cloud::Dialogflow::V2beta1::SessionEntityType), request.session_entity_type)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:update_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("update_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v2beta1 do
            client.update_session_entity_type(session_entity_type)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'delete_session_entity_type' do
    custom_error = CustomTestError_v2beta1.new "Custom test error for Google::Cloud::Dialogflow::V2beta1::SessionEntityTypesClient#delete_session_entity_type."

    it 'invokes delete_session_entity_type without error' do
      # Create request parameters
      name = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::DeleteSessionEntityTypeRequest, request)
        assert_equal(name, request.name)
        OpenStruct.new(execute: nil)
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:delete_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("delete_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          response = client.delete_session_entity_type(name)

          # Verify the response
          assert_nil(response)

          # Call method with block
          client.delete_session_entity_type(name) do |response, operation|
            # Verify the response
            assert_nil(response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes delete_session_entity_type with error' do
      # Create request parameters
      name = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Dialogflow::V2beta1::DeleteSessionEntityTypeRequest, request)
        assert_equal(name, request.name)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v2beta1.new(:delete_session_entity_type, mock_method)

      # Mock auth layer
      mock_credentials = MockSessionEntityTypesCredentials_v2beta1.new("delete_session_entity_type")

      Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::Stub.stub(:new, mock_stub) do
        Google::Cloud::Dialogflow::V2beta1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Dialogflow::SessionEntityTypes.new(version: :v2beta1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v2beta1 do
            client.delete_session_entity_type(name)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end
end