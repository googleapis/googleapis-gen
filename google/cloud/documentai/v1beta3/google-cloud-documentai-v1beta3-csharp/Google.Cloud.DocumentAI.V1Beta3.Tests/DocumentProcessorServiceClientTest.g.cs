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
using lro = Google.LongRunning;
using grpccore = Grpc.Core;
using moq = Moq;
using st = System.Threading;
using stt = System.Threading.Tasks;
using xunit = Xunit;

namespace Google.Cloud.DocumentAI.V1Beta3.Tests
{
    /// <summary>Generated unit tests.</summary>
    public sealed class GeneratedDocumentProcessorServiceClientTest
    {
        [xunit::FactAttribute]
        public void ProcessDocumentRequestObject()
        {
            moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient> mockGrpcClient = new moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            ProcessRequest request = new ProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
#pragma warning disable CS0612
                Document = new Document(),
#pragma warning restore CS0612
                SkipHumanReview = true,
                InlineDocument = new Document(),
                RawDocument = new RawDocument(),
            };
            ProcessResponse expectedResponse = new ProcessResponse
            {
                Document = new Document(),
#pragma warning disable CS0612
                HumanReviewOperation = "human_review_operationb1fb7921",
#pragma warning restore CS0612
                HumanReviewStatus = new HumanReviewStatus(),
            };
            mockGrpcClient.Setup(x => x.ProcessDocument(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            DocumentProcessorServiceClient client = new DocumentProcessorServiceClientImpl(mockGrpcClient.Object, null);
            ProcessResponse response = client.ProcessDocument(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ProcessDocumentRequestObjectAsync()
        {
            moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient> mockGrpcClient = new moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            ProcessRequest request = new ProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
#pragma warning disable CS0612
                Document = new Document(),
#pragma warning restore CS0612
                SkipHumanReview = true,
                InlineDocument = new Document(),
                RawDocument = new RawDocument(),
            };
            ProcessResponse expectedResponse = new ProcessResponse
            {
                Document = new Document(),
#pragma warning disable CS0612
                HumanReviewOperation = "human_review_operationb1fb7921",
#pragma warning restore CS0612
                HumanReviewStatus = new HumanReviewStatus(),
            };
            mockGrpcClient.Setup(x => x.ProcessDocumentAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ProcessResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            DocumentProcessorServiceClient client = new DocumentProcessorServiceClientImpl(mockGrpcClient.Object, null);
            ProcessResponse responseCallSettings = await client.ProcessDocumentAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ProcessResponse responseCancellationToken = await client.ProcessDocumentAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ProcessDocument()
        {
            moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient> mockGrpcClient = new moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            ProcessRequest request = new ProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
            };
            ProcessResponse expectedResponse = new ProcessResponse
            {
                Document = new Document(),
#pragma warning disable CS0612
                HumanReviewOperation = "human_review_operationb1fb7921",
#pragma warning restore CS0612
                HumanReviewStatus = new HumanReviewStatus(),
            };
            mockGrpcClient.Setup(x => x.ProcessDocument(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            DocumentProcessorServiceClient client = new DocumentProcessorServiceClientImpl(mockGrpcClient.Object, null);
            ProcessResponse response = client.ProcessDocument(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ProcessDocumentAsync()
        {
            moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient> mockGrpcClient = new moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            ProcessRequest request = new ProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
            };
            ProcessResponse expectedResponse = new ProcessResponse
            {
                Document = new Document(),
#pragma warning disable CS0612
                HumanReviewOperation = "human_review_operationb1fb7921",
#pragma warning restore CS0612
                HumanReviewStatus = new HumanReviewStatus(),
            };
            mockGrpcClient.Setup(x => x.ProcessDocumentAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ProcessResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            DocumentProcessorServiceClient client = new DocumentProcessorServiceClientImpl(mockGrpcClient.Object, null);
            ProcessResponse responseCallSettings = await client.ProcessDocumentAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ProcessResponse responseCancellationToken = await client.ProcessDocumentAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void ProcessDocumentResourceNames()
        {
            moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient> mockGrpcClient = new moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            ProcessRequest request = new ProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
            };
            ProcessResponse expectedResponse = new ProcessResponse
            {
                Document = new Document(),
#pragma warning disable CS0612
                HumanReviewOperation = "human_review_operationb1fb7921",
#pragma warning restore CS0612
                HumanReviewStatus = new HumanReviewStatus(),
            };
            mockGrpcClient.Setup(x => x.ProcessDocument(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            DocumentProcessorServiceClient client = new DocumentProcessorServiceClientImpl(mockGrpcClient.Object, null);
            ProcessResponse response = client.ProcessDocument(request.ProcessorName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task ProcessDocumentResourceNamesAsync()
        {
            moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient> mockGrpcClient = new moq::Mock<DocumentProcessorService.DocumentProcessorServiceClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            ProcessRequest request = new ProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
            };
            ProcessResponse expectedResponse = new ProcessResponse
            {
                Document = new Document(),
#pragma warning disable CS0612
                HumanReviewOperation = "human_review_operationb1fb7921",
#pragma warning restore CS0612
                HumanReviewStatus = new HumanReviewStatus(),
            };
            mockGrpcClient.Setup(x => x.ProcessDocumentAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ProcessResponse>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            DocumentProcessorServiceClient client = new DocumentProcessorServiceClientImpl(mockGrpcClient.Object, null);
            ProcessResponse responseCallSettings = await client.ProcessDocumentAsync(request.ProcessorName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ProcessResponse responseCancellationToken = await client.ProcessDocumentAsync(request.ProcessorName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }
    }
}
