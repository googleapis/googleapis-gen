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
using grpccore = Grpc.Core;
using moq = Moq;
using st = System.Threading;
using stt = System.Threading.Tasks;
using xunit = Xunit;

namespace Google.Cloud.DataCatalog.V1Beta1.Tests
{
    /// <summary>Generated unit tests.</summary>
    public sealed class GeneratedPolicyTagManagerSerializationClientTest
    {
        [xunit::FactAttribute]
        public void ImportTaxonomiesRequestObject()
        {
            moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient> mockGrpcClient = new moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient>(moq::MockBehavior.Strict);
            ImportTaxonomiesRequest request = new ImportTaxonomiesRequest
            {
                ParentAsLocationName = gagr::LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                InlineSource = new InlineSource(),
            };
            ImportTaxonomiesResponse expectedResponse = new ImportTaxonomiesResponse
            {
                Taxonomies = { new Taxonomy(), },
            };
            mockGrpcClient.Setup(x => x.ImportTaxonomies(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            PolicyTagManagerSerializationClient client = new PolicyTagManagerSerializationClientImpl(mockGrpcClient.Object, null);
            ImportTaxonomiesResponse response = client.ImportTaxonomies(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ImportTaxonomiesRequestObjectAsync()
        {
            moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient> mockGrpcClient = new moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient>(moq::MockBehavior.Strict);
            ImportTaxonomiesRequest request = new ImportTaxonomiesRequest
            {
                ParentAsLocationName = gagr::LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                InlineSource = new InlineSource(),
            };
            ImportTaxonomiesResponse expectedResponse = new ImportTaxonomiesResponse
            {
                Taxonomies = { new Taxonomy(), },
            };
            mockGrpcClient.Setup(x => x.ImportTaxonomiesAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ImportTaxonomiesResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            PolicyTagManagerSerializationClient client = new PolicyTagManagerSerializationClientImpl(mockGrpcClient.Object, null);
            ImportTaxonomiesResponse responseCallSettings = await client.ImportTaxonomiesAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ImportTaxonomiesResponse responseCancellationToken = await client.ImportTaxonomiesAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ExportTaxonomiesRequestObject()
        {
            moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient> mockGrpcClient = new moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient>(moq::MockBehavior.Strict);
            ExportTaxonomiesRequest request = new ExportTaxonomiesRequest
            {
                ParentAsLocationName = gagr::LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                TaxonomiesAsTaxonomyNames =
                {
                    TaxonomyName.FromProjectLocationTaxonomy("[PROJECT]", "[LOCATION]", "[TAXONOMY]"),
                },
                SerializedTaxonomies = true,
            };
            ExportTaxonomiesResponse expectedResponse = new ExportTaxonomiesResponse
            {
                Taxonomies =
                {
                    new SerializedTaxonomy(),
                },
            };
            mockGrpcClient.Setup(x => x.ExportTaxonomies(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            PolicyTagManagerSerializationClient client = new PolicyTagManagerSerializationClientImpl(mockGrpcClient.Object, null);
            ExportTaxonomiesResponse response = client.ExportTaxonomies(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ExportTaxonomiesRequestObjectAsync()
        {
            moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient> mockGrpcClient = new moq::Mock<PolicyTagManagerSerialization.PolicyTagManagerSerializationClient>(moq::MockBehavior.Strict);
            ExportTaxonomiesRequest request = new ExportTaxonomiesRequest
            {
                ParentAsLocationName = gagr::LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                TaxonomiesAsTaxonomyNames =
                {
                    TaxonomyName.FromProjectLocationTaxonomy("[PROJECT]", "[LOCATION]", "[TAXONOMY]"),
                },
                SerializedTaxonomies = true,
            };
            ExportTaxonomiesResponse expectedResponse = new ExportTaxonomiesResponse
            {
                Taxonomies =
                {
                    new SerializedTaxonomy(),
                },
            };
            mockGrpcClient.Setup(x => x.ExportTaxonomiesAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ExportTaxonomiesResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            PolicyTagManagerSerializationClient client = new PolicyTagManagerSerializationClientImpl(mockGrpcClient.Object, null);
            ExportTaxonomiesResponse responseCallSettings = await client.ExportTaxonomiesAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ExportTaxonomiesResponse responseCancellationToken = await client.ExportTaxonomiesAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }
    }
}
