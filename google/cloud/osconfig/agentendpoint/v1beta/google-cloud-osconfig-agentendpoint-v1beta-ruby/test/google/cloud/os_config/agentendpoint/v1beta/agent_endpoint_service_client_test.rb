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

require "google/cloud/os_config/agentendpoint/v1beta"
require "google/cloud/os_config/agentendpoint/v1beta/agent_endpoint_service_client"
require "google/cloud/osconfig/agentendpoint/v1beta/agentendpoint_services_pb"

class CustomTestError_v1beta < StandardError; end

# Mock for the GRPC::ClientStub class.
class MockGrpcClientStub_v1beta

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

class MockAgentEndpointServiceCredentials_v1beta < Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials
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

describe Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient do

  describe 'receive_task_notification' do
    custom_error = CustomTestError_v1beta.new "Custom test error for Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient#receive_task_notification."

    it 'invokes receive_task_notification without error' do
      # Create request parameters
      instance_id_token = ''
      agent_version = ''

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Osconfig::Agentendpoint::V1beta::ReceiveTaskNotificationResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::ReceiveTaskNotificationRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(agent_version, request.agent_version)
        OpenStruct.new(execute: [expected_response])
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:receive_task_notification, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("receive_task_notification")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          response = client.receive_task_notification(instance_id_token, agent_version)

          # Verify the response
          assert_equal(1, response.count)
          assert_equal(expected_response, response.first)
        end
      end
    end

    it 'invokes receive_task_notification with error' do
      # Create request parameters
      instance_id_token = ''
      agent_version = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::ReceiveTaskNotificationRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(agent_version, request.agent_version)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:receive_task_notification, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("receive_task_notification")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1beta do
            client.receive_task_notification(instance_id_token, agent_version)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'start_next_task' do
    custom_error = CustomTestError_v1beta.new "Custom test error for Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient#start_next_task."

    it 'invokes start_next_task without error' do
      # Create request parameters
      instance_id_token = ''

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Osconfig::Agentendpoint::V1beta::StartNextTaskResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::StartNextTaskRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:start_next_task, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("start_next_task")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          response = client.start_next_task(instance_id_token)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.start_next_task(instance_id_token) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes start_next_task with error' do
      # Create request parameters
      instance_id_token = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::StartNextTaskRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:start_next_task, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("start_next_task")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1beta do
            client.start_next_task(instance_id_token)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'report_task_progress' do
    custom_error = CustomTestError_v1beta.new "Custom test error for Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient#report_task_progress."

    it 'invokes report_task_progress without error' do
      # Create request parameters
      instance_id_token = ''
      task_id = ''
      task_type = :TASK_TYPE_UNSPECIFIED

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Osconfig::Agentendpoint::V1beta::ReportTaskProgressResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::ReportTaskProgressRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(task_id, request.task_id)
        assert_equal(task_type, request.task_type)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:report_task_progress, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("report_task_progress")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          response = client.report_task_progress(
            instance_id_token,
            task_id,
            task_type
          )

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.report_task_progress(
            instance_id_token,
            task_id,
            task_type
          ) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes report_task_progress with error' do
      # Create request parameters
      instance_id_token = ''
      task_id = ''
      task_type = :TASK_TYPE_UNSPECIFIED

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::ReportTaskProgressRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(task_id, request.task_id)
        assert_equal(task_type, request.task_type)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:report_task_progress, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("report_task_progress")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1beta do
            client.report_task_progress(
              instance_id_token,
              task_id,
              task_type
            )
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'report_task_complete' do
    custom_error = CustomTestError_v1beta.new "Custom test error for Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient#report_task_complete."

    it 'invokes report_task_complete without error' do
      # Create request parameters
      instance_id_token = ''
      task_id = ''
      task_type = :TASK_TYPE_UNSPECIFIED

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Osconfig::Agentendpoint::V1beta::ReportTaskCompleteResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::ReportTaskCompleteRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(task_id, request.task_id)
        assert_equal(task_type, request.task_type)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:report_task_complete, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("report_task_complete")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          response = client.report_task_complete(
            instance_id_token,
            task_id,
            task_type
          )

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.report_task_complete(
            instance_id_token,
            task_id,
            task_type
          ) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes report_task_complete with error' do
      # Create request parameters
      instance_id_token = ''
      task_id = ''
      task_type = :TASK_TYPE_UNSPECIFIED

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::ReportTaskCompleteRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(task_id, request.task_id)
        assert_equal(task_type, request.task_type)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:report_task_complete, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("report_task_complete")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1beta do
            client.report_task_complete(
              instance_id_token,
              task_id,
              task_type
            )
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'lookup_effective_guest_policy' do
    custom_error = CustomTestError_v1beta.new "Custom test error for Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient#lookup_effective_guest_policy."

    it 'invokes lookup_effective_guest_policy without error' do
      # Create request parameters
      instance_id_token = ''

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Osconfig::Agentendpoint::V1beta::EffectiveGuestPolicy)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::LookupEffectiveGuestPolicyRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:lookup_effective_guest_policy, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("lookup_effective_guest_policy")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          response = client.lookup_effective_guest_policy(instance_id_token)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.lookup_effective_guest_policy(instance_id_token) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes lookup_effective_guest_policy with error' do
      # Create request parameters
      instance_id_token = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::LookupEffectiveGuestPolicyRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:lookup_effective_guest_policy, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("lookup_effective_guest_policy")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1beta do
            client.lookup_effective_guest_policy(instance_id_token)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'register_agent' do
    custom_error = CustomTestError_v1beta.new "Custom test error for Google::Cloud::OsConfig::Agentendpoint::V1beta::AgentEndpointServiceClient#register_agent."

    it 'invokes register_agent without error' do
      # Create request parameters
      instance_id_token = ''
      agent_version = ''
      supported_capabilities = []

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Osconfig::Agentendpoint::V1beta::RegisterAgentResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::RegisterAgentRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(agent_version, request.agent_version)
        assert_equal(supported_capabilities, request.supported_capabilities)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:register_agent, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("register_agent")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          response = client.register_agent(
            instance_id_token,
            agent_version,
            supported_capabilities
          )

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.register_agent(
            instance_id_token,
            agent_version,
            supported_capabilities
          ) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes register_agent with error' do
      # Create request parameters
      instance_id_token = ''
      agent_version = ''
      supported_capabilities = []

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Cloud::Osconfig::Agentendpoint::V1beta::RegisterAgentRequest, request)
        assert_equal(instance_id_token, request.instance_id_token)
        assert_equal(agent_version, request.agent_version)
        assert_equal(supported_capabilities, request.supported_capabilities)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1beta.new(:register_agent, mock_method)

      # Mock auth layer
      mock_credentials = MockAgentEndpointServiceCredentials_v1beta.new("register_agent")

      Google::Cloud::Osconfig::Agentendpoint::V1beta::AgentEndpointService::Stub.stub(:new, mock_stub) do
        Google::Cloud::OsConfig::Agentendpoint::V1beta::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::OsConfig::Agentendpoint::V1beta.new

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1beta do
            client.register_agent(
              instance_id_token,
              agent_version,
              supported_capabilities
            )
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end
end