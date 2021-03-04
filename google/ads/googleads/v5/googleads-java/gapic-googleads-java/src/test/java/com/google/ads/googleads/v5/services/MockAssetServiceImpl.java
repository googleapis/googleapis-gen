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

package com.google.ads.googleads.v5.services;

import com.google.ads.googleads.v5.resources.Asset;
import com.google.ads.googleads.v5.services.AssetServiceGrpc.AssetServiceImplBase;
import com.google.api.core.BetaApi;
import com.google.protobuf.AbstractMessage;
import io.grpc.stub.StreamObserver;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;
import javax.annotation.Generated;

@BetaApi
@Generated("by gapic-generator-java")
public class MockAssetServiceImpl extends AssetServiceImplBase {
  private List<AbstractMessage> requests;
  private Queue<Object> responses;

  public MockAssetServiceImpl() {
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
  public void getAsset(GetAssetRequest request, StreamObserver<Asset> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Asset) {
      requests.add(request);
      responseObserver.onNext(((Asset) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetAsset, expected %s or %s",
                  response.getClass().getName(),
                  Asset.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void mutateAssets(
      MutateAssetsRequest request, StreamObserver<MutateAssetsResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof MutateAssetsResponse) {
      requests.add(request);
      responseObserver.onNext(((MutateAssetsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method MutateAssets, expected %s or %s",
                  response.getClass().getName(),
                  MutateAssetsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }
}
