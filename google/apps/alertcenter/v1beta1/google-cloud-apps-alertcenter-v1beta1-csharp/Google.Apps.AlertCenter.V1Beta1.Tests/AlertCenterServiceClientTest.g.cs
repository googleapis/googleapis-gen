// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Generated code. DO NOT EDIT!

using gaxgrpc = Google.Api.Gax.Grpc;
using wkt = Google.Protobuf.WellKnownTypes;
using gr = Google.Rpc;
using grpccore = Grpc.Core;
using moq = Moq;
using st = System.Threading;
using stt = System.Threading.Tasks;
using xunit = Xunit;

namespace Google.Apps.AlertCenter.V1Beta1.Tests
{
    /// <summary>Generated unit tests.</summary>
    public sealed class GeneratedAlertCenterServiceClientTest
    {
        [xunit::FactAttribute]
        public void GetAlertRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            GetAlertRequest request = new GetAlertRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            Alert expectedResponse = new Alert
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                CreateTime = new wkt::Timestamp(),
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                Type = "typee2cc9d59",
                Source = "sourcef438cd36",
                Data = new wkt::Any(),
                SecurityInvestigationToolLink = "security_investigation_tool_linked92158f",
                Deleted = true,
                Metadata = new AlertMetadata(),
                UpdateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
            };
            mockGrpcClient.Setup(x => x.GetAlert(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Alert response = client.GetAlert(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetAlertRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            GetAlertRequest request = new GetAlertRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            Alert expectedResponse = new Alert
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                CreateTime = new wkt::Timestamp(),
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                Type = "typee2cc9d59",
                Source = "sourcef438cd36",
                Data = new wkt::Any(),
                SecurityInvestigationToolLink = "security_investigation_tool_linked92158f",
                Deleted = true,
                Metadata = new AlertMetadata(),
                UpdateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
            };
            mockGrpcClient.Setup(x => x.GetAlertAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Alert>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Alert responseCallSettings = await client.GetAlertAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Alert responseCancellationToken = await client.GetAlertAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void DeleteAlertRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            DeleteAlertRequest request = new DeleteAlertRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteAlert(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            client.DeleteAlert(request);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task DeleteAlertRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            DeleteAlertRequest request = new DeleteAlertRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteAlertAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<wkt::Empty>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            await client.DeleteAlertAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            await client.DeleteAlertAsync(request, st::CancellationToken.None);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UndeleteAlertRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            UndeleteAlertRequest request = new UndeleteAlertRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            Alert expectedResponse = new Alert
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                CreateTime = new wkt::Timestamp(),
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                Type = "typee2cc9d59",
                Source = "sourcef438cd36",
                Data = new wkt::Any(),
                SecurityInvestigationToolLink = "security_investigation_tool_linked92158f",
                Deleted = true,
                Metadata = new AlertMetadata(),
                UpdateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
            };
            mockGrpcClient.Setup(x => x.UndeleteAlert(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Alert response = client.UndeleteAlert(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UndeleteAlertRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            UndeleteAlertRequest request = new UndeleteAlertRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            Alert expectedResponse = new Alert
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                CreateTime = new wkt::Timestamp(),
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                Type = "typee2cc9d59",
                Source = "sourcef438cd36",
                Data = new wkt::Any(),
                SecurityInvestigationToolLink = "security_investigation_tool_linked92158f",
                Deleted = true,
                Metadata = new AlertMetadata(),
                UpdateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
            };
            mockGrpcClient.Setup(x => x.UndeleteAlertAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Alert>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Alert responseCallSettings = await client.UndeleteAlertAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Alert responseCancellationToken = await client.UndeleteAlertAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void CreateAlertFeedbackRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            CreateAlertFeedbackRequest request = new CreateAlertFeedbackRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                Feedback = new AlertFeedback(),
            };
            AlertFeedback expectedResponse = new AlertFeedback
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                FeedbackId = "feedback_idc9a08801",
                CreateTime = new wkt::Timestamp(),
                Type = AlertFeedbackType.VeryUseful,
                Email = "email7cf5830c",
            };
            mockGrpcClient.Setup(x => x.CreateAlertFeedback(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            AlertFeedback response = client.CreateAlertFeedback(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task CreateAlertFeedbackRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            CreateAlertFeedbackRequest request = new CreateAlertFeedbackRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                Feedback = new AlertFeedback(),
            };
            AlertFeedback expectedResponse = new AlertFeedback
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                FeedbackId = "feedback_idc9a08801",
                CreateTime = new wkt::Timestamp(),
                Type = AlertFeedbackType.VeryUseful,
                Email = "email7cf5830c",
            };
            mockGrpcClient.Setup(x => x.CreateAlertFeedbackAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<AlertFeedback>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            AlertFeedback responseCallSettings = await client.CreateAlertFeedbackAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            AlertFeedback responseCancellationToken = await client.CreateAlertFeedbackAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ListAlertFeedbackRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            ListAlertFeedbackRequest request = new ListAlertFeedbackRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                Filter = "filtere47ac9b2",
            };
            ListAlertFeedbackResponse expectedResponse = new ListAlertFeedbackResponse
            {
                Feedback =
                {
                    new AlertFeedback(),
                },
            };
            mockGrpcClient.Setup(x => x.ListAlertFeedback(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            ListAlertFeedbackResponse response = client.ListAlertFeedback(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ListAlertFeedbackRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            ListAlertFeedbackRequest request = new ListAlertFeedbackRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                Filter = "filtere47ac9b2",
            };
            ListAlertFeedbackResponse expectedResponse = new ListAlertFeedbackResponse
            {
                Feedback =
                {
                    new AlertFeedback(),
                },
            };
            mockGrpcClient.Setup(x => x.ListAlertFeedbackAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ListAlertFeedbackResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            ListAlertFeedbackResponse responseCallSettings = await client.ListAlertFeedbackAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ListAlertFeedbackResponse responseCancellationToken = await client.ListAlertFeedbackAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetAlertMetadataRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            GetAlertMetadataRequest request = new GetAlertMetadataRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            AlertMetadata expectedResponse = new AlertMetadata
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                Status = "status5444cb9a",
                Assignee = "assignee3de7fd68",
                UpdateTime = new wkt::Timestamp(),
                Severity = "severity56d8cdf6",
                Etag = "etage8ad7218",
            };
            mockGrpcClient.Setup(x => x.GetAlertMetadata(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            AlertMetadata response = client.GetAlertMetadata(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetAlertMetadataRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            GetAlertMetadataRequest request = new GetAlertMetadataRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
            };
            AlertMetadata expectedResponse = new AlertMetadata
            {
                CustomerId = "customer_id3b3724cb",
                AlertId = "alert_idc6c58cd5",
                Status = "status5444cb9a",
                Assignee = "assignee3de7fd68",
                UpdateTime = new wkt::Timestamp(),
                Severity = "severity56d8cdf6",
                Etag = "etage8ad7218",
            };
            mockGrpcClient.Setup(x => x.GetAlertMetadataAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<AlertMetadata>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            AlertMetadata responseCallSettings = await client.GetAlertMetadataAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            AlertMetadata responseCancellationToken = await client.GetAlertMetadataAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetSettingsRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            GetSettingsRequest request = new GetSettingsRequest
            {
                CustomerId = "customer_id3b3724cb",
            };
            Settings expectedResponse = new Settings
            {
                Notifications =
                {
                    new Settings.Types.Notification(),
                },
            };
            mockGrpcClient.Setup(x => x.GetSettings(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Settings response = client.GetSettings(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetSettingsRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            GetSettingsRequest request = new GetSettingsRequest
            {
                CustomerId = "customer_id3b3724cb",
            };
            Settings expectedResponse = new Settings
            {
                Notifications =
                {
                    new Settings.Types.Notification(),
                },
            };
            mockGrpcClient.Setup(x => x.GetSettingsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Settings>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Settings responseCallSettings = await client.GetSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Settings responseCancellationToken = await client.GetSettingsAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateSettingsRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            UpdateSettingsRequest request = new UpdateSettingsRequest
            {
                CustomerId = "customer_id3b3724cb",
                Settings = new Settings(),
            };
            Settings expectedResponse = new Settings
            {
                Notifications =
                {
                    new Settings.Types.Notification(),
                },
            };
            mockGrpcClient.Setup(x => x.UpdateSettings(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Settings response = client.UpdateSettings(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateSettingsRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            UpdateSettingsRequest request = new UpdateSettingsRequest
            {
                CustomerId = "customer_id3b3724cb",
                Settings = new Settings(),
            };
            Settings expectedResponse = new Settings
            {
                Notifications =
                {
                    new Settings.Types.Notification(),
                },
            };
            mockGrpcClient.Setup(x => x.UpdateSettingsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Settings>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            Settings responseCallSettings = await client.UpdateSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Settings responseCancellationToken = await client.UpdateSettingsAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void BatchDeleteAlertsRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            BatchDeleteAlertsRequest request = new BatchDeleteAlertsRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId =
                {
                    "alert_idc6c58cd5",
                },
            };
            BatchDeleteAlertsResponse expectedResponse = new BatchDeleteAlertsResponse
            {
                SuccessAlertIds =
                {
                    "success_alert_ids0aeac317",
                },
                FailedAlertStatus =
                {
                    {
                        "key8a0b6e3c",
                        new gr::Status()
                    },
                },
            };
            mockGrpcClient.Setup(x => x.BatchDeleteAlerts(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            BatchDeleteAlertsResponse response = client.BatchDeleteAlerts(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task BatchDeleteAlertsRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            BatchDeleteAlertsRequest request = new BatchDeleteAlertsRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId =
                {
                    "alert_idc6c58cd5",
                },
            };
            BatchDeleteAlertsResponse expectedResponse = new BatchDeleteAlertsResponse
            {
                SuccessAlertIds =
                {
                    "success_alert_ids0aeac317",
                },
                FailedAlertStatus =
                {
                    {
                        "key8a0b6e3c",
                        new gr::Status()
                    },
                },
            };
            mockGrpcClient.Setup(x => x.BatchDeleteAlertsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<BatchDeleteAlertsResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            BatchDeleteAlertsResponse responseCallSettings = await client.BatchDeleteAlertsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            BatchDeleteAlertsResponse responseCancellationToken = await client.BatchDeleteAlertsAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void BatchUndeleteAlertsRequestObject()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            BatchUndeleteAlertsRequest request = new BatchUndeleteAlertsRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId =
                {
                    "alert_idc6c58cd5",
                },
            };
            BatchUndeleteAlertsResponse expectedResponse = new BatchUndeleteAlertsResponse
            {
                SuccessAlertIds =
                {
                    "success_alert_ids0aeac317",
                },
                FailedAlertStatus =
                {
                    {
                        "key8a0b6e3c",
                        new gr::Status()
                    },
                },
            };
            mockGrpcClient.Setup(x => x.BatchUndeleteAlerts(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            BatchUndeleteAlertsResponse response = client.BatchUndeleteAlerts(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task BatchUndeleteAlertsRequestObjectAsync()
        {
            moq::Mock<AlertCenterService.AlertCenterServiceClient> mockGrpcClient = new moq::Mock<AlertCenterService.AlertCenterServiceClient>(moq::MockBehavior.Strict);
            BatchUndeleteAlertsRequest request = new BatchUndeleteAlertsRequest
            {
                CustomerId = "customer_id3b3724cb",
                AlertId =
                {
                    "alert_idc6c58cd5",
                },
            };
            BatchUndeleteAlertsResponse expectedResponse = new BatchUndeleteAlertsResponse
            {
                SuccessAlertIds =
                {
                    "success_alert_ids0aeac317",
                },
                FailedAlertStatus =
                {
                    {
                        "key8a0b6e3c",
                        new gr::Status()
                    },
                },
            };
            mockGrpcClient.Setup(x => x.BatchUndeleteAlertsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<BatchUndeleteAlertsResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AlertCenterServiceClient client = new AlertCenterServiceClientImpl(mockGrpcClient.Object, null);
            BatchUndeleteAlertsResponse responseCallSettings = await client.BatchUndeleteAlertsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            BatchUndeleteAlertsResponse responseCancellationToken = await client.BatchUndeleteAlertsAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }
    }
}
