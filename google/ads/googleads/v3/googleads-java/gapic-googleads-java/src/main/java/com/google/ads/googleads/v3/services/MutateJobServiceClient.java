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

package com.google.ads.googleads.v3.services;

import com.google.ads.googleads.v3.resources.MutateJob;
import com.google.ads.googleads.v3.resources.MutateJobName;
import com.google.ads.googleads.v3.services.stub.MutateJobServiceStub;
import com.google.ads.googleads.v3.services.stub.MutateJobServiceStubSettings;
import com.google.api.core.ApiFunction;
import com.google.api.core.ApiFuture;
import com.google.api.core.ApiFutures;
import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.longrunning.OperationFuture;
import com.google.api.gax.paging.AbstractFixedSizeCollection;
import com.google.api.gax.paging.AbstractPage;
import com.google.api.gax.paging.AbstractPagedListResponse;
import com.google.api.gax.rpc.OperationCallable;
import com.google.api.gax.rpc.PageContext;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.common.util.concurrent.MoreExecutors;
import com.google.longrunning.Operation;
import com.google.longrunning.OperationsClient;
import com.google.protobuf.Empty;
import java.io.IOException;
import java.util.List;
import java.util.concurrent.TimeUnit;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Service Description: Service to manage mutate jobs.
 *
 * <p>This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * <p>Note: close() needs to be called on the MutateJobServiceClient object to clean up resources
 * such as threads. In the example above, try-with-resources is used, which automatically calls
 * close().
 *
 * <p>The surface of this class includes several types of Java methods for each of the API's
 * methods:
 *
 * <ol>
 *   <li>A "flattened" method. With this type of method, the fields of the request type have been
 *       converted into function parameters. It may be the case that not all fields are available as
 *       parameters, and not every API method will have a flattened method entry point.
 *   <li>A "request object" method. This type of method only takes one parameter, a request object,
 *       which must be constructed before the call. Not every API method will have a request object
 *       method.
 *   <li>A "callable" method. This type of method takes no parameters and returns an immutable API
 *       callable object, which can be used to initiate calls to the service.
 * </ol>
 *
 * <p>See the individual methods for example code.
 *
 * <p>Many parameters require resource names to be formatted in a particular way. To assist with
 * these names, this class includes a format method for each type of name, and additionally a parse
 * method to extract the individual identifiers contained within names that are returned.
 *
 * <p>This class can be customized by passing in a custom instance of MutateJobServiceSettings to
 * create(). For example:
 *
 * <p>To customize credentials:
 *
 * <pre>{@code
 * MutateJobServiceSettings mutateJobServiceSettings =
 *     MutateJobServiceSettings.newBuilder()
 *         .setCredentialsProvider(FixedCredentialsProvider.create(myCredentials))
 *         .build();
 * MutateJobServiceClient mutateJobServiceClient =
 *     MutateJobServiceClient.create(mutateJobServiceSettings);
 * }</pre>
 *
 * <p>To customize the endpoint:
 *
 * <pre>{@code
 * MutateJobServiceSettings mutateJobServiceSettings =
 *     MutateJobServiceSettings.newBuilder().setEndpoint(myEndpoint).build();
 * MutateJobServiceClient mutateJobServiceClient =
 *     MutateJobServiceClient.create(mutateJobServiceSettings);
 * }</pre>
 *
 * <p>Please refer to the GitHub repository's samples for more quickstart code snippets.
 */
@Generated("by gapic-generator-java")
public class MutateJobServiceClient implements BackgroundResource {
  private final MutateJobServiceSettings settings;
  private final MutateJobServiceStub stub;
  private final OperationsClient operationsClient;

  /** Constructs an instance of MutateJobServiceClient with default settings. */
  public static final MutateJobServiceClient create() throws IOException {
    return create(MutateJobServiceSettings.newBuilder().build());
  }

  /**
   * Constructs an instance of MutateJobServiceClient, using the given settings. The channels are
   * created based on the settings passed in, or defaults for any settings that are not set.
   */
  public static final MutateJobServiceClient create(MutateJobServiceSettings settings)
      throws IOException {
    return new MutateJobServiceClient(settings);
  }

  /**
   * Constructs an instance of MutateJobServiceClient, using the given stub for making calls. This
   * is for advanced usage - prefer using create(MutateJobServiceSettings).
   */
  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public static final MutateJobServiceClient create(MutateJobServiceStub stub) {
    return new MutateJobServiceClient(stub);
  }

  /**
   * Constructs an instance of MutateJobServiceClient, using the given settings. This is protected
   * so that it is easy to make a subclass, but otherwise, the static factory methods should be
   * preferred.
   */
  protected MutateJobServiceClient(MutateJobServiceSettings settings) throws IOException {
    this.settings = settings;
    this.stub = ((MutateJobServiceStubSettings) settings.getStubSettings()).createStub();
    this.operationsClient = OperationsClient.create(this.stub.getOperationsStub());
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  protected MutateJobServiceClient(MutateJobServiceStub stub) {
    this.settings = null;
    this.stub = stub;
    this.operationsClient = OperationsClient.create(this.stub.getOperationsStub());
  }

  public final MutateJobServiceSettings getSettings() {
    return settings;
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public MutateJobServiceStub getStub() {
    return stub;
  }

  /**
   * Returns the OperationsClient that can be used to query the status of a long-running operation
   * returned by another API method call.
   */
  public final OperationsClient getOperationsClient() {
    return operationsClient;
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Creates a mutate job.
   *
   * @param customerId Required. The ID of the customer for which to create a mutate job.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final CreateMutateJobResponse createMutateJob(String customerId) {
    CreateMutateJobRequest request =
        CreateMutateJobRequest.newBuilder().setCustomerId(customerId).build();
    return createMutateJob(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Creates a mutate job.
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final CreateMutateJobResponse createMutateJob(CreateMutateJobRequest request) {
    return createMutateJobCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Creates a mutate job.
   *
   * <p>Sample code:
   */
  public final UnaryCallable<CreateMutateJobRequest, CreateMutateJobResponse>
      createMutateJobCallable() {
    return stub.createMutateJobCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the mutate job.
   *
   * @param resourceName Required. The resource name of the MutateJob to get.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final MutateJob getMutateJob(MutateJobName resourceName) {
    GetMutateJobRequest request =
        GetMutateJobRequest.newBuilder()
            .setResourceName(resourceName == null ? null : resourceName.toString())
            .build();
    return getMutateJob(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the mutate job.
   *
   * @param resourceName Required. The resource name of the MutateJob to get.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final MutateJob getMutateJob(String resourceName) {
    GetMutateJobRequest request =
        GetMutateJobRequest.newBuilder().setResourceName(resourceName).build();
    return getMutateJob(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the mutate job.
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final MutateJob getMutateJob(GetMutateJobRequest request) {
    return getMutateJobCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the mutate job.
   *
   * <p>Sample code:
   */
  public final UnaryCallable<GetMutateJobRequest, MutateJob> getMutateJobCallable() {
    return stub.getMutateJobCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the results of the mutate job. The job must be done. Supports standard list paging.
   *
   * @param resourceName Required. The resource name of the MutateJob whose results are being
   *     listed.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final ListMutateJobResultsPagedResponse listMutateJobResults(MutateJobName resourceName) {
    ListMutateJobResultsRequest request =
        ListMutateJobResultsRequest.newBuilder()
            .setResourceName(resourceName == null ? null : resourceName.toString())
            .build();
    return listMutateJobResults(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the results of the mutate job. The job must be done. Supports standard list paging.
   *
   * @param resourceName Required. The resource name of the MutateJob whose results are being
   *     listed.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final ListMutateJobResultsPagedResponse listMutateJobResults(String resourceName) {
    ListMutateJobResultsRequest request =
        ListMutateJobResultsRequest.newBuilder().setResourceName(resourceName).build();
    return listMutateJobResults(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the results of the mutate job. The job must be done. Supports standard list paging.
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final ListMutateJobResultsPagedResponse listMutateJobResults(
      ListMutateJobResultsRequest request) {
    return listMutateJobResultsPagedCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the results of the mutate job. The job must be done. Supports standard list paging.
   *
   * <p>Sample code:
   */
  public final UnaryCallable<ListMutateJobResultsRequest, ListMutateJobResultsPagedResponse>
      listMutateJobResultsPagedCallable() {
    return stub.listMutateJobResultsPagedCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Returns the results of the mutate job. The job must be done. Supports standard list paging.
   *
   * <p>Sample code:
   */
  public final UnaryCallable<ListMutateJobResultsRequest, ListMutateJobResultsResponse>
      listMutateJobResultsCallable() {
    return stub.listMutateJobResultsCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Runs the mutate job.
   *
   * <p>The Operation.metadata field type is MutateJobMetadata. When finished, the long running
   * operation will not contain errors or a response. Instead, use ListMutateJobResults to get the
   * results of the job.
   *
   * @param resourceName Required. The resource name of the MutateJob to run.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final OperationFuture<Empty, MutateJob.MutateJobMetadata> runMutateJobAsync(
      MutateJobName resourceName) {
    RunMutateJobRequest request =
        RunMutateJobRequest.newBuilder()
            .setResourceName(resourceName == null ? null : resourceName.toString())
            .build();
    return runMutateJobAsync(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Runs the mutate job.
   *
   * <p>The Operation.metadata field type is MutateJobMetadata. When finished, the long running
   * operation will not contain errors or a response. Instead, use ListMutateJobResults to get the
   * results of the job.
   *
   * @param resourceName Required. The resource name of the MutateJob to run.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final OperationFuture<Empty, MutateJob.MutateJobMetadata> runMutateJobAsync(
      String resourceName) {
    RunMutateJobRequest request =
        RunMutateJobRequest.newBuilder().setResourceName(resourceName).build();
    return runMutateJobAsync(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Runs the mutate job.
   *
   * <p>The Operation.metadata field type is MutateJobMetadata. When finished, the long running
   * operation will not contain errors or a response. Instead, use ListMutateJobResults to get the
   * results of the job.
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final OperationFuture<Empty, MutateJob.MutateJobMetadata> runMutateJobAsync(
      RunMutateJobRequest request) {
    return runMutateJobOperationCallable().futureCall(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Runs the mutate job.
   *
   * <p>The Operation.metadata field type is MutateJobMetadata. When finished, the long running
   * operation will not contain errors or a response. Instead, use ListMutateJobResults to get the
   * results of the job.
   *
   * <p>Sample code:
   */
  public final OperationCallable<RunMutateJobRequest, Empty, MutateJob.MutateJobMetadata>
      runMutateJobOperationCallable() {
    return stub.runMutateJobOperationCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Runs the mutate job.
   *
   * <p>The Operation.metadata field type is MutateJobMetadata. When finished, the long running
   * operation will not contain errors or a response. Instead, use ListMutateJobResults to get the
   * results of the job.
   *
   * <p>Sample code:
   */
  public final UnaryCallable<RunMutateJobRequest, Operation> runMutateJobCallable() {
    return stub.runMutateJobCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Add operations to the mutate job.
   *
   * @param resourceName Required. The resource name of the MutateJob.
   * @param mutateOperations Required. The list of mutates being added.
   *     <p>Operations can use negative integers as temp ids to signify dependencies between
   *     entities created in this MutateJob. For example, a customer with id = 1234 can create a
   *     campaign and an ad group in that same campaign by creating a campaign in the first
   *     operation with the resource name explicitly set to "customers/1234/campaigns/-1", and
   *     creating an ad group in the second operation with the campaign field also set to
   *     "customers/1234/campaigns/-1".
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AddMutateJobOperationsResponse addMutateJobOperations(
      MutateJobName resourceName, List<MutateOperation> mutateOperations) {
    AddMutateJobOperationsRequest request =
        AddMutateJobOperationsRequest.newBuilder()
            .setResourceName(resourceName == null ? null : resourceName.toString())
            .addAllMutateOperations(mutateOperations)
            .build();
    return addMutateJobOperations(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Add operations to the mutate job.
   *
   * @param resourceName Required. The resource name of the MutateJob.
   * @param mutateOperations Required. The list of mutates being added.
   *     <p>Operations can use negative integers as temp ids to signify dependencies between
   *     entities created in this MutateJob. For example, a customer with id = 1234 can create a
   *     campaign and an ad group in that same campaign by creating a campaign in the first
   *     operation with the resource name explicitly set to "customers/1234/campaigns/-1", and
   *     creating an ad group in the second operation with the campaign field also set to
   *     "customers/1234/campaigns/-1".
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AddMutateJobOperationsResponse addMutateJobOperations(
      String resourceName, List<MutateOperation> mutateOperations) {
    AddMutateJobOperationsRequest request =
        AddMutateJobOperationsRequest.newBuilder()
            .setResourceName(resourceName)
            .addAllMutateOperations(mutateOperations)
            .build();
    return addMutateJobOperations(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Add operations to the mutate job.
   *
   * @param resourceName Required. The resource name of the MutateJob.
   * @param sequenceToken A token used to enforce sequencing.
   *     <p>The first AddMutateJobOperations request for a MutateJob should not set sequence_token.
   *     Subsequent requests must set sequence_token to the value of next_sequence_token received in
   *     the previous AddMutateJobOperations response.
   * @param mutateOperations Required. The list of mutates being added.
   *     <p>Operations can use negative integers as temp ids to signify dependencies between
   *     entities created in this MutateJob. For example, a customer with id = 1234 can create a
   *     campaign and an ad group in that same campaign by creating a campaign in the first
   *     operation with the resource name explicitly set to "customers/1234/campaigns/-1", and
   *     creating an ad group in the second operation with the campaign field also set to
   *     "customers/1234/campaigns/-1".
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AddMutateJobOperationsResponse addMutateJobOperations(
      MutateJobName resourceName, String sequenceToken, List<MutateOperation> mutateOperations) {
    AddMutateJobOperationsRequest request =
        AddMutateJobOperationsRequest.newBuilder()
            .setResourceName(resourceName == null ? null : resourceName.toString())
            .setSequenceToken(sequenceToken)
            .addAllMutateOperations(mutateOperations)
            .build();
    return addMutateJobOperations(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Add operations to the mutate job.
   *
   * @param resourceName Required. The resource name of the MutateJob.
   * @param sequenceToken A token used to enforce sequencing.
   *     <p>The first AddMutateJobOperations request for a MutateJob should not set sequence_token.
   *     Subsequent requests must set sequence_token to the value of next_sequence_token received in
   *     the previous AddMutateJobOperations response.
   * @param mutateOperations Required. The list of mutates being added.
   *     <p>Operations can use negative integers as temp ids to signify dependencies between
   *     entities created in this MutateJob. For example, a customer with id = 1234 can create a
   *     campaign and an ad group in that same campaign by creating a campaign in the first
   *     operation with the resource name explicitly set to "customers/1234/campaigns/-1", and
   *     creating an ad group in the second operation with the campaign field also set to
   *     "customers/1234/campaigns/-1".
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AddMutateJobOperationsResponse addMutateJobOperations(
      String resourceName, String sequenceToken, List<MutateOperation> mutateOperations) {
    AddMutateJobOperationsRequest request =
        AddMutateJobOperationsRequest.newBuilder()
            .setResourceName(resourceName)
            .setSequenceToken(sequenceToken)
            .addAllMutateOperations(mutateOperations)
            .build();
    return addMutateJobOperations(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Add operations to the mutate job.
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final AddMutateJobOperationsResponse addMutateJobOperations(
      AddMutateJobOperationsRequest request) {
    return addMutateJobOperationsCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Add operations to the mutate job.
   *
   * <p>Sample code:
   */
  public final UnaryCallable<AddMutateJobOperationsRequest, AddMutateJobOperationsResponse>
      addMutateJobOperationsCallable() {
    return stub.addMutateJobOperationsCallable();
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

  public static class ListMutateJobResultsPagedResponse
      extends AbstractPagedListResponse<
          ListMutateJobResultsRequest,
          ListMutateJobResultsResponse,
          MutateJobResult,
          ListMutateJobResultsPage,
          ListMutateJobResultsFixedSizeCollection> {

    public static ApiFuture<ListMutateJobResultsPagedResponse> createAsync(
        PageContext<ListMutateJobResultsRequest, ListMutateJobResultsResponse, MutateJobResult>
            context,
        ApiFuture<ListMutateJobResultsResponse> futureResponse) {
      ApiFuture<ListMutateJobResultsPage> futurePage =
          ListMutateJobResultsPage.createEmptyPage().createPageAsync(context, futureResponse);
      return ApiFutures.transform(
          futurePage,
          new ApiFunction<ListMutateJobResultsPage, ListMutateJobResultsPagedResponse>() {
            @Override
            public ListMutateJobResultsPagedResponse apply(ListMutateJobResultsPage input) {
              return new ListMutateJobResultsPagedResponse(input);
            }
          },
          MoreExecutors.directExecutor());
    }

    private ListMutateJobResultsPagedResponse(ListMutateJobResultsPage page) {
      super(page, ListMutateJobResultsFixedSizeCollection.createEmptyCollection());
    }
  }

  public static class ListMutateJobResultsPage
      extends AbstractPage<
          ListMutateJobResultsRequest,
          ListMutateJobResultsResponse,
          MutateJobResult,
          ListMutateJobResultsPage> {

    private ListMutateJobResultsPage(
        PageContext<ListMutateJobResultsRequest, ListMutateJobResultsResponse, MutateJobResult>
            context,
        ListMutateJobResultsResponse response) {
      super(context, response);
    }

    private static ListMutateJobResultsPage createEmptyPage() {
      return new ListMutateJobResultsPage(null, null);
    }

    @Override
    protected ListMutateJobResultsPage createPage(
        PageContext<ListMutateJobResultsRequest, ListMutateJobResultsResponse, MutateJobResult>
            context,
        ListMutateJobResultsResponse response) {
      return new ListMutateJobResultsPage(context, response);
    }

    @Override
    public ApiFuture<ListMutateJobResultsPage> createPageAsync(
        PageContext<ListMutateJobResultsRequest, ListMutateJobResultsResponse, MutateJobResult>
            context,
        ApiFuture<ListMutateJobResultsResponse> futureResponse) {
      return super.createPageAsync(context, futureResponse);
    }
  }

  public static class ListMutateJobResultsFixedSizeCollection
      extends AbstractFixedSizeCollection<
          ListMutateJobResultsRequest,
          ListMutateJobResultsResponse,
          MutateJobResult,
          ListMutateJobResultsPage,
          ListMutateJobResultsFixedSizeCollection> {

    private ListMutateJobResultsFixedSizeCollection(
        List<ListMutateJobResultsPage> pages, int collectionSize) {
      super(pages, collectionSize);
    }

    private static ListMutateJobResultsFixedSizeCollection createEmptyCollection() {
      return new ListMutateJobResultsFixedSizeCollection(null, 0);
    }

    @Override
    protected ListMutateJobResultsFixedSizeCollection createCollection(
        List<ListMutateJobResultsPage> pages, int collectionSize) {
      return new ListMutateJobResultsFixedSizeCollection(pages, collectionSize);
    }
  }
}
