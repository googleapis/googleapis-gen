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

package com.google.cloud.devtools.build.v1;

import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.rpc.BidiStreamingCallable;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.cloud.devtools.build.v1.stub.PublishBuildEventStub;
import com.google.cloud.devtools.build.v1.stub.PublishBuildEventStubSettings;
import com.google.devtools.build.v1.PublishBuildToolEventStreamRequest;
import com.google.devtools.build.v1.PublishBuildToolEventStreamResponse;
import com.google.devtools.build.v1.PublishLifecycleEventRequest;
import com.google.protobuf.Empty;
import java.io.IOException;
import java.util.concurrent.TimeUnit;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Service Description: A service for publishing BuildEvents. BuildEvents are generated by Build
 * Systems to record actions taken during a Build. Events occur in streams, are identified by a
 * StreamId, and ordered by sequence number in a stream.
 *
 * <p>A Build may contain several streams of BuildEvents, depending on the systems that are involved
 * in the Build. Some BuildEvents are used to declare the beginning and end of major portions of a
 * Build; these are called LifecycleEvents, and are used (for example) to indicate the beginning or
 * end of a Build, and the beginning or end of an Invocation attempt (there can be more than 1
 * Invocation in a Build if, for example, a failure occurs somewhere and it needs to be retried).
 *
 * <p>Other, build-tool events represent actions taken by the Build tool, such as target objects
 * produced via compilation, tests run, et cetera. There could be more than one build tool stream
 * for an invocation attempt of a build.
 *
 * <p>This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * <pre>{@code
 * try (PublishBuildEventClient publishBuildEventClient = PublishBuildEventClient.create()) {
 *   PublishLifecycleEventRequest request =
 *       PublishLifecycleEventRequest.newBuilder()
 *           .setBuildEvent(OrderedBuildEvent.newBuilder().build())
 *           .setStreamTimeout(Duration.newBuilder().build())
 *           .addAllNotificationKeywords(new ArrayList<String>())
 *           .setProjectId("projectId-894832108")
 *           .build();
 *   publishBuildEventClient.publishLifecycleEvent(request);
 * }
 * }</pre>
 *
 * <p>Note: close() needs to be called on the PublishBuildEventClient object to clean up resources
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
 * <p>This class can be customized by passing in a custom instance of PublishBuildEventSettings to
 * create(). For example:
 *
 * <p>To customize credentials:
 *
 * <pre>{@code
 * PublishBuildEventSettings publishBuildEventSettings =
 *     PublishBuildEventSettings.newBuilder()
 *         .setCredentialsProvider(FixedCredentialsProvider.create(myCredentials))
 *         .build();
 * PublishBuildEventClient publishBuildEventClient =
 *     PublishBuildEventClient.create(publishBuildEventSettings);
 * }</pre>
 *
 * <p>To customize the endpoint:
 *
 * <pre>{@code
 * PublishBuildEventSettings publishBuildEventSettings =
 *     PublishBuildEventSettings.newBuilder().setEndpoint(myEndpoint).build();
 * PublishBuildEventClient publishBuildEventClient =
 *     PublishBuildEventClient.create(publishBuildEventSettings);
 * }</pre>
 *
 * <p>Please refer to the GitHub repository's samples for more quickstart code snippets.
 */
@Generated("by gapic-generator-java")
public class PublishBuildEventClient implements BackgroundResource {
  private final PublishBuildEventSettings settings;
  private final PublishBuildEventStub stub;

  /** Constructs an instance of PublishBuildEventClient with default settings. */
  public static final PublishBuildEventClient create() throws IOException {
    return create(PublishBuildEventSettings.newBuilder().build());
  }

  /**
   * Constructs an instance of PublishBuildEventClient, using the given settings. The channels are
   * created based on the settings passed in, or defaults for any settings that are not set.
   */
  public static final PublishBuildEventClient create(PublishBuildEventSettings settings)
      throws IOException {
    return new PublishBuildEventClient(settings);
  }

  /**
   * Constructs an instance of PublishBuildEventClient, using the given stub for making calls. This
   * is for advanced usage - prefer using create(PublishBuildEventSettings).
   */
  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public static final PublishBuildEventClient create(PublishBuildEventStub stub) {
    return new PublishBuildEventClient(stub);
  }

  /**
   * Constructs an instance of PublishBuildEventClient, using the given settings. This is protected
   * so that it is easy to make a subclass, but otherwise, the static factory methods should be
   * preferred.
   */
  protected PublishBuildEventClient(PublishBuildEventSettings settings) throws IOException {
    this.settings = settings;
    this.stub = ((PublishBuildEventStubSettings) settings.getStubSettings()).createStub();
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  protected PublishBuildEventClient(PublishBuildEventStub stub) {
    this.settings = null;
    this.stub = stub;
  }

  public final PublishBuildEventSettings getSettings() {
    return settings;
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public PublishBuildEventStub getStub() {
    return stub;
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Publish a build event stating the new state of a build (typically from the build queue). The
   * BuildEnqueued event must be publishd before all other events for the same build ID.
   *
   * <p>The backend will persist the event and deliver it to registered frontend jobs immediately
   * without batching.
   *
   * <p>The commit status of the request is reported by the RPC's util_status() function. The error
   * code is the canoncial error code defined in //util/task/codes.proto.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (PublishBuildEventClient publishBuildEventClient = PublishBuildEventClient.create()) {
   *   PublishLifecycleEventRequest request =
   *       PublishLifecycleEventRequest.newBuilder()
   *           .setBuildEvent(OrderedBuildEvent.newBuilder().build())
   *           .setStreamTimeout(Duration.newBuilder().build())
   *           .addAllNotificationKeywords(new ArrayList<String>())
   *           .setProjectId("projectId-894832108")
   *           .build();
   *   publishBuildEventClient.publishLifecycleEvent(request);
   * }
   * }</pre>
   *
   * @param request The request object containing all of the parameters for the API call.
   * @throws com.google.api.gax.rpc.ApiException if the remote call fails
   */
  public final void publishLifecycleEvent(PublishLifecycleEventRequest request) {
    publishLifecycleEventCallable().call(request);
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Publish a build event stating the new state of a build (typically from the build queue). The
   * BuildEnqueued event must be publishd before all other events for the same build ID.
   *
   * <p>The backend will persist the event and deliver it to registered frontend jobs immediately
   * without batching.
   *
   * <p>The commit status of the request is reported by the RPC's util_status() function. The error
   * code is the canoncial error code defined in //util/task/codes.proto.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (PublishBuildEventClient publishBuildEventClient = PublishBuildEventClient.create()) {
   *   PublishLifecycleEventRequest request =
   *       PublishLifecycleEventRequest.newBuilder()
   *           .setBuildEvent(OrderedBuildEvent.newBuilder().build())
   *           .setStreamTimeout(Duration.newBuilder().build())
   *           .addAllNotificationKeywords(new ArrayList<String>())
   *           .setProjectId("projectId-894832108")
   *           .build();
   *   ApiFuture<Empty> future =
   *       publishBuildEventClient.publishLifecycleEventCallable().futureCall(request);
   *   // Do something.
   *   future.get();
   * }
   * }</pre>
   */
  public final UnaryCallable<PublishLifecycleEventRequest, Empty> publishLifecycleEventCallable() {
    return stub.publishLifecycleEventCallable();
  }

  // AUTO-GENERATED DOCUMENTATION AND METHOD.
  /**
   * Publish build tool events belonging to the same stream to a backend job using bidirectional
   * streaming.
   *
   * <p>Sample code:
   *
   * <pre>{@code
   * try (PublishBuildEventClient publishBuildEventClient = PublishBuildEventClient.create()) {
   *   BidiStream<PublishBuildToolEventStreamRequest, PublishBuildToolEventStreamResponse>
   *       bidiStream = publishBuildEventClient.publishBuildToolEventStreamCallable().call();
   *   PublishBuildToolEventStreamRequest request =
   *       PublishBuildToolEventStreamRequest.newBuilder()
   *           .setOrderedBuildEvent(OrderedBuildEvent.newBuilder().build())
   *           .addAllNotificationKeywords(new ArrayList<String>())
   *           .setProjectId("projectId-894832108")
   *           .build();
   *   bidiStream.send(request);
   *   for (PublishBuildToolEventStreamResponse response : bidiStream) {
   *     // Do something when a response is received.
   *   }
   * }
   * }</pre>
   */
  public final BidiStreamingCallable<
          PublishBuildToolEventStreamRequest, PublishBuildToolEventStreamResponse>
      publishBuildToolEventStreamCallable() {
    return stub.publishBuildToolEventStreamCallable();
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
}
