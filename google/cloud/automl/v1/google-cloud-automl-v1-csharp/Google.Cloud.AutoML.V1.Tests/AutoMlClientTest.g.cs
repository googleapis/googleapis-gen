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
using wkt = Google.Protobuf.WellKnownTypes;
using grpccore = Grpc.Core;
using moq = Moq;
using st = System.Threading;
using stt = System.Threading.Tasks;
using xunit = Xunit;

namespace Google.Cloud.AutoML.V1.Tests
{
    /// <summary>Generated unit tests.</summary>
    public sealed class GeneratedAutoMlClientTest
    {
        [xunit::FactAttribute]
        public void GetDatasetRequestObject()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetDatasetRequest request = new GetDatasetRequest
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetDataset(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset response = client.GetDataset(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetDatasetRequestObjectAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetDatasetRequest request = new GetDatasetRequest
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetDatasetAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Dataset>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset responseCallSettings = await client.GetDatasetAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Dataset responseCancellationToken = await client.GetDatasetAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetDataset()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetDatasetRequest request = new GetDatasetRequest
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetDataset(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset response = client.GetDataset(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetDatasetAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetDatasetRequest request = new GetDatasetRequest
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetDatasetAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Dataset>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset responseCallSettings = await client.GetDatasetAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Dataset responseCancellationToken = await client.GetDatasetAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetDatasetResourceNames()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetDatasetRequest request = new GetDatasetRequest
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetDataset(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset response = client.GetDataset(request.DatasetName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetDatasetResourceNamesAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetDatasetRequest request = new GetDatasetRequest
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetDatasetAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Dataset>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset responseCallSettings = await client.GetDatasetAsync(request.DatasetName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Dataset responseCancellationToken = await client.GetDatasetAsync(request.DatasetName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateDatasetRequestObject()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateDatasetRequest request = new UpdateDatasetRequest
            {
                Dataset = new Dataset(),
                UpdateMask = new wkt::FieldMask(),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateDataset(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset response = client.UpdateDataset(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateDatasetRequestObjectAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateDatasetRequest request = new UpdateDatasetRequest
            {
                Dataset = new Dataset(),
                UpdateMask = new wkt::FieldMask(),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateDatasetAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Dataset>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset responseCallSettings = await client.UpdateDatasetAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Dataset responseCancellationToken = await client.UpdateDatasetAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateDataset()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateDatasetRequest request = new UpdateDatasetRequest
            {
                Dataset = new Dataset(),
                UpdateMask = new wkt::FieldMask(),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateDataset(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset response = client.UpdateDataset(request.Dataset, request.UpdateMask);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateDatasetAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateDatasetRequest request = new UpdateDatasetRequest
            {
                Dataset = new Dataset(),
                UpdateMask = new wkt::FieldMask(),
            };
            Dataset expectedResponse = new Dataset
            {
                DatasetName = DatasetName.FromProjectLocationDataset("[PROJECT]", "[LOCATION]", "[DATASET]"),
                DisplayName = "display_name137f65c2",
                Description = "description2cf9da67",
                CreateTime = new wkt::Timestamp(),
                Etag = "etage8ad7218",
                ExampleCount = -1179891861,
                TranslationDatasetMetadata = new TranslationDatasetMetadata(),
                ImageClassificationDatasetMetadata = new ImageClassificationDatasetMetadata(),
                TextClassificationDatasetMetadata = new TextClassificationDatasetMetadata(),
                ImageObjectDetectionDatasetMetadata = new ImageObjectDetectionDatasetMetadata(),
                TextExtractionDatasetMetadata = new TextExtractionDatasetMetadata(),
                TextSentimentDatasetMetadata = new TextSentimentDatasetMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateDatasetAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Dataset>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Dataset responseCallSettings = await client.UpdateDatasetAsync(request.Dataset, request.UpdateMask, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Dataset responseCancellationToken = await client.UpdateDatasetAsync(request.Dataset, request.UpdateMask, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetAnnotationSpecRequestObject()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetAnnotationSpecRequest request = new GetAnnotationSpecRequest
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
            };
            AnnotationSpec expectedResponse = new AnnotationSpec
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
                DisplayName = "display_name137f65c2",
                ExampleCount = -1179891861,
            };
            mockGrpcClient.Setup(x => x.GetAnnotationSpec(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            AnnotationSpec response = client.GetAnnotationSpec(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetAnnotationSpecRequestObjectAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetAnnotationSpecRequest request = new GetAnnotationSpecRequest
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
            };
            AnnotationSpec expectedResponse = new AnnotationSpec
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
                DisplayName = "display_name137f65c2",
                ExampleCount = -1179891861,
            };
            mockGrpcClient.Setup(x => x.GetAnnotationSpecAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<AnnotationSpec>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            AnnotationSpec responseCallSettings = await client.GetAnnotationSpecAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            AnnotationSpec responseCancellationToken = await client.GetAnnotationSpecAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetAnnotationSpec()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetAnnotationSpecRequest request = new GetAnnotationSpecRequest
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
            };
            AnnotationSpec expectedResponse = new AnnotationSpec
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
                DisplayName = "display_name137f65c2",
                ExampleCount = -1179891861,
            };
            mockGrpcClient.Setup(x => x.GetAnnotationSpec(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            AnnotationSpec response = client.GetAnnotationSpec(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetAnnotationSpecAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetAnnotationSpecRequest request = new GetAnnotationSpecRequest
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
            };
            AnnotationSpec expectedResponse = new AnnotationSpec
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
                DisplayName = "display_name137f65c2",
                ExampleCount = -1179891861,
            };
            mockGrpcClient.Setup(x => x.GetAnnotationSpecAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<AnnotationSpec>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            AnnotationSpec responseCallSettings = await client.GetAnnotationSpecAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            AnnotationSpec responseCancellationToken = await client.GetAnnotationSpecAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetAnnotationSpecResourceNames()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetAnnotationSpecRequest request = new GetAnnotationSpecRequest
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
            };
            AnnotationSpec expectedResponse = new AnnotationSpec
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
                DisplayName = "display_name137f65c2",
                ExampleCount = -1179891861,
            };
            mockGrpcClient.Setup(x => x.GetAnnotationSpec(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            AnnotationSpec response = client.GetAnnotationSpec(request.AnnotationSpecName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetAnnotationSpecResourceNamesAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetAnnotationSpecRequest request = new GetAnnotationSpecRequest
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
            };
            AnnotationSpec expectedResponse = new AnnotationSpec
            {
                AnnotationSpecName = AnnotationSpecName.FromProjectLocationDatasetAnnotationSpec("[PROJECT]", "[LOCATION]", "[DATASET]", "[ANNOTATION_SPEC]"),
                DisplayName = "display_name137f65c2",
                ExampleCount = -1179891861,
            };
            mockGrpcClient.Setup(x => x.GetAnnotationSpecAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<AnnotationSpec>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            AnnotationSpec responseCallSettings = await client.GetAnnotationSpecAsync(request.AnnotationSpecName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            AnnotationSpec responseCancellationToken = await client.GetAnnotationSpecAsync(request.AnnotationSpecName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetModelRequestObject()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelRequest request = new GetModelRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetModel(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model response = client.GetModel(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetModelRequestObjectAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelRequest request = new GetModelRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetModelAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Model>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model responseCallSettings = await client.GetModelAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Model responseCancellationToken = await client.GetModelAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetModel()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelRequest request = new GetModelRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetModel(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model response = client.GetModel(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetModelAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelRequest request = new GetModelRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetModelAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Model>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model responseCallSettings = await client.GetModelAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Model responseCancellationToken = await client.GetModelAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetModelResourceNames()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelRequest request = new GetModelRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetModel(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model response = client.GetModel(request.ModelName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetModelResourceNamesAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelRequest request = new GetModelRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.GetModelAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Model>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model responseCallSettings = await client.GetModelAsync(request.ModelName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Model responseCancellationToken = await client.GetModelAsync(request.ModelName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateModelRequestObject()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateModelRequest request = new UpdateModelRequest
            {
                Model = new Model(),
                UpdateMask = new wkt::FieldMask(),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateModel(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model response = client.UpdateModel(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateModelRequestObjectAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateModelRequest request = new UpdateModelRequest
            {
                Model = new Model(),
                UpdateMask = new wkt::FieldMask(),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateModelAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Model>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model responseCallSettings = await client.UpdateModelAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Model responseCancellationToken = await client.UpdateModelAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void UpdateModel()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateModelRequest request = new UpdateModelRequest
            {
                Model = new Model(),
                UpdateMask = new wkt::FieldMask(),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateModel(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model response = client.UpdateModel(request.Model, request.UpdateMask);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task UpdateModelAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            UpdateModelRequest request = new UpdateModelRequest
            {
                Model = new Model(),
                UpdateMask = new wkt::FieldMask(),
            };
            Model expectedResponse = new Model
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                DisplayName = "display_name137f65c2",
                DatasetId = "dataset_id08d366d3",
                CreateTime = new wkt::Timestamp(),
                DeploymentState = Model.Types.DeploymentState.Deployed,
                Etag = "etage8ad7218",
                UpdateTime = new wkt::Timestamp(),
                ImageClassificationModelMetadata = new ImageClassificationModelMetadata(),
                TextClassificationModelMetadata = new TextClassificationModelMetadata(),
                TranslationModelMetadata = new TranslationModelMetadata(),
                TextExtractionModelMetadata = new TextExtractionModelMetadata(),
                ImageObjectDetectionModelMetadata = new ImageObjectDetectionModelMetadata(),
                TextSentimentModelMetadata = new TextSentimentModelMetadata(),
                Labels =
                {
                    {
                        "key8a0b6e3c",
                        "value60c16320"
                    },
                },
            };
            mockGrpcClient.Setup(x => x.UpdateModelAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<Model>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            Model responseCallSettings = await client.UpdateModelAsync(request.Model, request.UpdateMask, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            Model responseCancellationToken = await client.UpdateModelAsync(request.Model, request.UpdateMask, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetModelEvaluationRequestObject()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelEvaluationRequest request = new GetModelEvaluationRequest
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
            };
            ModelEvaluation expectedResponse = new ModelEvaluation
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
                AnnotationSpecId = "annotation_spec_ide0c3e8b2",
                CreateTime = new wkt::Timestamp(),
                EvaluatedExampleCount = -1119926106,
                ClassificationEvaluationMetrics = new ClassificationEvaluationMetrics(),
                TranslationEvaluationMetrics = new TranslationEvaluationMetrics(),
                TextSentimentEvaluationMetrics = new TextSentimentEvaluationMetrics(),
                ImageObjectDetectionEvaluationMetrics = new ImageObjectDetectionEvaluationMetrics(),
                TextExtractionEvaluationMetrics = new TextExtractionEvaluationMetrics(),
                DisplayName = "display_name137f65c2",
            };
            mockGrpcClient.Setup(x => x.GetModelEvaluation(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            ModelEvaluation response = client.GetModelEvaluation(request);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetModelEvaluationRequestObjectAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelEvaluationRequest request = new GetModelEvaluationRequest
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
            };
            ModelEvaluation expectedResponse = new ModelEvaluation
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
                AnnotationSpecId = "annotation_spec_ide0c3e8b2",
                CreateTime = new wkt::Timestamp(),
                EvaluatedExampleCount = -1119926106,
                ClassificationEvaluationMetrics = new ClassificationEvaluationMetrics(),
                TranslationEvaluationMetrics = new TranslationEvaluationMetrics(),
                TextSentimentEvaluationMetrics = new TextSentimentEvaluationMetrics(),
                ImageObjectDetectionEvaluationMetrics = new ImageObjectDetectionEvaluationMetrics(),
                TextExtractionEvaluationMetrics = new TextExtractionEvaluationMetrics(),
                DisplayName = "display_name137f65c2",
            };
            mockGrpcClient.Setup(x => x.GetModelEvaluationAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ModelEvaluation>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            ModelEvaluation responseCallSettings = await client.GetModelEvaluationAsync(request, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ModelEvaluation responseCancellationToken = await client.GetModelEvaluationAsync(request, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetModelEvaluation()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelEvaluationRequest request = new GetModelEvaluationRequest
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
            };
            ModelEvaluation expectedResponse = new ModelEvaluation
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
                AnnotationSpecId = "annotation_spec_ide0c3e8b2",
                CreateTime = new wkt::Timestamp(),
                EvaluatedExampleCount = -1119926106,
                ClassificationEvaluationMetrics = new ClassificationEvaluationMetrics(),
                TranslationEvaluationMetrics = new TranslationEvaluationMetrics(),
                TextSentimentEvaluationMetrics = new TextSentimentEvaluationMetrics(),
                ImageObjectDetectionEvaluationMetrics = new ImageObjectDetectionEvaluationMetrics(),
                TextExtractionEvaluationMetrics = new TextExtractionEvaluationMetrics(),
                DisplayName = "display_name137f65c2",
            };
            mockGrpcClient.Setup(x => x.GetModelEvaluation(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            ModelEvaluation response = client.GetModelEvaluation(request.Name);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetModelEvaluationAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelEvaluationRequest request = new GetModelEvaluationRequest
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
            };
            ModelEvaluation expectedResponse = new ModelEvaluation
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
                AnnotationSpecId = "annotation_spec_ide0c3e8b2",
                CreateTime = new wkt::Timestamp(),
                EvaluatedExampleCount = -1119926106,
                ClassificationEvaluationMetrics = new ClassificationEvaluationMetrics(),
                TranslationEvaluationMetrics = new TranslationEvaluationMetrics(),
                TextSentimentEvaluationMetrics = new TextSentimentEvaluationMetrics(),
                ImageObjectDetectionEvaluationMetrics = new ImageObjectDetectionEvaluationMetrics(),
                TextExtractionEvaluationMetrics = new TextExtractionEvaluationMetrics(),
                DisplayName = "display_name137f65c2",
            };
            mockGrpcClient.Setup(x => x.GetModelEvaluationAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ModelEvaluation>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            ModelEvaluation responseCallSettings = await client.GetModelEvaluationAsync(request.Name, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ModelEvaluation responseCancellationToken = await client.GetModelEvaluationAsync(request.Name, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public void GetModelEvaluationResourceNames()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelEvaluationRequest request = new GetModelEvaluationRequest
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
            };
            ModelEvaluation expectedResponse = new ModelEvaluation
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
                AnnotationSpecId = "annotation_spec_ide0c3e8b2",
                CreateTime = new wkt::Timestamp(),
                EvaluatedExampleCount = -1119926106,
                ClassificationEvaluationMetrics = new ClassificationEvaluationMetrics(),
                TranslationEvaluationMetrics = new TranslationEvaluationMetrics(),
                TextSentimentEvaluationMetrics = new TextSentimentEvaluationMetrics(),
                ImageObjectDetectionEvaluationMetrics = new ImageObjectDetectionEvaluationMetrics(),
                TextExtractionEvaluationMetrics = new TextExtractionEvaluationMetrics(),
                DisplayName = "display_name137f65c2",
            };
            mockGrpcClient.Setup(x => x.GetModelEvaluation(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(expectedResponse);
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            ModelEvaluation response = client.GetModelEvaluation(request.ModelEvaluationName);
            xunit::Assert.Same(expectedResponse, response);
            mockGrpcClient.VerifyAll();
        }

        [xunit::FactAttribute]
        public async stt::Task GetModelEvaluationResourceNamesAsync()
        {
            moq::Mock<AutoMl.AutoMlClient> mockGrpcClient = new moq::Mock<AutoMl.AutoMlClient>(moq::MockBehavior.Strict);
            mockGrpcClient.Setup(x => x.CreateOperationsClient()).Returns(new moq::Mock<lro::Operations.OperationsClient>().Object);
            GetModelEvaluationRequest request = new GetModelEvaluationRequest
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
            };
            ModelEvaluation expectedResponse = new ModelEvaluation
            {
                ModelEvaluationName = ModelEvaluationName.FromProjectLocationModelModelEvaluation("[PROJECT]", "[LOCATION]", "[MODEL]", "[MODEL_EVALUATION]"),
                AnnotationSpecId = "annotation_spec_ide0c3e8b2",
                CreateTime = new wkt::Timestamp(),
                EvaluatedExampleCount = -1119926106,
                ClassificationEvaluationMetrics = new ClassificationEvaluationMetrics(),
                TranslationEvaluationMetrics = new TranslationEvaluationMetrics(),
                TextSentimentEvaluationMetrics = new TextSentimentEvaluationMetrics(),
                ImageObjectDetectionEvaluationMetrics = new ImageObjectDetectionEvaluationMetrics(),
                TextExtractionEvaluationMetrics = new TextExtractionEvaluationMetrics(),
                DisplayName = "display_name137f65c2",
            };
            mockGrpcClient.Setup(x => x.GetModelEvaluationAsync(request, moq::It.IsAny<grpccore::CallOptions>())).Returns(new grpccore::AsyncUnaryCall<ModelEvaluation>(stt::Task.FromResult(expectedResponse), null, null, null, null));
            AutoMlClient client = new AutoMlClientImpl(mockGrpcClient.Object, null);
            ModelEvaluation responseCallSettings = await client.GetModelEvaluationAsync(request.ModelEvaluationName, gaxgrpc::CallSettings.FromCancellationToken(st::CancellationToken.None));
            xunit::Assert.Same(expectedResponse, responseCallSettings);
            ModelEvaluation responseCancellationToken = await client.GetModelEvaluationAsync(request.ModelEvaluationName, st::CancellationToken.None);
            xunit::Assert.Same(expectedResponse, responseCancellationToken);
            mockGrpcClient.VerifyAll();
        }
    }
}
