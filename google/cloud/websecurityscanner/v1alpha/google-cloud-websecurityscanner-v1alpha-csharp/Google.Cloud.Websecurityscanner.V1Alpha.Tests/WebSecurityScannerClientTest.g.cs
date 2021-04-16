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
using gagr = Google.Api.Gax.ResourceNames;
using wkt = Google.Protobuf.WellKnownTypes;
using grpccore = Grpc.Core;
using moq = Moq;
using st = System.Threading;
using stt = System.Threading.Tasks;
using xunit = Xunit;

namespace Google.Cloud.Websecurityscanner.V1Alpha.Tests
{
    /// <summary>Generated unit tests.</summary>
    public sealed class GeneratedWebSecurityScannerClientTest
    {
        [xunit::FactAttribute]
        public void CreateScanConfigRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            CreateScanConfigRequest request = new CreateScanConfigRequest
            {
                ParentAsProjectName = gagr::ProjectName.FromProject("[PROJECT]"),
                ScanConfig = new ScanConfig(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.CreateScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.CreateScanConfig(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task CreateScanConfigRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            CreateScanConfigRequest request = new CreateScanConfigRequest
            {
                ParentAsProjectName = gagr::ProjectName.FromProject("[PROJECT]"),
                ScanConfig = new ScanConfig(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.CreateScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.CreateScanConfigAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.CreateScanConfigAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void CreateScanConfig()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            CreateScanConfigRequest request = new CreateScanConfigRequest
            {
                ParentAsProjectName = gagr::ProjectName.FromProject("[PROJECT]"),
                ScanConfig = new ScanConfig(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.CreateScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.CreateScanConfig(request.Parent, request.ScanConfig);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task CreateScanConfigAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            CreateScanConfigRequest request = new CreateScanConfigRequest
            {
                ParentAsProjectName = gagr::ProjectName.FromProject("[PROJECT]"),
                ScanConfig = new ScanConfig(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.CreateScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.CreateScanConfigAsync(request.Parent, request.ScanConfig, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.CreateScanConfigAsync(request.Parent, request.ScanConfig, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void CreateScanConfigResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            CreateScanConfigRequest request = new CreateScanConfigRequest
            {
                ParentAsProjectName = gagr::ProjectName.FromProject("[PROJECT]"),
                ScanConfig = new ScanConfig(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.CreateScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.CreateScanConfig(request.ParentAsProjectName, request.ScanConfig);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task CreateScanConfigResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            CreateScanConfigRequest request = new CreateScanConfigRequest
            {
                ParentAsProjectName = gagr::ProjectName.FromProject("[PROJECT]"),
                ScanConfig = new ScanConfig(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.CreateScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.CreateScanConfigAsync(request.ParentAsProjectName, request.ScanConfig, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.CreateScanConfigAsync(request.ParentAsProjectName, request.ScanConfig, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void DeleteScanConfigRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            DeleteScanConfigRequest request = new DeleteScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            client.DeleteScanConfig(request);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task DeleteScanConfigRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            DeleteScanConfigRequest request = new DeleteScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<wkt::Empty>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            await client.DeleteScanConfigAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            await client.DeleteScanConfigAsync(request, st::CancellationToken.None);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void DeleteScanConfig()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            DeleteScanConfigRequest request = new DeleteScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            client.DeleteScanConfig(request.Name);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task DeleteScanConfigAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            DeleteScanConfigRequest request = new DeleteScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<wkt::Empty>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            await client.DeleteScanConfigAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            await client.DeleteScanConfigAsync(request.Name, st::CancellationToken.None);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void DeleteScanConfigResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            DeleteScanConfigRequest request = new DeleteScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            client.DeleteScanConfig(request.ScanConfigName);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task DeleteScanConfigResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            DeleteScanConfigRequest request = new DeleteScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            wkt::Empty expectedResponse = new wkt::Empty { };
            mockGrpcClient.Setup(x => x.DeleteScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<wkt::Empty>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            await client.DeleteScanConfigAsync(request.ScanConfigName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            await client.DeleteScanConfigAsync(request.ScanConfigName, st::CancellationToken.None);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetScanConfigRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanConfigRequest request = new GetScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.GetScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.GetScanConfig(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetScanConfigRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanConfigRequest request = new GetScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.GetScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.GetScanConfigAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.GetScanConfigAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetScanConfig()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanConfigRequest request = new GetScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.GetScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.GetScanConfig(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetScanConfigAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanConfigRequest request = new GetScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.GetScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.GetScanConfigAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.GetScanConfigAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetScanConfigResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanConfigRequest request = new GetScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.GetScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.GetScanConfig(request.ScanConfigName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetScanConfigResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanConfigRequest request = new GetScanConfigRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.GetScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.GetScanConfigAsync(request.ScanConfigName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.GetScanConfigAsync(request.ScanConfigName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateScanConfigRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            UpdateScanConfigRequest request = new UpdateScanConfigRequest
            {
                ScanConfig = new ScanConfig(),
                UpdateMask = new wkt::FieldMask(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.UpdateScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.UpdateScanConfig(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateScanConfigRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            UpdateScanConfigRequest request = new UpdateScanConfigRequest
            {
                ScanConfig = new ScanConfig(),
                UpdateMask = new wkt::FieldMask(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.UpdateScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.UpdateScanConfigAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.UpdateScanConfigAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateScanConfig()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            UpdateScanConfigRequest request = new UpdateScanConfigRequest
            {
                ScanConfig = new ScanConfig(),
                UpdateMask = new wkt::FieldMask(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.UpdateScanConfig(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig response = client.UpdateScanConfig(request.ScanConfig, request.UpdateMask);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateScanConfigAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            UpdateScanConfigRequest request = new UpdateScanConfigRequest
            {
                ScanConfig = new ScanConfig(),
                UpdateMask = new wkt::FieldMask(),
            };
            ScanConfig expectedResponse = new ScanConfig
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
                DisplayName = "display_name137f65c2",
                MaxQps = -1198236314,
                StartingUrls =
                {
                    "starting_urls75fa5e9e",
                },
                Authentication = new ScanConfig.Types.Authentication(),
                UserAgent = ScanConfig.Types.UserAgent.SafariIphone,
                BlacklistPatterns =
                {
                    "blacklist_patterns7a899f15",
                },
                Schedule = new ScanConfig.Types.Schedule(),
                TargetPlatforms =
                {
                    ScanConfig.Types.TargetPlatform.Unspecified,
                },
                LatestRun = new ScanRun(),
            };
            mockGrpcClient.Setup(x => x.UpdateScanConfigAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanConfig>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanConfig responseCallSettings = await client.UpdateScanConfigAsync(request.ScanConfig, request.UpdateMask, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanConfig responseCancellationToken = await client.UpdateScanConfigAsync(request.ScanConfig, request.UpdateMask, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void StartScanRunRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StartScanRunRequest request = new StartScanRunRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StartScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.StartScanRun(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task StartScanRunRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StartScanRunRequest request = new StartScanRunRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StartScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.StartScanRunAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.StartScanRunAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void StartScanRun()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StartScanRunRequest request = new StartScanRunRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StartScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.StartScanRun(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task StartScanRunAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StartScanRunRequest request = new StartScanRunRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StartScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.StartScanRunAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.StartScanRunAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void StartScanRunResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StartScanRunRequest request = new StartScanRunRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StartScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.StartScanRun(request.ScanConfigName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task StartScanRunResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StartScanRunRequest request = new StartScanRunRequest
            {
                ScanConfigName = ScanConfigName.FromProjectScanConfig("[PROJECT]", "[SCAN_CONFIG]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StartScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.StartScanRunAsync(request.ScanConfigName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.StartScanRunAsync(request.ScanConfigName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetScanRunRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanRunRequest request = new GetScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.GetScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.GetScanRun(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetScanRunRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanRunRequest request = new GetScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.GetScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.GetScanRunAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.GetScanRunAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetScanRun()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanRunRequest request = new GetScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.GetScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.GetScanRun(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetScanRunAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanRunRequest request = new GetScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.GetScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.GetScanRunAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.GetScanRunAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetScanRunResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanRunRequest request = new GetScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.GetScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.GetScanRun(request.ScanRunName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetScanRunResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetScanRunRequest request = new GetScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.GetScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.GetScanRunAsync(request.ScanRunName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.GetScanRunAsync(request.ScanRunName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void StopScanRunRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StopScanRunRequest request = new StopScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StopScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.StopScanRun(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task StopScanRunRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StopScanRunRequest request = new StopScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StopScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.StopScanRunAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.StopScanRunAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void StopScanRun()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StopScanRunRequest request = new StopScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StopScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.StopScanRun(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task StopScanRunAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StopScanRunRequest request = new StopScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StopScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.StopScanRunAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.StopScanRunAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void StopScanRunResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StopScanRunRequest request = new StopScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StopScanRun(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun response = client.StopScanRun(request.ScanRunName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task StopScanRunResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            StopScanRunRequest request = new StopScanRunRequest
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ScanRun expectedResponse = new ScanRun
            {
                ScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
                ExecutionState = ScanRun.Types.ExecutionState.Unspecified,
                ResultState = ScanRun.Types.ResultState.Killed,
                StartTime = new wkt::Timestamp(),
                EndTime = new wkt::Timestamp(),
                UrlsCrawledCount = 2307837720024124869L,
                UrlsTestedCount = -373604950692105735L,
                HasVulnerabilities = true,
                ProgressPercent = -412774427,
            };
            mockGrpcClient.Setup(x => x.StopScanRunAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ScanRun>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ScanRun responseCallSettings = await client.StopScanRunAsync(request.ScanRunName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ScanRun responseCancellationToken = await client.StopScanRunAsync(request.ScanRunName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetFindingRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetFindingRequest request = new GetFindingRequest
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
            };
            Finding expectedResponse = new Finding
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
                FindingType = Finding.Types.FindingType.MixedContent,
                HttpMethod = "http_method901a5d34",
                FuzzedUrl = "fuzzed_urlf49dd7ba",
                Body = "body682d1a84",
                Description = "description2cf9da67",
                ReproductionUrl = "reproduction_url0e37b71f",
                FrameUrl = "frame_urlbbc6a753",
                FinalUrl = "final_url01c3df1e",
                TrackingId = "tracking_idc631de68",
                OutdatedLibrary = new OutdatedLibrary(),
                ViolatingResource = new ViolatingResource(),
                VulnerableParameters = new VulnerableParameters(),
                Xss = new Xss(),
                VulnerableHeaders = new VulnerableHeaders(),
            };
            mockGrpcClient.Setup(x => x.GetFinding(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            Finding response = client.GetFinding(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetFindingRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetFindingRequest request = new GetFindingRequest
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
            };
            Finding expectedResponse = new Finding
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
                FindingType = Finding.Types.FindingType.MixedContent,
                HttpMethod = "http_method901a5d34",
                FuzzedUrl = "fuzzed_urlf49dd7ba",
                Body = "body682d1a84",
                Description = "description2cf9da67",
                ReproductionUrl = "reproduction_url0e37b71f",
                FrameUrl = "frame_urlbbc6a753",
                FinalUrl = "final_url01c3df1e",
                TrackingId = "tracking_idc631de68",
                OutdatedLibrary = new OutdatedLibrary(),
                ViolatingResource = new ViolatingResource(),
                VulnerableParameters = new VulnerableParameters(),
                Xss = new Xss(),
                VulnerableHeaders = new VulnerableHeaders(),
            };
            mockGrpcClient.Setup(x => x.GetFindingAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Finding>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            Finding responseCallSettings = await client.GetFindingAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Finding responseCancellationToken = await client.GetFindingAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetFinding()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetFindingRequest request = new GetFindingRequest
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
            };
            Finding expectedResponse = new Finding
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
                FindingType = Finding.Types.FindingType.MixedContent,
                HttpMethod = "http_method901a5d34",
                FuzzedUrl = "fuzzed_urlf49dd7ba",
                Body = "body682d1a84",
                Description = "description2cf9da67",
                ReproductionUrl = "reproduction_url0e37b71f",
                FrameUrl = "frame_urlbbc6a753",
                FinalUrl = "final_url01c3df1e",
                TrackingId = "tracking_idc631de68",
                OutdatedLibrary = new OutdatedLibrary(),
                ViolatingResource = new ViolatingResource(),
                VulnerableParameters = new VulnerableParameters(),
                Xss = new Xss(),
                VulnerableHeaders = new VulnerableHeaders(),
            };
            mockGrpcClient.Setup(x => x.GetFinding(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            Finding response = client.GetFinding(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetFindingAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetFindingRequest request = new GetFindingRequest
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
            };
            Finding expectedResponse = new Finding
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
                FindingType = Finding.Types.FindingType.MixedContent,
                HttpMethod = "http_method901a5d34",
                FuzzedUrl = "fuzzed_urlf49dd7ba",
                Body = "body682d1a84",
                Description = "description2cf9da67",
                ReproductionUrl = "reproduction_url0e37b71f",
                FrameUrl = "frame_urlbbc6a753",
                FinalUrl = "final_url01c3df1e",
                TrackingId = "tracking_idc631de68",
                OutdatedLibrary = new OutdatedLibrary(),
                ViolatingResource = new ViolatingResource(),
                VulnerableParameters = new VulnerableParameters(),
                Xss = new Xss(),
                VulnerableHeaders = new VulnerableHeaders(),
            };
            mockGrpcClient.Setup(x => x.GetFindingAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Finding>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            Finding responseCallSettings = await client.GetFindingAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Finding responseCancellationToken = await client.GetFindingAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetFindingResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetFindingRequest request = new GetFindingRequest
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
            };
            Finding expectedResponse = new Finding
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
                FindingType = Finding.Types.FindingType.MixedContent,
                HttpMethod = "http_method901a5d34",
                FuzzedUrl = "fuzzed_urlf49dd7ba",
                Body = "body682d1a84",
                Description = "description2cf9da67",
                ReproductionUrl = "reproduction_url0e37b71f",
                FrameUrl = "frame_urlbbc6a753",
                FinalUrl = "final_url01c3df1e",
                TrackingId = "tracking_idc631de68",
                OutdatedLibrary = new OutdatedLibrary(),
                ViolatingResource = new ViolatingResource(),
                VulnerableParameters = new VulnerableParameters(),
                Xss = new Xss(),
                VulnerableHeaders = new VulnerableHeaders(),
            };
            mockGrpcClient.Setup(x => x.GetFinding(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            Finding response = client.GetFinding(request.FindingName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetFindingResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            GetFindingRequest request = new GetFindingRequest
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
            };
            Finding expectedResponse = new Finding
            {
                FindingName = FindingName.FromProjectScanConfigScanRunFinding("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]", "[FINDING]"),
                FindingType = Finding.Types.FindingType.MixedContent,
                HttpMethod = "http_method901a5d34",
                FuzzedUrl = "fuzzed_urlf49dd7ba",
                Body = "body682d1a84",
                Description = "description2cf9da67",
                ReproductionUrl = "reproduction_url0e37b71f",
                FrameUrl = "frame_urlbbc6a753",
                FinalUrl = "final_url01c3df1e",
                TrackingId = "tracking_idc631de68",
                OutdatedLibrary = new OutdatedLibrary(),
                ViolatingResource = new ViolatingResource(),
                VulnerableParameters = new VulnerableParameters(),
                Xss = new Xss(),
                VulnerableHeaders = new VulnerableHeaders(),
            };
            mockGrpcClient.Setup(x => x.GetFindingAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Finding>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            Finding responseCallSettings = await client.GetFindingAsync(request.FindingName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Finding responseCancellationToken = await client.GetFindingAsync(request.FindingName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ListFindingTypeStatsRequestObject()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            ListFindingTypeStatsRequest request = new ListFindingTypeStatsRequest
            {
                ParentAsScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ListFindingTypeStatsResponse expectedResponse = new ListFindingTypeStatsResponse
            {
                FindingTypeStats =
                {
                    new FindingTypeStats(),
                },
            };
            mockGrpcClient.Setup(x => x.ListFindingTypeStats(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ListFindingTypeStatsResponse response = client.ListFindingTypeStats(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ListFindingTypeStatsRequestObjectAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            ListFindingTypeStatsRequest request = new ListFindingTypeStatsRequest
            {
                ParentAsScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ListFindingTypeStatsResponse expectedResponse = new ListFindingTypeStatsResponse
            {
                FindingTypeStats =
                {
                    new FindingTypeStats(),
                },
            };
            mockGrpcClient.Setup(x => x.ListFindingTypeStatsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ListFindingTypeStatsResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ListFindingTypeStatsResponse responseCallSettings = await client.ListFindingTypeStatsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ListFindingTypeStatsResponse responseCancellationToken = await client.ListFindingTypeStatsAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ListFindingTypeStats()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            ListFindingTypeStatsRequest request = new ListFindingTypeStatsRequest
            {
                ParentAsScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ListFindingTypeStatsResponse expectedResponse = new ListFindingTypeStatsResponse
            {
                FindingTypeStats =
                {
                    new FindingTypeStats(),
                },
            };
            mockGrpcClient.Setup(x => x.ListFindingTypeStats(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ListFindingTypeStatsResponse response = client.ListFindingTypeStats(request.Parent);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ListFindingTypeStatsAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            ListFindingTypeStatsRequest request = new ListFindingTypeStatsRequest
            {
                ParentAsScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ListFindingTypeStatsResponse expectedResponse = new ListFindingTypeStatsResponse
            {
                FindingTypeStats =
                {
                    new FindingTypeStats(),
                },
            };
            mockGrpcClient.Setup(x => x.ListFindingTypeStatsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ListFindingTypeStatsResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ListFindingTypeStatsResponse responseCallSettings = await client.ListFindingTypeStatsAsync(request.Parent, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ListFindingTypeStatsResponse responseCancellationToken = await client.ListFindingTypeStatsAsync(request.Parent, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ListFindingTypeStatsResourceNames()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            ListFindingTypeStatsRequest request = new ListFindingTypeStatsRequest
            {
                ParentAsScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ListFindingTypeStatsResponse expectedResponse = new ListFindingTypeStatsResponse
            {
                FindingTypeStats =
                {
                    new FindingTypeStats(),
                },
            };
            mockGrpcClient.Setup(x => x.ListFindingTypeStats(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ListFindingTypeStatsResponse response = client.ListFindingTypeStats(request.ParentAsScanRunName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ListFindingTypeStatsResourceNamesAsync()
        {
            moq::Mock<WebSecurityScanner.WebSecurityScannerClient> mockGrpcClient = new moq::Mock<WebSecurityScanner.WebSecurityScannerClient>(moq::MockBehavior.Strict);
            ListFindingTypeStatsRequest request = new ListFindingTypeStatsRequest
            {
                ParentAsScanRunName = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]"),
            };
            ListFindingTypeStatsResponse expectedResponse = new ListFindingTypeStatsResponse
            {
                FindingTypeStats =
                {
                    new FindingTypeStats(),
                },
            };
            mockGrpcClient.Setup(x => x.ListFindingTypeStatsAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ListFindingTypeStatsResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            WebSecurityScannerClient client = new WebSecurityScannerClientImpl(mockGrpcClient.Object, null);
            ListFindingTypeStatsResponse responseCallSettings = await client.ListFindingTypeStatsAsync(request.ParentAsScanRunName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ListFindingTypeStatsResponse responseCancellationToken = await client.ListFindingTypeStatsAsync(request.ParentAsScanRunName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }
    }
}
