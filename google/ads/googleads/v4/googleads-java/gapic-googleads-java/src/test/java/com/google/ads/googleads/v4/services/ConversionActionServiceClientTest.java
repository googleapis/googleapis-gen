/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.google.ads.googleads.v4.services;

import com.google.ads.googleads.v4.common.TagSnippet;
import com.google.ads.googleads.v4.resources.ConversionAction;
import com.google.ads.googleads.v4.resources.ConversionActionName;
import com.google.api.gax.core.NoCredentialsProvider;
import com.google.api.gax.grpc.GaxGrpcProperties;
import com.google.api.gax.grpc.testing.LocalChannelProvider;
import com.google.api.gax.grpc.testing.MockGrpcService;
import com.google.api.gax.grpc.testing.MockServiceHelper;
import com.google.api.gax.rpc.ApiClientHeaderProvider;
import com.google.api.gax.rpc.InvalidArgumentException;
import com.google.protobuf.AbstractMessage;
import com.google.protobuf.BoolValue;
import com.google.protobuf.Int64Value;
import com.google.protobuf.StringValue;
import com.google.rpc.Status;
import io.grpc.StatusRuntimeException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.UUID;
import javax.annotation.Generated;
import org.junit.After;
import org.junit.AfterClass;
import org.junit.Assert;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;

@Generated("by gapic-generator-java")
public class ConversionActionServiceClientTest {
  private static MockServiceHelper mockServiceHelper;
  private ConversionActionServiceClient client;
  private LocalChannelProvider channelProvider;
  private static MockConversionActionService mockConversionActionService;

  @BeforeClass
  public static void startStaticServer() {
    mockConversionActionService = new MockConversionActionService();
    mockServiceHelper =
        new MockServiceHelper(
            UUID.randomUUID().toString(),
            Arrays.<MockGrpcService>asList(mockConversionActionService));
    mockServiceHelper.start();
  }

  @AfterClass
  public static void stopServer() {
    mockServiceHelper.stop();
  }

  @Before
  public void setUp() throws IOException {
    mockServiceHelper.reset();
    channelProvider = mockServiceHelper.createChannelProvider();
    ConversionActionServiceSettings settings =
        ConversionActionServiceSettings.newBuilder()
            .setTransportChannelProvider(channelProvider)
            .setCredentialsProvider(NoCredentialsProvider.create())
            .build();
    client = ConversionActionServiceClient.create(settings);
  }

  @After
  public void tearDown() throws Exception {
    client.close();
  }

  @Test
  public void getConversionActionTest() throws Exception {
    ConversionAction expectedResponse =
        ConversionAction.newBuilder()
            .setResourceName(
                ConversionActionName.of("[CUSTOMER]", "[CONVERSION_ACTION]").toString())
            .setId(Int64Value.newBuilder().build())
            .setName(StringValue.newBuilder().build())
            .setOwnerCustomer(StringValue.newBuilder().build())
            .setIncludeInConversionsMetric(BoolValue.newBuilder().build())
            .setClickThroughLookbackWindowDays(Int64Value.newBuilder().build())
            .setViewThroughLookbackWindowDays(Int64Value.newBuilder().build())
            .setValueSettings(ConversionAction.ValueSettings.newBuilder().build())
            .setAttributionModelSettings(
                ConversionAction.AttributionModelSettings.newBuilder().build())
            .addAllTagSnippets(new ArrayList<TagSnippet>())
            .setPhoneCallDurationSeconds(Int64Value.newBuilder().build())
            .setAppId(StringValue.newBuilder().build())
            .setFirebaseSettings(ConversionAction.FirebaseSettings.newBuilder().build())
            .setThirdPartyAppAnalyticsSettings(
                ConversionAction.ThirdPartyAppAnalyticsSettings.newBuilder().build())
            .build();
    mockConversionActionService.addResponse(expectedResponse);

    ConversionActionName resourceName =
        ConversionActionName.of("[CUSTOMER]", "[CONVERSION_ACTION]");

    ConversionAction actualResponse = client.getConversionAction(resourceName);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockConversionActionService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetConversionActionRequest actualRequest = ((GetConversionActionRequest) actualRequests.get(0));

    Assert.assertEquals(resourceName.toString(), actualRequest.getResourceName());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getConversionActionExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockConversionActionService.addException(exception);

    try {
      ConversionActionName resourceName =
          ConversionActionName.of("[CUSTOMER]", "[CONVERSION_ACTION]");
      client.getConversionAction(resourceName);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void getConversionActionTest2() throws Exception {
    ConversionAction expectedResponse =
        ConversionAction.newBuilder()
            .setResourceName(
                ConversionActionName.of("[CUSTOMER]", "[CONVERSION_ACTION]").toString())
            .setId(Int64Value.newBuilder().build())
            .setName(StringValue.newBuilder().build())
            .setOwnerCustomer(StringValue.newBuilder().build())
            .setIncludeInConversionsMetric(BoolValue.newBuilder().build())
            .setClickThroughLookbackWindowDays(Int64Value.newBuilder().build())
            .setViewThroughLookbackWindowDays(Int64Value.newBuilder().build())
            .setValueSettings(ConversionAction.ValueSettings.newBuilder().build())
            .setAttributionModelSettings(
                ConversionAction.AttributionModelSettings.newBuilder().build())
            .addAllTagSnippets(new ArrayList<TagSnippet>())
            .setPhoneCallDurationSeconds(Int64Value.newBuilder().build())
            .setAppId(StringValue.newBuilder().build())
            .setFirebaseSettings(ConversionAction.FirebaseSettings.newBuilder().build())
            .setThirdPartyAppAnalyticsSettings(
                ConversionAction.ThirdPartyAppAnalyticsSettings.newBuilder().build())
            .build();
    mockConversionActionService.addResponse(expectedResponse);

    String resourceName = "resourceName-384566343";

    ConversionAction actualResponse = client.getConversionAction(resourceName);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockConversionActionService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetConversionActionRequest actualRequest = ((GetConversionActionRequest) actualRequests.get(0));

    Assert.assertEquals(resourceName, actualRequest.getResourceName());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getConversionActionExceptionTest2() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockConversionActionService.addException(exception);

    try {
      String resourceName = "resourceName-384566343";
      client.getConversionAction(resourceName);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void mutateConversionActionsTest() throws Exception {
    MutateConversionActionsResponse expectedResponse =
        MutateConversionActionsResponse.newBuilder()
            .setPartialFailureError(Status.newBuilder().build())
            .addAllResults(new ArrayList<MutateConversionActionResult>())
            .build();
    mockConversionActionService.addResponse(expectedResponse);

    String customerId = "customerId-1581184615";
    List<ConversionActionOperation> operations = new ArrayList<>();

    MutateConversionActionsResponse actualResponse =
        client.mutateConversionActions(customerId, operations);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockConversionActionService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    MutateConversionActionsRequest actualRequest =
        ((MutateConversionActionsRequest) actualRequests.get(0));

    Assert.assertEquals(customerId, actualRequest.getCustomerId());
    Assert.assertEquals(operations, actualRequest.getOperationsList());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void mutateConversionActionsExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockConversionActionService.addException(exception);

    try {
      String customerId = "customerId-1581184615";
      List<ConversionActionOperation> operations = new ArrayList<>();
      client.mutateConversionActions(customerId, operations);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }
}
