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
  module Ads
    module Admob
      module V1
        # Request to retrieve the specified publisher account.
        # @!attribute [rw] name
        #   @return [String]
        #     Resource name of the publisher account to retrieve.
        #     Example: accounts/pub-9876543210987654
        class GetPublisherAccountRequest; end

        # Request to retrieve the AdMob publisher account accessible with the client
        # credential. Currently all credentials have access to at most 1 account.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Maximum number of accounts to return.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The value returned by the last `ListPublisherAccountsResponse`; indicates
        #     that this is a continuation of a prior `ListPublisherAccounts` call, and
        #     that the system should return the next page of data.
        class ListPublisherAccountsRequest; end

        # Response for the publisher account list request.
        # @!attribute [rw] account
        #   @return [Array<Google::Ads::Admob::V1::PublisherAccount>]
        #     Publisher that the client credentials can access.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     If not empty, indicates that there might be more accounts for the request;
        #     you must pass this value in a new `ListPublisherAccountsRequest`.
        class ListPublisherAccountsResponse; end

        # Request to generate an AdMob Mediation report.
        # @!attribute [rw] parent
        #   @return [String]
        #     Resource name of the account to generate the report for.
        #     Example: accounts/pub-9876543210987654
        # @!attribute [rw] report_spec
        #   @return [Google::Ads::Admob::V1::MediationReportSpec]
        #     Network report specification.
        class GenerateMediationReportRequest; end

        # The streaming response for the AdMob Mediation report where the first
        # response contains the report header, then a stream of row responses, and
        # finally a footer as the last response message.
        #
        # For example:
        #
        #     [{
        #       "header": {
        #         "date_range": {
        #           "start_date": {"year": 2018, "month": 9, "day": 1},
        #           "end_date": {"year": 2018, "month": 9, "day": 1}
        #         },
        #         "localization_settings": {
        #           "currency_code": "USD",
        #           "language_code": "en-US"
        #         }
        #       }
        #     },
        #     {
        #       "row": {
        #         "dimension_values": {
        #           "DATE": {"value": "20180918"},
        #           "APP": {
        #             "value": "ca-app-pub-8123415297019784~1001342552",
        #              "display_label": "My app name!"
        #           }
        #         },
        #         "metric_values": {
        #           "ESTIMATED_EARNINGS": {"decimal_value": "1324746"}
        #         }
        #       }
        #     },
        #     {
        #       "footer": {"matching_row_count": 1}
        #     }]
        # @!attribute [rw] header
        #   @return [Google::Ads::Admob::V1::ReportHeader]
        #     Report generation settings that describes the report contents, such as
        #     the report date range and localization settings.
        # @!attribute [rw] row
        #   @return [Google::Ads::Admob::V1::ReportRow]
        #     Actual report data.
        # @!attribute [rw] footer
        #   @return [Google::Ads::Admob::V1::ReportFooter]
        #     Additional information about the generated report, such as warnings about
        #     the data.
        class GenerateMediationReportResponse; end

        # Request to generate an AdMob Network report.
        # @!attribute [rw] parent
        #   @return [String]
        #     Resource name of the account to generate the report for.
        #     Example: accounts/pub-9876543210987654
        # @!attribute [rw] report_spec
        #   @return [Google::Ads::Admob::V1::NetworkReportSpec]
        #     Network report specification.
        class GenerateNetworkReportRequest; end

        # The streaming response for the AdMob Network report where the first response
        # contains the report header, then a stream of row responses, and finally a
        # footer as the last response message.
        #
        # For example:
        #
        #     [{
        #       "header": {
        #         "dateRange": {
        #           "startDate": {"year": 2018, "month": 9, "day": 1},
        #           "endDate": {"year": 2018, "month": 9, "day": 1}
        #         },
        #         "localizationSettings": {
        #           "currencyCode": "USD",
        #           "languageCode": "en-US"
        #         }
        #       }
        #     },
        #     {
        #       "row": {
        #         "dimensionValues": {
        #           "DATE": {"value": "20180918"},
        #           "APP": {
        #             "value": "ca-app-pub-8123415297019784~1001342552",
        #              displayLabel: "My app name!"
        #           }
        #         },
        #         "metricValues": {
        #           "ESTIMATED_EARNINGS": {"microsValue": 6500000}
        #         }
        #       }
        #     },
        #     {
        #       "footer": {"matchingRowCount": 1}
        #     }]
        # @!attribute [rw] header
        #   @return [Google::Ads::Admob::V1::ReportHeader]
        #     Report generation settings that describes the report contents, such as
        #     the report date range and localization settings.
        # @!attribute [rw] row
        #   @return [Google::Ads::Admob::V1::ReportRow]
        #     Actual report data.
        # @!attribute [rw] footer
        #   @return [Google::Ads::Admob::V1::ReportFooter]
        #     Additional information about the generated report, such as warnings about
        #     the data.
        class GenerateNetworkReportResponse; end
      end
    end
  end
end