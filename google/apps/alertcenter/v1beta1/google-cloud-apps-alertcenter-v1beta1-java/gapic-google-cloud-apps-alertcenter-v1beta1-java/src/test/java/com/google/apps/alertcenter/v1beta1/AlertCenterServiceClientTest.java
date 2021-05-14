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

package com.google.apps.alertcenter.v1beta1;

import static com.google.apps.alertcenter.v1beta1.AlertCenterServiceClient.ListAlertsPagedResponse;

import com.google.api.gax.core.NoCredentialsProvider;
import com.google.api.gax.grpc.GaxGrpcProperties;
import com.google.api.gax.grpc.testing.LocalChannelProvider;
import com.google.api.gax.grpc.testing.MockGrpcService;
import com.google.api.gax.grpc.testing.MockServiceHelper;
import com.google.api.gax.rpc.ApiClientHeaderProvider;
import com.google.api.gax.rpc.InvalidArgumentException;
import com.google.common.collect.Lists;
import com.google.protobuf.AbstractMessage;
import com.google.protobuf.Any;
import com.google.protobuf.Empty;
import com.google.protobuf.Timestamp;
import com.google.rpc.Status;
import io.grpc.StatusRuntimeException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
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
public class AlertCenterServiceClientTest {
  private static MockServiceHelper mockServiceHelper;
  private AlertCenterServiceClient client;
  private static MockAlertCenterService mockAlertCenterService;
  private LocalChannelProvider channelProvider;

  @BeforeClass
  public static void startStaticServer() {
    mockAlertCenterService = new MockAlertCenterService();
    mockServiceHelper =
        new MockServiceHelper(
            UUID.randomUUID().toString(), Arrays.<MockGrpcService>asList(mockAlertCenterService));
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
    AlertCenterServiceSettings settings =
        AlertCenterServiceSettings.newBuilder()
            .setTransportChannelProvider(channelProvider)
            .setCredentialsProvider(NoCredentialsProvider.create())
            .build();
    client = AlertCenterServiceClient.create(settings);
  }

  @After
  public void tearDown() throws Exception {
    client.close();
  }

  @Test
  public void listAlertsTest() throws Exception {
    Alert responsesElement = Alert.newBuilder().build();
    ListAlertsResponse expectedResponse =
        ListAlertsResponse.newBuilder()
            .setNextPageToken("")
            .addAllAlerts(Arrays.asList(responsesElement))
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    ListAlertsRequest request =
        ListAlertsRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setPageSize(883849137)
            .setPageToken("pageToken873572522")
            .setFilter("filter-1274492040")
            .setOrderBy("orderBy-1207110587")
            .build();

    ListAlertsPagedResponse pagedListResponse = client.listAlerts(request);

    List<Alert> resources = Lists.newArrayList(pagedListResponse.iterateAll());

    Assert.assertEquals(1, resources.size());
    Assert.assertEquals(expectedResponse.getAlertsList().get(0), resources.get(0));

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    ListAlertsRequest actualRequest = ((ListAlertsRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getPageSize(), actualRequest.getPageSize());
    Assert.assertEquals(request.getPageToken(), actualRequest.getPageToken());
    Assert.assertEquals(request.getFilter(), actualRequest.getFilter());
    Assert.assertEquals(request.getOrderBy(), actualRequest.getOrderBy());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void listAlertsExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      ListAlertsRequest request =
          ListAlertsRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setPageSize(883849137)
              .setPageToken("pageToken873572522")
              .setFilter("filter-1274492040")
              .setOrderBy("orderBy-1207110587")
              .build();
      client.listAlerts(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void getAlertTest() throws Exception {
    Alert expectedResponse =
        Alert.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .setCreateTime(Timestamp.newBuilder().build())
            .setStartTime(Timestamp.newBuilder().build())
            .setEndTime(Timestamp.newBuilder().build())
            .setType("type3575610")
            .setSource("source-896505829")
            .setData(Any.newBuilder().build())
            .setSecurityInvestigationToolLink("securityInvestigationToolLink19253108")
            .setDeleted(true)
            .setMetadata(AlertMetadata.newBuilder().build())
            .setUpdateTime(Timestamp.newBuilder().build())
            .setEtag("etag3123477")
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    GetAlertRequest request =
        GetAlertRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .build();

    Alert actualResponse = client.getAlert(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetAlertRequest actualRequest = ((GetAlertRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertId(), actualRequest.getAlertId());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getAlertExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      GetAlertRequest request =
          GetAlertRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setAlertId("alertId-917722217")
              .build();
      client.getAlert(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void deleteAlertTest() throws Exception {
    Empty expectedResponse = Empty.newBuilder().build();
    mockAlertCenterService.addResponse(expectedResponse);

    DeleteAlertRequest request =
        DeleteAlertRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .build();

    client.deleteAlert(request);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    DeleteAlertRequest actualRequest = ((DeleteAlertRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertId(), actualRequest.getAlertId());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void deleteAlertExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      DeleteAlertRequest request =
          DeleteAlertRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setAlertId("alertId-917722217")
              .build();
      client.deleteAlert(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void undeleteAlertTest() throws Exception {
    Alert expectedResponse =
        Alert.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .setCreateTime(Timestamp.newBuilder().build())
            .setStartTime(Timestamp.newBuilder().build())
            .setEndTime(Timestamp.newBuilder().build())
            .setType("type3575610")
            .setSource("source-896505829")
            .setData(Any.newBuilder().build())
            .setSecurityInvestigationToolLink("securityInvestigationToolLink19253108")
            .setDeleted(true)
            .setMetadata(AlertMetadata.newBuilder().build())
            .setUpdateTime(Timestamp.newBuilder().build())
            .setEtag("etag3123477")
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    UndeleteAlertRequest request =
        UndeleteAlertRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .build();

    Alert actualResponse = client.undeleteAlert(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    UndeleteAlertRequest actualRequest = ((UndeleteAlertRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertId(), actualRequest.getAlertId());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void undeleteAlertExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      UndeleteAlertRequest request =
          UndeleteAlertRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setAlertId("alertId-917722217")
              .build();
      client.undeleteAlert(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void createAlertFeedbackTest() throws Exception {
    AlertFeedback expectedResponse =
        AlertFeedback.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .setFeedbackId("feedbackId650717056")
            .setCreateTime(Timestamp.newBuilder().build())
            .setType(AlertFeedbackType.forNumber(0))
            .setEmail("email96619420")
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    CreateAlertFeedbackRequest request =
        CreateAlertFeedbackRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .setFeedback(AlertFeedback.newBuilder().build())
            .build();

    AlertFeedback actualResponse = client.createAlertFeedback(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    CreateAlertFeedbackRequest actualRequest = ((CreateAlertFeedbackRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertId(), actualRequest.getAlertId());
    Assert.assertEquals(request.getFeedback(), actualRequest.getFeedback());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void createAlertFeedbackExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      CreateAlertFeedbackRequest request =
          CreateAlertFeedbackRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setAlertId("alertId-917722217")
              .setFeedback(AlertFeedback.newBuilder().build())
              .build();
      client.createAlertFeedback(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void listAlertFeedbackTest() throws Exception {
    ListAlertFeedbackResponse expectedResponse =
        ListAlertFeedbackResponse.newBuilder()
            .addAllFeedback(new ArrayList<AlertFeedback>())
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    ListAlertFeedbackRequest request =
        ListAlertFeedbackRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .setFilter("filter-1274492040")
            .build();

    ListAlertFeedbackResponse actualResponse = client.listAlertFeedback(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    ListAlertFeedbackRequest actualRequest = ((ListAlertFeedbackRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertId(), actualRequest.getAlertId());
    Assert.assertEquals(request.getFilter(), actualRequest.getFilter());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void listAlertFeedbackExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      ListAlertFeedbackRequest request =
          ListAlertFeedbackRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setAlertId("alertId-917722217")
              .setFilter("filter-1274492040")
              .build();
      client.listAlertFeedback(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void getAlertMetadataTest() throws Exception {
    AlertMetadata expectedResponse =
        AlertMetadata.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .setStatus("status-892481550")
            .setAssignee("assignee-369881649")
            .setUpdateTime(Timestamp.newBuilder().build())
            .setSeverity("severity1478300413")
            .setEtag("etag3123477")
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    GetAlertMetadataRequest request =
        GetAlertMetadataRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setAlertId("alertId-917722217")
            .build();

    AlertMetadata actualResponse = client.getAlertMetadata(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetAlertMetadataRequest actualRequest = ((GetAlertMetadataRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertId(), actualRequest.getAlertId());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getAlertMetadataExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      GetAlertMetadataRequest request =
          GetAlertMetadataRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setAlertId("alertId-917722217")
              .build();
      client.getAlertMetadata(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void getSettingsTest() throws Exception {
    Settings expectedResponse =
        Settings.newBuilder().addAllNotifications(new ArrayList<Settings.Notification>()).build();
    mockAlertCenterService.addResponse(expectedResponse);

    GetSettingsRequest request =
        GetSettingsRequest.newBuilder().setCustomerId("customerId-1581184615").build();

    Settings actualResponse = client.getSettings(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    GetSettingsRequest actualRequest = ((GetSettingsRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void getSettingsExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      GetSettingsRequest request =
          GetSettingsRequest.newBuilder().setCustomerId("customerId-1581184615").build();
      client.getSettings(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void updateSettingsTest() throws Exception {
    Settings expectedResponse =
        Settings.newBuilder().addAllNotifications(new ArrayList<Settings.Notification>()).build();
    mockAlertCenterService.addResponse(expectedResponse);

    UpdateSettingsRequest request =
        UpdateSettingsRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .setSettings(Settings.newBuilder().build())
            .build();

    Settings actualResponse = client.updateSettings(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    UpdateSettingsRequest actualRequest = ((UpdateSettingsRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getSettings(), actualRequest.getSettings());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void updateSettingsExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      UpdateSettingsRequest request =
          UpdateSettingsRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .setSettings(Settings.newBuilder().build())
              .build();
      client.updateSettings(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void batchDeleteAlertsTest() throws Exception {
    BatchDeleteAlertsResponse expectedResponse =
        BatchDeleteAlertsResponse.newBuilder()
            .addAllSuccessAlertIds(new ArrayList<String>())
            .putAllFailedAlertStatus(new HashMap<String, Status>())
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    BatchDeleteAlertsRequest request =
        BatchDeleteAlertsRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .addAllAlertId(new ArrayList<String>())
            .build();

    BatchDeleteAlertsResponse actualResponse = client.batchDeleteAlerts(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    BatchDeleteAlertsRequest actualRequest = ((BatchDeleteAlertsRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertIdList(), actualRequest.getAlertIdList());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void batchDeleteAlertsExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      BatchDeleteAlertsRequest request =
          BatchDeleteAlertsRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .addAllAlertId(new ArrayList<String>())
              .build();
      client.batchDeleteAlerts(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }

  @Test
  public void batchUndeleteAlertsTest() throws Exception {
    BatchUndeleteAlertsResponse expectedResponse =
        BatchUndeleteAlertsResponse.newBuilder()
            .addAllSuccessAlertIds(new ArrayList<String>())
            .putAllFailedAlertStatus(new HashMap<String, Status>())
            .build();
    mockAlertCenterService.addResponse(expectedResponse);

    BatchUndeleteAlertsRequest request =
        BatchUndeleteAlertsRequest.newBuilder()
            .setCustomerId("customerId-1581184615")
            .addAllAlertId(new ArrayList<String>())
            .build();

    BatchUndeleteAlertsResponse actualResponse = client.batchUndeleteAlerts(request);
    Assert.assertEquals(expectedResponse, actualResponse);

    List<AbstractMessage> actualRequests = mockAlertCenterService.getRequests();
    Assert.assertEquals(1, actualRequests.size());
    BatchUndeleteAlertsRequest actualRequest = ((BatchUndeleteAlertsRequest) actualRequests.get(0));

    Assert.assertEquals(request.getCustomerId(), actualRequest.getCustomerId());
    Assert.assertEquals(request.getAlertIdList(), actualRequest.getAlertIdList());
    Assert.assertTrue(
        channelProvider.isHeaderSent(
            ApiClientHeaderProvider.getDefaultApiClientHeaderKey(),
            GaxGrpcProperties.getDefaultApiClientHeaderPattern()));
  }

  @Test
  public void batchUndeleteAlertsExceptionTest() throws Exception {
    StatusRuntimeException exception = new StatusRuntimeException(io.grpc.Status.INVALID_ARGUMENT);
    mockAlertCenterService.addException(exception);

    try {
      BatchUndeleteAlertsRequest request =
          BatchUndeleteAlertsRequest.newBuilder()
              .setCustomerId("customerId-1581184615")
              .addAllAlertId(new ArrayList<String>())
              .build();
      client.batchUndeleteAlerts(request);
      Assert.fail("No exception raised");
    } catch (InvalidArgumentException e) {
      // Expected exception.
    }
  }
}
