/*
 * Copyright 2021 Google LLC
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

import com.google.ads.googleads.v4.common.ClickLocation;
import com.google.ads.googleads.v4.resources.ClickView;
import com.google.ads.googleads.v4.resources.ClickViewName;
import com.google.api.gax.core.NoCredentialsProvider;
import com.google.api.gax.grpc.GaxGrpcProperties;
import com.google.api.gax.grpc.testing.LocalChannelProvider;
import com.google.api.gax.grpc.testing.MockGrpcService;
import com.google.api.gax.grpc.testing.MockServiceHelper;
import com.google.api.gax.rpc.ApiClientHeaderProvider;
import com.google.api.gax.rpc.InvalidArgumentException;
import com.google.protobuf.AbstractMessage;
import com.google.protobuf.Int64Value;
import com.google.protobuf.StringValue;
import io.grpc.StatusRuntimeException;
import java.io.IOException;
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
public class ClickViewServiceClientTest {
  private static MockServiceHelper mockServiceHelper;
  private ClickViewServiceClient client;
  private static MockClickViewService mockClickViewService;
  private LocalChannelProvider channelProvider;

  @BeforeClass
  public static void startStaticServer() {
    mockClickViewService = new MockClickViewService();
    mockServiceHelper =
        new MockServiceHelper(
            UUID.randomUUID().toString(), Arrays.<MockGrpcService>asList(mockClickViewService));
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
    ClickViewServiceSettings settings =
        ClickViewServiceSettings.newBuilder()
            .setTransportChannelProvider(channelProvider)
            .setCredentialsProvider(NoCredentialsProvider.create())
            .build();
    client = ClickViewServiceClient.create(settings);
  }

  @After
  public void tearDown() throws Exception {
    client.close();
  }

  @Test
  public void getClickViewTest() throws Exception {
    ClickView expectedResponse =
        ClickView.newBuilder()
            .setResourceName(ClickViewName.of("[CUSTOMER]", "[CLICK_VIEW]").toString())
            .setGclid(StringValue.newBuilder().build())
            .setAreaOfInterest(ClickLocation.newBuilder().build())
            .setLocationOfPresence(ClickLocation.newBuilder().build())
            .setPageNumber(Int64Value.newBuilder().build())
            .setAdGroupAd(StringValue.newBuilder().build())
            .build();
    mockClickViewService.addResponse(expectedResponse);

    ClickViewName resourceName = ClickViewName.of("[CUSTOMER]", "[CLICK_VIEW]");

    ClickView actualResponse = client.getClickView(resourceName);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockClickViewService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetClickViewRequest actualRequest = ((GetClickViewRequest) actualRequests.get(0));

    Assert.assertEquals(resourceName.toString(), actualRequest.getResourceName());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getClickViewExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockClickViewService.addException(exception);

    try {
      ClickViewName resourceName = ClickViewName.of("[CUSTOMER]", "[CLICK_VIEW]");
      client.getClickView(resourceName);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void getClickViewTest2() throws Exception {
    ClickView expectedResponse =
        ClickView.newBuilder()
            .setResourceName(ClickViewName.of("[CUSTOMER]", "[CLICK_VIEW]").toString())
            .setGclid(StringValue.newBuilder().build())
            .setAreaOfInterest(ClickLocation.newBuilder().build())
            .setLocationOfPresence(ClickLocation.newBuilder().build())
            .setPageNumber(Int64Value.newBuilder().build())
            .setAdGroupAd(StringValue.newBuilder().build())
            .build();
    mockClickViewService.addResponse(expectedResponse);

    String resourceName = "resourceName-384566343";

    ClickView actualResponse = client.getClickView(resourceName);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockClickViewService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetClickViewRequest actualRequest = ((GetClickViewRequest) actualRequests.get(0));

    Assert.assertEquals(resourceName, actualRequest.getResourceName());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getClickViewExceptionTest2() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockClickViewService.addException(exception);

    try {
      String resourceName = "resourceName-384566343";
      client.getClickView(resourceName);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }
}
