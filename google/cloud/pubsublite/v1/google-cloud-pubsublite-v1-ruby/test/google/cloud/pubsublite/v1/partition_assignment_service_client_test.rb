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

require "google/cloud/pubsublite"
require "google/cloud/pubsublite/v1/partition_assignment_service_client"
require "google/cloud/pubsublite/v1/subscriber_services_pb"

class CustomTestError_v1 < StandardError; end

# Mock for the GRPC::ClientStub class.
class MockGrpcClientStub_v1

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

class MockPartitionAssignmentServiceCredentials_v1 < Google::Cloud::Pubsublite::V1::Credentials
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

describe Google::Cloud::Pubsublite::V1::PartitionAssignmentServiceClient do

  describe 'assign_partitions' do
    custom_error = CustomTestError_v1.new "Custom test error for Google::Cloud::Pubsublite::V1::PartitionAssignmentServiceClient#assign_partitions."

    it 'invokes assign_partitions without error' do
      # Create request parameters
      request = {}

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Cloud::Pubsublite::V1::PartitionAssignment)

      # Mock Grpc layer
      mock_method = proc do |requests|
        request = requests.first
        OpenStruct.new(execute: [expected_response])
      end
      mock_stub = MockGrpcClientStub_v1.new(:assign_partitions, mock_method)

      # Mock auth layer
      mock_credentials = MockPartitionAssignmentServiceCredentials_v1.new("assign_partitions")

      Google::Cloud::Pubsublite::V1::PartitionAssignmentService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Pubsublite::V1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Pubsublite::PartitionAssignment.new(version: :v1)

          # Call method
          response = client.assign_partitions([request])

          # Verify the response
          assert_equal(1, response.count)
          assert_equal(expected_response, response.first)
        end
      end
    end

    it 'invokes assign_partitions with error' do
      # Create request parameters
      request = {}

      # Mock Grpc layer
      mock_method = proc do |requests|
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1.new(:assign_partitions, mock_method)

      # Mock auth layer
      mock_credentials = MockPartitionAssignmentServiceCredentials_v1.new("assign_partitions")

      Google::Cloud::Pubsublite::V1::PartitionAssignmentService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Pubsublite::V1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Pubsublite::PartitionAssignment.new(version: :v1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1 do
            client.assign_partitions([request])
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end
end