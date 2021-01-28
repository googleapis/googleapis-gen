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

require "google/cloud/area120/tables"
require "google/cloud/area120/tables/v1alpha1/tables_service_client"
require "google/area120/tables/v1alpha1/tables_services_pb"

class CustomTestError_v1alpha1 < StandardError; end

# Mock for the GRPC::ClientStub class.
class MockGrpcClientStub_v1alpha1

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

class MockTablesServiceCredentials_v1alpha1 < Google::Cloud::Area120::Tables::V1alpha1::Credentials
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

describe Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient do

  describe 'get_table' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#get_table."

    it 'invokes get_table without error' do
      # Create request parameters
      name = ''

      # Create expected grpc response
      name_2 = "name2-1052831874"
      display_name = "displayName1615086568"
      expected_response = { name: name_2, display_name: display_name }
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::Table)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::GetTableRequest, request)
        assert_equal(name, request.name)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:get_table, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("get_table")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.get_table(name)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.get_table(name) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes get_table with error' do
      # Create request parameters
      name = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::GetTableRequest, request)
        assert_equal(name, request.name)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:get_table, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("get_table")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.get_table(name)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'list_tables' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#list_tables."

    it 'invokes list_tables without error' do
      # Create expected grpc response
      next_page_token = ""
      tables_element = {}
      tables = [tables_element]
      expected_response = { next_page_token: next_page_token, tables: tables }
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::ListTablesResponse)

      # Mock Grpc layer
      mock_method = proc do
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:list_tables, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("list_tables")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.list_tables

          # Verify the response
          assert(response.instance_of?(Google::Gax::PagedEnumerable))
          assert_equal(expected_response, response.page.response)
          assert_nil(response.next_page)
          assert_equal(expected_response.tables.to_a, response.to_a)
        end
      end
    end

    it 'invokes list_tables with error' do
      # Mock Grpc layer
      mock_method = proc do
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:list_tables, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("list_tables")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.list_tables
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'get_row' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#get_row."

    it 'invokes get_row without error' do
      # Create request parameters
      name = ''

      # Create expected grpc response
      name_2 = "name2-1052831874"
      expected_response = { name: name_2 }
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::Row)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::GetRowRequest, request)
        assert_equal(name, request.name)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:get_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("get_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.get_row(name)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.get_row(name) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes get_row with error' do
      # Create request parameters
      name = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::GetRowRequest, request)
        assert_equal(name, request.name)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:get_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("get_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.get_row(name)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'list_rows' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#list_rows."

    it 'invokes list_rows without error' do
      # Create request parameters
      parent = ''

      # Create expected grpc response
      next_page_token = ""
      rows_element = {}
      rows = [rows_element]
      expected_response = { next_page_token: next_page_token, rows: rows }
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::ListRowsResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::ListRowsRequest, request)
        assert_equal(parent, request.parent)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:list_rows, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("list_rows")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.list_rows(parent)

          # Verify the response
          assert(response.instance_of?(Google::Gax::PagedEnumerable))
          assert_equal(expected_response, response.page.response)
          assert_nil(response.next_page)
          assert_equal(expected_response.rows.to_a, response.to_a)
        end
      end
    end

    it 'invokes list_rows with error' do
      # Create request parameters
      parent = ''

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::ListRowsRequest, request)
        assert_equal(parent, request.parent)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:list_rows, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("list_rows")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.list_rows(parent)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'create_row' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#create_row."

    it 'invokes create_row without error' do
      # Create request parameters
      parent = ''
      row = {}

      # Create expected grpc response
      name = "name3373707"
      expected_response = { name: name }
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::Row)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::CreateRowRequest, request)
        assert_equal(parent, request.parent)
        assert_equal(Google::Gax::to_proto(row, Google::Area120::Tables::V1alpha1::Row), request.row)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:create_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("create_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.create_row(parent, row)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.create_row(parent, row) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes create_row with error' do
      # Create request parameters
      parent = ''
      row = {}

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::CreateRowRequest, request)
        assert_equal(parent, request.parent)
        assert_equal(Google::Gax::to_proto(row, Google::Area120::Tables::V1alpha1::Row), request.row)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:create_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("create_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.create_row(parent, row)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'batch_create_rows' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#batch_create_rows."

    it 'invokes batch_create_rows without error' do
      # Create request parameters
      parent = ''
      requests = []

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::BatchCreateRowsResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::BatchCreateRowsRequest, request)
        assert_equal(parent, request.parent)
        requests = requests.map do |req|
          Google::Gax::to_proto(req, Google::Area120::Tables::V1alpha1::CreateRowRequest)
        end
        assert_equal(requests, request.requests)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:batch_create_rows, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("batch_create_rows")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.batch_create_rows(parent, requests)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.batch_create_rows(parent, requests) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes batch_create_rows with error' do
      # Create request parameters
      parent = ''
      requests = []

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::BatchCreateRowsRequest, request)
        assert_equal(parent, request.parent)
        requests = requests.map do |req|
          Google::Gax::to_proto(req, Google::Area120::Tables::V1alpha1::CreateRowRequest)
        end
        assert_equal(requests, request.requests)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:batch_create_rows, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("batch_create_rows")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.batch_create_rows(parent, requests)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'update_row' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#update_row."

    it 'invokes update_row without error' do
      # Create request parameters
      row = {}

      # Create expected grpc response
      name = "name3373707"
      expected_response = { name: name }
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::Row)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::UpdateRowRequest, request)
        assert_equal(Google::Gax::to_proto(row, Google::Area120::Tables::V1alpha1::Row), request.row)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:update_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("update_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.update_row(row)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.update_row(row) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes update_row with error' do
      # Create request parameters
      row = {}

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::UpdateRowRequest, request)
        assert_equal(Google::Gax::to_proto(row, Google::Area120::Tables::V1alpha1::Row), request.row)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:update_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("update_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.update_row(row)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'batch_update_rows' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#batch_update_rows."

    it 'invokes batch_update_rows without error' do
      # Create request parameters
      parent = ''
      requests = []

      # Create expected grpc response
      expected_response = {}
      expected_response = Google::Gax::to_proto(expected_response, Google::Area120::Tables::V1alpha1::BatchUpdateRowsResponse)

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::BatchUpdateRowsRequest, request)
        assert_equal(parent, request.parent)
        requests = requests.map do |req|
          Google::Gax::to_proto(req, Google::Area120::Tables::V1alpha1::UpdateRowRequest)
        end
        assert_equal(requests, request.requests)
        OpenStruct.new(execute: expected_response)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:batch_update_rows, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("batch_update_rows")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.batch_update_rows(parent, requests)

          # Verify the response
          assert_equal(expected_response, response)

          # Call method with block
          client.batch_update_rows(parent, requests) do |response, operation|
            # Verify the response
            assert_equal(expected_response, response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes batch_update_rows with error' do
      # Create request parameters
      parent = ''
      requests = []

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::BatchUpdateRowsRequest, request)
        assert_equal(parent, request.parent)
        requests = requests.map do |req|
          Google::Gax::to_proto(req, Google::Area120::Tables::V1alpha1::UpdateRowRequest)
        end
        assert_equal(requests, request.requests)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:batch_update_rows, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("batch_update_rows")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.batch_update_rows(parent, requests)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end

  describe 'delete_row' do
    custom_error = CustomTestError_v1alpha1.new "Custom test error for Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient#delete_row."

    it 'invokes delete_row without error' do
      # Create request parameters
      formatted_name = Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient.row_path("[TABLE]", "[ROW]")

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::DeleteRowRequest, request)
        assert_equal(formatted_name, request.name)
        OpenStruct.new(execute: nil)
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:delete_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("delete_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          response = client.delete_row(formatted_name)

          # Verify the response
          assert_nil(response)

          # Call method with block
          client.delete_row(formatted_name) do |response, operation|
            # Verify the response
            assert_nil(response)
            refute_nil(operation)
          end
        end
      end
    end

    it 'invokes delete_row with error' do
      # Create request parameters
      formatted_name = Google::Cloud::Area120::Tables::V1alpha1::TablesServiceClient.row_path("[TABLE]", "[ROW]")

      # Mock Grpc layer
      mock_method = proc do |request|
        assert_instance_of(Google::Area120::Tables::V1alpha1::DeleteRowRequest, request)
        assert_equal(formatted_name, request.name)
        raise custom_error
      end
      mock_stub = MockGrpcClientStub_v1alpha1.new(:delete_row, mock_method)

      # Mock auth layer
      mock_credentials = MockTablesServiceCredentials_v1alpha1.new("delete_row")

      Google::Area120::Tables::V1alpha1::TablesService::Stub.stub(:new, mock_stub) do
        Google::Cloud::Area120::Tables::V1alpha1::Credentials.stub(:default, mock_credentials) do
          client = Google::Cloud::Area120::Tables.new(version: :v1alpha1)

          # Call method
          err = assert_raises Google::Gax::GaxError, CustomTestError_v1alpha1 do
            client.delete_row(formatted_name)
          end

          # Verify the GaxError wrapped the custom error that was raised.
          assert_match(custom_error.message, err.message)
        end
      end
    end
  end
end