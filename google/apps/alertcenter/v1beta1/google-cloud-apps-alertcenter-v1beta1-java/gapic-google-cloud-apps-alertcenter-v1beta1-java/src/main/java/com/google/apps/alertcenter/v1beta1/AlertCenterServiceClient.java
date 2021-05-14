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

import com.google.api.core.ApiFunction;
import com.google.api.core.ApiFuture;
import com.google.api.core.ApiFutures;
import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.paging.AbstractFixedSizeCollection;
import com.google.api.gax.paging.AbstractPage;
import com.google.api.gax.paging.AbstractPagedListResponse;
import com.google.api.gax.rpc.PageContext;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.apps.alertcenter.v1beta1.stub.AlertCenterServiceStub;
import com.google.apps.alertcenter.v1beta1.stub.AlertCenterServiceStubSettings;
import com.google.common.util.concurrent.MoreExecutors;
import com.google.protobuf.Empty;
import java.io.IOException;
import java.util.List;
import java.util.concurrent.TimeUnit;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Service Description: Google Workspace Alert Center API (beta).
 *
 * <p>This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * <pre>{@code
 * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
 *   GetAlertRequest request =
 *       GetAlertRequest.newBuilder()
 *           .setCustomerId("customerId-1581184615")
 *           .setAlertId("alertId-917722217")
 *           .build();
 *   Alert response = alertCenterServiceClient.getAlert(request);
 * }
 * }</pre>
 *
 * <p>Note: close() needs to be called on the AlertCenterServiceClient object to clean up resources
 * such as threads. In the example above, try-with-resources is used, which automatically calls
 * close().
 *
 * <p>The surface of this class includes several types of Java methods for each of the API's
 * methods:
 *
 * <ol>
 *   <li> A "flattened" method. With this type of method, the fields of the request type have been
 *       converted into function parameters. It may be the case that not all fields are available as
 *       parameters, and not every API method will have a flattened method entry point.
 *   <li> A "request object" method. This type of method only takes one parameter, a request object,
 *       which must be constructed before the call. Not every API method will have a request object
 *       method.
 *   <li> A "callable" method. This type of method takes no parameters and returns an immutable API
 *       callable object, which can be used to initiate calls to the service.
 * </ol>
 *
 * <p>See the individual methods for example code.
 *
 * <p>Many parameters require resource names to be formatted in a particular way. To assist with
 * these names, this class includes a format method for each type of name, and additionally a parse
 * method to extract the individual identifiers contained within names that are returned.
 *
 * <p>This class can be customized by passing in a custom instance of AlertCenterServiceSettings to
 * create(). For example:
 *
 * <p>To customize credentials:
 *
 * <pre>{@code
 * AlertCenterServiceSettings alertCenterServiceSettings =
 *     AlertCenterServiceSettings.newBuilder()
 *         .setCredentialsProvider(FixedCredentialsProvider.create(myCredentials))
 *         .build();
 * AlertCenterServiceClient alertCenterServiceClient =
 *     AlertCenterServiceClient.create(alertCenterServiceSettings);
 * }</pre>
 *
 * <p>To customize the endpoint:
 *
 * <pre>{@code
 * AlertCenterServiceSettings alertCenterServiceSettings =
 *     AlertCenterServiceSettings.newBuilder().setEndpoint(myEndpoint).build();
 * AlertCenterServiceClient alertCenterServiceClient =
 *     AlertCenterServiceClient.create(alertCenterServiceSettings);
 * }</pre>
 *
 * <p>Please refer to the GitHub repository's samples for more quickstart code snippets.
 */
@BetaApi
@Generated("by gapic-generator-java")
public class AlertCenterServiceClient implements BackgroundResource {
  private final AlertCenterServiceSettings settings;
  private final AlertCenterServiceStub stub;

  /** Constructs an instance of AlertCenterServiceClient with default settings. */
  public static final AlertCenterServiceClient create() throws IOException {
    return create(AlertCenterServiceSettings.newBuilder().build());
  }

  /**
   * Constructs an instance of AlertCenterServiceClient, using the given settings. The channels are
   * created based on the settings passed in, or defaults for any settings that are not set.
   */
  public static final AlertCenterServiceClient create(AlertCenterServiceSettings settings)
      throws IOException {
    return new AlertCenterServiceClient(settings);
  }

  /**
   * Constructs an instance of AlertCenterServiceClient, using the given stub for making calls. This
   * is for advanced usage - prefer using create(AlertCenterServiceSettings).
   */
  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public static final AlertCenterServiceClient create(AlertCenterServiceStub stub) {
    return new AlertCenterServiceClient(stub);
  }

  /**
   * Constructs an instance of AlertCenterServiceClient, using the given settings. This is protected
   * so that it is easy to make a subclass, but otherwise, the static factory methods should be
   * preferred.
   */
  protected AlertCenterServiceClient(AlertCenterServiceSettings settings) throws IOException {
    this.settings = settings;
    this.stub = ((AlertCenterServiceStubSettings) settings.getStubSettings()).createStub();
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  protected AlertCenterServiceClient(AlertCenterServiceStub stub) {
    this.settings = null;
    this.stub = stub;
  }

  public final AlertCenterServiceSettings getSettings() {
    return settings;
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public AlertCenterServiceStub getStub() {
    return stub;
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Lists the alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   ListAlertsRequest request =
   *       ListAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setPageSize(883849137)
   *           .setPageToken("pageToken873572522")
   *           .setFilter("filter-1274492040")
   *           .setOrderBy("orderBy-1207110587")
   *           .build();
   *   for (Alert element : alertCenterServiceClient.listAlerts(request).iterateAll()) {
   *     // doThingsWith(element);
   *   }
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final ListAlertsPagedResponse listAlerts(ListAlertsRequest request) {
    return listAlertsPagedCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Lists the alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   ListAlertsRequest request =
   *       ListAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setPageSize(883849137)
   *           .setPageToken("pageToken873572522")
   *           .setFilter("filter-1274492040")
   *           .setOrderBy("orderBy-1207110587")
   *           .build();
   *   ApiFuture<Alert> future =
   *       alertCenterServiceClient.listAlertsPagedCallable().futureCall(request);
   *   // Do something.
   *   for (Alert element : future.get().iterateAll()) {
   *     // doThingsWith(element);
   *   }
   * }
   * }</pre>
   */
  public final UnaryCallable<ListAlertsRequest, ListAlertsPagedResponse> listAlertsPagedCallable() {
    return stub.listAlertsPagedCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Lists the alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   ListAlertsRequest request =
   *       ListAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setPageSize(883849137)
   *           .setPageToken("pageToken873572522")
   *           .setFilter("filter-1274492040")
   *           .setOrderBy("orderBy-1207110587")
   *           .build();
   *   while (true) {
   *     ListAlertsResponse response = alertCenterServiceClient.listAlertsCallable().call(request);
   *     for (Alert element : response.getResponsesList()) {
   *       // doThingsWith(element);
   *     }
   *     String nextPageToken = response.getNextPageToken();
   *     if (!Strings.isNullOrEmpty(nextPageToken)) {
   *       request = request.toBuilder().setPageToken(nextPageToken).build();
   *     } else {
   *       break;
   *     }
   *   }
   * }
   * }</pre>
   */
  public final UnaryCallable<ListAlertsRequest, ListAlertsResponse> listAlertsCallable() {
    return stub.listAlertsCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Gets the specified alert. Attempting to get a nonexistent alert returns `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   GetAlertRequest request =
   *       GetAlertRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   Alert response = alertCenterServiceClient.getAlert(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final Alert getAlert(GetAlertRequest request) {
    return getAlertCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Gets the specified alert. Attempting to get a nonexistent alert returns `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   GetAlertRequest request =
   *       GetAlertRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   ApiFuture<Alert> future = alertCenterServiceClient.getAlertCallable().futureCall(request);
   *   // Do something.
   *   Alert response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<GetAlertRequest, Alert> getAlertCallable() {
    return stub.getAlertCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Marks the specified alert for deletion. An alert that has been marked for deletion is removed
   * from Alert Center after 30 days. Marking an alert for deletion has no effect on an alert which
   * has already been marked for deletion. Attempting to mark a nonexistent alert for deletion
   * results in a `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   DeleteAlertRequest request =
   *       DeleteAlertRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   alertCenterServiceClient.deleteAlert(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final void deleteAlert(DeleteAlertRequest request) {
    deleteAlertCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Marks the specified alert for deletion. An alert that has been marked for deletion is removed
   * from Alert Center after 30 days. Marking an alert for deletion has no effect on an alert which
   * has already been marked for deletion. Attempting to mark a nonexistent alert for deletion
   * results in a `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   DeleteAlertRequest request =
   *       DeleteAlertRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   ApiFuture<Empty> future = alertCenterServiceClient.deleteAlertCallable().futureCall(request);
   *   // Do something.
   *   future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<DeleteAlertRequest, Empty> deleteAlertCallable() {
    return stub.deleteAlertCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Restores, or "undeletes", an alert that was marked for deletion within the past 30 days.
   * Attempting to undelete an alert which was marked for deletion over 30 days ago (which has been
   * removed from the Alert Center database) or a nonexistent alert returns a `NOT_FOUND` error.
   * Attempting to undelete an alert which has not been marked for deletion has no effect.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   UndeleteAlertRequest request =
   *       UndeleteAlertRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   Alert response = alertCenterServiceClient.undeleteAlert(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final Alert undeleteAlert(UndeleteAlertRequest request) {
    return undeleteAlertCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Restores, or "undeletes", an alert that was marked for deletion within the past 30 days.
   * Attempting to undelete an alert which was marked for deletion over 30 days ago (which has been
   * removed from the Alert Center database) or a nonexistent alert returns a `NOT_FOUND` error.
   * Attempting to undelete an alert which has not been marked for deletion has no effect.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   UndeleteAlertRequest request =
   *       UndeleteAlertRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   ApiFuture<Alert> future =
   *       alertCenterServiceClient.undeleteAlertCallable().futureCall(request);
   *   // Do something.
   *   Alert response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<UndeleteAlertRequest, Alert> undeleteAlertCallable() {
    return stub.undeleteAlertCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Creates new feedback for an alert. Attempting to create a feedback for a non-existent alert
   * returns `NOT_FOUND` error. Attempting to create a feedback for an alert that is marked for
   * deletion returns `FAILED_PRECONDITION' error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   CreateAlertFeedbackRequest request =
   *       CreateAlertFeedbackRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .setFeedback(AlertFeedback.newBuilder().build())
   *           .build();
   *   AlertFeedback response = alertCenterServiceClient.createAlertFeedback(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AlertFeedback createAlertFeedback(CreateAlertFeedbackRequest request) {
    return createAlertFeedbackCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Creates new feedback for an alert. Attempting to create a feedback for a non-existent alert
   * returns `NOT_FOUND` error. Attempting to create a feedback for an alert that is marked for
   * deletion returns `FAILED_PRECONDITION' error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   CreateAlertFeedbackRequest request =
   *       CreateAlertFeedbackRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .setFeedback(AlertFeedback.newBuilder().build())
   *           .build();
   *   ApiFuture<AlertFeedback> future =
   *       alertCenterServiceClient.createAlertFeedbackCallable().futureCall(request);
   *   // Do something.
   *   AlertFeedback response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<CreateAlertFeedbackRequest, AlertFeedback>
      createAlertFeedbackCallable() {
    return stub.createAlertFeedbackCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Lists all the feedback for an alert. Attempting to list feedbacks for a non-existent alert
   * returns `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   ListAlertFeedbackRequest request =
   *       ListAlertFeedbackRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .setFilter("filter-1274492040")
   *           .build();
   *   ListAlertFeedbackResponse response = alertCenterServiceClient.listAlertFeedback(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final ListAlertFeedbackResponse listAlertFeedback(ListAlertFeedbackRequest request) {
    return listAlertFeedbackCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Lists all the feedback for an alert. Attempting to list feedbacks for a non-existent alert
   * returns `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   ListAlertFeedbackRequest request =
   *       ListAlertFeedbackRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .setFilter("filter-1274492040")
   *           .build();
   *   ApiFuture<ListAlertFeedbackResponse> future =
   *       alertCenterServiceClient.listAlertFeedbackCallable().futureCall(request);
   *   // Do something.
   *   ListAlertFeedbackResponse response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackCallable() {
    return stub.listAlertFeedbackCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the metadata of an alert. Attempting to get metadata for a non-existent alert returns
   * `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   GetAlertMetadataRequest request =
   *       GetAlertMetadataRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   AlertMetadata response = alertCenterServiceClient.getAlertMetadata(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AlertMetadata getAlertMetadata(GetAlertMetadataRequest request) {
    return getAlertMetadataCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the metadata of an alert. Attempting to get metadata for a non-existent alert returns
   * `NOT_FOUND` error.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   GetAlertMetadataRequest request =
   *       GetAlertMetadataRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setAlertId("alertId-917722217")
   *           .build();
   *   ApiFuture<AlertMetadata> future =
   *       alertCenterServiceClient.getAlertMetadataCallable().futureCall(request);
   *   // Do something.
   *   AlertMetadata response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataCallable() {
    return stub.getAlertMetadataCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns customer-level settings.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   GetSettingsRequest request =
   *       GetSettingsRequest.newBuilder().setCustomerId("customerId-1581184615").build();
   *   Settings response = alertCenterServiceClient.getSettings(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final Settings getSettings(GetSettingsRequest request) {
    return getSettingsCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns customer-level settings.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   GetSettingsRequest request =
   *       GetSettingsRequest.newBuilder().setCustomerId("customerId-1581184615").build();
   *   ApiFuture<Settings> future =
   *       alertCenterServiceClient.getSettingsCallable().futureCall(request);
   *   // Do something.
   *   Settings response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<GetSettingsRequest, Settings> getSettingsCallable() {
    return stub.getSettingsCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Updates the customer-level settings.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   UpdateSettingsRequest request =
   *       UpdateSettingsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setSettings(Settings.newBuilder().build())
   *           .build();
   *   Settings response = alertCenterServiceClient.updateSettings(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final Settings updateSettings(UpdateSettingsRequest request) {
    return updateSettingsCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Updates the customer-level settings.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   UpdateSettingsRequest request =
   *       UpdateSettingsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .setSettings(Settings.newBuilder().build())
   *           .build();
   *   ApiFuture<Settings> future =
   *       alertCenterServiceClient.updateSettingsCallable().futureCall(request);
   *   // Do something.
   *   Settings response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<UpdateSettingsRequest, Settings> updateSettingsCallable() {
    return stub.updateSettingsCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Performs batch delete operation on alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   BatchDeleteAlertsRequest request =
   *       BatchDeleteAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .addAllAlertId(new ArrayList<String>())
   *           .build();
   *   BatchDeleteAlertsResponse response = alertCenterServiceClient.batchDeleteAlerts(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final BatchDeleteAlertsResponse batchDeleteAlerts(BatchDeleteAlertsRequest request) {
    return batchDeleteAlertsCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Performs batch delete operation on alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   BatchDeleteAlertsRequest request =
   *       BatchDeleteAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .addAllAlertId(new ArrayList<String>())
   *           .build();
   *   ApiFuture<BatchDeleteAlertsResponse> future =
   *       alertCenterServiceClient.batchDeleteAlertsCallable().futureCall(request);
   *   // Do something.
   *   BatchDeleteAlertsResponse response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsCallable() {
    return stub.batchDeleteAlertsCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Performs batch undelete operation on alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   BatchUndeleteAlertsRequest request =
   *       BatchUndeleteAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .addAllAlertId(new ArrayList<String>())
   *           .build();
   *   BatchUndeleteAlertsResponse response = alertCenterServiceClient.batchUndeleteAlerts(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final BatchUndeleteAlertsResponse batchUndeleteAlerts(BatchUndeleteAlertsRequest request) {
    return batchUndeleteAlertsCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Performs batch undelete operation on alerts.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.create()) {
   *   BatchUndeleteAlertsRequest request =
   *       BatchUndeleteAlertsRequest.newBuilder()
   *           .setCustomerId("customerId-1581184615")
   *           .addAllAlertId(new ArrayList<String>())
   *           .build();
   *   ApiFuture<BatchUndeleteAlertsResponse> future =
   *       alertCenterServiceClient.batchUndeleteAlertsCallable().futureCall(request);
   *   // Do something.
   *   BatchUndeleteAlertsResponse response = future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsCallable() {
    return stub.batchUndeleteAlertsCallable();
  }

  @Override
  public final void close() {
    stub.close();
  }

  @Override
  public void shutdown() {
    stub.shutdown();
  }

  @Override
  public boolean isShutdown() {
    return stub.isShutdown();
  }

  @Override
  public boolean isTerminated() {
    return stub.isTerminated();
  }

  @Override
  public void shutdownNow() {
    stub.shutdownNow();
  }

  @Override
  public boolean awaitTermination(long duration, TimeUnit unit) throws InterruptedException {
    return stub.awaitTermination(duration, unit);
  }

  public static class ListAlertsPagedResponse
      extends AbstractPagedListResponse<
          ListAlertsRequest, ListAlertsResponse, Alert, ListAlertsPage,
          ListAlertsFixedSizeCollection> {

    public static ApiFuture<ListAlertsPagedResponse> createAsync(
        PageContext<ListAlertsRequest, ListAlertsResponse, Alert> context,
        ApiFuture<ListAlertsResponse> futureResponse) {
      ApiFuture<ListAlertsPage> futurePage =
          ListAlertsPage.createEmptyPage().createPageAsync(context, futureResponse);
      return ApiFutures.transform(
          futurePage,
          new ApiFunction<ListAlertsPage, ListAlertsPagedResponse>() {
            @Override
            public ListAlertsPagedResponse apply(ListAlertsPage input) {
              return new ListAlertsPagedResponse(input);
            }
          },
          MoreExecutors.directExecutor());
    }

    private ListAlertsPagedResponse(ListAlertsPage page) {
      super(page, ListAlertsFixedSizeCollection.createEmptyCollection());
    }
  }

  public static class ListAlertsPage
      extends AbstractPage<ListAlertsRequest, ListAlertsResponse, Alert, ListAlertsPage> {

    private ListAlertsPage(
        PageContext<ListAlertsRequest, ListAlertsResponse, Alert> context,
        ListAlertsResponse response) {
      super(context, response);
    }

    private static ListAlertsPage createEmptyPage() {
      return new ListAlertsPage(null, null);
    }

    @Override
    protected ListAlertsPage createPage(
        PageContext<ListAlertsRequest, ListAlertsResponse, Alert> context,
        ListAlertsResponse response) {
      return new ListAlertsPage(context, response);
    }

    @Override
    public ApiFuture<ListAlertsPage> createPageAsync(
        PageContext<ListAlertsRequest, ListAlertsResponse, Alert> context,
        ApiFuture<ListAlertsResponse> futureResponse) {
      return super.createPageAsync(context, futureResponse);
    }
  }

  public static class ListAlertsFixedSizeCollection
      extends AbstractFixedSizeCollection<
          ListAlertsRequest, ListAlertsResponse, Alert, ListAlertsPage,
          ListAlertsFixedSizeCollection> {

    private ListAlertsFixedSizeCollection(List<ListAlertsPage> pages, int collectionSize) {
      super(pages, collectionSize);
    }

    private static ListAlertsFixedSizeCollection createEmptyCollection() {
      return new ListAlertsFixedSizeCollection(null, 0);
    }

    @Override
    protected ListAlertsFixedSizeCollection createCollection(
        List<ListAlertsPage> pages, int collectionSize) {
      return new ListAlertsFixedSizeCollection(pages, collectionSize);
    }
  }
}
