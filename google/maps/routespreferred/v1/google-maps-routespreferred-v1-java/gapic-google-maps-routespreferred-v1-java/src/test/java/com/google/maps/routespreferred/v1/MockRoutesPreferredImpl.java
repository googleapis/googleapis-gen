/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
package com.google.maps.routespreferred.v1;

import com.google.api.core.BetaApi;
import com.google.maps.routes.v1.ComputeRouteMatrixRequest;
import com.google.maps.routes.v1.ComputeRoutesRequest;
import com.google.maps.routes.v1.ComputeRoutesResponse;
import com.google.maps.routes.v1.RouteMatrixElement;
import com.google.maps.routes.v1.RoutesPreferredGrpc.RoutesPreferredImplBase;
import com.google.protobuf.AbstractMessage;
import io.grpc.stub.StreamObserver;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;

@javax.annotation.Generated("by GAPIC")
@BetaApi
public class MockRoutesPreferredImpl extends RoutesPreferredImplBase {
  private List<AbstractMessage> requests;
  private Queue<Object> responses;

  public MockRoutesPreferredImpl() {
    requests = new ArrayList<>();
    responses = new LinkedList<>();
  }

  public List<AbstractMessage> getRequests() {
    return requests;
  }

  public void addResponse(AbstractMessage response) {
    responses.add(response);
  }

  public void setResponses(List<AbstractMessage> responses) {
    this.responses = new LinkedList<Object>(responses);
  }

  public void addException(Exception exception) {
    responses.add(exception);
  }

  public void reset() {
    requests = new ArrayList<>();
    responses = new LinkedList<>();
  }

  @Override
  public void computeRoutes(
      ComputeRoutesRequest request, StreamObserver<ComputeRoutesResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ComputeRoutesResponse) {
      requests.add(request);
      responseObserver.onNext((ComputeRoutesResponse) response);
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError((Exception) response);
    } else {
      responseObserver.onError(new IllegalArgumentException("Unrecognized response type"));
    }
  }

  @Override
  public void computeRouteMatrix(
      ComputeRouteMatrixRequest request, StreamObserver<RouteMatrixElement> responseObserver) {
    Object response = responses.remove();
    if (response instanceof RouteMatrixElement) {
      requests.add(request);
      responseObserver.onNext((RouteMatrixElement) response);
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError((Exception) response);
    } else {
      responseObserver.onError(new IllegalArgumentException("Unrecognized response type"));
    }
  }
}
